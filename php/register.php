<?php
    // データベース接続
    require_once("dbConnect.php");
    session_start();
    unset($_SESSION["id"]);

    if(ISSET($_POST)){
        $newUserData = $_POST;
        $newFamily = htmlspecialchars($newUserData["lastName"]);
        $newMother = htmlspecialchars($newUserData["motherName"]);
        $newFather = htmlspecialchars($newUserData["fatherName"]);
        $newChild = htmlspecialchars($newUserData["childName"]);

        $db->query("INSERT INTO `userData`(`lastName`,`motherName`, `fatherName`, `childName`, `familyPass`) VALUES ('{$newFamily}','{$newMother}','{$newFather}','{$newChild}','');");

        // 登録したユーザーデータのIDを赤署にセット
        $result = $db->query("SELECT * FROM userData WHERE lastName='{$newFamily}' AND fatherName='{$newFather}' AND motherName='{$newMother}'");
        if($result){
            if($result -> rowCount()){
            foreach($result as $row){
                $_SESSION["id"] = $row["id"];
            }
        }
    }
}

header("Location: ../familyPass.php");

print $_SESSION["id"];

?>