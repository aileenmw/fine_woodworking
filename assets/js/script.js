
// RESONSIVE NAV ON FRONT PAGE
function responsiveNavUl() {
    var pageSplit = document.URL.split('=');
    var len = pageSplit.length;
    var page = pageSplit[len - 1];
    if (page == 'front') {

        // RESPONSIVE MARGIN FOR NAV UL
        var w = window.innerWidth;
        var bgImgW = document.getElementById('bg_img').offsetWidth;
        var ul = document.getElementById('nav_ul');
        var ulW = ul.offsetWidth;
        var nav = document.getElementById('front_nav');
        var navMarginLeft = (w - bgImgW - ulW - 20);

        if ((w - bgImgW) < ulW) {
//            alert('space : '+ (w - bgImgW));
            nav.style.margin = 'auto';
        } else {
            ul.style.marginLeft = navMarginLeft + 'px';
        }

        // HIDE NAV ON FRONT PAGE WHEN IT DOESN'T FIT
        var ul = document.getElementById('nav_ul');
        ul.style.display = 'block';
        if (window.innerWidth < 900 && (window.innerWidth / window.innerHeight) > 1.5) {
            ul.style.display = 'none';
        } else {
            ul.style.display = 'block';
        }
    }
}
$(document).ready(responsiveNavUl);
$(window).bind('resize', responsiveNavUl);



// SLIDER

var startTitle = 'Do You see something You like?<br> click for more information.';
var startText = 'All our procucts are hand-crafted and made out of organic woods.<br><br>' +
        'Every piece is unique.<br><br>' +
        'We do custom work, so if You get inspired and want Your own ideas' +
        'and have Your interior to express Your individuality we are here to' +
        'help You make it happen.<br><br>' +
        '<span>Add some soul to Your home!<span>';

$('#title').html(startTitle);
$('#start_text').html(startText);


$(".slideshow > div:gt(0)").hide();

function start() {
    $('.slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('.slideshow');
}

function intervalManager(flag, action, time) {
    if (flag) {
        intervalID = setInterval(action, time);
    } else {
        clearInterval(intervalID);
    }
}

intervalManager(true, start, 3000);


function goOn() {
    $('#title').html(startTitle);
    $('#start_text').html(startText);
    $('#btn').css('display', 'none');
    intervalManager(true, start, 3000);
}

function getText(el) {

    var name = $(el).attr("id");
    $('#title').html(name);
    intervalManager(false);
    $.ajax({
        type: 'POST',
        url: 'handlers/get_text.php',
        data: {
            'name': name
        },
        success: function (response) {
            $('#start_text').html(response);
        }
    });
    $('#btn').css('display', 'block');
}


// RESPONSIVE TOPNAV ( BURGER)

function toggleNav() {
    var nav = document.getElementById("myTopnav");
    if (nav.className === "topnav") {
        nav.className += " responsive";
    } else {
        nav.className = "topnav";
    }
}

// set background img
function getBg() {
    var pageSplit = document.URL.split('=');
    var len = pageSplit.length;
    var page = pageSplit[len - 1];
    var path = "assets/img/bg/" + page + ".jpg";
    $.ajax({
        type: "POST",
        url: 'handlers/check_img_file.php',
        data: 'data=' + path,
        success: function (xhr) {
            var imgPath = xhr;
            if (imgPath) {
                document.body.style.backgroundImage = 'url("' + imgPath + '")';
                document.body.style.backgroundSize = "cover";
                document.body.style.backgroundRepeat = "no-repeat";
            } else {
                console.log('no background image for this page');
            }
        }
    });
}
window.onload = getBg;


// SET BREAKS IN FOOTER TEXT
function footerText() {
    if (window.innerWidth < 600) {
        document.getElementById('text').innerHTML = 'FINE WOODWORKING<br> Mellow Road 69, Heavens Grove <br> California, USA';
    } else {
        document.getElementById('text').innerHTML = 'FINE WOODWORKING, Mellow Road 69, Heavens Grove, California, USA';
    }
}
$(document).ready(footerText);
$(window).bind('resize', footerText);



