<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVIP9</title>
    <link rel="stylesheet" href="../css/custom.css">

    <style>
    .mail_name{
      text-transform: capitalize !important;
      color: rgb(217,181,81) !important;
    }
    .text{
        letter-spacing: 3px !important;
        font-weight: bold !important;
        font-size: 19px !important;
        font-family: 'Kudryashev Display' !important;
        text-align: center !important;
        color: rgb(217,181,81) !important;
    }

    .text_head {
        letter-spacing: 3px !important;
        font-weight: bold !important;
        font-size: 19px !important;
        font-family: 'Kudryashev Display' !important;
        text-align: left !important;
        color: rgb(217,181,81) !important;
        padding-top: 20px !important;
        padding-left: 20px !important;

    }

    #body{
        background-color: rgb(0,0,0);
        width: 100% !important;
        height: 600px !important;
        text-align: center !important;
    }

    .img_logo{
        width: 300px !important;
        height: 300px !important;
    }

    .btn-verify{
        border: 2px solid rgb(217,181,81) !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        background-color: rgb(0,0,0) !important;
        text-decoration: none !important;
        font-size: 20px !important;
        letter-spacing: 3px !important;
        font-weight: bold !important;
        font-family: 'Kudryashev Display' !important;
        color: rgb(217,181,81) !important;
        padding: 10px;
    }
/* 
    .btn-verify:hover{
        background-color: rgb(217,181,81) !important;
        transition-duration: 1s !important;
        animation-duration: 1s !important;
        color: #fff !important;
    } */
    </style>
</head>
<body id="body"> 
    <div class="container">
        <p class="text_head">Dear <strong class="mail_name">{{ $email_data['name'] }} ,</strong></p>
        <img src="http://vvip9.co/images/logo.jpeg" alt="" class="img_logo">
        <p class="text">သင့်၏ အကောင့်ကိုအတည်ပြုရန် အောက်ပါ လင့်ကို နှိပ်ပါ။</p>
        <a class="btn-verify" href="http://vvip9.co/verify?code={{ $email_data['verification_code'] }}">Click Here!</a>
    </div>
</body>
</html>

