<?php ob_start();
	$color1 = hybrid_get_setting( 'color_picker_color1' );
	$color2 = hybrid_get_setting( 'color_picker_color2' );
	$color3 = hybrid_get_setting( 'color_picker_color3' );
	$color4 = hybrid_get_setting( 'color_picker_color4' );
	$color5 = hybrid_get_setting( 'color_picker_color5' );

if($color1 != "#" || $color1 != ""){?>
    
    .nav_bg,
    .flex-direction-nav a.flex-next, .jcarousel-prev,
    .flex-direction-nav a.flex-prev, .jcarousel-next,
    .variations_button button, .cart button,
    .quantity input.plus, .quantity input.minus,
    .product-content .woocommerce_tabs ul.tabs li a:hover, .product-content .woocommerce_tabs ul.tabs li.active a
    { background-color: <?php echo $color1;?> !important; }
  
    
<?php }



if($color2 != "#" || $color2 != ""){?>

    button, input[type="reset"], input[type="submit"], input[type="button"], .button, .checkout-button, .product-content .woocommerce_tabs ul.tabs li a, .loop-nav span.previous, .loop-nav span.next, .pagination .page-numbers, .comment-pagination .page-numbers, .bbp-pagination .page-numbers, .social_media_list li a
    .widget-title a.more:hover, .social_media_list li a
    { 
        background: <?php echo $color2;?> !important;
        background-image: linear-gradient(bottom, <?php echo $color2;?> 0%, #FFFFFF 100%) !important;
        background-image: -o-linear-gradient(bottom, <?php echo $color2;?> 0%, #FFFFFF 100%) !important;
        background-image: -moz-linear-gradient(bottom, <?php echo $color2;?> 0%, #FFFFFF 100%) !important;
        background-image: -webkit-linear-gradient(bottom, <?php echo $color2;?> 0%, #FFFFFF 100%) !important;
        background-image: -ms-linear-gradient(bottom, <?php echo $color2;?> 0%, #FFFFFF 100%) !important;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, <?php echo $color2;?>), color-stop(1, #FFFFFF)) !important;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='<?php echo $color2;?>',GradientType=0 );
    	border-color: <?php echo $color2;?> !important;
    }
    
    button:hover, input[type="reset"]:hover, input[type="submit"]:hover, input[type="button"]:hover,
    .button:hover, .checkout-button:hover,
    .pagination .current, .comment-pagination .current, .bbp-pagination .current,
    .loop-nav span.previous:hover, .loop-nav span.next:hover, .pagination .page-numbers:hover, .comment-pagination .page-numbers:hover, .bbp-pagination .page-numbers:hover,
    .social_media_list li a:hover { 
       background: <?php echo $color2;?> !important;
        background-image: linear-gradient(bottom, #ffffff 0%, <?php echo $color2;?> 100%) !important;
        background-image: -o-linear-gradient(bottom, #ffffff 0%, <?php echo $color2;?> 100%) !important;
        background-image: -moz-linear-gradient(bottom, #ffffff 0%, <?php echo $color2;?> 100%) !important;
        background-image: -webkit-linear-gradient(bottom, #ffffff 0%, <?php echo $color2;?> 100%) !important;
        background-image: -ms-linear-gradient(bottom, #ffffff 0%, <?php echo $color2;?> 100%) !important;
        background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #343434), color-stop(1, <?php echo $color2;?>)) !important;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $color2;?>', endColorstr='#ffffff',GradientType=0 );
        color: #ffffff;
    }
    
    input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input.input-text, input[type="time"], input[type="url"], input[type="week"], select, textarea {
    	background: <?php echo $color2;?> !important;
    }
    
    .product-content .woocommerce_tabs ul.tabs { border-color: <?php echo $color2;?> !important; }

<?php }

 
if($color3 != "#" || $color3 != ""){?>

 	.footerbg
    { background-color: <?php echo $color3;?>; }

<?php }




if($color4 != "#" || $color4 != ""){?>

 	body, 
    .header_bg a,
    h1, h2, h3, h4, h5, h6,
    .mega-menu ul.mega li a:hover, .mega-menu ul.mega li:hover a
    { color: <?php echo $color4;?> !important; }

<?php }


if($color5 != "#" || $color5 != ""){?>

    body,
    .sidebar a, 
    .header_bg a,
    .footerbg a,
    #container a,
    .mega-menu ul.mega li a:hover, .mega-menu ul.mega li:hover a
    { color: <?php echo $color5;?> !important; }

<?php }



$color_data = ob_get_contents();
ob_clean();
if(isset($color_data) && $color_data !=''){?>
	<style type="text/css">
		<?php echo $color_data;?>
	</style>
<?php 
}
?>