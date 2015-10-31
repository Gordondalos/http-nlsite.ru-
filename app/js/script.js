$(function() {

    $('#popupbutton').fancybox({
        'padding': 0,
        'overlayOpacity': 0.87,
        'overlayColor': '#fff',
        'transitionIn': 'none',
        'transitionOut': 'none',
        'titlePosition': 'inside',
        'centerOnScroll': true,
        'maxWidth': 672,
        'minHeight': 278
    });

    $('#client_phone').mask('+7 (000) 000-00-00');

    $("#form-feedback").submit(function(event) {

        if ($('#client_name').val() == "")
            {
                $('#bthrow_error_name').fadeIn(1000).html('Представьтесь, пожалуйста.');
            }
        else if ($('#client_phone').val() == "")
            {
                $('#bthrow_error_name').empty();
                $('#bthrow_error_phone').fadeIn(1000).html('Как с Вами связаться?');
            }
        else
            {
                var postForm = {
                    'client_name'  : $('#client_name').val(),
                    'client_phone'  : $('#client_phone').val()
                };

                $.ajax({
                    type        : 'POST',
                    url         : 'feedback-form/feedback.php',
                    data        : postForm,
                    dataType    : 'json',
                    success     : function(data)
                        {
                            if (!data.success)
                                {
                                    if (data.errors.name)
                                        {
                                            $('.throw_error').fadeIn(1000).html(data.errors.name);
                                        }
                                }
                            else
                                {
                                    $('#form-feedback').fadeIn(1000).html('<p style="margin-left: 25px; font-size: 1.3em; font-weight: bold;">' + data.posted + '</p>');
                                }
                        }
                });
            }

        event.preventDefault();

    });

});
