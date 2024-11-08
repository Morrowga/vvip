@extends('layouts.frontview')

@section('content')

<section id="about-section" class="page" style="margin-top: 35px;">
    <div class="container">
        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
            <h2 class="about about_margin">About</h2>
            <div class="devider"></div>
        </div>
    </div>
</section>

<div class="container">
    <h3 class="text text-center teampurpose">{{__('website.whatisvvip')}}</h3>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-6"  style="margin-top: 15px;">
                <video height="250" class="text-center d-flex justify-content-center about_video" id="about_video"  loop autoplay muted>
                    <source src="../images/VVIP 9 Still 4 sec.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="col-md-6">
                <p class="text" style="font-size: 16px; margin-top: 25px; width: 100%;">
                    {{ __('website.whatvvip_para') }}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="devider" style="margin-top: 15px;"></div>

<div class="container">
    <h3 class="text text-center teampurpose">{{ __('website.useful')}}</h3>
    <div class="col-md-12">
        <video class="about_video" loop autoplay muted>
            <source src="../images/Ekster 3.0 - The World's Slimmest Smart Wallet.mp4" type="video/mp4">
            <source src="../images/Ekster 3.0 - The World's Slimmest Smart Wallet.mp4" type="video/ogg">
        </video>
    </div>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                <p class="text" style="font-size: 16px; margin-top: 25px; width: 100%;">
                    {{ __('website.useful_para') }}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="devider" style="margin-top: 25px;"></div>

<div class="container">
    <div class="col-md-12 text-center">
        <h1 class="text text-center teampurpose">{{ __('website.purpose') }}</h1>
        <div class="d-flex justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="typewriter">
                    <p class="text text-center"  id="typewrite"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
    <h3 class="text text-center teampurpose">{{ __('website.our_team') }}</h3>
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="col-md-3 team_div_one text-center">
                <div class="team_name_one">
                    <img src="https://i.ibb.co/1r4dqVX/logo.png" alt="" width="160" height="50">
                    <div class="text team_text" style="font-size: 20px;">FORMER</div>
                </div>
                <img class="team_profile_one text-center" src="https://i.pinimg.com/564x/1a/5c/23/1a5c2308265ff5f2137e7da02b7e7373.jpg" alt="" width="300" height="400">
            </div>
            <div class="col-md-3 team_div_two text-center" style="margin-top: 8px;">
                <div class="team_name_two">
                    <img src="https://i.ibb.co/1r4dqVX/logo.png" alt="" width="160" height="50">
                    <div class="text team_text" style="font-size: 20px;">Something</div>
                </div>
                <img class="team_profile_two text-center" src="https://i.pinimg.com/564x/b1/9a/17/b19a17f28f4e0b7641ef62d8690f7dd5.jpg" alt="" width="300" height="400">
            </div>
            <div class="col-md-3 team_div_three text-center" style="margin-top: 12px;">
                <div class="team_name_three">
                    <img src="https://i.ibb.co/1r4dqVX/logo.png" alt="" width="160" height="50">
                    <div class="text team_text" style="font-size: 20px;">Something</div>
                </div>
                <img class="team_profile_three text-center" src="https://i.pinimg.com/736x/69/84/09/6984097201e414d9352b190f49656856.jpg" alt="" width="300" height="400">
            </div>
            <div class="col-md-3 team_div_four text-center" style="margin-top: 14px;">
                <div class="team_name_four">
                    <img src="https://i.ibb.co/1r4dqVX/logo.png" alt="" width="160" height="50">
                    <div class="text team_text" style="font-size: 20px;">Something</div>
                </div>
                <img class="team_profile_four text-center" src="https://i.pinimg.com/564x/55/63/31/556331581172c567af13dc5787455d74.jpg" alt="" width="300" height="400">
            </div>
        </div>
    </div>
</div> -->

<div class="devider" style="margin-top: 25px;"></div>

<div class="container">
    <!-- <h3 class="text text-center">Other Products</h3> -->
    <div class="col-md-12 text-center">
        <a href="" target="_blank"><img src="../images/mhh.png" alt="" width="200" height="70"></a>
    </div>
    <div class="col-md-12" style="margin-top: 20px;">
        <div class="d-flex justify-content-center">
            <div class="col-md-2 text-center">
                <a href="" target="_blank" id="has_web_bs" class="app_link">
                    <img src="../images/02.BalloneStar.png" class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">Ballone Star</h5> -->
            </div>
            <div class="col-md-2 text-center">
                <a href="" target="_blank" class="app_link" id="has_web_dama">
                    <img src="../images/01.Dhammapuzar.png"  class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">Dama Pu Zar</h5> -->
            </div>
            <div class="col-md-2 text-center">
                <a href="" target="_blank" class="app_link" id="has_web_nayla">
                    <img src="../images/03.NayLa.png" class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">NayLa</h5> -->
            </div>
            <div class="col-md-2 text-center">
                <a href="" target="_blank" class="app_link" id="has_web_tatlan">
                    <img src="../images/Tatlan.png" class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">TatLan</h5> -->
            </div>
            <div class="col-md-2 text-center">
                <a href="" target="_blank" class="app_link" id="has_web_star">
                    <img src="../images/04.StarChannel.png"  class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">Starchannel</h5> -->
            </div>
            <div class="col-md-2 text-center">
                <a href="" target="_blank" class="app_link"  id="no_web_hh">
                    <img src="../images/05.HTUT-Dictionary.png" class="apps" alt="" width="100" height="100">
                </a>
                <!-- <h5 class="text text-center" style="padding-top: 10px;">Htut Health</h5> -->
            </div>
        </div>
    </div>
</div>

<div class="col-md-12" style="height: 80px;">
    <p class="copyright text-center" style="padding-top: 35px !important;">Copyright &copy; 2021 <a href="" class="theme-author">Htut Media</a></p>
</div>     

@section('script')
<script>

vid_about = document.getElementById("about_video");
//listen for CANPLAY event
  vid_about.addEventListener("canplay", function() {
//    console.log("oncanplay");
   setTimeout(function() {
//     console.log("play");
//Hit PLAY when video fully loaded
    vid_about.play();
   }, 500);
});
   // set up text to print, each item in array is new line
var aText = new Array(
"There are only 10 types of people in the world:", 
"Those who understand binary, and those who",
"This is a First Purpose Lorem ipsum <br> dolor sit, amet consectetur adipisicing elit.",
"Maxime magni eligendi enim itaque sint saepe laborum commodi expedita ipsum non minus recusandae blanditiis quibusdam, iusto veritatis corporis sed atque. Ut?",
"Maxime magni eligendi enim itaque sint saepe laborum commodi expedita ipsum non minus recusandae blanditiis quibusdam, iusto veritatis corporis sed atque. Ut?"

);
var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
 
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row

var isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
var isAndroid = /android/i.test(navigator.userAgent);  

if(isIOS){
    $('#has_web_bs').attr('href', 'https://apps.apple.com/us/app/ballonestar/id1223086758');
    $('#has_web_nayla').attr('href', 'http://naylaapp.com/check-customer');
    $('#has_web_dama').attr('href', 'https://apps.apple.com/us/app/htut-dhamma-puzar/id1577783413');
    $('#has_web_tatlan').attr('href', 'http://tatlanapp.com/check-customer');
    $('#has_web_star').attr('href', 'https://starchannel.tv/');
    $('#has_web_hh').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.dictionary');
} else if(isAndroid) {
    $('#has_web_bs').attr('href', 'https://play.google.com/store/apps/details?id=com.htut_media.ballonestar');
    $('#has_web_nayla').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.nayla');
    $('#has_web_dama').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.dhamma');
    $('#has_web_tatlan').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.education');
    $('#has_web_star').attr('href', 'https://play.google.com/store/apps/details?id=com.htut.starchannel.tv.myanmar.movie.music.celebrity.news.sport.baydin.mahar.mtv.game.love.history');
    $('#has_web_hh').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.dictionary');
} else {
    $('#has_web_bs').attr('href', 'http://www.ballonestar.com/check-customer');
    $('#has_web_nayla').attr('href', 'http://naylaapp.com/check-customer');
    $('#has_web_dama').attr('href', 'https://www.dhammapuzar.com/');
    $('#has_web_tatlan').attr('href', 'http://tatlanapp.com/check-customer');
    $('#has_web_star').attr('href', 'https://starchannel.tv/');
    $('#has_web_hh').attr('href', 'https://play.google.com/store/apps/details?id=com.htutmedia.dictionary');
}
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("typewrite");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 500);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}
typewriter();
</script>
@endsection
@endsection