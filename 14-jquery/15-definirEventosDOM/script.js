$(function(){
   /* $('button').click(function(){

        $(this).toggleClass('fundovermelho')
        if($(this).hasClass('fundovermelho')){
            $(this).removeClass('fundovermelho')
        }else{
            $(this).addClass('fundovermelho')
        }
    })*/


    $('button').mouseover(function(){
        $(this).addClass('fundovermelho')
    })

    $('button').mouseout(function(){
        $(this).removeClass('fundovermelho')
    })


})