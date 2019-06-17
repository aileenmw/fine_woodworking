<?php
$sql = "SELECT `name`, `img`, `text` FROM `ucl_web`";
$data = $mysqli->query($sql);
?>
<div id="gallery_wrapper">
    <h1>Inspired by Nature</h1>
    <div class="flex">
        <div id='slide_container'>
            <div class="slider">
                <div class="slideshow">
                    <?php
                    while ($obj = $data->fetch_object()) {
                        $name = $obj->name;
                        $img = $obj->img;
                        $text = $obj->text;
                        $img_path = 'assets/img/slides/' . $img;
                        echo ' <div><img src="' . $img_path . '" alt="' . $name . '" title="' . $name . '"  '
                        . 'onclick="getText(this)" id="' . $name . '"/></div> ';
                    }
                    ?> 
                </div>
            </div>
        </div>
        <aside>
            <h2 id="title"></h2> 
            <div id="start_text">
                <p></p>
            </div>
            <button onclick="goOn()" id="btn">Continue</button>
        </aside>
    </div>
    <article>
        <h1>
            Give and Take...
        </h1><br>
        <p>
            Apart from the obvious fact, that wood is a beautiful material we 
            have some deeper concerns when it comes to making choices in our 
            every-day life.
            Our philosophy is, that we have to learn to give back to nature, 
            what we take - no more and no less!<br><br>
            We work together with local plantations and make sure, that the amount
            of trees we use for our production is put back in the ground.
            We use only solid, organic woods and oils instead of presswood and varnish.<br>
            5% of our profit goes to inviromental NGOs.<br>
            <span>...because we care!</span><br><br>
            You will be most welcome at our new traditional Khmer House shop, 
            overlooking Secret Lake and Bokor mountain. Our tour guides will be 
            delighted to give you explanations about our project and do a tour 
            with you around the pepper and spice plantation, through our local 
            fruit garden. They will drive you in a pepper tasting experience. 
            Directly from the farm, our products are sold at the lowest price 
            in the country.<br>
            Take time in your tour, enjoy the view, and taste our fresh fruit 
            juices and dishes cooked with our spices.
        </p>
    </article>
</div>
