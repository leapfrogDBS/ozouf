<div class="section service-page-content">
    <div class="container">
    <?php
        // Check value exists.
        if( have_rows('flexible_content') ):
        
            // Loop through rows.
            while ( have_rows('flexible_content') ) : the_row();
                        
                // Case: Single Image Row.
                if( get_row_layout() == 'image_-_fullwidth' ):    
                    $image_1 = get_sub_field('post_image_1');
                ?>
                    <div class="row w-10/12 sm:w-3/4 m-auto mb-10"> 
                        <div class="col">
                            <img src="<?php echo $image_1['url']; ?>" class="w-full rounded-2xl object-cover">
                        </div>
                    </div>
                <?php
                // Case: Free text
                elseif( get_row_layout() == 'text_editor_row' ):
                    $text = get_sub_field('free_text');    
                ?>
                <div class="row w-10/12 sm:w-3/4 m-auto mb-20">
                    <div class="col">
                        <?php echo $text; ?>
                    </div>
                </div>
                <?php
                // Case: half and half image row.     
                elseif( get_row_layout() == 'image_-_half_half' ):
                    $image_1 = get_sub_field('post_image_1');
                    $image_2 = get_sub_field('post_image_2');
                ?>
                    <div class="row xs:grid xs:grid-cols-2 xs:gap-x-10 w-10/12 sm:w-3/4 m-auto mb-10"> 
                        <div class="col mb-10 xs:mb-0">
                            <img src="<?php echo $image_1['url']; ?>" class="h-full rounded-2xl object-cover">
                        </div>
                        <div class="col">
                            <img src="<?php echo $image_2['url']; ?>" class="h-full rounded-2xl object-cover">
                        </div>
                    </div>
                <?php
                // Case: 2/3 - 1/3 image row
                 elseif( get_row_layout() == 'image_-_thirds' ):
                    $image_1 = get_sub_field('post_image_1');
                    $image_2 = get_sub_field('post_image_2');
                ?>
                    <div class="row xs:grid xs:grid-cols-3 xs:gap-x-10 w-10/12 sm:w-3/4 m-auto mb-10"> 
                        <div class="col col-span-2 mb-10 xs:mb-0">
                            <img src="<?php echo $image_1['url']; ?>" class="h-full rounded-2xl object-cover">
                        </div>
                        <div class="col col-span-1">
                            <img src="<?php echo $image_2['url']; ?>" class="h-full rounded-2xl object-cover">
                        </div>
                    </div>
               <?php     
                // Case: Single Card Row.
                elseif( get_row_layout() == 'single_card_row' ):
                    
                    $card = get_sub_field('single_card');
                                    
                    $thumbnail_image = $card['post_thumbnail_image'];
                    $link_to_post = $card['link_to_post'];
                    
                    $post_subtitle = $card['post_subtitle'];
                    $post_excerpt = $card['post_excerpt'];
                    $post_link = $card['post_link'];
                    $permalink = get_permalink($post_link->ID);
                    $post_video_link = $card['post_video_link'];
                    $link_to_post = $card['link_to_post'];
                    $card_title;
                    if ($link_to_post) {
                        $card_title = esc_html($post_link->post_title);
                    } else {
                        $card_title = $card['card_title'];
                    }
                                                            
                    ?>

                    <div class="row w-10/12 sm:w-3/4 m-auto mb-24">
                        <div class="col">
                            <div class="lg:grid lg:grid-cols-5 bg-grey rounded-2xl overflow-hidden">
                                <?php
                                    if ($link_to_post) {
                                ?>
                                     <a href="<?php echo $permalink; ?>" class="lg:col-span-3">
                                <?php
                                   } else {
                                ?>
                                     <div class="lg:col-span-3">
                                <?php
                                    }
                                ?>
                                
                               
                                    <img src="<?php echo $thumbnail_image['url'] ?>" class="col-span-3 h-full object-cover">
                                <?php
                                if ($link_to_post) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
								    <div class="flex flex-col justify-center p-10 lg:col-span-2">
                                    
                                    <?php
                                    if ($link_to_post) {
                                ?>
                                    <a href="<?php echo $permalink; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle; ?></h3>
                                        <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title; ?></h2>
                                        <p class="text-base"><?php echo $post_excerpt; ?></p>
                                        <?php
                                if ($link_to_post) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
                                    <?php
                                    if ($post_video_link): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
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
                    $post_video_link_1 = $card1['post_video_link_1'];
                    $link_to_post = $card1['link_to_post'];
                    $card_title1;
                    if ($link_to_post) {
                        $card_title1 = esc_html($post_link->post_title);
                    } else {
                        $card_title1 = $card1['card_title_1'];
                    }

                    $thumbnail_image_2 = $card2['post_thumbnail_image_2'];
                    $post_subtitle_2 = $card2['post_subtitle_2'];
                    $post_excerpt_2 = $card2['post_excerpt_2'];
                    $post_link_2 = $card2['post_link_2'];
                    $permalink_2 = get_permalink( $post_link_2->ID );
                    $post_video_link_2 = $card2['post_video_link_2'];
                    $link_to_post2 = $card2['link_to_post_2'];
                    $card_title2;
                    if ($link_to_post2) {
                        $card_title2 = esc_html($post_link->post_title);
                    } else {
                        $card_title2 = $card2['card_title_2'];
                    }
                    
                    ?>
                    <div class="row w-10/12 sm:w-3/4 m-auto sm:grid sm:grid-cols-2 sm:gap-x-24 mb-24">
                        <div class="col mb-24 sm:mb-0">
                            <div class="flex flex-col bg-grey rounded-2xl overflow-hidden">
                            <?php
                                    if ($link_to_post) {
                                ?>
                                     <a href="<?php echo $permalink_1; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                    <img src="<?php echo $thumbnail_image_1['url'] ?>" class="h-full object-cover">
                                <?php
                                if ($link_to_post) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
								<div class="flex flex-col justify-center p-10">
                                     <?php
                                    if ($link_to_post) {
                                ?>
                                     <a href="<?php echo $permalink_1; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle_1; ?></h3>
                                        <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title1; ?></h2>
                                        <p class="text-base"><?php echo $post_excerpt_1; ?></p>
                                        <?php
                                if ($link_to_post) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
                                    <?php
                                    if ($post_video_link_1): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link_1['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
                                            </a>
                                        </div>
                                    <?php
                                    endif;
                                    ?>
								</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex flex-col bg-grey rounded-2xl overflow-hidden">
                            <?php
                                    if ($link_to_post2) {
                                ?>
                                     <a href="<?php echo $permalink_2; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                    <img src="<?php echo $thumbnail_image_2['url'] ?>" class="h-full object-cover">
                            
                                <?php
                                if ($link_to_post2) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
								<div class="flex flex-col justify-center p-10">
                                <?php
                                    if ($link_to_post2) {
                                ?>
                                     <a href="<?php echo $permalink_2; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle_2; ?></h3>
                                        <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title2; ?></h2>
                                        <p class="text-base"><?php echo $post_excerpt_2; ?></p>
                                <?php
                                if ($link_to_post2) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
                                     <?php
                                    if ($post_video_link_2): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link_2['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
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
                    $post_video_link_1 = $card1['post_video_link_1'];
                    $link_to_post1 = $card1['link_to_post_1'];
                    $card_title1;
                    if ($link_to_post1) {
                        $card_title1 = esc_html($post_link->post_title);
                    } else {
                        $card_title1 = $card1['card_title_1'];
                    }

                    $thumbnail_image_2 = $card2['post_thumbnail_image_2'];
                    $post_subtitle_2 = $card2['post_subtitle_2'];
                    $post_excerpt_2 = $card2['post_excerpt_2'];
                    $post_link_2 = $card2['post_link_2'];
                    $permalink_2 = get_permalink( $post_link_2->ID );
                    $post_video_link_2 = $card2['post_video_link_2'];
                    $link_to_post2 = $card2['link_to_post_2'];
                    $card_title2;
                    if ($link_to_post2) {
                        $card_title2 = esc_html($post_link->post_title);
                    } else {
                        $card_title2 = $card2['card_title_2'];
                    }

                    $thumbnail_image_3 = $card3['post_thumbnail_image_3'];
                    $post_subtitle_3 = $card3['post_subtitle_3'];
                    $post_excerpt_3 = $card3['post_excerpt_3'];
                    $post_link_3 = $card3['post_link_3'];
                    $permalink_3 = get_permalink( $post_link_3->ID );
                    $post_video_link_3 = $card3['post_video_link_3'];
                    $link_to_post3 = $card3['link_to_post_3'];
                    $card_title3;
                    if ($link_to_post3) {
                        $card_title3 = esc_html($post_link->post_title);
                    } else {
                        $card_title3 = $card3['card_title_3'];
                    }

                    ?>
                    <div class="row w-10/12 sm:w-3/4 m-auto lg:grid lg:grid-cols-3 lg:gap-x-10 mb-24">
                        <div class="col mb-24 lg:mb-0">
                            <div class="flex flex-col bg-grey rounded-2xl overflow-hidden">
                                <?php
                                    if ($link_to_post1) {
                                ?>
                                     <a href="<?php echo $permalink_1; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                    <img src="<?php echo $thumbnail_image_1['url'] ?>" class="h-full object-cover">
                                <?php
                                if ($link_to_post1) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
								<div class="flex flex-col justify-center p-7">
                                <?php
                                    if ($link_to_post1) {
                                ?>
                                     <a href="<?php echo $permalink_1; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle_1; ?></h3>
                                        <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title1; ?></h2>
                                        <p class="text-base"><?php echo $post_excerpt_1; ?></p>
                                <?php
                                    if ($link_to_post1) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>
                                    <?php
                                    if ($post_video_link_1): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link_1['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
                                            </a>
                                        </div>
                                    <?php
                                    endif;
                                    ?>
								</div>
                            </div>
                        </div>
                        <div class="col mb-24 lg:mb-0">
                            <div class="flex flex-col bg-grey rounded-2xl overflow-hidden">
                            <?php
                                    if ($link_to_post2) {
                                ?>
                                     <a href="<?php echo $permalink_2; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                    <img src="<?php echo $thumbnail_image_2['url'] ?>" class="h-full object-cover">
                                <?php
                                    if ($link_to_post2) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>    
								<div class="flex flex-col justify-center p-7">
                                <?php
                                    if ($link_to_post2) {
                                ?>
                                     <a href="<?php echo $permalink_2; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle_2; ?></h3>
									    <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title2; ?></h2>
									    <p class="text-base"><?php echo $post_excerpt_2; ?></p>
                                        <?php
                                    if ($link_to_post2) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>    
                                    <?php
                                    if ($post_video_link_2): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link_2['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
                                            </a>
                                        </div>
                                    <?php
                                    endif;
                                    ?>
								</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex flex-col bg-grey rounded-2xl overflow-hidden">
                            <?php
                                    if ($link_to_post3) {
                                ?>
                                     <a href="<?php echo $permalink_3; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                    <img src="<?php echo $thumbnail_image['url'] ?>" class="h-full object-cover">
                                    <?php
                                    if ($link_to_post3) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>    
								<div class="flex flex-col justify-center p-7">
                                <?php
                                    if ($link_to_post3) {
                                ?>
                                     <a href="<?php echo $permalink_3; ?>">
                                <?php
                                   } else {
                                ?>
                                     <div>
                                <?php
                                    }
                                ?>
                                        <h3 class="uppercase font-bold text-sm tracking-widest mb-1"><?php echo $post_subtitle_3; ?></h3>
									    <h2 class="text-4xl mb-2 font-normal"><?php echo $card_title3; ?></h2>
									    <p class="text-base"><?php echo $post_excerpt_3; ?></p>
                                <?php
                                    if ($link_to_post3) {
                                ?>
                                     </a>
                                <?php
                                   } else {
                                ?>
                                     </div>
                                <?php
                                    }
                                ?>    
                                    <?php
                                    if ($post_video_link_3): ?>
                                        <div>
                                        <a class="vp-a" href="<?php echo $post_video_link_3['url']; ?>">	
                                                <img src="<?php echo get_template_directory_uri();?>/img/black-play-icon.png" class="w-[40px] h-[40px] md:w-[60px] md:h-[60px] mt-5">
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