<?php
    define("title","recipe");
    require_once "header.php";
?>
<link rel="stylesheet" href="css/recipe.css">
<link rel="stylesheet" href="css/ress.css">
<body>
    <main class="recipeMain">
        <div class="recipeMain__head">
            <div class="recipeMain__head__img"></div>
            <div class="recipeMain__head__content">
                <h1 class="recipeMain__head__content__title">チーズたっぷりカレー</h1>
                <ul class="recipeMain__head__content__about">
                    <li class="recipeMain__head__content__about__txt">
                        <p>むずかしさ</p>
                    </li>
                    <li class="recipeMain__head__content__about__txt">
                        <p>むずかしさ</p>
                    </li>
                    <li class="recipeMain__head__content__about__button">
                        <p>ブックマーク</p>
                        <button>登録</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="recipeMain__main">
            <div class="recipeMain__main__about">
                <h2>材料<span>(3人)</span></h2>
                <ul class="recipeMain__main__about__list">
                    <li class="recipeMain__main__about__list__txt">
                        <p>豚バラブロック</p>
                        <p>190g</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>にんじん</p>
                        <p>1本</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>たまねぎ</p>
                        <p>1本</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>じゃがいも</p>
                        <p>1個</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>カレールー</p>
                        <p>115g</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>水</p>
                        <p>830ml</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>チーズ</p>
                        <p>500g</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>サラダ油</p>
                        <p>適量</p>
                    </li>
                    <li class="recipeMain__main__about__list__txt">
                        <p>チーズ</p>
                        <p>500g</p>
                    </li>
                </ul>
            </div>
            <div class="recipeMain__main__rank">
                <h2 class="recipeMain__main__rank__title">人気ランキング</h2>
                <a href="#" class="recipeMain__main__rank__box">
                    <div class="recipeMain__main__rank__box__txt">
                        <h3>1位</h3>
                        <p>チーズたっぷりカレー</p>    
                    </div>
                </a>
                <a href="#" class="recipeMain__main__rank__box">
                    <div class="recipeMain__main__rank__box__txt">
                        <h3>2位</h3>
                        <p>チーズたっぷりカレー</p>
                    </div>
                </a>
                <a href="#" class="recipeMain__main__rank__box">
                    <div class="recipeMain__main__rank__box__txt">
                        <h3>3位</h3>
                        <p>チーズたっぷりカレー</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="recipeMain__video">
            <h2 class="recipeMain__video__title">動画</h2>
            <div class="recipeMain__video__source"></div>
        </div>
        <a class="recipeMain__make" href="ingredients.php">つくってみる</a>
    </main>
    <?php
    require_once "footer.php";
    ?>
</body>
</html>