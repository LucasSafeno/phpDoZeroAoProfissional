$(function() {
    // $('#teste').attr('id', 'novoid')
    // $('#teste').find('img').width(200) - outra formar de mudar propriedade, diferença é que coloca em css

    $('input').val("Text") //- adicionar valores no input
    //$('input').attr('value', 'Text') // também funciona, menos indicada

    $('input').after("<div>texto qualquer APOS </div>"); // adicionar apos o elemento
    $('input').before("<div>texto qualquer ANTES </div>");

    $('ul').append("<li> Item 5 </li>") // adicionar conteudo ao conteudo que já existe
    $('ul').prepend('<li>Item 0</li>') // adicionar conteudo antes do conteudo


});