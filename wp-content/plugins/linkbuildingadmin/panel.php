





<div class="wrap">
	<h2>Configuraci&oacute;n de LinkBuildingAdmin</h2>




	<div class="postbox-container" style="width: 65%;">
	<div class="metabox-holder">
		<div class="meta-box-sortables ui-sortable">
			<form action="" method="post" id="analytics-conf">
				<input name="plugin" value="linkbuildingadmin-plugin" type="hidden">
				<div id="gasettings" class="postbox">
					<h3 class="hndle"><span>LinkBuildingAdmin Settings</span></h3>
					<div class="inside">
						<table class="form-table">
							<tr id="uastring_row" class="">
								<th scrope="row" valign="top">
									<label for="lba_uid" accesskey="a">Unique ID</label>
								</th>
								<td valign="top">
									<input type='text' id='lba_uid' name='lba_uid' value='<?php echo get_option('lba_uid'); ?>' SIZE="40" MAXLENGTH="100" />
								</td>
							</tr>
							<tr id="position_row" class="yst_row even">
								<th scrope="row" valign="top"><label for="position">Agregar Links en</label></th>
								<td valign="top">
									<select class="select" name="lba_automatic" id="lba_automatic">
										<option value="links"<?php echo (get_option('lba_automatic')=='links'?' selected="selected"':''); ?>>Enlaces (default)</option>
										<option value="manual"<?php echo (get_option('lba_automatic')=='manual'?' selected="selected"':''); ?>>Insertar manualmente</option>
									</select>
								</td>
							</tr>
							<tr class="yst_row even">
								<td colspan="2" class="yst_desc"><small><div style="display: block;" id="position_header">C&oacute;digo manual para insertar en plantilla<br/>linkbuildingadmin();</div></small></td>
							</tr>
						</table>
						<div class="alignright">
							<input class="button-primary" name="submit" value="Update LinkBuildingAdmin Settings" type="submit">
						</div><br class="clear">
					</div>
			</div>




			<div style="display: none;" id="customvarsettings" class="postbox">
				<div class="handlediv" title="Click to toggle"><br></div>
				<h3 class="hndle"><span>Custom Variables Settings</span></h3>
				<div class="inside">
					<p>Google Analytics allows you to save up to 5 custom variables on each page, and this plugin helps you make the most use of these! Check which custom variables you'd like the plugin to save for you below. Please note that these will only be saved when they are actually available.</p><p>If you want to start using these custom variables, go to Visitors � Custom Variables in your Analytics reports.</p><table class="form-table"><tbody><tr id="cv_loggedin_row" class=""><th scrope="row" valign="top"><label for="cv_loggedin">Logged in Users:</label></th><td valign="top"><input id="cv_loggedin" name="cv_loggedin" type="checkbox"></td></tr><tr class=""><td colspan="2" class="yst_desc"><small>Allows you to easily remove logged in users from your reports, or to segment by different user roles. The users primary role will be logged.</small></td></tr><tr id="cv_post_type_row" class="yst_row even"><th scrope="row" valign="top"><label for="cv_post_type">Post type:</label></th><td valign="top"><input id="cv_post_type" name="cv_post_type" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per post type, especially useful if you use multiple custom post types.</small></td></tr><tr id="cv_authorname_row" class="yst_row"><th scrope="row" valign="top"><label for="cv_authorname">Author Name:</label></th><td valign="top"><input id="cv_authorname" name="cv_authorname" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per author.</small></td></tr><tr id="cv_tags_row" class="yst_row even"><th scrope="row" valign="top"><label for="cv_tags">Tags:</label></th><td valign="top"><input id="cv_tags" name="cv_tags" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per tags using advanced segments.</small></td></tr><tr id="cv_year_row" class="yst_row"><th scrope="row" valign="top"><label for="cv_year">Publication year:</label></th><td valign="top"><input id="cv_year" name="cv_year" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per year of publication, showing you if your old posts still get traffic.</small></td></tr><tr id="cv_category_row" class="yst_row even"><th scrope="row" valign="top"><label for="cv_category">Single Category:</label></th><td valign="top"><input id="cv_category" name="cv_category" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per category, works best when each post is in only one category.</small></td></tr><tr id="cv_all_categories_row" class="yst_row"><th scrope="row" valign="top"><label for="cv_all_categories">All Categories:</label></th><td valign="top"><input id="cv_all_categories" name="cv_all_categories" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Allows you to see pageviews per category using advanced segments, should be used when you use multiple categories per post.</small></td></tr></tbody></table><div class="alignright"><input class="button-primary" name="submit" value="Update Google Analytics Settings �" type="submit"></div><br class="clear">				</div>
			</div>
					<div style="display: none;" id="advancedgasettings" class="postbox">
				<div class="handlediv" title="Click to toggle"><br></div>
				<h3 class="hndle"><span>Advanced Settings</span></h3>
				<div class="inside">
					<table class="form-table"><tbody><tr id="ignore_userlevel_row" class=""><th scrope="row" valign="top"><label for="ignore_userlevel">Ignore users:</label></th><td valign="top"><select class="select" name="ignore_userlevel" id="ignore_userlevel"><option value="11" selected="selected">Ignore no-one</option><option value="8">Administrator</option><option value="5">Editor</option><option value="2">Author</option><option value="1">Contributor</option><option value="0">Subscriber (ignores all logged in users)</option></select></td></tr><tr class=""><td colspan="2" class="yst_desc"><small>Users of the role you select and higher will be ignored, so if you select Editor, all Editors and Administrators will be ignored.</small></td></tr><tr id="outboundpageview_row" class="yst_row even"><th scrope="row" valign="top"><label for="outboundpageview">Track outbound clicks as pageviews:</label></th><td valign="top"><input id="outboundpageview" name="outboundpageview" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>You do not need to enable this to enable outbound click tracking, this changes the default behavior of tracking clicks as events to tracking them as pageviews. This is therefore not recommended, as this would skew your statistics, but <em>is</em> sometimes necessary when you need to set outbound clicks as goals.</small></td></tr><tr id="downloadspageview_row" class="yst_row"><th scrope="row" valign="top"><label for="downloadspageview">Track downloads as pageviews:</label></th><td valign="top"><input id="downloadspageview" name="downloadspageview" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Not recommended, as this would skew your statistics, but it does make it possible to track downloads as goals.</small></td></tr><tr id="dlextensions_row" class="yst_row even"><th scrope="row" valign="top"><label for="dlextensions">Extensions of files to track as downloads:</label></th><td valign="top"><input class="text" id="dlextensions" name="dlextensions" size="30" value="" type="text"></td></tr><tr id="domainorurl_row" class="yst_row"><th scrope="row" valign="top"><label for="domainorurl">Track full URL of outbound clicks or just the domain:</label></th><td valign="top"><select class="select" name="domainorurl" id="domainorurl"><option value="domain" selected="selected">Just the domain</option><option value="url">Track the complete URL</option></select></td></tr><tr id="domain_row" class="yst_row even"><th scrope="row" valign="top"><label for="domain">Domain Tracking:</label></th><td valign="top"><input class="text" id="domain" name="domain" size="30" value="" type="text"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>This allows you to set the domain that's set by <a href="http://code.google.com/apis/analytics/docs/gaJS/gaJSApiDomainDirectory.html#_gat.GA_Tracker_._setDomainName"><code>setDomainName</code></a> for tracking subdomains, if empty this will not be set.</small></td></tr><tr id="customcode_row" class="yst_row"><th scrope="row" valign="top"><label for="customcode">Custom Code:</label></th><td valign="top"><input class="text" id="customcode" name="customcode" size="30" value="" type="text"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Not for the average user: this allows you to add a line of code, to be added before the <code>trackPageview</code> call.</small></td></tr><tr id="trackadsense_row" class="yst_row even"><th scrope="row" valign="top"><label for="trackadsense">Track AdSense:</label></th><td valign="top"><input id="trackadsense" name="trackadsense" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>This requires integration of your Analytics and AdSense account, for help, <a href="http://google.com/support/analytics/bin/answer.py?answer=92625">look here</a>.</small></td></tr><tr id="gajslocalhosting_row" class="yst_row"><th scrope="row" valign="top"><label for="gajslocalhosting">Host ga.js locally:</label></th><td valign="top"><input id="gajslocalhosting" name="gajslocalhosting" type="checkbox"><div style="display: none;" id="localhostingbox">

											You have to provide a URL to your ga.js file:
											<input name="gajsurl" size="30" value="" type="text">
										</div></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>For some reasons you might want to use a locally hosted ga.js file, or another ga.js file, check the box and then please enter the full URL including http here.</small></td></tr><tr id="extrase_row" class="yst_row even"><th scrope="row" valign="top"><label for="extrase">Track extra Search Engines:</label></th><td valign="top"><input id="extrase" name="extrase" type="checkbox"><div style="display: none;" id="extrasebox">
											You can provide a custom URL to the extra search engines file if you want:
											<input name="extraseurl" size="30" value="" type="text">
										</div></td></tr><tr id="rsslinktagging_row" class="yst_row"><th scrope="row" valign="top"><label for="rsslinktagging">Tag links in RSS feed with campaign variables:</label></th><td valign="top"><input id="rsslinktagging" name="rsslinktagging" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>Do not use this feature if you use FeedBurner, as FeedBurner can do this automatically, and better than this plugin can. Check <a href="http://www.google.com/support/feedburner/bin/answer.py?hl=en&amp;answer=165769">this help page</a> for info on how to enable this feature in FeedBurner.</small></td></tr><tr id="trackregistration_row" class="yst_row even"><th scrope="row" valign="top"><label for="trackregistration">Add tracking to the login and registration forms:</label></th><td valign="top"><input id="trackregistration" name="trackregistration" type="checkbox"></td></tr><tr id="trackcommentform_row" class="yst_row"><th scrope="row" valign="top"><label for="trackcommentform">Add tracking to the comment forms:</label></th><td valign="top"><input id="trackcommentform" name="trackcommentform" checked="checked" type="checkbox"></td></tr><tr id="allowanchor_row" class="yst_row even"><th scrope="row" valign="top"><label for="allowanchor">Use # instead of ? for Campaign tracking:</label></th><td valign="top"><input id="allowanchor" name="allowanchor" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>This adds a <code><a href="http://code.google.com/apis/analytics/docs/gaJSApiCampaignTracking.html#_gat.GA_Tracker_._setAllowAnchor">_setAllowAnchor</a></code> call to your tracking code, and makes RSS link tagging use a # as well.</small></td></tr><tr id="allowlinker_row" class="yst_row"><th scrope="row" valign="top"><label for="allowlinker">Add <code>_setAllowLinker</code>:</label></th><td valign="top"><input id="allowlinker" name="allowlinker" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>This adds a <code><a href="http://code.google.com/apis/analytics/docs/gaJS/gaJSApiDomainDirectory.html#_gat.GA_Tracker_._setAllowLinker">_setAllowLinker</a></code> call to your tracking code,  allowing you to use <code>_link</code> and related functions.</small></td></tr><tr id="allowhash_row" class="yst_row even"><th scrope="row" valign="top"><label for="allowhash">Set <code>_setAllowHash</code> to false:</label></th><td valign="top"><input id="allowhash" name="allowhash" type="checkbox"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>This sets <code><a href="http://code.google.com/apis/analytics/docs/gaJS/gaJSApiDomainDirectory.html#_gat.GA_Tracker_._setAllowHash">_setAllowHash</a></code> to false, allowing you to track subdomains etc.</small></td></tr><tr id="anonymizeip_row" class="yst_row"><th scrope="row" valign="top"><label for="anonymizeip">Anonymize IP's:</label></th><td valign="top"><input id="anonymizeip" name="anonymizeip" type="checkbox"></td></tr><tr class="yst_row"><td colspan="2" class="yst_desc"><small>This adds <code><a href="http://code.google.com/apis/analytics/docs/gaJS/gaJSApi_gat.html#_gat._anonymizeIp">_anonymizeIp</a></code>, telling Google Analytics to anonymize the information sent by the tracker objects by removing the last octet of the IP address prior to its storage.</small></td></tr></tbody></table><div class="alignright"><input class="button-primary" name="submit" value="Update Google Analytics Settings �" type="submit"></div><br class="clear">				</div>

			</div>
					<div style="display: none;" id="internallinktracking" class="postbox">
				<div class="handlediv" title="Click to toggle"><br></div>
				<h3 class="hndle"><span>Internal Links to Track as Outbound</span></h3>
				<div class="inside">
					<table class="form-table"><tbody><tr id="internallink_row" class=""><th scrope="row" valign="top"><label for="internallink">Internal links to track as outbound:</label></th><td valign="top"><input class="text" id="internallink" name="internallink" size="30" value="" type="text"></td></tr><tr class=""><td colspan="2" class="yst_desc"><small>If you want to track all internal links that begin with <code>/out/</code>, enter <code>/out/</code> in the box above. If you have multiple prefixes you can separate them with comma's: <code>/out/,/recommends/</code></small></td></tr><tr id="internallinklabel_row" class="yst_row even"><th scrope="row" valign="top"><label for="internallinklabel">Label to use:</label></th><td valign="top"><input class="text" id="internallinklabel" name="internallinklabel" size="30" value="" type="text"></td></tr><tr class="yst_row even"><td colspan="2" class="yst_desc"><small>The label to use for these links, this will be added to where the click came from, so if the label is "aff", the label for a click from the content of an article becomes "outbound-article-aff".</small></td></tr></tbody></table><div class="alignright"><input class="button-primary" name="submit" value="Update Google Analytics Settings �" type="submit"></div><br class="clear">				</div>

			</div>
							</form>

				</div>
			</div>

		</div>

	
</div>
