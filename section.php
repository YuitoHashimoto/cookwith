<?php
    define("title","section");
    require_once "header.php";
?>
<link rel="stylesheet" href="css/recipe.css">
<link rel="stylesheet" href="css/ress.css">
<link rel="stylesheet" href="css/ingredients.css">

<body>
    <main class="ingMain">
        <h2 class="ingMain__title">作成工程</h2>
        <div class="ingMain__box">
            <ul class="ingMain__box__list">
                <li class="ingMain__box__list__content">
                    <p>準備.野菜の皮をむいておきます。</p>
                    <p>お子さん</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>1.肉と野菜を一口大にきります。</p>
                    <p>親御さん</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>2.中火で肉を炒めます。</p>
                    <p>お子さん</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>3. 野菜を加え、炒めます。</p>
                    <p>お子さん</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>4.水を加えて15〜20分煮込みます</p>
                    <p>時間置く</p>
                </li>
                <li class="ingMain__box__list__content">
                    <p>5.カレールーを煮込んで完成です。</p>
                    <p>お子さん</p>
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
                </div>
            </form>
        </div>
        <p class="ingMain__txt">
        お子さんからはめをはなさずに<br>
        怪我には気をつけて楽しく料理しよう！！
        </p>
        <a class="ingMain__next" href="picture.php">完成！</a>
    </main>
</body>
<?php
require_once "footer.php";
?>
</html>