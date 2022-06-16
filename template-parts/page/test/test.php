<div class="text-container">
    <div class="col logo-col">
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
    </div>
    <div class="video-container">
        <img id="service-text" src="<?php echo get_template_directory_uri();?>/img/text.png">
        <video muted="muted" src="https://video-hover-1.superhi.com/8-telescope.mp4" loop></video>
    </div> 


    <div class="wavy-text-container pb-[1000px]">
        <svg width="100%" height="160px" viewBox="0 0 1098.72 89.55">
            <path id="curve" fill="transparent" d="M0.17,0.23c0,0,105.85,77.7,276.46,73.2s243.8-61.37,408.77-54.05c172.09,7.64,213.4,92.34,413.28,64.19"></path>
            <text width="100%" style="transform:translate3d(0,0,0);">
                <textPath style="transform:translate3d(0,0,0);" alignment-baseline="top" xlink:href="#curve" startOffset="1200px" id="text-path">*The pictures are not technically selfies.</textPath>
            </text>
        </svg>
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


const textPath = document.querySelector("#text-path");
console.log(textPath);
const h = document.documentElement, 
      b = document.body,
      st = 'scrollTop',
      sh = 'scrollHeight';

document.addEventListener("scroll", e => {
  let percent = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
  textPath.setAttribute("startOffset", (-percent * 40) + 1200)
});
</script>