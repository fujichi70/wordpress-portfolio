<?php
get_header();
?>

<div class="opening">
    <div class="opening-img"><img class="open-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kome_c.png" alt="転がるロゴ画像"></div>
</div>

<main id="main">
    <div class="main-box">
        <div class="main-logo">
            <!-- <div class="hokuhoku-parts"><img class="hokuhoku" id="hokuhoku" src="<?php echo get_stylesheet_directory_uri(); ?>/img/hokuhoku.png" alt="白米をほくほくさせる画像"></div>
            <div class="logo-parts"><img class="rice" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kome_w.png" alt="メインの白米画像"></div> -->
            <div class="hokuhoku-parts"></div>
            <div class="logo-parts"></div>
        </div>
            <div class="main-text">
                <h1>こんにちは</h1>
                <h2>Fujichiと申します</h2>
                <p>このサイトにお越しいただき本当にありがとうございます</p>
                <p>なにごともはじめが大事<br>最初のごあいさつもしっかりさせていただきます</p>
                <p>当サイトはわたしの作品たちを掲載させていただいているポートフォリオサイトです<br>たくさんのことを学び、たくさんの知識を一生懸命詰め込んでおります</p>
                <p>少しでも気になることがありましたらぜひお問い合わせください</p>
                <p>あなたの"こうしたい！"をたくさん叶えることができるように<br>学び続けて、いつでもお声がけをお待ちしております</p>
            </div>
    </div>
    <div class="scrolldown"><span>Scroll</span></div>
</main>

<div class="container">
    <section id="product">
        <div class="main-title--box">
            <h1 class="main-title">Products</h1>
            <span class="main-title--sub">作品たち</span>
        </div>
        <h2 class="sub-title">見やすい、わかりやすい、探しやすい</h2>
        <h3 class="text">
            どこにあるんだろう？がなくなるサイト作りのサポート。<br>いちばん必要な情報を、いちばんに得られることが、いちばん大事。
        </h3>
    </section>

    <section id="production">
        <div class="main-title--box">
            <h1 class="main-title">My Production</h1>
            <span class="main-title--sub">制作</span>
        </div>
        <p class="sub-title">webサイトはお客様との関係の入口 ～おもてなし～</p>
        <p class="text">
            webサイト訪問者は必ず疑問、興味、知りたいことを持って訪れている。訪問してくれた方にどれだけ満足してもらい、おもてなすことができるか。
        </p>
        <div class="process-box">
            <h2>process - 過程 - </h2>
            <div class="production-text">
                <p>専門用語は使わず丁寧でわかりやすい会話・説明を心がけております。
                    また、わたしの経験から少しでもよいと感じた提案は積極的にさせていただいております（もちろんクライアント様のご意向をくみ取るのがわたしの仕事ですので、そぐわない場合すっぱり断っていただいても構いません）。
                </p>
            </div>
        </div>
        <div class="grid">
            <div class="production-card">
                <h3>打合せ（ヒアリング）</h3>
                <div class="flex">
                    <div class="production-card--text">
                        <ul>
                            <li>クライアント様の大事な大事なwebサイトをつくるための必要な情報ですので、ズレやミスマッチが生じないよう細かく質問させていただいております。</li>
                            <li>煩わしさを感じないようヒアリングシート等を作成し可能な限り効率よく進めさせていただきます。</li>
                        </ul>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hearing_img.png" alt="ヒアリング画像">
                </div>
            </div>
            <div class="production-card">
                <h3>分析</h3>
                <div class="flex">
                    <div class="production-card--text">
                        <ul>
                            <li>クライアント様からの情報をもとにターゲット像を具体的なものにした上ターゲット像の行動を分析</li>
                            <li>ターゲット像(ペルソナ)になりきりキーワードを実際に検索</li>
                        </ul>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/analysis_img.png" alt="分析している画像">
                </div>
            </div>
            <div class="production-card">
                <h3>デザイン</h3>
                <div class="flex">
                    <div class="production-card--text">
                        <ul>
                            <li>デザインカンプ作成</li>
                            <li>サイトマップ作成</li>
                            <li>ターゲット像になりきりキーワードを実際に検索</li>
                        </ul>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/analysis_img.png" alt="分析している画像">
                </div>
            </div>
        </div>
    </section>


</div>

<?php get_footer(); ?>