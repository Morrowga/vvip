Hello {{ $email_data['name'] }}


<br>
Welcome to My website

<br>

Please click the below link to verify your email and acctivate your account your account !
<br> <br>

<a href="http://localhost:8000/verify?code={{ $email_data['verification_code'] }}">Click Here!</a>

<a href="">Click Here</a>