<?php 
    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
    function viewRemoveTodoList(){
        echo "MENGHAPUS TODO". PHP_EOL;
        $pilihan = input("* Nomor (x untuk batalkan)");

        if($pilihan == "x"){
            echo "Batal menghapus Todolist". PHP_EOL;
        }else{
            $success = removeTodoList($pilihan);
            if($success){
                echo " Sukses Menghapus todo nomor $pilihan" . PHP_EOL;

            }else{
                echo "Batal mengahapus todo nomor $pilihan" . PHP_EOL;
            }
        }
    }
?>