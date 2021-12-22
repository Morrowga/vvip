@extends('layouts.user_display')

@section('content')

@if($data_module !== null)
<input type="text" id="request" value="{{ $data_module->request_name }}" hidden>
<input type="text" id="user_id" value="{{ $data_module->user_id }}" hidden>
<input type="text" id="self_request" value="{{ $data_module->self_request_name }}" hidden>
@endif

<div class="d-flex justify-content-center">
    <img src="../images/logo.jpeg" alt="" width="250" height="250" id="image_hide">
</div>

<a href="" id="phone_call" hidden></a>
<a href="" id="send_sms" hidden></a>
<a href="" id="send_email" hidden></a>
<div class="col-md-12 text-center" id="dpluse">
    <a href="" id="deeplink" class="text btn btn-dark">Click the Link</a>
    <a href="" id="email_click" class="text btn btn-dark">Click the Link</a>
</div>
<div class="container" id="contact_display">
    <div class="col-md-12">
        <div class="card" id="card_background">
            <div class="card-body">
                <div class="data_view">
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="link_tree_display">
    <div class="card" id="link_tree_card">
        <div class="card-body">
            <div class="col-md-12 d-flex justify-content-center">
                <img src="" alt="" width="300" height="300" id="link_tree_img" style="border-radius: 50%;">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <div class="col-md-6 col-md-offset-3" id="display_tree">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="cns_backbg">
    <div class="d-flex justify-content-center row">
        <div class="col-md-6">
            <div class="card" id="cns_cardbg">
                <div class="card-body">
                    <div class="cns_contact">
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" id="cns_treecardbg">
                <div class="card-body text-center">
                    <img src="" class="text-center" alt="" width="200" height="200" id="cnstree_img" style="border-radius: 50%;">

                    <div class="cns_tree">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


