<?php
/*
Template Name: F-fitness
*/
?>

<?php get_header(); ?>

<section id="blog" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">ちょこっと雨やどり</h1>
                    <h2 class="productspage-sub--title">最初の軌跡のサイト</h2>
                </div>
                <p class="productspage-sub--text">日々の出来事をつづるサイトを自分で作ってみようと思い立った、きっかけのサイト</p>
                <div class="productspage-btn--box">
                    <a href="#" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / Wordpress / CSS / JavaScript / PHP</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>19日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/blog/f-blog_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/blog/f-blog_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container blog-container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-pencil"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/blog/f-blog_top.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">サイト</h4>
                    <p class="productspage-point--text">水が流れている音や水が落ちたときの波紋を見ているのが昔から好きでどうしてもトップ画面で再現したかったので、プラグインにて構築しました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/blog/f-blog_events.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">クリックイベント</h4>
                    <p class="productspage-point--text">シンプルに作成したなかでちょっとしたクリックイベントを取り入れたく実装しました。</p>
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
                <li>日々の出来事を気ままにつづろうとwordpressにてサイトを開設したのですが、自分が思ったように実装できず、既存のテーマでは上手く実現しませんでした。<br>自分で一から作ってみようと思い立ちプログラミングの勉強をし始めました。</li>
                <li>シンプルな構造にして自分も相手もわかりやすいサイトにしようと実装しました。これからプログラマーとして活動しようと考えているのでその軌跡をつづっていこうと思っております。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>