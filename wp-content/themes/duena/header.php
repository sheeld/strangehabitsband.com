<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package duena
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if( '' != of_get_option('favicon') ){ ?>
<link rel="icon" href="<?php echo esc_url( of_get_option('favicon', "" ) ); ?>" type="image/x-icon" />
<link href="style.css" rel="stylesheet" type="text/css">
<?php } ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if (gt IE 9)|!(IE)]>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('images/website-header-roll.png')" <?php body_class(); ?>>
<div class="page-wrapper">
	<?php do_action( 'before' ); ?>
	<header id="header" role="banner">
		<div class="container clearfix">
			<div class="logo">
			<?php if (( of_get_option('logo_type') == 'image_logo') && ( of_get_option('logo_url') != '')) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( of_get_option('logo_url') ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			<?php } else { ?>
				<?php if ( is_front_page() || is_home() || is_404() ) { ?>
					<h1 class="text-logo"><a href="http://strangehabitsband.com" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('headerlogo','','wp-content/themes/duena/images/website-header-roll.png',1)"><img src="wp-content/themes/duena/images/website-header.png" width="750" height="213" id="headerlogo"></a></h1>
				<?php } else { ?>
			  <h2 class="text-logo"><a href="http://strangehabitsband.com" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('headerlogo','','wp-content/themes/duena/images/website-header-roll.png',1)"><img src="wp-content/themes/duena/images/website-header.png" width="750" height="213" id="headerlogo"></a></h2>
              
				<?php } ?>
			<?php } ?>
			  <p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div>
			
			<?php if ( of_get_option('g_search_box_id') == 'yes') { ?>  
	          <div id="top-search">
	            <form method="get" action="<?php echo home_url(); ?>/">
	              <input type="text" name="s"  class="input-search" /><input type="submit" value="" id="submit">
	            </form>
	          </div>
              
              
	        <?php } ?>
          <div class="clear"></div>
            
		  <nav id="site-naviation" class="main-nav" role="navigation">
				<div class="navbar_inner">
				<?php 
					wp_nav_menu( array( 
						'container'       => 'ul', 
		                'menu_class'      => 'sf-menu', 
		                'menu_id'         => 'topnav',
		                'depth'           => 0,
		                'theme_location' => 'primary' 
					) ); 
				?>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php if( (is_front_page()) && (of_get_option('sl_show') != 'no') ) { ?>
	<section id="slider-wrapper">
		<div class="container">
	    	<?php get_template_part( 'slider' ); ?>
		</div>
	</section><!--#slider--> 
  	<?php } ?>
	<div id="main" class="site-main">
		<div class="container">
			<?php if ( of_get_option('g_breadcrumbs_id') != 'no') { ?>
				<?php duena_breadcrumb(); ?>
			<?php } ?>
<div class="row">