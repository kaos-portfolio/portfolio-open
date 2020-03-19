<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index(Request $request) {

        $works = [
            [
                'name' => '採用サイト(TOP)', 
                'img' => 'recruit',
                'link' => 'http://kaos-portfolio.com/works/recruit',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む)9時間<br>コーディング9時間',
                'description' => '
                    ネット広告と、ゲーム事業を行う会社の架空の採用サイトです。<br>
                    サイトに訪問した求職者様に、志望度を高めて応募をしていただく目的で作成いたしました。
                ',
                'target' => '<span class="font_bold">新卒、中途採用の求職者様</span>
                    求人サイトで求人を見つけたり、検索エンジンで検索をしたことがきっかけで、
                    会社の情報を得るためにサイトに訪問するイメージです。
                ',
                'purpose' => '<span class="font_bold">会社の事業内容や方針を知っていただき、志望度を高めていただくことです。</span>
                    発想力(サイト内では空想力と記載)が高い人に応募していただきたい。
                ',
                'means' => '<span class="font_bold">①会社の事業内容や、方針を知っていただく</span>
                    TOPページにコンセプト、文化、福利厚生、よくある質問、事業内容などのコンテンツの
                    導線を載せることで会社の情報にアクセスしやすい
                    状態を作りました。

                    <span class="font_bold">②具体的な募集要項をTOPページに掲載する</span>
                    募集要項をTOPページに掲載することで、求職者様の求めている求人があるかどうかを
                    早い段階で判断できるようにいたしました。

                    <span class="font_bold">③お問い合わせ導線を目立たせる</span>
                    ヘッダーの固定と、ページの下に問い合わせ導線を大きく設けることで
                    お問い合わせの導線が目立つようにいたしました。
                ',
                'logo' => '<span class="font_bold">吹き出しのモチーフ + 考えたことを実行するイメージ</span>
                    真ん中が空白の理由は、考えたことを実行した結果、
                    左下の黄色の丸として外に飛び出したためです。
                    (社名のアクションと、コンセプトの空想力を掛け合わせて作成いたしました。)
                ',
                'quote' => '<p class="works_detail_quote">
                        <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                        <a href="https://www.photo-ac.com/profile/2203819">coji_coji_acさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/43626">acworksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/532646">紺色らいおんさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/900692">まぽさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/638920">FineGraphicsさん</a>
                        <span>)</span>
                    </p>
                ',
            ],
            [
                'name' => 'カフェサイト(TOP)', 
                'img' => 'cafe',
                'link' => 'http://kaos-portfolio.com/works/cafe',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む)10時間<br>コーディング8.5時間',
                'description' => '
                    パンケーキをメインで扱うカフェの架空の店舗サイトです。<br>
                    美味しそうなパンケーキのイメージを持っていただき、店舗に来ていただくことを目的に作成いたしました。',
                'target' => 'パンケーキが好きな女性
                    通りがかりで店を見つけたり、検索サイトでパンケーキを探したときに
                    情報収集としてサイトに訪れるイメージ
                ',
                'purpose' => '美味しそうなパンケーキが食べられそうという印象を持っていただき、店舗に来ていただきたい。
                ',
                'means' => '<span class="font_bold">①パンケーキが魅力的に見えるように</span>
                    美味しそうに見えるように余白を多めにして、パンケーキを目立たせました。

                    <span class="font_bold">②場所を伝える</span>
                    地図をTOPページに掲載することで、店舗の場所を確認しやすくいたしました。
                    住所と最寄り駅も掲載して、場所の情報を充実させました。

                    <span class="font_bold">③電話番号を記載</span>
                    電話で、予約やメニューの詳細などを確認したい人のために、
                    ヘッダーとフッターに電話番号を記載いたしました。
                ',
                'logo' => '<span class="font_bold">都会の中の癒やし(隙間)を表現</span>
                    コンセプトが都会の中の癒やし(隙間)です。
                    
                    STAY CAFEの文字の中で、Aだけが閉じた空間がありました。
                    Aにわずかの隙間を作ることで、閉じた空間をなくしました。
                    そうすることで、全てに隙間(癒やし)ができ、コンセプトを表現いたしました。
                
                    また、女性向けでパンケーキを扱っていることもあり、
                    全体に丸みを帯びた形にしております。
                ',
                'quote' => '<p class="works_detail_quote">
                        <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                        <a href="https://www.photo-ac.com/profile/2203819">coji_coji_acさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/200890">チョコラテさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/269137">NANNANさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/845545">aztecaさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/626072">hirobirockさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/340829">Bettyさん（ベティ）</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1371599">ゆりとさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/43626">acworksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/441390">七彩さん</a>
                        <span>)</span><span>・</span>
                        <a class="font_bold" href="https://www.pakutaso.com" title="フリー写真素材ぱくたそ" >フリー写真素材ぱくたそ様</a>
                    </p>
                ',
            ],
            [
                'name' => '転職サイト(TOP・一覧・詳細)', 
                'img' => 'career',
                'link' => 'http://kaos-portfolio.com/works/careertop',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む・3ページ分)15時間<br>コーディング(3ページ分)12時間', 
                'description' => '
                    デザイナー・エンジニア向けの架空の転職サイトです。<br>
                    求人を探しているクリエイターにこのサイトを通じて応募していただくことを目的に作成いたしました。<br><br>
                     <div class="work_detail_career_link_box">
                        <p><span class="font_bold">※補足:</span> TOP・一覧・詳細ページを作成いたしました。検索するボタンや、詳細を見るボタンから、画面遷移が可能です。</p>
                        <span>(</span>
                        <a class="link_bg_yellow" href="http://kaos-portfolio.com/works/careertop" target="_blank" class="career_link">TOPページ</a><span>・</span>
                        <a class="link_bg_yellow" href="http://kaos-portfolio.com/works/careerresult" target="_blank" class="career_link">一覧ページ</a><span>・</span>
                        <a class="link_bg_yellow" href="http://kaos-portfolio.com/works/careerdetail" target="_blank" class="career_link">詳細ページ</a>
                        <span>)</span>
                    </div>
                ',
                'target' => '求人を探しているデザイナー・エンジニア
                ',
                'purpose' => 'このサイトを通じて求人応募をしていただきたい。
                ',
                'means' => '<span class="font_bold">①ターゲットを明確に打ち出す</span>
                    TOPでデザイナー・エンジニア求人と明確に記載することで、
                    自分に関係のあるサイトという認識を持っていただくようにいたしました。

                    <span class="font_bold">②使いやすいサイトにする</span>
                    どのページからでも検索しやすい状況を作るために下記3点を意識いたしました。
                    ・一覧と詳細のヘッダーで検索バーを常に固定
                    ・詳細画面の左側に検索エリアを設置
                    ・詳細画面の一番下におすすめ求人を設置

                    <span class="font_bold">③応募ボタンを目立たせる</span>
                    緑ボタンをコンパージョンカラーにすることで目立たせ、
                    目立つ場所に配置いたしました。
                ',
                'logo' => '<span class="font_bold">クリエイター向けのイメージを重視</span>
                    手作りの印象がするように手書きのイメージのロゴにいたしました。
                    またD(デザイン)とW(ワーク)が絡まることで、デザイナーと求人の架け橋であることを表現いたしました。
                ',
                'quote' => '<p class="works_detail_quote">
                        <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                        <a href="https://www.photo-ac.com/profile/2203819">coji_coji_acさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/43626">acworksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/900692">まぽさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/638920">FineGraphicsさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/2267983">i*****************oさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1002904">TicTacさん</a>
                        <span>)</span><span>・</span>
                        <a class="font_bold" href="https://pixta.jp/">PIXTA様</a>
                    </p>
                ', 
            ],
            [
                'name' => '不動産サイト(TOP)', 
                'img' => 'realestate',
                'link' => 'http://kaos-portfolio.com/works/realestate',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む)11時間<br>コーディング10時間', 
                'description' => '
                    賃貸物件・売買物件・物件管理・リフォームの4つの事業を展開する架空の不動産サイトです。<br>
                    事業内容を知っていただき、問い合わせをしていただくことが目的です。
                ',
                'target' => '品川付近で賃貸物件・売買物件・物件管理・リフォームを扱う不動産会社を探している人
                ',
                'purpose' => '事業内容を知っていただき、問い合わせをしていただきたい
                ',
                'means' => ' <span class="font_bold">①メインビジュアルに4つの事業内容を記載</span>
                    一番最初に見える場所に記載することで、4つの事業内容を認識していただけるようにいたしました。
                    導線にもなっているため、目的のページに遷移しやすくなっております。

                    <span class="font_bold">②顔写真で安心感を出す</span>
                    スタッフの写真や、利用したお客様の声を掲載することで安心感を感じていただけるようにいたしました。

                    <span class="font_bold">③物件写真を魅力的に</span>
                    魅力的に見える写真を使うことで、良い物件情報が見つかりそうなイメージを持っていただけるようにいたしました。
                ',
                'logo' => '<span class="font_bold">【品】と【川】をモチーフに</span>
                    3つの四角は【品】と【川】をモチーフにしております。
                    そのモチーフが中央にあることで、品川中央を表現いたしました。
                ',
                'quote' => '<p class="works_detail_quote">
                        <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                        <a href="https://www.photo-ac.com/profile/2203819">coji_coji_acさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1002904">TicTacさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/43626">acworksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1020715">みんと。さん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/642812">kotoMさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/187653">Harrieさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1147610">HiCさん</a>
                        <span>)</span><span>・</span>
                        <a class="font_bold" href="https://www.pakutaso.com" title="フリー写真素材ぱくたそ" >フリー写真素材ぱくたそ様</a>
                    </p>
                ',
            ],
            [
                'name' => '音楽専門学校サイト(TOP)', 
                'img' => 'music',
                'link' => 'http://kaos-portfolio.com/works/music',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む)13時間<br>コーディング9.5時間', 
                'description' => '音楽専門学校の架空の学校サイトです。<br>
                    資料請求などを通じて、入学を希望する方を増やすことが目的です。
                ',
                'target' => '進学先を探している高校3年生
                    ネットで検索したり、人から勧められて詳しく情報を知るためにサイトを訪問するイメージです。
                ',
                'purpose' => '入学を希望する方を増やすことが目的です。
                ',
                'means' => '<span class="font_bold">①インタビューを大きく設置</span>
                    どんな先輩がいて、自分が入学したらどんな生活になるのかなどを想像するために
                    重要なコンテンツと考え、大きく設置いたしました。
                    
                    <span class="font_bold">②3つの理由を設置</span>
                    メリットを大きく打ち出すことで、興味を持っていただくようにいたしました。
                    就職に強いなど、魅力を感じるポイントを打ち出しました。

                    <span class="font_bold">③資料請求と問い合わせを固定する</span>
                    目立つ色で、右側に固定にすることで認識しやすくいたしました。
                
                    <span class="font_bold">④おしゃれな印象になるように</span>
                    音楽の専門学校なので、おしゃれな印象になるようにいたしました。
                    おしゃれな印象をサイトから感じることで、その学校に対してもいい印象を感じていただくことが目的です。
                ',
                'logo' => '<span class="font_bold">【ウィーミー】→【WeMe】がモチーフ</span>
                    一見Weに見えて、eがひっくり返っていることで、Meにも見えるようにいたしました。
                    そうすることで、WeとMeが関係しあっているという意味合いも込めています。

                    また、音楽のサイトなので、太くすることで勢いのあるロゴにいたしました。
                ',
                'quote' => '<p class="works_detail_quote">
                        <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                        <a href="https://www.photo-ac.com/profile/43626">acworksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/2203819">coji_coji_acさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/2407448">IT-CraftWorksさん</a><span>・</span>
                        <a href="https://www.photo-ac.com/profile/1923080">saku00さん</a><span>)
                        </span><span>・</span>
                        <a class="font_bold" href="https://www.pakutaso.com" title="フリー写真素材ぱくたそ" >フリー写真素材ぱくたそ様</a>
                        <span>)</span><span>・</span>
                        <a class="font_bold" href="https://pixta.jp/">PIXTA様</a>
                    </p>
                ',
            ],
            [
                'name' => '保育園サイト(TOP)', 
                'img' => 'nursery',
                'link' => 'http://kaos-portfolio.com/works/nursery',
                'category' => '架空サイト',
                'when' => '2020年2月(1ヶ月前)',
                'tool' => 'XD(全体構成)・Photoshop(画像加工)・Illustrator(ロゴ作成)',
                'period' => 'デザイン(ロゴ含む)8.5時間<br>コーディング9.5時間', 
                'description' => '保育園の架空のサイトです。<br>
                    これから保育園を探している保護者の方に、どのような保育園かを知っていただくことが目的で作成いたしました。<br>
                    <span class="works_emphasis">※この保育園サイト内のハリネズミや、鳥などのイラストに関しましてはイラストAC様からお借りしています。</span>
                ',
                'target' => 'これから保育園を探している保護者の方
                ',
                'purpose' => '笑顔を大切にしている保育園であることを知っていただく
                ',
                'means' => '<span class="font_bold">①笑顔の写真を多く使用</span>
                    笑顔がコンセプトなので、どのコンテンツにも笑顔の写真を掲載するようにいたしました。

                    <span class="font_bold">②コンセプトのエリアを大きく設ける</span>
                    言葉でコンセプトを伝えるのみではなく、イラストを通じてもコンセプトが伝わるようなイメージにいたしました。

                    <span class="font_bold">③楽しい雰囲気を重視</span>
                    スライドショーやカラフルな配色などにより、保育園なので楽しい雰囲気が伝わるようにいたしました。
                ',
                'logo' => '<span class="font_bold">笑顔+人のつながりを表現</span>
                    笑顔に見えること+人が2人いるようにも見える形になっています。
                    笑顔は1人だけで作るのではなく、他の人がいて笑顔になるという意味になります。
                    カラフルな配色は個々人の個性を大事にしたいという想いからです。
                ',
                'quote' => '<p class="works_detail_quote">
                    <a class="font_bold" href="https://www.photo-ac.com/">写真AC様</a><span>(</span>
                    <a href="https://www.photo-ac.com/profile/221026">ちゃぁみいさん</a><span>・</span>
                    <a href="https://www.photo-ac.com/profile/636143">セレファさん</a><span>・</span>
                    <a href="https://www.photo-ac.com/profile/1701394">ブルーカメラさん</a><span>・</span>
                    <a href="https://www.photo-ac.com/profile/2365036">十月さん</a><span>)</span>
                </p>
                ',
            ],
            [
                'name' => 'MatchinGood(人材管理システム)', 
                'img' => 'mg',
                'link' => 'https://www.matchingood.co.jp/category/shokai/',
                'category' => '制作実績',
                'when' => '2017年5月〜2018年3月(約2年前)',
                'tool' => 'Photoshop',
                'description' => '                    
                    人材紹介会社様向けの人材管理システムリニューアルを行いました。<br>
                    人材紹介会社様が、登録した求職者様や求人情報を管理するためのシステムです。
                ',
                'target' => '人材紹介会社様
                    HPからのお問い合わせや、テレアポからの受注の流れになります。
                ',
                'purpose' => '<span class="font_bold">UIをわかりやすくして営業の受注を増やす</span>
                    画面が使いにくいことで営業の失注理由になっていたこと、
                    技術的にも5年以上前のものを使用していたことが理由でシステムのリニューアルが行われました。
                ',
                'means' => '<span class="font_bold">①画面遷移を減らす、操作数を減らすこと</span>
                    ・まとめられる画面は可能な範囲で1つにまとめる(検索結果と一覧画面をまとめる)
                    ・メモの登録など簡単な機能は画面遷移を行わずに吹き出しなどで行えるようにする

                    <span class="font_bold">②現在地をわかるようにすること</span>
                    ・詳細画面の左側に人材の顔写真を掲載
                    ・タイトルを目立たせる
                    ・左側のサイドメニューを色付けして、常にどの画面にいるかを確認できるようにする

                    <span class="font_bold">③デザインの基礎的な部分の適用</span>
                    ・優先度の高いものは左側、上の方に配置する
                    ・強調するものを大きくする
                    ・シンプルにする
                ',
                'result' => '<span class="font_bold">UIの使いやすさが理由で製品の受注が増加</span>
                    UIの使いやすさが理由での受注が7〜8割になり、わかりやすい・学習コストが低いなどのお声をいただくようになりました。',
            ],
            [
                'name' => '人材管理システムの紹介サイト', 
                'img' => 'mghp',
                'link' => 'https://www.matchingood.co.jp/',
                'category' => '制作実績',
                'when' => '2018年3月〜2018年5月(約2年前)',
                'tool' => 'Photoshop',
                'description' => '
                    人材管理システムの紹介サイトを作成いたしました。<br>
                    人材紹介会社様にシステムに興味を持っていただき、問い合わせをしていただくことが目的です。
                ',
                'target' => '人材管理システムを探している人材紹介会社様
                    検索エンジンなどでサイトに訪問していただくことが多いです。
                ',
                'purpose' => '人材紹介会社様にシステムに興味を持っていただき、問い合わせをしていただくこと
                ',
                'means' => ' <span class="font_bold">①3つのシステムを扱っていることをわかりやすくする</span>
                    TOP画面で3つのシステムを並列して並べることで、
                    3つのシステムを扱っているイメージを持っていただけるようにいたしました。

                    <span class="font_bold">②ターゲットをあえて絞らない</span>
                    デザインの基本は訴求を絞ることですが、今回はターゲットが幅広いので、
                    あえて訴求を絞らずにいろんなことができるという見せ方で情報が充実している印象にいたしました。
                    
                    <span class="font_bold">③問い合わせボタンを目立たせる</span>
                    問い合わせボタンを右上に固定、フッターにも大きくエリアを設ける
                ',
                'result' => '<span class="font_bold">1日に2〜3回問い合わせがくるようになる(リニューアル前は2〜3日に1回程度の問い合わせ)</span>

                    問い合わせの数が増えたことは良かったのですが、デザインスキルに課題を感じました。
                    そのため、この後にサイトのTOPページのデザインを20個以上自宅で作成し、
                    スキルをあげるようにいたしました。(そのため架空サイトの6つが現状のスキルに近いです。)

                    このポートフォリオサイト内では掲載できないのですが、
                    最近外部のお客様のシステムを作ることがありデザインが活かせたと思います。',
            ],
            [
                'name' => '人材会社様向け口コミサイト', 
                'img' => 'careerepo',
                'category' => '制作実績',
                'when' => '2016年12月〜2017年5月(約3年前)',
                'tool' => 'Photoshop(全体構成)・Illustrator(ロゴ作成)',
                'description' => '
                    人材会社様の口コミが掲載された転職サイトです。現在はサービスが終了しています。<br>
                    転職希望者がサイトに訪問し、登録している人材会社様の求人にお問い合わせする仕組みです。
                ',
                'target' => '人材会社様を通じた転職を希望している求職者',
                'purpose' => ' 転職希望者がサイトに訪問し、登録している人材会社様の求人にお問い合わせする
                ',
                'means' => '<span class="font_bold">①情報を多く見せるように工夫をする</span>
                    サイトを見たときに情報が情報が充実していそうに見えるかどうかが重要だと考えた。
                    会社情報が少ない会社様も多かったので、その場合には「〇〇駅にある人材会社」のような
                    形で情報が自動生成されるように工夫した。

                    <span class="font_bold">②SEOなどを意識</span>
                    例えば口コミサイトなので、h1タグなどに【評判】を入れるなどの提案をおこなった
                ',
                'logo' => '<span class="font_bold">キャリア+変えるを表す、カエルのキャラクター(キャリえる)</span>
                    口コミサイトのため吹き出しをベースに作成いたしました。
                ',
                'result' => '問い合わせはたまにくるものの、成果に結びつくような求職者がなかったため、
                    1年ほど運用してクローズいたしました。任せていただいたのに結果が出なかったことを申し訳なく感じております。
                    
                    今振り返ってみて原因は、多くの求人サイトがある中で
                    なぜこのサイトを使うメリットがあるのかを提案できなかったことだと考えています。

                    次は「なぜこのサイトを使うメリットがあるのか」を徹底して考えて、
                    そのメリットを強調するデザインに落とし込みたいと考えています。

                    この経験を通じて、全て任せて頂いたおかげで、デザインに関して考える力はすごく伸びました。
                    また基本的なコーディングスキルなども伸ばすことができました。
                    その結果、その後のシステムリニューアルで結果を出すことに結びついたと考えております。
                '
            ],
        ];
        
        $title = $request->input('title');

        return view('works')->with(compact('works', 'title'));
    }
}
