<?php
$dir = "assets/img/slider/*";
foreach (glob($dir) as $file) {
    
}
$phpArray = glob($dir);
$len = count($phpArray);
?>
<div class="include_wrapper" id='gallery'>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            for ($i = 1; $i <= $len; $i++) {
                ?>

                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" id="<?php echo 'li_' . $i; ?>"</li>

                <?php
            }
            ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php
            for ($i = 0; $i < $len; $i++) {
                ?>
                <div class="item">
                    <img src=" <?php echo $phpArray[$i]; ?> " alt="Los Angeles" style="width:100%;" id="<?php echo 'img_' . $i; ?>">
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script>
    var imgagePath = <?php echo json_encode($phpArray); ?>;

    var firstImgDiv = document.getElementsByClassName('item')[0];
    var cl = firstImgDiv.className;
    var att = document.createAttribute("class");
    att.value = cl + " active";
    firstImgDiv.setAttributeNode(att);


    var firstLi = document.getElementById('li_1');
    var cl = document.createAttribute("class");
    cl.value = "active";
    li_1.setAttributeNode(cl);

</script>
</div>