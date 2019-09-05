jQuery(document).ready(function ($) {
    $('.comment-list li').each(function (i) {
        $(this).find('div.commentNumber').text('#' + (i + 1));
    });

    $('#commentform').on('click','#submit', function (e) {
        e.preventDefault();
        var comParent = $(this);
        $('.comment_result')
            .css('color','blue')
            .text('Сохранение комментария')
            .fadeIn(500,function () {
                var data = $('#commentform').serializeArray();
                $.ajax({
                    url:$('#commentform').attr('action'),
                    data:data,
                    headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type:'POST',
                    dataType:'JSON',
                    success:function(html) {

                    },
                    error:function () {

                    }
                });
            });
        ;
    });
})