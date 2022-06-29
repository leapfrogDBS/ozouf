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
            endwhile; // End of the loop.
            ?>
            

    </div>
</div>
</main><!-- #main -->