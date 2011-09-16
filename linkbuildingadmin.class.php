<?php
/**
 * Load links created with LinkBuildingAdmin.com
 *
 * @author Pablo Gabriel Reyes
 * @link http://www.pabloreyes.com.ar/ Blog personal
 * @link http://www.reyesoft.com/ Reyesoft
 * @license http://creativecommons.org/licenses/by-sa/2.5/ar/ Creative Commons Attribution-Share Alike 2.5
 * @version 0.2.1
 */

class LinkBuildingAdmin
{
	/**
	 * @var string LinkBuildingAdmin ApiKey
	 */
	private $apikey = '';

	/**
	 * @var integer LinkBuildingAdmin Project Id
	 */
	private $project = 0;

	/**
	 * @var string Writeable cache folder
	 */
	private $file = './linkbuildingadmin.inc.php';

	private $links = null;

	/**
	 * @deprecated
	 */
	public function setProject($project)
	{
		$this->project = $project;
	}

	public function setApiKey($apikey)
	{
		$this->apikey = $apikey;
	}

	public function setUId($uid)
	{
		$ret = preg_match('/([0-9]+)l([A-Za-z0-9]+)/', $uid, $matches);
		if (!$ret)
			return false;
		$this->project = $matches[1];
		$this->apikey = $matches[2];
		return true;
	}

	public function setFile($filename)
	{
		$this->file = $filename;
	}

	public function getLinksArray($seccion)
	{
		if ($this->links === null)
		{
			if ( (@include $this->file) === false || (isset($_GET['linkbuildingadmin']) && $_GET['linkbuildingadmin'] == md5($this->apikey.'p')) )
			{
				// actualizo caché
				echo '<p>--Linkbuilding Refresh Cache--</p>';
				$this->refreshCache();
				unset($_GET['linkbuildingadmin']);
			} else {
				$this->links = $linkbuildingadmin;
			}
		}

		if (!isset($this->links[$seccion]))
			return array();

		if (is_numeric($this->links[$seccion]))		// es all|home
			return $this->links[$this->links[$seccion]];
		else
			return $this->links[$seccion];
	}

	public function refreshCache()
	{
		$data = @file_get_contents('http://www.linkbuildingadmin.com/api/01/?project='.$this->project.'&apikey='.md5($this->apikey.'r'));
		$linkbuildingadmin = json_decode($data, true);
		if ($linkbuildingadmin !== null)
		{
			$ret = @file_put_contents($this->file, '<'.'?php $linkbuildingadmin = '.var_export($linkbuildingadmin, true).';');
			if (!$ret)
				echo trigger_error('Error al guardar el archivo '.$this->file);
			else {
				$this->links = $linkbuildingadmin;
				return true;
			}
		}
		return false;
	}
}
