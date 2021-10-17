<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<?php wp_head(); ?>
	<?php header_styles(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php //do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header">
		<div class="left-item">
			<h1>J-Two</h1>
		</div>
		<div class="center-item">
			<nav>
				<div class="nav">
            		<ul class="menu">
                		<li id="collection" style="margin-right: 32px;">Κολεξιόν</li>
                		<li id="sales" style="margin-right: 32px;">Προσφορές</li>
                		<li id="about-us">Σχετικά με εμάς</li>
            		</ul>
        		</div>
				<div class="sub hide">
					<div class="nav active">
            			<ul class="menu active">
                			<li id="collection" class="active" style="margin-right: 32px;">Κολεξιόν</li>
                			<li id="sales" class="act" style="margin-right: 32px;">Προσφορές</li>
                			<li id="about-us" class="act">Σχετικά με εμάς</li>
            			</ul>
						<hr id="line">
        			</div>
					<div class="submenu">
						<ul class="submenu">
							<li style="margin-right: 32px;"><div id="tees">Μπλούζες</div></li>
							<li style="margin-right: 32px;"><div id="tees">Παντελόνια</div></li>
							<li style="margin-right: 32px;"><div id="tees">Πουκάμισα</div></li>
						</ul>
						<div class="close">
							<button class="close"><div>Κλείσιμο</div></button>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="right-item">
			<div class="right">
				<div>
					<svg id="search-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<defs><style>.a{fill:#000;}</style></defs>
						<path class="a" d="M10.569,0A10.569,10.569,0,1,0,21.138,10.569,10.581,10.581,0,0,0,10.569,0Zm0,19.187a8.618,8.618,0,1,1,8.618-8.618A8.628,8.628,0,0,1,10.569,19.187Z"/>
						<g transform="translate(16.455 16.455)">
							<path class="a" d="M358.3,356.925l-5.594-5.593a.975.975,0,0,0-1.38,1.38l5.593,5.594a.976.976,0,0,0,1.38-1.38Z" transform="translate(-351.046 -351.046)"/>
						</g>
					</svg>
				</div>
				<div class="cart-widget">
					<?php echo WC()->cart->cart_contents_count ?>
				</div>
			</div>
		</div>
	</header>

	<?php //do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">


<?php 

	function header_styles(){
		?>
		<style>
			/* Header */
			header{
				width: 100%;
				display: flex;
				justify-content: center;
				/* align-items: center; */
				padding-left: 84px;
				padding-right: 84px;
				background-color: #E5E5E5;
			}

			/* logo */
			div.left-item{
				padding-top: 18px;
				flex: none;
				justify-self: start;
				width: 118px;
			}
			/* logo h1 */
			div.left-item > h1{
				font-size: 40px;
				color: #000;
				font-weight: bold;
			}

			/* center item */
			div.center-item{
				padding-top: 18px;
				flex-grow: 1;
			}

			/* right item */
			div.right-item{
				padding-top: 18px;
				flex: none;
				align-items: center;
				width: 128px;
			}
			/* right */
			div.right{
				padding-top: 13px;
				display: flex;
				justify-content: center;
				align-items: center;
				gap: 50px;
			}

			nav{
            	display: grid;
            	justify-items: center;
        	}
			
			/* Navigation  */
			div.nav{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 80%;
			}
			div.active{
				background-color: #000;

			}
			/* Navigation items */
			ul.menu{
				list-style-type: none;
			}
			ul.active{
				margin-bottom: 15px; 
			}
			ul.menu>li+li, .widget>ul>li+li{
				border-top: 2px solid transparent;
			}
			/* li */
			ul.menu > li{
				float: left;
				font-size: 18px;
				color: #000;
				padding: 13px 33px 13px 33px;
				border: 2px solid transparent;
			}
			/* hover */
			ul.menu > li:hover{
				border: 2px solid black;
				border-radius: 5pt;
				cursor: pointer;
			}
			/* active li */
			ul.menu > li.active{
				background-color: #fff;
				font-size: 18px;
				border-radius: 5px;
				color: #000;
				padding: 13px 33px 13px 33px;
				border: 2px solid #fff;
			}
			ul.menu > li.act{
				color: #fff;
			}
			/* hover */
			ul.menu > li.act:hover{
				border: 2px solid #fff;
			}

			/* sub */
			div.sub{
				display: grid;
				justify-items: center;
				position: fixed;
				margin-top: 0px;
				z-index: 10000;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: #fff;
				background-color: rgba(255,255,255,0.4); /* Black w/ opacity */
			}
			/* submenu */
			div.submenu{
				display: grid;
				/* flex-direction: row; */
				justify-content: center;
				/* align-items: center; */
				background-color: black;
				width: 80%;
				height: 80vh;
				padding-top: 49px;
				padding-bottom: 42px;
			}
			div.hide{
				display: none;
			}
			/* submenu items */
			ul.submenu{
				list-style-type: none;
			}
			/* li */
			ul.submenu > li{
				float: left;
				gap: 32px;
				padding: 8px;
				border: 2px solid transparent;
			}
			/* hover */
			ul.submenu > li:hover{
				border: 2px solid white;
				border-radius: 5pt;
				cursor: pointer;
			}

			/* tees item */
			div#tees{
				width: 292px;
				background-image: url('http://j-2.gr/wp-content/uploads/2021/10/tshirts-scaled.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center;
				text-align: center;
				padding-top: 280px;
				padding-bottom: 16px;
				color: #fff;
				font-size: 22px;
			}

			/* close button */
			div.close{
				align-self: flex-end;
				text-align: center;
			}
			/* button */
			div.close > button{
				font-size: 18px;
				padding: 13px 57px 13px 57px;
				color: #fff;
				border-radius: 5pt;
				border: 2px solid #e5e5e5;
				background-color: transparent;
				font-weight: bold;
			}
			/* hover */
			div.close > button:hover{
				cursor: pointer;
				background-color: #e5e5e5;
				color: #000;
			}
			/* focus */
			div.close > button:focus{
				background-color: #dedede;
				border-inline: 2px solid black;
			}

			/* Cart widget */
			div.cart-widget{
				display: flex;
				justify-content: center;
				align-items: center;
				width: 40px;
				height: 40px;
				background-color: #cccccc;
				border-radius: 5px;
				font-size: 18px;
				color: #000;
				font-weight: bold;
				border: 2px solid transparent;
			}
			/* hover */
			div.cart-widget:hover{
				cursor: pointer;
				border: 2px solid #000;
			}

			/* Search icon */
			#search-icon:hover{
				cursor: pointer;
			}
		</style>
		<script>
			// Check if element is hidden or visible and toggle
			$(document).ready( function(){
				$('#collection').click( function(){
					if($('.submenu').is(':hidden')){
						$('.sub').removeClass('hide');
					} else{
						$('.sub').addClass('hide');
					}
				});
			});
			// Close button
			$(document).ready(function(){
				$('.close').click(function(){
					$('.sub').addClass('hide');
				});
			});
		</script>
		<?php
	}
?>