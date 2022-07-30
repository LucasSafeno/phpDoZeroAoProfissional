$(function(){
    // $('.div').slideUp()
    //$('.div').slideDown()

    $('.botao').bind('click', function(){
        $('.div').slideToggle('slow')
    })

    $('.hellobar').bind('click', function(){
        $(this).slideUp('slow')
    })

})