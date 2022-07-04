<?php
/*
Template Name: Profile
*/
?>

<?php get_header(); ?>

<main id="main">
    <section id="profile">
        <div class="title">
            <div class="main-title--box">
                <h1 class="main-title">Profile</h1>
                <span class="main-title--sub">自分</span>
            </div>
        </div>

        <div class="main-profile">
            <div class="main-profile--box">
                <img class="main-profile--img" src="<?php echo get_stylesheet_directory_uri() . '/img/profile.png'; ?>" alt="プロフィール画像">
                <p class="main-profile--name">Fujichi</p>
                <ul class="main-profile--parts">
                    <li class="main-profile--list">1987年12月19日生まれ</li>
                    <li class="main-profile--list">北海道札幌市住み</li>
                    <li class="main-profile--list">白米を愛する人間</li>
                </ul>
            </div>
            <div class="cv">
                <h2 class="cv-title">略歴</h2>
                <table class="cv-table">
                    <tr>
                        <th class="cv-year">2012.4 - 2022.3</th>
                        <td class="cv-text">国立大学事務にて従事。総務・人事・財務系担当。公文書、議事進行が得意で教授の秘書業務に携わる。</td>
                    </tr>
                    <tr>
                        <th class="cv-year">2021.9</th>
                        <td class="cv-text">
                            在宅ワークが多くなり、仕事をしながら合間にプログラミングの勉強を始める。</td>
                    </tr>
                    <tr>
                        <th class="cv-year">2021.10</th>
                        <td class="cv-text">勉強し始めるととても楽しく、とても難しい。本腰を入れて勉強し始める。メンターさんのサポートを開始。</td>
                    </tr>
                    <tr>
                        <th class="cv-year">2021.11</th>
                        <td class="cv-text">メンターさん2名にしてHTML,css,javascriptの知識をつけながら、php,Laravelも同時に学ぶ。</td>
                    </tr>
                    <tr>
                        <th class="cv-year">現在</th>
                        <td class="cv-text">勉強をし続けて役に立てるよう知識を追い求めていく。現在はreactを勉強中。</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section id="skill">
        <div class="title">
            <div class="main-title--box">
                <h1 class="main-title">My Skill</h1>
                <span class="main-title--sub">自分の持つもの</span>
            </div>
        </div>

        <div class="skill-box">
            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/html_css.JPG" class="card-img-top" alt="html&cssアイコン">
                <div class="skill-body">
                    <p class="skill-title">HTML5 & CSS3</p>
                    <ul class="skill-parts">
                        <li class="skill-list">一からwebサイト作成</li>
                        <li class="skill-list">cssアニメーション</li>
                        <li class="skill-list">統一デザイン</li>
                        <li class="skill-list">flex・gridレイアウト</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/js.png" class="card-img-top" alt="jsアイコン">
                <div class="skill-body">
                    <p class="skill-title">JavaScript</p>
                    <ul class="skill-parts">
                        <li class="skill-list">ハンバーガーメニュー</li>
                        <li class="skill-list">スライド（カルーセル）</li>
                        <li class="skill-list">フェードイン</li>
                        <li class="skill-list">ページローダー</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/jquery.png" class="card-img-top" alt="jqueryアイコン">
                <div class="skill-body">
                    <p class="skill-title">jQuery</p>
                    <ul class="skill-parts">
                        <li class="skill-list">アコーディオンメニュー</li>
                        <li class="skill-list">フェードイン</li>
                        <li class="skill-list">プラグインでの高度なアニメーション操作</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/wordpress.png" class="card-img-top" alt="jsアイコン">
                <div class="skill-body">
                    <p class="skill-title">WordPress</p>
                    <ul class="skill-parts">
                        <li class="skill-list">一からwebサイト作成</li>
                        <li class="skill-list">既存のwebサイト落とし込み</li>
                        <li class="skill-list">プラグイン導入</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/react.png" class="card-img-top" alt="Reactアイコン">
                <div class="skill-body">
                    <p class="skill-title">React</p>
                    <ul class="skill-parts">
                        <li class="skill-list">一からwebサイト実装</li>
                        <li class="skill-list">UI対応・パフォーマンス上昇</li>
                        <li class="skill-list">利便性向上のためさらに勉強中</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/php.png" class="card-img-top" alt="PHPアイコン">
                <div class="skill-body">
                    <p class="skill-title">PHP</p>
                    <ul class="skill-parts">
                        <li class="skill-list">お問い合わせフォーム</li>
                        <li class="skill-list">ECサイト</li>
                        <li class="skill-list">掲示板</li>
                        <li class="skill-list">ブログ</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/laravel.png" class="card-img-top" alt="laravelアイコン">
                <div class="skill-body">
                    <p class="skill-title">laravel</p>
                    <ul class="skill-parts">
                        <li class="skill-list">認証まわり</li>
                        <li class="skill-list">ECサイト</li>
                        <li class="skill-list">家計簿</li>
                        <li class="skill-list">勤怠管理システム</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/adobe-xd.png" class="card-img-top" alt="adobe-xdアイコン">
                <div class="skill-body">
                    <p class="skill-title">adobe-xd</p>
                    <ul class="skill-parts">
                        <li class="skill-list">デザインカンプ作成</li>
                        <li class="skill-list">画面遷移再現</li>
                        <li class="skill-list">簡単な画像作成</li>
                        <li class="skill-list">カルーセル作成</li>
                    </ul>
                </div>
            </div>

            <div class="skill-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/tailwind.png" class="card-img-top tailwind" alt="tailwindアイコン">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon/bootstrap.png" class="card-img-top bootstrap" alt="bootstrapアイコン">
                <div class="skill-body">
                    <div class="css-design-box">
                        <p class="skill-title css-design">tailwind</p>
                        <p class="skill-title css-design">bootstrap</p>
                    </div>
                    <ul class="skill-parts css-design">
                        <li class="skill-list css-design">レスポンシブデザイン</li>
                        <li class="skill-list css-design">レイアウト変更</li>
                        <li class="skill-list css-design">綺麗なcss構築</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</main>

<?php get_footer(); ?>