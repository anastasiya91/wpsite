<?php 
	if(get_option('ptthemes_auto_install')=='No' || get_option('ptthemes_auto_install')==''){
		if(is_plugin_active('woocommerce/woocommerce.php') || is_plugin_active('jigoshop/jigoshop.php')){	
			function autoinstall_admin_header(){
				global $wpdb;
				if(strstr($_SERVER['REQUEST_URI'],'themes.php') && (!isset($_REQUEST['template']) && $_REQUEST['template']=='') && (!isset($_GET['page']) && $_GET['page']=='')){
					update_option("ptthemes_alt_stylesheet",'1-default');
					if(isset($_REQUEST['dummy']) && $_REQUEST['dummy'] !=""){
						if($_REQUEST['dummy']=='del'){
							delete_dummy_data();	
							$dummy_deleted = '<p><b>All Dummy data has been removed from your database successfully!</b></p>';
						}
					}
					if(isset($_REQUEST['dummy_insert']) && $_REQUEST['dummy_insert'] !=""){
						include_once (TEMPLATE_FUNCTION_FOLDER_PATH . 'auto_install/auto_install_data.php'); // auto install data file
					}
					if(isset($_REQUEST['activated']) && $_REQUEST['activated'] !=""){
						if($_REQUEST['activated']=='true'){
							$theme_actived_success = '<p class="message">Theme activated successfully.</p>';	
						}
					}
					$post_counts = $wpdb->get_var("select count(post_id) from $wpdb->postmeta where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content') and meta_value=1");
					if($post_counts>0){
						$product_counts = $wpdb->get_var("select count(ID) from $wpdb->posts where post_type='product' and post_status='publish'");
						if($product_counts == 0){
							$dummy_data_msg = '<p class="act_pligin">There are no product data available in this theme, If we use product related widgets then it will not display any product. Please insert some prodcuts or import woocommerce or jigoshop dummy data. </p>';
						}
						$dummy_data_msg .= '<p class="inserted"> <b>Sample data has been populated on your site. Wish to delete sample data?</b> <br />  <a class="button_delete" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy=del">Yes Delete Please!</a><p>';
					}else{
						$dummy_data_msg = '<p> <b>Would you like to auto install this theme and populate sample data on your site?</b> <br />  <a class="button_insert" href="'.get_option('siteurl').'/wp-admin/themes.php?dummy_insert=1&dump=1">Yes, insert sample data please</a></p>';
					}
			
			
					define('THEME_ACTIVE_MESSAGE','
				<style type="text/css">
				.highlight p.act_pligin{ color:black !important;font-weight:normal;font:verdana; }
				.highlight p.inserted{ color:green !important;font-weight:normal;font:verdana; }
				.highlight { width:60% !important; background:#FFFFE0 !important; overflow:hidden; display:table; border:2px solid #558e23 !important; padding:15px 20px 0px 20px !important; -moz-border-radius:11px  !important;  -webkit-border-radius:11px  !important; } 
				.highlight p { color:#444 !important; font:15px Arial, Helvetica, sans-serif !important; text-align:center;  } 
				.highlight p.message { font-size:13px !important; }
				.highlight p a { color:#ff7e00; text-decoration:none !important; } 
				.highlight p a:hover { color:#000; }
				.highlight p a.button_insert 
					{ display:block; width:230px; margin:10px auto 0 auto;  background:#5aa145; padding:10px 15px; color:#fff; border:1px solid #4c9a35; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
				.highlight p a:hover.button_insert { background:#347c1e; color:#fff; border:1px solid #4c9a35;   } 
				.highlight p a.button_delete 
					{ display:block; width:140px; margin:10px auto 0 auto; background:#dd4401; padding:10px 15px; color:#fff; border:1px solid #9e3000; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
				.highlight p a:hover.button_delete { background:#c43e03; color:#fff; border:1px solid #9e3000;   } 
				#message0 { display:none !important;  }
				</style>
				
				<div class="updated highlight fade"> '.$theme_actived_success.$dummy_deleted.$dummy_data_msg.'</div>');
					echo THEME_ACTIVE_MESSAGE;
					
				}
			}
			
			add_action("admin_head", "autoinstall_admin_header"); // please comment this line if you wish to DEACTIVE SAMPLE DATA INSERT.

			function delete_dummy_data()
			{
				global $wpdb;
				delete_option('sidebars_widgets'); //delete widgets
				$productArray = array();
				$pids_sql = "select p.ID from $wpdb->posts p join $wpdb->postmeta pm on pm.post_id=p.ID where (meta_key='pt_dummy_content' || meta_key='tl_dummy_content' || meta_key='auto_install') and (meta_value=1 || meta_value='auto_install')";
				$pids_info = $wpdb->get_results($pids_sql);
				foreach($pids_info as $pids_info_obj)
				{
					wp_delete_post($pids_info_obj->ID);
				}
			}
		} else{
			add_action("admin_head", "activate_woo_plugin"); // please comment this line if you wish to DEACTIVE SAMPLE DATA INSERT.
			function activate_woo_plugin(){
				$url = TEMPLATE_CHILD_DIRECTORY_URL.'wp-admin/plugins.php';
?>	
				<style type="text/css">
					.highlight { width:60% !important; background:#FFFFE0 !important; overflow:hidden; display:table; border:2px solid #558e23 !important; padding:15px 20px 10px 20px !important; -moz-border-radius:11px  !important;  -webkit-border-radius:11px  !important; } 
					.highlight p { color:#444 !important; font:15px Arial, Helvetica, sans-serif !important; text-align:center;  } 
					.highlight p.message { font-size:13px !important; }
					.highlight p a { color:#ff7e00; text-decoration:none !important; } 
					.highlight p a:hover { color:#000; }
					.highlight p a.button_insert 
						{ display:block; width:230px; margin:10px auto 0 auto;  background:#5aa145; padding:10px 15px; color:#fff; border:1px solid #4c9a35; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
					.highlight p a:hover.button_insert { background:#347c1e; color:#fff; border:1px solid #4c9a35;   } 
					.highlight p a.button_delete 
						{ display:block; width:140px; margin:10px auto 0 auto; background:#dd4401; padding:10px 15px; color:#fff; border:1px solid #9e3000; -moz-border-radius:5px;  -webkit-border-radius:5px;  } 
					.highlight p a:hover.button_delete { background:#c43e03; color:#fff; border:1px solid #9e3000;   } 
					#message0 { display:none !important;  }
					.act_pligin{ color:red;font-weight:normal; }
				</style>
				<div class="updated highlight fade">
					<span>
						<?php _e('Please download and activate <a href="http://www.woothemes.com/woocommerce/" class="act_pligin">WooCommerce plugin</a> or <a href="http://jigoshop.com/" class="act_pligin">Jigoshop plugin</a> to set up theme with dummy data.&nbsp;&nbsp;&nbsp;',"templatic");?>
					</span>
				</div>
<?php 		}
		}
	}
?>