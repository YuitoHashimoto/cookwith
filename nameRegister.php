<?php 
    define("title","家族登録");
    require_once "registerHead.php"; 
?>
    <main class="main">
        <form class="main__home" action="php/register.php" method="POST">
            <ul class="main__home__list">
                <li class="main__home__firstList">
                    <p><input type="text" id="lastName" name="lastName"　placeholder="例：山田"></p>
                </li>
                <li class="main__home__list">
                    <p>お母さん</p>
                    <input type="text" id="motherName" name="motherName" placeholder="例：一花">
                </li>
                <li class="main__home__list" class="main__home__list">
                    <p>お父さん</p>
                    <input type="text" id="fatherName" name="fatherName" placeholder="例：二郎">
                </li>
                <li class="main__home__list">
                    <p>お子さん</p>
                    <input type="text" id="childName" name="childName" placeholder="例：三郎">
                </li>
            </ul>
            <input type="submit" class="nextButton" value="次へ">
            <!-- <button　type="submit" class="nextButton">次へ</button　type="button"> -->
        </form>
    </main>
</body>
</html>