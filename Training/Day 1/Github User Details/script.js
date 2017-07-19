var search=function(){

  var searching=$('#searching').val()
  $.get('https://api.github.com/users/'+searching,function(response){

    $('#Login').text(response.login)
    $('#Type').text(response.type)
    $('#name').text(response.name)
    $('#location').text(response.location)
  })

}
