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
		<div class="header-container desktop-header-container bg-yellow">
			<nav class="pt-10 pb-7">
				<div class="w-[95%] ml-auto mr-0 flex justify-between items-center">
					<div id="logo-container" class="logo-container w-[138px] md:w-[194px]">
						<a href="<?php echo get_home_url(); ?>">
							<img id="logo-image" src="<?php echo get_template_directory_uri();?>/img/Ozouf.svg">
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
		<?php
    $video = get_field('video_animation_header');
    if ($video) { 
    ?>
        <div class="section bg-black hidden md:block">
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

	$mobile_video = get_field('mobile_video_animation_header');
    if ($mobile_video) { 
    ?>
        <div class="section bg-black md:hidden">
            <video class="mobile-header-animation w-full" muted="muted" class="w-full" src="<?php echo $mobile_video['url'] ?>"></video>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                const mobileVideo = document.querySelector(".mobile-header-animation");
                mobileVideo.play();
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

