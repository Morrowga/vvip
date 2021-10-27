@extends('layouts.app')

@section('content')

<input type="text" id="request" value="{{ $data_module->request_name }}" hidden>
<input type="text" id="user_id" value="{{ $data_module->user_id }}" hidden>
<h5 id="view_value" style="text-align:center; color: #fff; font-size: 50px; top: 50%; position:absolute; left: 23%;"></h5>

@section('script')
<script>
    var request_url = '{{ url('api/get_datas') }}';
    var userid = $('#user_id').val();
    var request_name = $('#request').val();
    $.ajax({
        url: request_url,
        data: {
            user_id:userid,
            request_name: request_name
        },  
        type: 'POST',
        success: function(response){
            data_view = response.deep_link;
            $.each(data_view, function(i,value){ 
                if(value['active'] == 1){
                    $('#view_value').text(value['url']);
                }
        });
        }
    });

</script>
@endsection
@endsection