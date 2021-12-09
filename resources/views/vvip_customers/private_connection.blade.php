@extends('layouts.custom')

@section('content')

<div class="col-md-12">
    <a href="/" class="private_link"><img src="../images/logo.jpeg" alt="" width="100" height="100">You are in the private zone<i class="fas fa-lock pl-2"></i></a>
</div>
<div class="col-md-12 text-center profileimg_div">
    <img src="{{ url('user_images/' . $user->profile_image) }}" class="userprofileimg mt-5" width="160" height="150" alt="">
	<input type="text" value="{{ $user->id }}" hidden>
</div>
<!-- <div class="col-md-12">
<h5 class="private_text text-center w-100">You are enter into the private zone. Let the owner decide allow you or not.</h5>
</div> -->
<div class="loading">
	<div class="loading-text">
		<span class="loading-text-words">L</span>
		<span class="loading-text-words">O</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">G</span>
	</div>
</div>
