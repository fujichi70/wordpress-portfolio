<?php
/*
Template Name: F-Top
*/
?>

<?php get_header(); ?>

<section id="top" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">Portfolio</h1>
                    <h2 class="productspage-sub--title">これまで・ここからをつづるサイト</h2>
                </div>
                <p class="productspage-sub--text">どんな人物かすぐわかるようなサイトをつくりました。</p>
                <div class="productspage-btn--box">
                    <a href="#" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / Wordpress / JavaScript / PHP / CSS</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>15日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/top/f-top_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/top/f-top_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container top-container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-pencil"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/top/f-top.png" alt="サイト紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">サイト</h4>
                    <p class="productspage-point--text">わかりやすくシンプルに一目でわかるように</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/top/f-top_skill.png" alt="スキルページ紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">スキル部分</h4>
                    <p class="productspage-point--text">どんなことができるのかをすぐ見てわかるようにつくりました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/top/f-top_contact.png" alt="お問い合わせ部分紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">お問い合わせ</h4>
                    <p class="productspage-point--text">どんなことでも簡単にすぐお問い合わせができます。</p>
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
                <li>わかりやすくかつデザイン性がなくならないようにバランスを考えるのが難しかったです。</li>
                <li>これからもいろんなことを学んでサイトを製作し続けていきたいです。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>