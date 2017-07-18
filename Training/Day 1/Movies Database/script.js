var Search = function() {
  var movieName = $('#movieName').val()
  $.get(
    'http://www.omdbapi.com/?apikey=5e4c08a6&t=' + movieName,
    function(response) {
      $('#movieTitle').text(response.Title)
      $('#movieRelease').text(response.Released)
      $('#movieCategory').text(response.Genre)
      $('#movieActors').text(response.Actors)
    }
  )
}
