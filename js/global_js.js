$(document).ready(function(){
    
    var highestBox = 0;
        $('.caption').each(function(){  
                if($(this).height() > highestBox){  
                highestBox = $(this).height();  
        }
    });    
    $('.caption').height(highestBox);

    $('.ul-toggle').hide();
    $('#button').on('click', function(){
        $('.ul-toggle').slideToggle();
    });

//    $(".navj > li").click(function(){
//        var str = $(this).index();
//        $(".navj > li").removeClass("selected");
//       $(this).addClass( "selected" );
//    });
});