 <?php 
 $video_header = get_field('video_animation_header');
 if ($video_header) { 
    ?>
    <div class="section">
        <video muted="muted" class="w-full" src="<?php echo $video_header['url']; ?>"></video>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            const video = document.querySelector("video");
            video.play();
        });
    </script>
    <?php
}
?>
 <div class="section service-page-content pt-40">
    <div class="container">
    <?php
        // Check value exists.
        if( have_rows('flexible_content') ):
        
            // Loop through rows.
            while ( have_rows('flexible_content') ) : the_row();
                        
                // Case: Single Card Row.
                if( get_row_layout() == 'single_card_row' ):
                    
                    $card = get_sub_field('single_card');
                                    
                    $thumbnail_image = $card['post_thumbnail_image'];
                    $link_to_post = $card['link_to_post'];
                    
                    $post_subtitle = $card['post_subtitle'];
                    $post_excerpt = $card['post_excerpt'];
                    $post_link = $card['post_link'];
                    $permalink = get_permalink($post_link->ID);
                    $post_video_link = $card['post_video_link'];
                                                            
                    ?>

                    <div class="row w-3/4 m-auto mb-20">
                        <div class="col">
                            <div class="grid grid-cols-5 bg-grey rounded-2xl overflow-hidden">
                                <a href="<?php echo $permalink; ?>" class="col-span-3">
                                    <img src="<?php echo $thumbnail_image['url'] ?>" class="col-span-3 h-full object-cover">
                                </a>
								<div class="flex flex-col justify-center p-10 col-span-2">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link->post_title ); ?></h2>
									<p><?php echo $post_excerpt; ?></p>
                                    <?php
                                    if ($post_video_link): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[80px] h-[80px] mt-5">
                                            </a>
                                        </div>
                                    <?php
                                    endif;
                                    ?>
								</div>
                                </div>
                        </div>
                    </div>
                    
                    <?php

                // Case: Double Card Row
                elseif( get_row_layout() == 'double_card_row' ): 

                    $card1 = get_sub_field('card_1');
                    $card2 = get_sub_field('card_2');

                    $thumbnail_image_1 = $card1['post_thumbnail_image_1'];
                    $post_subtitle_1 = $card1['post_subtitle_1'];
                    $post_excerpt_1 = $card1['post_excerpt_1'];
                    $post_link_1 = $card1['post_link_1'];
                    $permalink_1 = get_permalink( $post_link_1->ID );

                    $thumbnail_image_2 = $card2['post_thumbnail_image_2'];
                    $post_subtitle_2 = $card2['post_subtitle_2'];
                    $post_excerpt_2 = $card2['post_excerpt_2'];
                    $post_link_2 = $card2['post_link_2'];
                    $permalink_2 = get_permalink( $post_link_2->ID );
                    
                    ?>
                    <div class="row w-3/4 m-auto grid grid-cols-2 gap-x-20 mb-20">
                        <div class="col">
                            <a href="<?php echo $permalink_1; ?>" class="flex flex-col bg-grey rounded-2xl overflow-hidden">
								<img src="<?php echo $thumbnail_image_1['url'] ?>" class="h-full object-cover">
								<div class="flex flex-col justify-center p-10">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle_1; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link_1->post_title ); ?></h2>
									<p><?php echo $post_excerpt_1; ?></p>
								</div>
							</a>
                        </div>
                        <div class="col">
                            <a href="<?php echo $permalink_2; ?>" class="flex flex-col bg-grey rounded-2xl overflow-hidden">
								<img src="<?php echo $thumbnail_image_2['url'] ?>" class="h-full object-cover">
								<div class="flex flex-col justify-center p-10">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle_2; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link_2->post_title ); ?></h2>
									<p><?php echo $post_excerpt_2; ?></p>
								</div>
							</a>
                        </div>
                    </div>
                    <?php

                    // Case: Treble Card Row
                    elseif( get_row_layout() == 'treble_card_row' ): 

                    $card1 = get_sub_field('card_1');
                    $card2 = get_sub_field('card_2');
                    $card3 = get_sub_field('card_3');

                    $thumbnail_image_1 = $card1['post_thumbnail_image_1'];
                    $post_subtitle_1 = $card1['post_subtitle_1'];
                    $post_excerpt_1 = $card1['post_excerpt_1'];
                    $post_link_1 = $card1['post_link_1'];
                    $permalink_1 = get_permalink( $post_link_1->ID );

                    $thumbnail_image_2 = $card2['post_thumbnail_image_2'];
                    $post_subtitle_2 = $card2['post_subtitle_2'];
                    $post_excerpt_2 = $card2['post_excerpt_2'];
                    $post_link_2 = $card2['post_link_2'];
                    $permalink_2 = get_permalink( $post_link_2->ID );

                    $thumbnail_image_3 = $card3['post_thumbnail_image_3'];
                    $post_subtitle_3 = $card3['post_subtitle_3'];
                    $post_excerpt_3 = $card3['post_excerpt_3'];
                    $post_link_3 = $card3['post_link_3'];
                    $permalink_3 = get_permalink( $post_link_3->ID );
                    
                    ?>
                    <div class="row w-3/4 m-auto grid grid-cols-3 gap-x-20 mb-20">
                        <div class="col">
                            <a href="<?php echo $permalink_1; ?>" class="flex flex-col bg-grey rounded-2xl overflow-hidden">
								<img src="<?php echo $thumbnail_image_1['url'] ?>" class="h-full object-cover">
								<div class="flex flex-col justify-center p-10">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle_1; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link_1->post_title ); ?></h2>
									<p><?php echo $post_excerpt_1; ?></p>
								</div>
							</a>
                        </div>
                        <div class="col">
                            <a href="<?php echo $permalink_2; ?>" class="flex flex-col bg-grey rounded-2xl overflow-hidden">
								<img src="<?php echo $thumbnail_image_2['url'] ?>" class="h-full object-cover">
								<div class="flex flex-col justify-center p-10">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle_2; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link_2->post_title ); ?></h2>
									<p><?php echo $post_excerpt_2; ?></p>
								</div>
							</a>
                        </div>
                        <div class="col">
                            <a href="<?php echo $permalink_3; ?>" class="flex flex-col bg-grey rounded-2xl overflow-hidden">
								<img src="<?php echo $thumbnail_image['url'] ?>" class="h-full object-cover">
								<div class="flex flex-col justify-center p-10">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle_3; ?></h3>
									<h2 class="text-2xl"><?php echo esc_html( $post_link_3->post_title ); ?></h2>
									<p><?php echo $post_excerpt_3; ?></p>
								</div>
							</a>
                        </div>
                    </div>
                    <?php

                endif;

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>
 </div>
 