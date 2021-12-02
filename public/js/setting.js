$(function() {
    var get_appearance = 'api/get_datas';
    var userid = $('#userid').val();
    $('#appearance').on('submit', function(e) {
        e.preventDefault();
        var appearance_url = 'api/create_appearance';
        var token = $('#token').val();
        let formData = new FormData(this);

        $.ajax({
            url: appearance_url,
            method: 'POST',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-Token': token
            },
            data: formData,
            success: function(response) {
                console.log(response.message);
                $('#save_setting_text').text('Appearance Saved');
                $('#save_setting').modal('show');
            }
        });
    });

    let bg_colorInput = document.getElementById('background_color');
    bg_colorInput.addEventListener('input', () => {
        $('#card_appear').attr('style', 'background-color:' + bg_colorInput.value + '!important;');
    });

    let text_colorInput = document.getElementById('text_color');
    text_colorInput.addEventListener('input', () => {
        $('.appear').attr('style', 'color:' + text_colorInput.value + '!important');
    });

    let text_hl_colorInput = document.getElementById('text_highlight_color');
    text_hl_colorInput.addEventListener('input', () => {
        $('.appear').attr('style', 'text-shadow: 0px 3px 10px' +
            text_hl_colorInput.value + '!important;');
    });

    $.ajax({
        url: get_appearance,
        method: 'POST',
        data: {
            user_id: userid,
            request_name: "get_contacts"
        },
        success: function(response) {
            $('#background_color').val(response.data['background_color']);
            $('#text_color').val(response.data['text_color']);
            $('#text_highlight_color').val(response.data['text_highlight_color']);
            $('#card_appear').attr('style', 'background-color:' + response.data[
                'background_color'] + '!important;');
            $('.appear').attr('style', 'color:' + response.data['text_color'] +
                '!important; text-shadow: 0px 3px 10px' + response.data[
                'text_highlight_color'] + '!important;');
        }
    });
});