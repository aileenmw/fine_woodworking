<?php ?>
    <div class="slider">
        <div class="slideshow">

            <?php
//            $files = glob("assets/img/slides/*.*");
//
//            for ($i = 0; $i < count($files); $i++) {
//                $image = $files[$i];
//                $img_name = substr($image, strrpos($image, '/') + 1);
//                $img_type = substr($img_name, strrpos($img_name, '.') + 1);
//                $name = str_replace(('.' . $img_type), '', $img_name);
//                $name = strtoupper($name);
//                echo ' <div><img src="' . $image . '" alt="' . $name . '" title="' . $name . '" /></div> ';
//            }
            
            
while ($obj = $data->fetch_object()){
    $name = $obj->name;
    $img = $obj->img;
    $img_path = 'assets/img/slides/'.$img;
    echo ' <div><img src="' . $img_path . '" alt="' . $name . '" title="' . $name . '" /></div> ';
}
            ?> 
        </div>
    </div>

<script>

    $(".slideshow > div:gt(0)").hide();

    setInterval(function () {
        $('.slideshow > div:first')
                .fadeOut(1500)
                .next()
                .fadeIn(1500)
                .end()
                .appendTo('.slideshow');
    }, 4000);

</script>