<?php
/*
Template Name: F-fitness
*/
?>

<?php get_header(); ?>

<section id="hotel" class="productspage">

    <div class="container">
        <div class="productspage-main--box">
            <div class="productspage-main--item">
                <div class="productspage-title--box">
                    <h1 class="productspage-main--title">F Hotel</h1>
                    <h2 class="productspage-sub--title">予約機能が付いたホテルサイト</h2>
                </div>
                <p class="productspage-sub--text">宿泊サイトを見ていてこんなホテルがあったら宿泊したいなと思うサイトを作ろう！<br>と思い立って実装しました。宿泊予約がすぐできるサイトです。</p>
                <div class="productspage-btn--box">
                    <a href="#" class="productspage-btn">Web Site</a>
                </div>
            </div>

            <table class="productspage-table">
                <tr>
                    <th>使用ツール</th>
                    <td>Adobe XD / Laravel / CSS / jQuery</td>
                </tr>
                <tr>
                    <th>制作期間</th>
                    <td>45日程度</td>
                </tr>
                <tr>
                    <th>制作人数</th>
                    <td>1人</td>
                </tr>
            </table>
        </div><!-- .productspage-main--box -->

        <div class="productspage-imgs">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_np.png" class="productspage-pc" alt="pc画像">
            <img src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_sp.png" class="productspage-sp" alt="sp画像">
        </div>
    </div>

    <div class="container hotel-container">
        <div class="productspage-point">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-hotel"></i>
                <h3 class="productspage-point--title">こだわった部分</h3>
                <i class="fa-solid fa-hotel"></i>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_top.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">サイト</h4>
                    <p class="productspage-point--text">ホテルサイトは雰囲気、お食事、従業員とホテルの宿泊を決める基準は多岐にわたるので、gridレイアウトで多くの写真をスライドとして流し、可能な限りトップ画面でユーザーが多くの情報を取り入れることができるような構造にしました。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_reserve.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">予約画面</h4>
                    <p class="productspage-point--text">カレンダー機能を自作しました。お部屋を簡単に選ぶことができるように日付を選択すると自動で宿泊可能なお部屋をajax通信で表示してくれます。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_user.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">従業員画面</h4>
                    <p class="productspage-point--text">ログイン後、予約確認、価格設定をできるようにしました。価格設定は宿泊予約画面の金額に反映されるようにしております。</p>
                </div>
            </div>
            <div class="productspage-point--parts flex">
                <li class="productspage-point--list videos">
                    <video class="videos" poster="" loop autoplay muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/img/products/hotel/f-hotel_comment.mp4" type="video/mp4">
                        <p>申し訳ございません。動画が再生できませんでした。</p>
                    </video>
                </li>
                <div class="productspage-point--texts">
                    <h4 class="productspage-point--texttitle">業務連絡</h4>
                    <p class="productspage-point--text">従業員間の業務連絡の入力・削除を実装しました。個人用のメモも作成しました（IDに紐づいているので自分しか閲覧できません）。</p>
                </div>
            </div>
        </div>

        <div class="productspage-end">
            <div class="productspage-point--titles">
                <i class="fa-solid fa-hotel"></i>
                <h3 class="productspage-point--title">作ってみて</h3>
                <i class="fa-solid fa-hotel"></i>
            </div>
            <ul>
                <li>カレンダー機能は今後絶対使用する日が来ると思い、祝日や予約日を反映したり、過去の日付は選択不可にしたりと他宿泊サイトを参考に実装しました。</li>
                <li>宿泊人数で予約できる部屋をソートしたり人数によって合計金額を変えたりと色々な機能を実装しとても悩んで完成したときは本当に嬉しく、勉強になったサイトでした。</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>