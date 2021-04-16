window.onload = ()=>{

    let nextBtn = document.getElementById("nextBtn");

    nextBtn.onclick = ()=>{
        let newPass = document.getElementById("password").value;
        let conPass = document.getElementById("conPass").value;


        console.log(newPass);
        console.log(conPass);
        if(newPass !== ""){
            console.log("true");
        }
        else{
            alert("未入力です");
            return false;
        }

        if(newPass == conPass){
            console.log("true");
        }
        else{
            alert("確認パスワードが一致しません。");
            return false;
        }
    }

}