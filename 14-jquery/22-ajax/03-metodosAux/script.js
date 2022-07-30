$(function(){
    $('button').bind('click',function(){

      //  $('.div').load("teste.html")
      
      /*$.get("teste.html", function(t){
        $('.div').html(t)
      }) // get */
      $.post("teste.html", function(t){
        $('.div').html(t)
      })



    }) // click
})//ready