<?php
/*
Template Name: F-Board
*/
?>

<?php get_header(); ?>

<section id="board" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">F Free Board</h1>
                    <h2 class="productspage-sub--title">日々の悩みを相談する掲示板サイト</h2>
                </div>
                <p class="productspage-sub--text">複雑化したこのご時世で女性もより悩みがちに。<br>そんな日々の生活でのふとした悩みを気軽に投稿できるサイトを作りました。</p>
                <div class="productspage-btn--box">
                    <a href="https://f-board.fujichi.com/" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / PHP / CSS</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>25日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container board-container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-pencil"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_category.png" alt="サイトカテゴリー紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">カテゴリー</h4>
                    <p class="productspage-point--text">女性が悩みそうな項目で分けてみました。ログインしなくても閲覧は可能。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_registration.png" alt="会員登録紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">会員登録画面</h4>
                    <p class="productspage-point--text">会員登録すると投稿が可能になります。情報を入力するとメールが届き、メールに記載されているURLにアクセスすると登録完了です。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_loginout.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">ログイン・ログアウト</h4>
                    <p class="productspage-point--text">ログインとログアウト機能の実装です。プロフィール画面も作成しました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/board/f-board_post.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">投稿</h4>
                    <p class="productspage-point--text">ログインすると投稿できるようになります。投稿されたかわかりやすいように投稿完了の画像も実装しました。</p>
                </div>
            </div>
        </div>

        <div class="productspage-end">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-pencil"></i>
                <h3 class="productspage-point--title">作ってみて</h3>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <ul>
                <li>会員登録の際、プロフィール画像をアップロードして表示するのに上手く動作せず時間がかかってしまいました。</li>
                <li>プロフィールをもっと充実させたり、ユーザーさんがカテゴリーを任意で増やすことができればもっと自由度が上がると思いました。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>