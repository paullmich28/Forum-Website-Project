$(document).ready(function(){
    $('.like-btn').on('click', function(){
        post_id = $(this).data('id');
        $clicked_btn = $(this);

        if($clicked_btn.hasClass('bx-like')){
            action = 'like';
        }else if($clicked_btn.hasClass('bxs-like')){
            action = 'unlike';
        }

        $.ajax({
            url: 'index.php',
            type: 'post',
            data:{
                'action': action,
                'post_id': post_id
            },
            success: function(data){
                res = JSON.parse(JSON.stringify(data));
                if(action == 'like'){
                    $clicked_btn.removeClass('bx-like');
                    $clicked_btn.addClass('bxs-like');
                }else if(action == 'unlike'){
                    $clicked_btn.addClass('bx-like');
                    $clicked_btn.removeClass('bxs-like');
                }
            }
        })
    })
})