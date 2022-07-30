<?php
/*
Template Name: F-Cafe
*/
?>

<?php get_header(); ?>

<section id="cafe" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">F Cafe</h1>
                    <h2 class="productspage-sub--title">オンライン注文もできるシックなカフェ</h2>
                </div>
                <p class="productspage-sub--text">オンライン注文を簡潔に行うことができるおしゃれなcafeサイトを作りました。</p>
                <div class="productspage-btn--box">
                    <a href="https://f-cafe.fujichi.com/" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / PHP / CSS / jQuery</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>41日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container cafe-container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-mug-saucer"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fa-solid fa-mug-saucer"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/f-cafe.png" alt="サイト紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">サイト</h4>
                    <p class="productspage-point--text">Cafeサイトを利用する方は、まずお店の雰囲気やゆったりできるかを確認する方が多いように思えます。最初に内観・外観を紹介することで集客に繋がる可能性が高い構造にし、かつCafeらしいシックな印象のサイトを作りました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_menu.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">メニュー部分</h4>
                    <p class="productspage-point--text">料理も画像を合わせてわかりやすくしました。スクロールをつけることでどういったメニューがあるのかすぐわかるよう実装しました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_order.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">オンライン注文</h4>
                    <p class="productspage-point--text">自分でサイトからオンライン注文しようとした際、必ず画面遷移して一つずつ注文するのが窮屈だったので、一画面ですべての商品を注文できるよう実装してみました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_stripe.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">オンライン注文</h4>
                    <p class="productspage-point--text">自分でサイトからオンライン注文しようとした際、必ず画面遷移して一つずつ注文するのが割と窮屈でしたので、一画面ですべての商品を注文できるよう実装しました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_loginpage.png" alt="ログイン画面紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">スタッフログイン画面</h4>
                    <p class="productspage-point--text">スタッフ管理画面も作りました。バリデーションもかかります。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_orderconfirm.png" alt="注文確認画面紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">スタッフ注文確認画面</h4>
                    <p class="productspage-point--text">ログイン後実際にオンライン注文を確認できます。完了ボタンを押すと受け渡し済みページに注文が移ります。注文削除や対応スタッフも記録しておくことができます。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list"><img class="img" src="<?php echo get_template_directory_uri(); ?>/img/products/cafe/f-cafe_ordercomplete.png" alt="注文完了確認画面紹介画像"></li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">受け渡し済み完了画面</h4>
                    <p class="productspage-point--text">受け渡し済み画面も作成し、どんな注文があったのか後ほど確認できるようにしました。</p>
                </div>
            </div>
        </div>

        <div class="productspage-end">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-mug-saucer"></i>
                <h3 class="productspage-point--title">作ってみて</h3>
                <i class="fa-solid fa-mug-saucer"></i>
            </div>
            <ul>
                <li>注文確認ページを作成するのに注文番号を拾って一覧表示するのが慣れていないせいか思いのほか大変でした。</li>
                <li>受け渡し済み注文ページを加工し、１か月の売り上げや人気商品など分析できる画面を作成してみたいなと思いました。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>