<div class="section h-screen bg-yellow" id="holding-page">
    <div class="container flex flex-col justify-between h-full py-10">
        <div class="row">
            <div class="col flex flex-col items-end">
                <div class="flex items-center w-[260px]">
                    <img class="h-[25px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                    <a class="ml-[12px] text-2xl font-semibold" href="tel:004401534780080">+44 (0)1534 780080</a>
                </div>
                <div class="flex items-center w-[260px]">
                    <img class="h-[25px]" src="<?php echo get_template_directory_uri();?>/img/asterisk-black.svg">
                    <a class="ml-[12px] text-2xl font-semibold" href="mailto:hello@ozouf.net">hello@ozouf.net</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col flex flex-col mb-[25vh]">
                <h1 class="uppercase text-center text-2xl font-black tracking-widest mb-[10vh]">New site coming soon</h1>
                <div id="logo-container" class="w-[280px] m-auto">
                    <img class="" src="<?php echo get_template_directory_uri();?>/img/holding-logo.png">
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
        </div>
        <div class="row">
            <div class="col">
                <h2 class="uppercase text-center text-xl font-bold tracking-widest">brand  |  Web  |  Video  | Animation</h2>
            </div>
        </div>
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

</script>