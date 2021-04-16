<?php
    define("title","ingredients");
    require_once "header.php";
?>
<link rel="stylesheet" href="css/recipe.css">
<link rel="stylesheet" href="css/ress.css">
<link rel="stylesheet" href="css/ingredients.css">

<body>
    <main class="ingMain">
        <h2 class="ingMain__title">ざいりょうあつめ</h2>
        <div class="ingMain__box">
            <ul class="ingMain__box__list">
                <li class="ingMain__box__list__content">
                    <p>豚バラブロック</p>
                    <p>190g</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>にんじん</p>
                    <p>1本</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>たまねぎ</p>
                    <p>1本</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>じゃがいも</p>
                    <p>1個</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>カレールー</p>
                    <p>115g</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>水</p>
                    <p>830ml</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>チーズ</p>
                    <p>500g</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>サラダ油</p>
                    <p>適量</p>
                </li>
            </ul>
            <form class="ingMain__box__form" action="">
                <div class="ingMain__box__form__list">
                    <label class="ingMain__box__form__list__radio">
                        <input type="checkbox" name="ingredients" value="1">
                    </label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>
                    <label class="ingMain__box__form__list__radio"><input type="checkbox" name="ingredients" value=""><div></div></label>

                </div>
            </form>
        </div>
        <p class="ingMain__txt">
        おうちの冷蔵庫を確認してない物は<br>
        買い物してあつめよう！！
        </p>
        <a class="ingMain__next" href="section.php">つぎへ</a>
    </main>
</body>
<?php
require_once "footer.php";
?>
</html>