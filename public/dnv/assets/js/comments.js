jQuery(document).ready(function($) {
    $('.comment-list li').each(function(i) {
        $(this).find('div.commentNumber').text('#' + (i + 1));
    });

    $('#commentForm').on('click','#submit',function(e) {
        e.preventDefault();
        var comParent = $(this);
        $('.comment_result').
        css('color','blue').
        text('Сохранение комментария').
        fadeIn(500,function() {
            var data = $('#commentForm').serializeArray();
            $.ajax({
                url:$('#commentForm').attr('action'),
                data:data,
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:'POST',
                datatype:'JSON',
                success: function(html) {
                    if(html.error) {
                        $('.comment_result')
                            .css('color','red')
                            .append('<br><strong>Ошибка:</strong>' + html.error
                                .join('<br>'))
                            .delay(2000)
                            .fadeOut(500);
                    }
                    else if (html.success) {
                        $('.comment_result')
                            .append('<br><strong>Сохранён!</strong>')
                            .delay(2000)
                            .fadeOut(500,function () {
                                if(html.data.parent_id > 0) {
                                    comParent.parents('div#respond').prev().after('<ul class="children">' + html.comment + '</ul>');
                                } else {
                                    if($.contains('#comments','ul.comment-list')) {
                                        $('li.comment-list').append(html.comment);
                                    } else {
                                        $('#respond').before('<li class="comment-list mb--45">' + html.comment + '</li>');
                                    }
                                }
                                $('#cancel-comment-reply-link').click();
                            });
                    }
                },
                error:function() {
                    $('.comment_result')
                        .css('color','darkred')
                        .append('<br><strong>Системная ошибка:</strong>')
                        .delay(2000).fadeOut(500, function() {
                            $('#cancel-comment-reply-link').click();
                    });
                }

            });
        });

    });

});