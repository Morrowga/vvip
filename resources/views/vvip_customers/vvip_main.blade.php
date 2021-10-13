<!-- @extends('layouts.app')

@section('content')

<div class="container justify-content-center d-flex">
    <img src="../images/logo.jpeg" alt="" width="350" height="350" class="main_logo">
    <svg version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
    <circle fill="rgb(217,181,81)" stroke="none" cx="6" cy="50" r="6">
        <animate
        attributeName="opacity"
        dur="1s"
        values="0;1;0"
        repeatCount="indefinite"
        begin="0.1"/>    
    </circle>
    <circle fill="rgb(217,181,81)" stroke="none" cx="26" cy="50" r="6">
        <animate
        attributeName="opacity"
        dur="1s"
        values="0;1;0"
        repeatCount="indefinite" 
        begin="0.2"/>       
    </circle>
    <circle fill="rgb(217,181,81)" stroke="none" cx="46" cy="50" r="6">
        <animate
        attributeName="opacity"
        dur="1s"
        values="0;1;0"
        repeatCount="indefinite" 
        begin="0.3"/>     
    </circle>
</svg>
</div>
@section('script')
<script>
    let setT = setTimeout(function(){ 
        let url = "http://vvip9.co"
        document.location.href=url;
        window.clearTimeout(setT);
    }, 3000);
</script>
@endsection
@endsection -->