<div class="text-container">
    <h1>Auto Deploy2</h1>
    <div id="logo-container">
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
    </div>
    <div class="video-container">
        <img id="service-text" src="<?php echo get_template_directory_uri();?>/img/text.png">
        <video muted="muted" src="https://video-hover-1.superhi.com/8-telescope.mp4" loop></video>
    </div> 
    
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


    const videos = document.querySelectorAll("video")

    videos.forEach(video => {
    video.addEventListener("mouseover", function () {
        this.play()
    })
    
    video.addEventListener("mouseout", function () {
        this.pause()
    })
    
    video.addEventListener("touchstart", function () {
        this.play()
    })
    
    video.addEventListener("touchend", function () {
        this.pause()
    })
    })
</script>