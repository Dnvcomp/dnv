jQuery(document).ready(function($) {
    $('.comment-list li').each(function(i) {
        $(this).find('div.commentNumber').text('#' + (i + 1));
    });

    $('#commentform').on('click','#submit',function(e) {
        e.preventDefault();
        var comParent = $(this);
        $('.comment_result').
        css('color','blue').
        text('Сохранение комментария').
        fadeIn(500,function() {
            var data = $('#commentform').serializeArray();
            $.ajax({
                url:$('#commentform').attr('action'),
                data:data,
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:'POST',
                datatype:'JSON',
                success: function(html) {
                    if(html.error) {

                    }
                    else if (html.success) {
                        $('.comment_result')
                            .append('<br><strong>Сохранён!</strong>')
                            .delay(2000)
                            .fadeOut(500,function () {
                                if(html.data.parent_id > 0) {
                                    comParent.parents('div#respond').prev().after('<ul class="children">' +html.comment + '</ul>');
                                }
                                $('#cancel-comment-reply-link').click();
                            });
                    }
                },
                error:function() {

                }

            });
        });

    });

});