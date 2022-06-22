<main id="primary" class="site-main">
<div class="section pt-40" id="post-body">
    <div class="container w-3/4">
        <div class="row mb-20">
            <div class="col">
                <?php
                while ( have_posts() ) :
                the_post();
                $post_copy = get_field('post_copy'); 
                $post_main_image = get_field('post_main_image'); 
                $post_deliverables = get_field('post_deliverables'); 
                
                ?>
                
                <h1 class="text-3xl uppercase font-bold mb-5"><?php echo the_title(); ?></h1>
                <img src="<?php echo $post_main_image['url'] ?>" class="rounded-2xl w-full">
                
                <div class="grid grid-cols-3 gap-x-20 mt-20">
                    <div class="post-copy col-span-2 text-xl">
                        <?php echo $post_copy ?>
                    </div>
                    <?php  
                    if( $post_deliverables): ?>
                        <ul class="bg-grey col-span-1 rounded-2xl p-10">
                                <li class="font-bold uppercase text-lg mb-3">Deliverables</li>
                            <?php foreach( $post_deliverables as $post_deliverable ): ?>
                                <li class="text-xl">> <?php echo $post_deliverable; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div> 
            </div>
        </div>
            <?php
            // Check value exists.
            if( have_rows('image_gallery') ):
        
                // Loop through rows.
                while ( have_rows('image_gallery') ) : the_row();

                    // Case: 2/3 - 1/3
                    if( get_row_layout() == 'two_third_one_third' ):
                        $image_1 = get_sub_field('post_image_1');
                        $image_2 = get_sub_field('post_image_2');
                    ?>
                        <div class="row grid grid-cols-3 gap-x-20 mb-20"> 
                            <div class="col col-span-2">
                                <img src="<?php echo $image_1['url']; ?>" class="h-full rounded-2xl object-cover">
                            </div>
                            <div class="col col-span-1">
                                <img src="<?php echo $image_2['url']; ?>" class="h-full rounded-2xl object-cover">
                            </div>
                        </div>
                    <?php    
                    elseif( get_row_layout() == 'half_and_half' ):
                        $image_1 = get_sub_field('post_image_1');
                        $image_2 = get_sub_field('post_image_2');
                    ?>
                        <div class="row grid grid-cols-2 gap-x-20 mb-20"> 
                            <div class="col">
                                <img src="<?php echo $image_1['url']; ?>" class="h-full rounded-2xl object-cover">
                            </div>
                            <div class="col">
                                <img src="<?php echo $image_2['url']; ?>" class="h-full rounded-2xl object-cover">
                            </div>
                        </div>
                    <?php    
                        
                    elseif( get_row_layout() == 'full_width' ):
                        $image_1 = get_sub_field('post_image_1');
                    ?>
                        <div class="row mb-20"> 
                            <div class="col">
                                <img src="<?php echo $image_1['url']; ?>" class="w-full rounded-2xl object-cover">
                            </div>
                        </div>
                    <?php    
                    endif;

                // End loop.
                endwhile;               
                
            endif;
            ?>
                                    
            <?php
            endwhile; // End of the loop.
            ?>
            

    </div>
</div>
</main><!-- #main -->