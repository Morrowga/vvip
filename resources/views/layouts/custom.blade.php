<!DOCTYPE html>
<html lang="app()->getLocale()">
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>VVIP 9</title>
        <link rel="shortcut icon" type="image/jpg" href="../images/Favicon-Size.png"/>
		<meta name="description" content="VVIP9">
		<meta name="keywords" content="VVIP9, VVIP, Vvip9, vvip9.co, smartcard, nfc, deeplink" />
		<meta name="author" content="htut.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="../css/custom.css">
<body>
    <div class="main">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('9bf8b95ce0d13d7afae2', {
            cluster: 'ap1',
            encrypted: true
        });

        var verify_channel = pusher.subscribe('verify');
        verify_channel.bind('verified-verify', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</body>
</html>