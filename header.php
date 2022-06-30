<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ozouf
 */

?>
<!doctype html>
<html class="text-[12px] md:text-[14px] lg:text-[16px]" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Andys Link from Parslows
	<link rel="stylesheet" href="https://use.typekit.net/gqd4ejo.css">
	-->
	<link rel="stylesheet" href="https://use.typekit.net/vgs2bro.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ozouf' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container desktop-header-container hidden md:block bg-yellow">
			<nav class="pt-10 pb-7">
				<div class="w-[95%] ml-auto mr-0 flex justify-between items-center">
					<div id="logo-container" class="logo-container w-[138px] md:w-[194px]">
						<a href="<?php echo get_home_url(); ?>">
							<img id="logo-image" src="<?php echo get_template_directory_uri();?>/img/logo-no-eyes-large.svg">
							<div class="eyes">
								<div class="eye">
									<div class="ball">
									</div>
								</div>
								<div class="eye">
									<div class="ball">
									</div>
								</div>
							</div>  
						</a>
					</div> 
					<div class="menu-container relative z-[9999]">
						<input class="checkbox" type="checkbox" name="" id="" />
						<div class="hamburger hamburger-lines" id="menu-btn">
							<span class="line line1 hamburger-top"></span>
							<span class="line line2 hamburger-middle "></span>
							<span class="line line3 hamburger-bottom "></span>
						</div>
						<div class="menu-items bg-yellow text-5xl font-bold uppercase">
							<?php wp_nav_menu() ?>
						</div>		
					</div>
				</div>
			</nav>
		</div>
		<h1>test</h1>
		<div class="header-container mobile-header-container block md:hidden">
			<nav class="fixed inset-x-0 top-0 pt-[25px] z-[999] md:pt-[48px] pb-[20px]">
				<div class="container flex items-start justify-between p-x-[5%] w-full">
					<div id="logo-container" class="logo-container w-[138px] md:w-[194px]">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo-no-eyes-large.svg" /></a>
					</div> 
					<div class="hamburger relative w-[28px] h-[18px] cursor-pointer transition-all duration-[0.25s] z-[999] md:w-[40px]" id="mobile-menu-btn">
						<span class="hamburger-top w-[28px] h-[2px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-0 md:w-[40px]"></span>
						<span class="hamburger-bottom w-[28px] h-[2px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[16px] md:w-[40px]"></span>
					</div>		
				</div>
			</nav>
		</div>
		<?php
    $video = get_field('video_animation_header');
    if ($video) { 
    ?>
        <div class="section bg-black">
            <video class="header-animation w-full" muted="muted" class="w-full" src="<?php echo $video['url'] ?>"></video>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                const video = document.querySelector(".header-animation");
                video.play();
            });
        </script>
    <?php
    }
?>
</header><!-- #masthead -->


<div class="floating-contact fixed right-[-10px] sm:right-0 top-1/3">
	<a class="" href="tel:004401534780080">
		<div class="tel bg-yellow mb-2 sm:mb-5 p-5 rounded-l-xl scale-75 sm:scale-100">
			<img class="h-[40px]" src="<?php echo get_template_directory_uri();?>/img/Phone.png">
		</div>
	</a>
	<a href="mailto:hello@ozouf.net">
		<div class="contact bg-yellow p-5 rounded-l-xl scale-75 sm:scale-100">
			<img class="h-[40px]" src="<?php echo get_template_directory_uri();?>/img/Email.png">
		</div>
	</a>
</div>

	<script>
    var balls = document.querySelectorAll('.ball');

    document.onmousemove = function() {
        var x = event.clientX * 100 / window.innerWidth + "%";
        var y = event.clientY * 100 / window.innerHeight + "%";

        for(var i=0;i<2;i++) {
            balls[i].style.left = x;
            balls[i].style.top = y;
            balls[i].style.transform = "translate(-"+x+",-"+y+")";

        }
    }
	</script>

