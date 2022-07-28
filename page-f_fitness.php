<?php
/*
Template Name: F-Fitness
*/
?>

<?php get_header(); ?>

<section id="fitness" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">F Fitness</h1>
                    <h2 class="productspage-sub--title">身近に感じるパーソナルトレーニングジム</h2>
                </div>
                <p class="productspage-sub--text">パーソナルトレーニングジムは1度行くのでもハードルが高い。<br>少しでも身近に感じられるパーソナルトレーニングジムwebサイトを作りました。</p>
                <div class="productspage-btn--box">
                    <a href="https://f-fitness.fujichi.com/" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / HTML / CSS / JavaScript</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>28日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/fitness/f-fitness_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/fitness/f-fitness_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fas fa-dumbbell"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fas fa-dumbbell"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/fitness/f-fitness_carousel.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">カルーセル</h4>
                    <p class="productspage-point--text">文字のアニメーションや説明文をカルーセルと同時に動かしたく、プラグイン等は使わず自作。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/fitness/f-fitness_greeting.png" alt="サイト挨拶部分紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">挨拶部分</h4>
                    <p class="productspage-point--text">他サイトではインストラクターさんがどんな方なのかわからないことが多かったため、少しでも身近に感じられるように挨拶部分を作りました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/fitness/f-fitness_intersection.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">フェードイン</h4>
                    <p class="productspage-point--text">jQueryを使うと簡単でしたが、勉強も兼ねてJavaScriptでスクロールと同時にふわっと表示させるアニメーションを実現。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="productspage-end">
            <div class="productspage-point--titles">
                <i class="fas fa-dumbbell"></i>
                <h3 class="productspage-point--title">作ってみて</h3>
                <i class="fas fa-dumbbell"></i>
            </div>
            <ul>
                <li>初めて作った架空サイトでしたので、長期間の制作となってしまいました。</li>
                <li>PHPで実際にフォームを作り体験者の管理や本サイトで実際通われる方の予約管理システムも構築したいなと思いました。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>