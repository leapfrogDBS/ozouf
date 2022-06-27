<div class="section bg-black">
    <video class="header-animation w-full" muted="muted" class="w-full" src="<?php echo get_template_directory_uri();?>/mp4/test-header.mp4"></video>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        const video = document.querySelector(".header-animation");
        video.play();
    });
</script>