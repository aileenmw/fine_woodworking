<?php
include 'db.php';

echo $text = $_POST['text'];
$text = str_replace( "'", "\'", $text);


if ((count($_POST) > 0) OR ( count($_FILES) > 0)) {
    $name = utf8_decode($_POST['name']);
    $filename = $_FILES["myimage"]["name"];
    $microtime = microtime();
    $microtime_arr = explode(' ', $microtime);
    $filename = $microtime_arr[1] . '_' . $filename;
    $img_path = '../assets/img/slides/' . $filename;
    $tmp_name = $_FILES["myimage"]['tmp_name'];


    if (move_uploaded_file($tmp_name, $img_path)) {

        echo $sql_upload = "INSERT INTO `ucl_web`(`name`, `img`, `text`) VALUES ('$name', '$filename', '$text')";

        if ($mysqli->query($sql_upload)) {
            echo 'huurraa';
        }
    } else {
        $message = 'Upload image and fill out a title. ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Iamge uploader</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="upload-msg"></div>
            <div class="row row_center" >
                <div class="col-md-10">
                    <h2><?php echo $mesage; ?></h2>
                    <form method="post" action="" enctype="multipart/form-data" id="upload_item_form">
                        <h3><?php echo $message; ?></h3>
                        <div class="form-group">
                            <label for="exampleTextarea">Image name</label>
                            <input class="form-control" name='name' placeholder="optional" id="img_title">
                        </div>            
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="myimage" style="margin: auto;">
                        </div>  
                        <div class="form-group">
                            <label for="exampleTextarea"></label>
                            <textarea rows="4" class="form-control" name='text' placeholder="Input tekst" id="text" ></textarea>
                        </div>   
                        <button type="submit" class="btn btn-primary" id="upload_submit" >Submit</button>
                    </form>
                </div>
            </div>
        </div

        <script>

//            $(document).ready(function () {
//                $("#upload_submit").click(function () {
//                    var img_title = $('#img_title').val();
//                                alert(img_title);
//                    var filename = '<?php // echo $filename; ?>';
//                    var file = $('#exampleInputFile').val();
//                                alert(file);
//                    var fakepath = 'C:\\fakepath\\';
//                    var file = file.replace(fakepath, '');
//                    //            alert(file);
//                    var text = '<?php // echo $text; ?>';
//                                alert(text);
//       });
             $.ajax({
//                        type: 'POST',
//                        url: 'upload_image_helper.php',
//                        data: {
//                            'file': file,
//                            img_title: img_title,
//                            text: text
//                        },
//                        success: function (response) {
//                            alert(response);
//                            window.location.reload();
//                            window.scrollTo(0, 0);
//                        }
//                    });
//                });
//            });


        </script>
    </body>
</html>