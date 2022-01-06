<?php 
    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";
    require_once "../BusinessLogic/RemoveTodoList.php";

    addTodoList("Hilmi");
    addTodoList("Razib");
    addTodoList("Yusuf");
    addTodoList("Mantap");
    addTodoList("Israita");
    addTodoList("Aku");
    addTodoList("Pusing");
    addTodoList("Goblok ");

    var_dump($todoList);
    removeTodoList(7);
    removeTodoList(7);
    removeTodoList(10);
    var_dump($todoList);
    
?>