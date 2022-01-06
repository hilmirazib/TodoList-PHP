<?php 
require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
addTodoList("Hilmi");
addTodoList("adasda");
addTodoList("Hilmadasi");
addTodoList("Hilmiadadaa");
addTodoList("Hilmaaasadasdasi");
addTodoList("Hilmidadasd");
addTodoList("Hidasdlmfasasi");

showTodoList();
viewRemoveTodoList();
showTodoList();
?>