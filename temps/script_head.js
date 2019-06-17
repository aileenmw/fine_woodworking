//function myFunction() {
//    var x = document.getElementById("myTopnav");
//    if (x.className === "topnav") {
//        x.className += " responsive";
//    } else {
//        x.className = "topnav";
//    }
//}
//
//// set background img
//
//function getBg() {
//    
////    var imgagePath = <?php echo json_encode($filename); ?>;
//
//    var pageSplit = document.URL.split('=');
//    var len = pageSplit.length;
//    var page = pageSplit[len - 1];
//
//    var img = "url('assets/img/bg/" + page + ".jpg')";
//    url = "http://amw.nu/eksamen/assets/img/bg/" + page + ".jpg";
//    alert(url);
//
//    $.ajax(url)
//            .done(function () {
//                document.body.style.backgroundImage = img;
//                document.body.style.backgroundSize = "cover";
//                document.body.style.backgroundRepeat = "no-repeat";
////                alert('all good, man');
//            })
//            .fail(function () {
//                document.body.style.backgroundImage = '';
////                  alert('no file, man');
//    });
//
//}
//
//window.onload = getBg;
