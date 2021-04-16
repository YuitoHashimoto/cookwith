<?php
    require_once("dbConnect.php");
    session_start();

    if(ISSET($_POST)){
        // データセット
        $newPass = $_POST["password"];
        $familyPass = hash("md5",$newPass);
        $id = $_SESSION["id"];
        

        $query = $db->query("UPDATE userData SET familyPass='{$familyPass}' WHERE id='{$id}';");
        print $id;
    }
    header("Location: ../regiComp.php");
    ?>