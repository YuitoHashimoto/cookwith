<?php 
    define("title","パスワード登録");
    require_once "registerHead.php"; 
?>
</body>
    <main class="mainPass">
        <form class="mainPass__form" action="php/regiPass.php" method="POST">
        
            <p class="mainPass__form__subtitle">パスワード</p>
            <input type="password" id="password" name="password" placeholder="パスワード">
            <p class="mainPass__form__subtitle confirm">確認パスワード</p>
            <input type="password" id="conPass" name="conPass" placeholder="確認パスワード">
            <p class="mainPass__form__about">
            ＊ご家族の大切な思い出を<br>
            保存する為に必要なパスワードです。
            </p>
            <input type="submit" class="nextButton" id="nextBtn" value="次へ">
        </form>
    </main>
    <script src="js/passCon.js"></script>
</html>