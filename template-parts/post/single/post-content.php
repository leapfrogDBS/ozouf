<main id="primary" class="site-main">
<div class="section" id="post-body">
    <div class="container w-3/4">
        <div class="row">
            <div class="col">
            <?php
            while ( have_posts() ) :
            the_post();
            $post_copy = get_field('post_copy'); 
            $post_main_image = get_field('post_main_image'); 
            $post_deliverables = get_field('post_deliverables'); 
            
            ?>
            
            <h1 class="text-2xl uppercase font-bold mb-10"><?php echo the_title(); ?></h1>
            <img src="<?php echo $post_main_image['url'] ?>">
            
            <div class="grid grid-cols-5 gap-x-5 mt-10">
                <div class="post-copy col-span-3 text-lg">
                    <?php echo $post_copy ?>
                </div>
                <?php  
                if( $post_deliverables): ?>
                    <ul class="bg-grey col-span-2 rounded-lg p-5">
                            <li class="font-bold uppercase">Deliverables</li>
                        <?php foreach( $post_deliverables as $post_deliverable ): ?>
                            <li class="text-lg">> <?php echo $post_deliverable; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>    

            <?php
            endwhile; // End of the loop.
            ?>
            </div>
        </div>
    </div>
</div>
</main><!-- #main -->