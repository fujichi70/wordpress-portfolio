<?php get_header(); ?>

<div class="logo-parts"></div>
<main id="main">
    <section id="top">
        <div class="main-box">
            <div class="main-text">
                <div class="main-text--items">
                    <p>こんにちは</p>
                    <p>Fujichiと申します</p>
                    <p>このサイトにお越しいただき本当にありがとうございます</p>
                </div>
                <div class="main-text--items">
                    <p>なにごともはじめが大事<br>最初のごあいさつもしっかり、丁寧に</p>
                </div>
                <div class="main-text--items">
                    <p>この場所はわたしの作品たちを掲載させていただいているサイトです<br>たくさんのことを学び、たくさんの知識を詰め込んでおります</p>
                    <p>少しでも気になることがありましたらぜひお問い合わせください</p>
                </div>
                <p>あなたの"こうしたい！"をたくさん叶えることができるように<br>学び続けて、いつでもお声がけをお待ちしております</p>
            </div>
        </div>
        <div class="scrolldown"><span>Scroll</span></div>
    </section>

    <div class="container">
        <section id="aboutme">
            <div class="title">
                <div class="main-title--box">
                    <h1 class="main-title">About Me</h1>
                    <span class="main-title--sub">自分</span>
                </div>
            </div>
            <div class="wrapper">
                <div class="about-text--box">
                    <img class="about-img" src="<?php echo get_stylesheet_directory_uri() . '/img/rice.png'; ?>" alt="">
                    <div class="about-text--items">
                        <h2 class="sub-title">Fujichi</h2>
                        <h3 class="about-text">
                            wordpressやPHPを中心に活動中のプログラマー<br>
                            一つ一つを大事に、そして丁寧に<br>お客様へのお気遣いも、サイト作りも。<br>大学事務として働いていた経験も活かし、<br>よりよいものをお客様と築き上げていきたいです
                        </h3>
                        <a class="about-allow" href="<?php echo esc_url(home_url() . '/profile'); ?>"><span>My Skill etc...</spa></a>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- .container -->

    <section id="products">
        <div class="wrapper">
            <div class="title">
                <div class="main-title--box">
                    <h1 class="main-title">Products</h1>
                    <span class="main-title--sub">作品たち</span>
                </div>
                <h3 class="text">
                    どこにあるんだろう？がなくなるサイト作りのサポート<br>いちばん必要な情報を、いちばんに得られることが、いちばん大事だと思うのです
                </h3>
            </div>

            <div class="products-group">
                <div class="multi-title target">
                    <div class="multi-title--group">
                        <div class="multi-title--parts">
                            <div class="multi-title--items">
                                <p>List</p>
                                <span>- 作品一覧 -</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="products-box target">
                        <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                        <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/portfolio.png" alt="作品画像"></div>
                        <div>
                            <h4 class="products-box--title">ポートフォリオサイト</h4>
                            <p class="products-box--text">Wordpress / CSS / JavaScript / PHP</p>
                            <ul class="products-box--parts">
                                <li class="products-box--list">デザイン：Adobe XD</li>
                                <li class="products-box--list">制作：１５日程度</li>
                            </ul>
                        </div>
                        <div class="products-sub--box">
                            <a class="products-sub--btn" href="#">サイトへ</a>
                            <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_top'); ?>">詳細へ</a>
                        </div>
                    </div>
                    <div class=" products-box target">
                                <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                                <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/f-fitness.png" alt="作品画像"></div>
                                <div>
                                    <h4 class="products-box--title">パーソナルジムサイト</h4>
                                    <p class="products-box--text">HTML / CSS / JavaScript</p>
                                    <ul class="products-box--parts">
                                        <li class="products-box--list">デザイン：Adobe XD</li>
                                        <li class="products-box--list">制作：２８日程度</li>
                                    </ul>
                                </div>
                                <div class="products-sub--box">
                                    <a class="products-sub--btn" href="https://f-fitness.fujichi.com/">サイトへ</a>
                                    <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_fitness'); ?>">詳細へ</a>
                                </div>
                        </div>
                        <div class="products-box target">
                            <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                            <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/f-cafe.png" alt="作品画像"></div>
                            <div>
                                <h4 class="products-box--title">cafeサイト</h4>
                                <p class="products-box--text">PHP / CSS / jQuery</p>
                                <ul class="products-box--parts">
                                    <li class="products-box--list">デザイン：Adobe XD</li>
                                    <li class="products-box--list">制作：４１日程度</li>
                                </ul>
                            </div>
                            <div class="products-sub--box">
                                <a class="products-sub--btn" href="https://f-cafe.fujichi.com/">サイトへ</a>
                                <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_cafe'); ?>">詳細へ</a>
                            </div>
                        </div>
                        <div class="products-box target">
                            <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                            <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/f-board.png" alt="作品画像"></div>
                            <div>
                                <h4 class="products-box--title">掲示板サイト</h4>
                                <p class="products-box--text">PHP / CSS</p>
                                <ul class="products-box--parts">
                                    <li class="products-box--list">デザイン：Adobe XD</li>
                                    <li class="products-box--list">制作：２５日程度</li>
                                </ul>
                            </div>
                            <div class="products-sub--box">
                                <a class="products-sub--btn" href="https://f-board.fujichi.com/">サイトへ</a>
                                <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_board'); ?>">詳細へ</a>
                            </div>
                        </div>
                        <div class="products-box target">
                            <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                            <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/f-hotel.png" alt="作品画像"></div>
                            <div>
                                <h4 class="products-box--title">ホテルサイト</h4>
                                <p class="products-box--text">Laravel / CSS / jQuery</p>
                                <ul class="products-box--parts">
                                    <li class="products-box--list">デザイン：Adobe XD</li>
                                    <li class="products-box--list">制作：４４日程度</li>
                                </ul>
                            </div>
                            <div class="products-sub--box">
                                <a class="products-sub--btn" href="https://f-hotel.fujichi.com/">サイトへ</a>
                                <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_hotel'); ?>">詳細へ</a>
                            </div>
                        </div>
                        <div class="products-box target">
                            <img class="omusubi" src="<?php echo get_stylesheet_directory_uri() . '/img/omusubi.png'; ?>" alt="">
                            <div class="products-img--parts"><img class="products-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/products/f-blog.png" alt="作品画像"></div>
                            <div>
                                <h4 class="products-box--title">ブログサイト</h4>
                                <p class="products-box--text">Wordpress / CSS / JavaScript / PHP</p>
                                <ul class="products-box--parts">
                                    <li class="products-box--list">デザイン：Adobe XD</li>
                                    <li class="products-box--list">制作：１９日程度</li>
                                </ul>
                            </div>
                            <div class="products-sub--box">
                                <a class="products-sub--btn" href="https://chokotto-amayadori.fujichi.com/">サイトへ</a>
                                <a class="products-sub--btn" href="<?php echo esc_url(home_url() . '/f_blog'); ?>">詳細へ</a>
                            </div>
                        </div>
                    </div><!-- .grid -->
                </div><!-- .products-group -->
            </div><!-- .wrapper -->
    </section>

    <div class="container">
        <section id="production">
            <div class="title">
                <div class="main-title--box">
                    <h1 class="main-title">My Production</h1>
                    <span class="main-title--sub">制作</span>
                </div>
                <h2 class="sub-title">webサイトはお客様との関係の入口 ～おもてなし～</h2>
                <p class="text">
                    webサイト訪問者は必ず疑問、興味、知りたいことを持って訪れています<br>
                    訪問してくれた方にどれだけ満足してもらい、おもてなすことができるかがとても重要だと思うのです
                </p>
            </div>

            <div class="process-group">
                <div class="multi-title target">
                    <div class="multi-title--group">
                        <div class="multi-title--parts">
                            <div class="multi-title--items">
                                <p>Process</p>
                                <span>- 過程 -</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="process-text">ご連絡からご注文までの過程を図面でわかりやすくまとめてみました</p>

                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <h4 class="process-box--title">見積もり・ご注文</h4>
                            <ul class="process-box--parts">
                                <li class="process-box--list">お話しをいただきましたら急ぎ対応中以外<br>すぐにどちらでも駆けつけます（リモート対応可）</li>
                                <li class="process-box--list">見積書を早急に作成できるよう<br>事前準備をしておりますので契約まで迅速に行動可能です</li>
                            </ul>
                            <p class="process-box--text">※３～５日程度</p>
                        </div>
                        <div class="process-img--items">
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/call.png" alt="通話画像"></div>
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/rocket.png" alt="飛んでいく画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <div class="process-box--titles">
                                <h4 class="process-box--title">打合せ（ヒアリング）</h4>
                                <p class="process-box--text"></p>
                            </div>
                            <ul class="process-box--parts">
                                <li class="process-box--list">自作のヒアリングシート等にて大枠のデザイン、<br>必要機能等の確認（リモート対応可）</li>
                            </ul>
                            <p>※お客様の大事な大事なwebサイトをつくるための必要な情報ですので、ズレやミスマッチが生じないよう細かく質問させていただいております<br>
                                また、わたしの経験のなかで少しでもよいと感じた提案は積極的にさせていただいております。<br>（もちろんお客様のご意向にそぐわない場合はすっぱり断ってください！）</p>
                            <p class="process-box--text">※サイトの規模感によりますが１～２時間程度</p>
                        </div>
                        <div class="process-img--items hearing-img">
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/meeting.png" alt="打合せ画像"></div>
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/online.png" alt="オンライン画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <h4 class="process-box--title">分析</h4>
                            <ul class="process-box--parts">
                                <li class="process-box--list">打合せの情報をもとにターゲット像を明確化、<br>ターゲット像の行動を分析</li>
                                <li class="process-box--list">ターゲット像(ペルソナ)になりきりキーワードを実際に検索</li>
                            </ul>
                            <p class="process-box--text">※１～２日程度</p>
                        </div>
                        <div class="process-img--items">
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/research.png" alt="分析している画像"></div>
                            <div class="process-img--parts"><img class="process-img search-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/search.png" alt="検索中画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <h4 class="process-box--title">デザインカンプ・構成図作成</h4>
                            <ul class="process-box--parts">
                                <li class="process-box--list">ターゲット像がお客様のwebサイトを開いた時点で<br>すぐに探しているものが見つかる構成にする</li>
                                <li class="process-box--list">ここで一度お客様にデザイン・機能の確認</li>
                            </ul>
                            <p class="process-box--text">※サイト規模感によりますが１～２週間程度</p>
                        </div>
                        <div class="process-img--items">
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/creative.png" alt="デザイン画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <h4 class="process-box--title">サイト構築</h4>
                            <ul class="process-box--parts">
                                <li class="process-box--list">デザイン・構成図をもとにサイト構築</li>
                                <li class="process-box--list">機能の追加も承り可能</li>
                            </ul>
                            <div class="process-box--text">構築期間はサイト規模感によります
                                <ul>
                                    <li>デザインのみ：１～２週間程度<br>※ページ数により前後します</li>
                                    <li>高度な機能付き：１か月～２か月程度<br>※機能により前後します</li>
                                </ul>
                            </div>
                        </div>
                        <div class="process-img--items">
                            <div class="process-img--parts"><img class="process-img data-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/data.png" alt="データ画像"></div>
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/smartphone_calling.png" alt="通話画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-box target">
                    <div class="flex">
                        <div>
                            <h4 class="process-box--title">最終確認・その後のサポート</h4>
                            <ul class="process-box--parts">
                                <li class="process-box--list">お客様のご要望に沿ったwebサイトにしっかり構築できているかの最終確認（適宜修正）</li>
                                <li class="process-box--list">その後３か月間無償サポート</li>
                            </ul>
                        </div>
                        <div class="process-img--items">
                            <div class="process-img--parts"><img class="process-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/explain.png" alt="説明画像"></div>
                        </div>
                    </div>
                </div>
                <div class="process-guide--box flex target">
                    <div class="process-guide--img"><img class="guide-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/production/greeting.png" alt="お礼画像"></div>
                    <p class="process-guide--text">ご不明な点がありましたら、お問い合わせフォームにて気軽にお問い合わせください。<br>
                        「見積書だけ参考にほしい」<br>「この予算内にどれだけのものが作成できるか計算してほしい」<br>とのご要望も大歓迎ですので、ぜひご連絡ください。</p>
                </div>
            </div><!-- .process-group -->
        </section><!-- #production -->
    </div><!-- .container -->

    <section id="contact">
        <div class="title">
            <div class="main-title--box">
                <h1 class="main-title">Contact</h1>
                <span class="main-title--sub">お問い合わせ</span>
            </div>
        </div>

        <?php
        $page_id = 74;
        $page = get_post($page_id, 'OBJECT', 'raw');
        $page_include = apply_filters('the_content', $page->post_content);
        echo $page_include;
        ?>
    </section>
</main>

<?php get_footer(); ?>