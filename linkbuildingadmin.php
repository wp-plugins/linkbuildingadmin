<?php
   /*
      Plugin Name: LinkBuildingAdmin
      Plugin URI: http://www.linkbuildingadmin.com/
      Description: LinkBuildingAdmin Wordpress Plugin
      Version: 0.1.1
      Author: Pablo Gabriel Reyes
      Author URI: http://www.pabloreyes.com.ar/
   */

   /*
      Donde se desee aplicar el contenido, llamar a
	  linkbuildingadmin();
   */


	function linkbuildingadmin($prelink = '<li>', $postlink = '</li>', $section = null)
	{
		$links = lba_getLinksArray($section);
		foreach($links as $link)
		{
			echo $prelink.'<a href="'.$link['url'].'">'.$link['achor'].'</a>'.$postlink;
		}
	}

	function lba_getLinksArray($section = null)
	{
		if ($section === null)
		{
			$links1 = lba_getLinksArray('all');
			if(is_home())
			{
				$links2 = lba_getLinksArray('home');
				return array_merge($links1, $links2);
			} else {
				return $links1;
			}
		}

		include_once 'linkbuildingadmin.class.php';
		$lba = new LinkBuildingAdmin();
		$lba->setUId(get_option('lba_uid'));
		global $wpdb;
		$lba->setFile('wp-content/uploads/'.$wpdb->prefix.'linkbuildingadmin.inc.php');

		$links = $lba->getLinksArray($section);

		return $links;
	}

	function lba_install() {
		add_option('lba_uid', '');
		add_option('lba_automatic', 'links');
	}
	function lba_uninstall() {
		delete_option('lba_uid');
		delete_option('lba_automatic');
	}
	function lba_panel() {
		if(isset($_POST['lba_uid']))
		{
			update_option('lba_uid', $_POST['lba_uid']);
			update_option('lba_automatic', $_POST['lba_automatic']);
			echo 'DATOS GUARDADOS';
		}
		include('panel.php');
	}
	function lba_add_menu() {
		add_options_page('LinkBuildingAdmin Options', 'LinkBuildingAdmin', 'manage_options', 'linkbuildingadmin', 'lba_panel');
	}

	add_action('admin_menu', 'lba_add_menu');
	add_action('activate_linkbuildingadmin/linkbuildingadmin.php','lba_install');
	add_action('deactivate_linkbuildingadmin/linkbuildingadmin.php', 'lba_uninstall');


	// Agregar botón settings
	function your_plugin_settings_link($links)
	{
	  $settings_link = '<a href="options-general.php?page=linkbuildingadmin">Settings</a>';
	  array_unshift($links, $settings_link);
	  return $links;
	}
	$plugin = plugin_basename(__FILE__);
	add_filter('plugin_action_links_'.$plugin, 'your_plugin_settings_link' );



	/**
	 * automatic add to bookmarks
	 */
	function lba_add_filter()
	{
		add_filter('get_bookmarks', 'lba_get_bookmarks', 2, 1);
	}
	function lba_remove_filter()
	{
		remove_filter('get_bookmarks', 'lba_get_bookmarks', 2, 1);
	}
	function lba_get_bookmarks($args = '')
	{
		lba_remove_filter();
		
		// agrego los links originales?
		if (get_option('lba_automatic_add', false))
		{
			// agrego los links originales
			$bookmarks = get_bookmarks($args);
		} else {
			// only linkbuildingadmin links
			$bookmarks = array();
		}

		// agrego los links de linkbuilding admin
		$links = lba_getLinksArray();
		foreach($links as $link)
		{
			$objeto = new stdClass();
			$objeto->link_url = $link['url'];
			$objeto->link_name = $link['achor'];
			$bookmarks[] = $objeto;
		}

		//if (get_option('lba_automatic_add', false))
		//	lba_add_filter();

		return $bookmarks;
	}

	if (!is_admin() && get_option('lba_automatic') == 'links')
		lba_add_filter();
