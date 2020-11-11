$(document).ready(function(){
    $('.botoninicio').click(function(){
        if($('#menu').css("display") === "none")
        {
            $('#menu').css("display","block");
            $('#menu').css("transform","scale(1)");
           $('.nav-background').css('display','block');
           $('.botoninicio').attr('src','resource/x-regular-36.png');
           $('.botoninicio').css({
               'position':'fixed',
               'right':'0em',
                'top':'1em'
            });
          
        }
        else{
            $('#menu').css("display","none");
            $('.nav-background').css('display','none');
            $('.botoninicio').attr('src','resource/menu-regular-24.png');
            $('.botoninicio').css({
                'position': 'relative',
                'top':'0em'
            })
        }
    });
    $('#dropdownId').click(function(){
        if($('.dropdown-menu').css('display') === 'none')
        {
            $('.dropdown-menu').css('display','block');
            $('.dropdown-menu').css({
                'width':'90%',
                'height':'23em'});
                $('#dropdownId').css('color','#03fcdb');
                $('a[href="#1"]').css({'top':'21em',
                                        'position':'relative',
                                        'transition-duration':'0.2s'});
                $('a[href="#2"]').css(
                    {'top':'21em',
                'position':'relative',
                'transition-duration':'0.2s'});

        }else{
            $('.dropdown-menu').css({
                'height':'0em',
                'display':'none'
                            });
            $('#dropdownId').css('color','#2a2a2a');
            $('a[href="#1"]').css({'top':'0em',
            'transition-duration':'0.2s'
            });
            $('a[href="#2"]').css(
            {'top':'0em',
            'transition-duration':'0.2s'
        });
        }
    });
});