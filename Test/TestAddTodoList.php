<?php 
    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";

    addTodoList("Belajar Vue Js");
    addTodoList("Belajar React Js");
    addTodoList("Belajar Git");

    var_dump($todoList);
?>