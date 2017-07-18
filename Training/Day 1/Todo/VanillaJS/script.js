var Add = function() {
  var newTask = document.getElementById('newTask')
  var tasksList = document.getElementById('tasksList')

  // tasksList.innerHTML += '<li>' + newTask.value + '</li>'
  tasksList.innerHTML += `<li>${newTask.value}</li>`
}

// Define a function in JS: function Add() { code here... }
// Define a function in JS: const Add = () => { code here... }
