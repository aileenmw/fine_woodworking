<?php ?>    
<div class="slider">
<div class="slideshow">
    <?php
//                    $files = glob("assets/img/slider_temps/*.*");
    $files = glob("assets/img/slider/*.*");

    for ($i = 0; $i < count($files); $i++) {
        $image = $files[$i];
//    print $image ."<br />";
        echo ' <div><img src="' . $image . '" alt="Random image" />' . "</div>";
    }
    ?> 
</div>
</div>

<script>

    /* SLIDER */

    $(".slideshow > div:gt(0)").hide();

    setInterval(function () {
        $('.slideshow > div:first')
                .fadeOut(1500)
                .next()
                .fadeIn(1500)
                .end()
                .appendTo('.slideshow');
    }, 6000);

</script>