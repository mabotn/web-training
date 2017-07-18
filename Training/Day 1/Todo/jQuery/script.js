$(document).ready(function() {
  alert($('#p').text())
})

var Add = function() {
  var newTask = $('#newTask')
  var tasksList = $('#tasksList')

  tasksList.append(`<li>${newTask.val()}</li>`)

  newTask.val('')
}
