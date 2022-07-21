$(function(){

    $('h1').addClass('fundovermelho') // adicionar classe
   // $('h1').removeClass('fundovermelho') // remove classe

    /* Verifica se tem classe
    if($('h1').hasClass()){
        alert("Tem sim")
    }else{
        alert("Não tem")
    } */

    // Aplicar css
    $('h1').css('font-size', '25px')
    $('h1').css('color', 'blue')
    

    $('button').css('border','1px solid #000').css('background-color', 'red').css('color', 'white').css('margin-top', '10px')

});