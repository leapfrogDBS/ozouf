<div class="section bg-yellow " id="holding-page">
    <div class="container flex flex-col h-full justify-between py-10">
        <div class="row mb-8">
            <div class="col flex flex-col items-center md:items-end">
                <div class="flex items-center md:w-[260px]">
                    <img class="h-[18px] md:h-[25px]" src="<?php echo get_template_directory_uri();?>/img/Phone.png">
                    <a class="ml-[8px] text-lg md:text-2xl font-semibold" href="tel:004401534780080">+44 (0)1534 780080</a>
                </div>
                <div class="flex items-center md:w-[260px]">
                    <img class="h-[18px] md:h-[25px]" src="<?php echo get_template_directory_uri();?>/img/Email.png">
                    <a class="ml-[8px] text-lg md:text-2xl font-semibold" href="mailto:hello@ozouf.net">hello@ozouf.net</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col flex flex-col mb-[50px]">
                <h1 class="uppercase text-center text-lg md:text-2xl font-black tracking-widest mb-[70px]">New site coming soon</h1>
                <div id="logo-container" class=" w-2/3 sm:w-1/2 md:w-[280px] m-auto">
                    <video muted="muted" src="<?php echo get_template_directory_uri();?>/mp4/holding-animation.mp4"></video>
                    <div class="eyes">
                        <div class="eye">
                            <div class="ball ball-holding w-[8px] h-[8px] sm:w-[10px] sm:h-[10px]">
                            </div>
                        </div>
                        <div class="eye">
                            <div class="ball ball-holding w-[8px] h-[8px] sm:w-[10px] sm:h-[10px]">
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="uppercase text-center text-lg md:text-xl font-bold tracking-widest">brand  |  Web  |  Video  | Animation</h2>
            </div>
        </div>
    </div>
</div>

<script>
    var balls = document.querySelectorAll('.ball-holding');

    document.onmousemove = function() {
        var x = event.clientX * 100 / window.innerWidth + "%";
        var y = event.clientY * 100 / window.innerHeight + "%";

        for(var i=0;i<2;i++) {
            balls[i].style.left = x;
            balls[i].style.top = y;
            balls[i].style.transform = "translate(-"+x+",-"+y+")";

        }
    }

    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


const video = document.querySelector("video");

video.play();


</script>


<style>
    footer {
        display: none;
    }
    #masthead {
        display: none;
    }

    .eyes {
        animation: 3s fadeIn;
        animation-fill-mode: forwards;
        visibility: hidden;
    }


@keyframes fadeIn {

  85% {
      visibility: hidden;
      opacity: 0;
  }
  100% {
    visibility: visible;
    opacity: 1;
  }
}
</style>