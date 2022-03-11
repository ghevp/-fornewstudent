<!DOCTYPE html>
<html lang="ja"> 
<?php
    if(isset($_GET['page'])){
     $page=$_GET['page'];
    };
     if(isset($page)){
        
      
     }else{
                   $page="home";     
     };
     $title = array('home' => "ホーム",
     'newstudents' => "新入生の皆さんへ",
     'notice'=>"おしらせ",
     'question'=>"困った時");  
    
?>
    <head>
        <meta charset="UTF-8">
       <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-0P8XN7BCL8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0P8XN7BCL8');
</script>
        <meta name="author" content="ぐゑ">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ghevp">
        <meta property="og:url" content="https://studinfo-shizuhama.ghevp.com">
        <meta property="og:title" content="静浜学生情報サイト">
        <meta name="og:description" content="このウェブサイトでは新入生のために知ってもらいたい情報を集めました。今後も情報や機能を更新予定なのでご愛顧よろしくお願いします。">
        <meta property="og:image" content="https://studinfo-shizuhama.ghevp.com/img/con1.png">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">  
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
         
        <link rel="stylesheet" href="css/style.css"><!--後でphpのif文の作成-->
      <title> <?php 
      if (isset($title) == "") {
        echo "静浜学生情報サイト";
    } else {
        echo "" . $title[$page] . " - 静浜学生情報サイト";
    }
       ?>
      </title><!--後で変更-->
    </head>
    <body>
   
    <header class="header">
        <div class="header-inner">
            <a href="index.php?page=home"><img src="img/logo.png"></a>
            <div class="header-mobile-button">
                <button class="toggle-menu-button"></button>
            </div>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=newstudents">新入生の皆さんへ</a></li>
                        <li><a href="index.php?page=notice">おしらせ</a></li>
                        <li><a href="index.php?page=question">質問など</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="pic">
    <?php
      date_default_timezone_set('Asia/Tokyo');
      $month = date("m");
      if("home"==$page){
      if ($month==2||$month==3){
   echo" <img src=","img/fornewstudent.png",">";
            }else{
                echo"<img src","img/otamesi.png",">";
            };
      };
?>
    </div>
    <main class="main">
   
    <?php
     date_default_timezone_set('Asia/Tokyo');
        $month = date("m");
        if("home"==$page){
        if ($month==2||$month==3){
    echo
        "<div class=","home",">
        
        <p><b>新入生のみなさん、ご入学おめでとうございます!</b><br>
        このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。<br>
        新入生向けコンテンツは<a href=","index.php?page=newstudents",">こちら</a>‼</p>";
              }else{
                  echo"<div class=","home",">
                  <h2>静浜学生情報サイトへようこそ!</h2>";
              };
              echo"<h2>大学生活お役立ちコンテンツ</h2>
              <ul>
                <li>ShizudaiTech</li>
              <p>非常に不便であると有名な静大の学情を便利にしてくれるツールをまとめたウェブサイトです。<br>
              アクセスは<a href=","https://shizudai-tech.netlify.app/",">こちら</a>から！</p>
              <li>楽天みんなのキャンパス</li>
              <p>授業のレビューサイトです。授業の評価や内容等を閲覧することができます。<br>
              授業を取る前に一度見てみるのはいかがでしょうか？<br>
              アクセスは<a href=","https://campus.nikki.ne.jp/?module=lesson&univ=%C0%C5%B2%AC%C2%E7%B3%D8",">こちら</a>から！</p>
              </div>";
            };
        if("newstudents"==$page){
            echo"<div class=","first-check","><h1>初めにチェック‼
            </div>
            
            <div class=","literacy",">
            <h1>今すぐ知ってほしいネットリテラシー</h1>
            <p>大学生活を送るうえで、SNSは切っても切り離せない存在ですが、当然危険も潜んでいます。<br>
            新入生の皆さんにはこれからSNSを使う上で知って欲しいことがあります。まずは、ぜひこのスライド(pdf)を見てください。<br>
            また、このスライドについてはご自由にダウンロードして頂き活用することも可能です。</p>
            </div>
            <div class=","iframe-wrap",">
　          <iframe src=","pdfjs-2.13.216-dist/web/viewer.html?file=../../pdf/newstudent.pdf","  frameboader=","0","></iframe>
            </div>
          
            <div class=","add-info",">
            <h2>補足情報</h2>
            <p><b>宗教勧誘等を受けた直後にそのことをSNSに投稿しないようにしてください</b><br>
            勧誘日時と大学名や住所を組み合わせてアカウントを特定される危険があります。<br>
            仮に大学名について嘘をついたとしても住所から推察可能です。<br>
            少なくとも勧誘を受けた当日に投稿しないようにしてください。<br>
            <br>
            また、SNSで知り合った人と<b>1対1で対面すること</b>や<b>無許可でSNSに顔を掲載する行為</b>は控えるようにしましょう。<br>
            あなたとその友人に何があるかが本当にわからないです。<br>
            また、SNSでの顔の公開は絶対に控えるようにしてください。</p>
            </div>
            <div class=","info-before",">
            <h1>入学前に知って欲しい情報</h1>
            <h2>両キャンパスの人に知ってほしい情報</h2>
            <li>生協関連</li>
            <p>TOEICや電子辞書については、<b>購入する必要はないです</b>。<br>
            書店などのTOEIC対策のものなど自分に合ったものを買うのが一番ですし、あまりたくさんの教材を購入しても忙しい大学生活においては使う事はあまりないでしょう。<br>
            第二外国語で電子辞書を使用するのですが、これに関しては紙辞書を購入するか、紙辞書が苦手な人は追加コンテンツを購入することも可能です。<br>
            電子辞書は高額なモノなので<b>本当に必要なものなのか考えてからでも遅くはない</b>と考えます。<br>
            また、学食パスについて迷っている人がいると思いますが、夜ご飯も大学で食べるという人以外は購入は見送っておき、秋学期に再度考えておくことをおすすめします。<br>
            というのもオンライン授業が多いのでお昼時に大学にいるかどうかというのは分りません。ですから、逆に学食パスにより無駄な移動時間が生じてしまう可能性があります。
            <b>個人の生活スタイルに応じて購入は考えましょう。</b></p>
            <li>Twitter</li>
            <p>情報収集に非常に役立ちます。入学前から<a href=","https://twitter.com/hashtag/%E6%98%A5%E3%81%8B%E3%82%89%E9%9D%99%E5%A4%A7?src=hashtag_click&f=live",">#春から静大</a>等を調べることで友達作りができるかもしれません。<br>
            特に浜キャンにおいては優秀な人がTwitterで情報発信をしている傾向にあるので入学後もTwitterを閲覧することをお勧めします。<br>
            また、生協や図書館等といった静大に関する施設のTwitterもフォローしたり、興味のあるサークルの情報収集をすることをお勧めします。</p>

            <details>
            <summary>PCについてはこちら!</summary>
            <h2>はじめに</h2>
            <p>ここでは各自購入が必要なPCについての説明をしています。<br>
            まずは<b>生協PC</b>について、その後に<b>絶対に避けたほうが良いPC</b>や<b>おすすめのPC</b>についてもご紹介します。<b>ただし</b>PCについて何もわからないという人は下の「PCスペック表の見方」をチェックしてからこれらを確認してください。<br>
            また、昨今の半導体不足によりPCによっては納品に一か月以上かかるものもあります。<b>情報学部の人は遅くとも4月のPC設定会まで、それ以外の人は授業開始までにパソコンが手元に入るかを確認してから</b>購入してください。<br>
            </p>
            <h2>生協PC等について</h2>
            <p>TwitterやYouTubeなどのSNSで生協PCはダメだ!等の情報が散見されますが、これは<b>人によります</b>。<br>
            <b>PCカバーをつけずに自転車のかごにPCを入れるような人</b>、<b>PCの画面部分を持ち、PCを持ち上げて運ぼうとする人</b>など極めて基礎的なコンピュータに対する知識がない人、モノを大切に扱う能力のない人は<b>非常に強固な保障の効いた生協PCの購入をおすすめします</b>。<br>
            <b>しかしながら</b>そうでない人に関しては生協以外を通して購入した方が金銭的な負担は低いと思われますし、何より自分に合ったパソコンを選ぶことができるので生協以外でのPC購入がおすすめです。<br>
            プリンタやサブモニタなどの生協PCのセット商品については、生協で購入する必要はないです。ただし、作業をする上では<b>中の人の体感上1.8倍くらい</b>作業効率が上昇するのでサブモニタは購入するべきだと考えています。<br>
            <b>一人暮らしの情報学部以外の方</b>は、プリンタも必須です。（情報学部には枚数制限がありますが、無償で使えるプリンタがあります。）</p>
            <details>
            <summary>PCスペック表の見方(わからない方向け）</summary>
            <h2>PCスペック表とは?</h2>
            <p>PCの性能の事を「スペック」と呼びます。<br>
            PCは単純比較することが難しい機械なので、部品ごとの性能を見ることによって初めて自分の求めている性能のPCを購入することができます。<br>
            つまり、PCスペック表とはPCの様々な部品の性能を一覧にして見やすくしたものです。<br>
            ここでは、そんな様々な部品についての知っていただき、PC購入の助けになれば幸いです。</p>
            <h2>各部品の名称と機能等について</h2>
            <ul>
            <li>CPU</li>
            <p>PCの頭脳に値する部品です。詳しい説明は割愛させていただきますが、Intel社のCoreシリーズや、AMD社のRyzenシリーズ等があり、それぞれのメーカーで、3,5,7,9の名前を付けた製品があります。数字の大きいほど性能が上がります。Intel社とAMD社の製品で比較するとIntel社の製品の方が安定性に長けており、同じ番号での比較であるとIntel社はやや性能が高いですが、お値段もその分お高めです。<br>
            Intel社やAMD社はお互いに<b>CoreやRyzenではない</b>CPUを製造していますが、廉価版ゆえに性能は非常に低く、学業には向かないので購入は絶対にひかえてください。</p>
            <li>メモリ</li>
            <p>RAMとも呼ばれます。よく机の大きさに例えられますが、このメモリの量でどれだけのアプリケーション等を起動しておけるかが決まります。<br>
            小さすぎると学業に必要なソフトを満足に扱えないので絶対に8GB以上のものを購入しましょう。</p>
            <li>記憶量、記憶媒体</li>
            <p>SSDやHDD、eMMCの文字と共に○○GBと表記されることが多いです。まず、SSDやHDD,eMMC等に関してですが、記憶媒体の形式をさしています。場合によっては転送速度が○○MB/sのような形で示されることもありますが、これが速いほど読み込みが早いことを示しています。<br>
            これが速いとアプリやPC本体の立ち上げが高速になりますが、逆に遅いと満足にアプリを扱えない事が多々あるので低速な記憶媒体であるHDDやeMMCを搭載しているPCは絶対に購入しないようにしてください。<br>
            また、「256GB」,「512GB」などの表記がありますが、これは容量の大きさです。256GB以上のものを購入しましょう。</p>
            <li>画面サイズ</li>
            <p>PCの画面の大きさを示しています。大きいほど作業効率は上がりますが、持ち運びが不便です。</p>
            <li>GPU</li>
            <p>単純計算に特化した部品です。大半のノートパソコンにはCPUに内蔵されていますが、ゲームや動画編集をしたい人は別でついているものを購入することをおすすめします。</p>


            </details>
            <h2>絶対に購入してはいけないPC</h2>
            <p>下記の条件を<b>ひとつでも満たすもの</b>は購入しないことをおすすめします。</p>
            <ul>
            <li>・CPUがIntel社のCoreシリーズ,AMD社のRyzenシリーズ<b>以外</b>のもの</li>
            <p><b>工学部、情報学部の方以外</b>はApple社のM1チップ搭載のMacbookを使用することも可能ですが、MacOSになれていない人が調子に乗ってMacを使うのはお勧めしません。<br>
            周りにMacを使っている人が非常に少ないことが予想されますので何かトラブルがあった際に対処することが困難となってしまいます。<br>
            Macを買うのは家庭のPCがMacである等、逆にWindows11搭載製品を買うと困る人だけにしましょう。<br>
            また、<b>教育学部美術専修又は地域創造学館アートマネジメントコース</b>の人はMacを使ってもいいかもしれません。詳しくは、「学部別おすすめPC」において記載します。<br>
            <b>工学部、情報学部の人はそのような場合であってもWindows11搭載のものを購入してください。</b>Windows11でないと授業を受けることが不可能、もしくは非常に困難な授業がたくさんあります。<br>
            また、同様の理由でOSがwindowsであってもCPUがArm系のものは絶対に避けてください。もちろん、<b>Windows11に対応していない古いCPU搭載のもの</b>も絶対にダメです</p>
            <li>・重量が2Kg以上のもの、画面サイズが15インチより大きいもの</li>
            <p>重量が重かったり、画面サイズが大きいと持ち運びが不便になります。<br>
            大学にPCを持ち込んで勉強することも多々ありますので購入するPCは2Kg以下かつ画面サイズが15インチ以下のものを選択しましょう。<br>
            重量は軽ければ軽いほど移動時の負担は減りますが、重量を削減すると画面も比例して小さくなる傾向にあります。そうなると作業効率が弱まってしまうのでそのあたりは自分の体力等と相談してPCを購入すると良いと思います。<br>
            また、PCを購入したら<b>絶対にPCの大きさにあったPCバッグもしくはケースを購入してください。</b>持ち運ぶという観点から考えると、これがないとほぼ間違いなくPCは壊れてしまいます。
            <li>・ストレージがSSDではないものや容量が256GB未満のもの、メモリの容量が8GB未満のもの</li>
            <p>レポート等を保存する事を考えると最低256GBは必要です。<b>趣味などに使う予定のある人はさらに大容量のストレージが必要になります。</b><br>
            また、ストレージがHDD、eMMCのものは絶対に避けましょう。起動や動作がSSDのものに比べて段違いに遅いです。<br>
            また、メモリ容量が8GB未満のものであるとそもそも満足にPCが動作しない可能性があります。絶対に避けましょう。
            
         
            </ul>
            <h2>学部別おすすめのPC</h2>
            <p>学科ごとにお勧めのPCを記載しています。<br>
            中の人はパソコンヲタクではありますが情報の不備等がある可能性があるので、あくまでも参考程度にご覧ください。</p>
            
            <details>
            <summary>情報学部</summary>
            <p>先述しましたが、MacやArm系のCPUの製品は絶対に避けてください。授業では動かないソフトがありますので、最悪買い替えが必要になってしまいます。</p>
            <h2>ゲームも楽しみたい人へ</h2>
            <p>ゲームをするためにはグラフィックボードは必須です。ですので、グラフィックボード搭載のPCを買うとよいでしょうがFPS等の非常に高いスペックを要求されるゲームをする場合はデスクトップPCを別に購入することをお勧めします。<br>
            中程度のゲームであればグラフィックボード搭載のノートPCでも対応は可能です。<br>
            そのような用途のPCを求めている人にはGeForce RTX™ 3050 Tiを搭載していながらも持ち運びが可能な軽量さを兼ね備えている<a href=","https://www.dell.com/ja-jp/shop/%E3%83%87%E3%83%AB%E3%81%AE%E3%83%8E%E3%83%BC%E3%83%88%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3/inspiron-15-plus-%E3%83%97%E3%83%A9%E3%83%81%E3%83%8A/spd/inspiron-15-7510-laptop/cai215hspchs16on3ojp#features_section",">Inspiron 15 Plus</a>をおすすめします。ただし、少々大きいとはおもいます。</p>
            <h2>それ以外の人へ</h2>
            <p>情報学部の授業では多量のメモリを必要とするソフトを使う事が多々あります。ですので、メモリ16GBを搭載した<a href=","https://www.dell.com/ja-jp/shop/cty/pdp/spd/xps-13-9305-laptop/cax6300hlits16on3ojp?gacd=9643257-23732657-5785552-266271997-127759547&dgc=af&VEN1=/Vv6e0WKODg-HCJId2iHEvWGkwMrvmNQ0w&dclid=CIWX7aCls_YCFdMMvQodq9kF2w&nclid=DIBttjKlZEo-8QBoXQvCfzuePsqAVOgbZNvNUi6irqfJQk-ScuiSR2d27tOCOlWS","</a>XPS 13</a>や<a href=","https://www.lenovo.com/jp/ja/kakaku/notebooks/ideapad/flex-5-series/IdeaPad-Flex-5-14ITL-05/p/82HS00X3JP",">IdeaPad Flex 550i</a>をおすすめします。<br>
            また、「価格com」というサイトにて情報学部の皆さんが快適に授業を受けられるスペックのPCの一覧表を作成しました。<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec101=39,53,54,56&pdf_Spec105=29,30&pdf_Spec113=11,13,16,18,20&pdf_Spec116=2&pdf_Spec301=11-13,13-14.5&pdf_Spec303=-1.0,1.0-1.5,1.5-2.0&pdf_Spec307=1000-,512-1000&pdf_Spec308=16-32,32-",">こちら</a>よりサイトに飛んでいただいて、自分好みのPCを選ぶのはいかがでしょうか？</p>
            </details>
            <details>
            <summary>工学部</summary>
            <p>プログラミング等を行うため、他学部に比べて比較的高いスペックのPCが要求されます。<br>
            そのため、メモリが16GB、SSD容量が512GBで、Intel Core™ i7-1165G7 を搭載した<a href=","https://www.dell.com/ja-jp/shop/cty/pdp/spd/xps-13-9305-laptop/cax6300hlits16on3ojp?gacd=9643257-23732657-5785552-266271997-127759547&dgc=af&VEN1=/Vv6e0WKODg-HCJId2iHEvWGkwMrvmNQ0w&dclid=CIWX7aCls_YCFdMMvQodq9kF2w&nclid=DIBttjKlZEo-8QBoXQvCfzuePsqAVOgbZNvNUi6irqfJQk-ScuiSR2d27tOCOlWS","</a>XPS 13</a>や<a href=","https://www.lenovo.com/jp/ja/kakaku/notebooks/ideapad/flex-5-series/IdeaPad-Flex-5-14ITL-05/p/82HS00X3JP",">IdeaPad Flex 550i</a>をおすすめします。
            また、「価格com」というサイトにて工学部の皆さんが快適に授業を受けられるスペックのPCの一覧表を作成しました。<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec101=39,53,54,56&pdf_Spec105=29,30&pdf_Spec113=11,13,16,18,20&pdf_Spec116=2&pdf_Spec301=11-13,13-14.5&pdf_Spec303=-1.0,1.0-1.5,1.5-2.0&pdf_Spec307=1000-,256-512,512-1000&pdf_Spec308=16-32,32-",">こちら</a>よりご確認ください。</p>
            </details>
            <details>
            <summary>人文社会科学部、農学部、理学部</summary>
            <p>レポート等を書いたりするのにパソコンは必須ですがハイスペックである必要はありません<br>
            しかしながら、ある程度のスペックを確保すると快適に勉強することができるので、AMD Ryzen™ 7 5700Uを搭載した<a href=","https://deals.dell.com/ja-jp/productdetail/damd",">Inspiron 14 AMD</a>をお勧めします。<br>
            また、人文社会学部や農学部の皆さんが快適に作業できるスペックのPC一覧を「価格com」というサイトにて作成しました。<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec012=1&pdf_Spec101=39,40,52,53,54,56&pdf_Spec113=16,18,19,20&pdf_Spec201=1800-2000,2000-2400,2400-2600&pdf_so=p1",">こちら</a>からご確認ください。</p>
            <h2>理学部の方へ</h2>
            <p>数式処理システムMathematicaや分子構造描画ツールChemOffice(ChemDraw)などの重たい各種アプリケーションを使うこともあるので、Corei7かRyzen7の最新世代のCPUを搭載した製品を購入すると快適に授業を受けられると思います。<br>
            <a href=","https://www.dell.com/ja-jp/shop/cty/pdp/spd/xps-13-9305-laptop/cax6300hlits16on3ojp?gacd=9643257-23732657-5785552-266271997-127759547&dgc=af&VEN1=/Vv6e0WKODg-HCJId2iHEvWGkwMrvmNQ0w&dclid=CIWX7aCls_YCFdMMvQodq9kF2w&nclid=DIBttjKlZEo-8QBoXQvCfzuePsqAVOgbZNvNUi6irqfJQk-ScuiSR2d27tOCOlWS","</a>XPS 13</a>や<a href=","https://www.lenovo.com/jp/ja/kakaku/notebooks/ideapad/flex-5-series/IdeaPad-Flex-5-14ITL-05/p/82HS00X3JP",">IdeaPad Flex 550i</a>などは安定性と高性能を両立している最新世代のCorei7を搭載しているのでおすすめです。<br>
            また、「価格com」というサイトにて理学部の皆さんが快適に授業を受けられるであろうスペックのPCの一覧表を作成しました。<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec101=39,53,54,56&pdf_Spec105=29,30&pdf_Spec113=11,13,16,18,20&pdf_Spec116=2&pdf_Spec301=11-13,13-14.5&pdf_Spec303=-1.0,1.0-1.5,1.5-2.0&pdf_Spec307=1000-,256-512,512-1000&pdf_Spec308=16-32,32-",">こちら</a>よりご確認ください。</p>
            </details>
            <details>
            <summary>教育学部、地域創造学環</summary>
            <h2>教育学部美術専修の人、地域創造学環のアートマネジメントコースの人へ</h2>
            <p>デザイン分野ではMacを使う事が多いそうなのでMacを購入して慣れておくことも良いのではないかと思います。<br>
            しかしながら、教師になりたい方は学校現場では基本的にWindowsを使用するという観点から、WindowsPCを推奨します。<br>
            また、AdobeのillustratorやPhotoShop等といった比較的重いソフトを使用するためスペックの高いPCを購入すると快適に作業できると思います。<br>
            おすすめのPCは<a href=","https://www.apple.com/jp_edu_1460/shop/buy-mac/macbook-air",">MacBookAir</a>です。作品をたくさん作るのであれば512GBモデルを選択した方がいいのではないかと思います。<br>
            また、より作業を快適にするためにメモリ容量の多いものを購入することをおすすめします。</p>
          
            <h2>教育学部技術教育専修の人へ</h2>
            <p>他学部に比べて高いスペックのPCが要求されます。授業を快適に行うには高いスペックのPCが要求されるため、メモリが16GB、SSD容量が512GBで、Intel Core™ i7-1165G7 を搭載した<a href=","https://www.dell.com/ja-jp/shop/%E3%83%87%E3%83%AB%E3%81%AE%E3%83%8E%E3%83%BC%E3%83%88%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3/xps-13-%E3%83%97%E3%83%A9%E3%83%81%E3%83%8A-%E3%82%B7%E3%83%AB%E3%83%90%E3%83%BC/spd/xps-13-9305-laptop/cax6300hlits16on3ojp#features_section","</a>XPS 13</a>や<a href=","https://www.lenovo.com/jp/ja/kakaku/notebooks/ideapad/flex-5-series/IdeaPad-Flex-5-14ITL-05/p/82HS00X3JP",">IdeaPad Flex 550i</a>をおすすめします。<br>
            また、「価格com」というサイトにて技術教育専修の人が快適に授業を受けられるスペックのPC一覧を作成しました。<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec012=1&pdf_Spec101=39,53,54,56&pdf_Spec105=29,30&pdf_Spec113=11,13,16,18,20&pdf_Spec116=2&pdf_Spec301=11-13,13-14.5&pdf_Spec303=-1.2&pdf_Spec307=1000-,512-1000&pdf_Spec308=16-32,32-",">こちら</a>よりご覧ください。
            </p>
            <h2>それ以外の人へ</h2>
            <p>レポート等を書いたりするのにパソコンは必須ですがハイスペックである必要はありません<br>
            しかしながら、ある程度のスペックを確保すると快適に勉強することができるので、AMD Ryzen™ 7 5700Uを搭載した<a href=","https://deals.dell.com/ja-jp/productdetail/damd",">Inspiron 14 AMD</a>をお勧めします<br>
            また、上記以外の人向けのPC一覧も作成してあります<a href=","https://kakaku.com/pc/note-pc/itemlist.aspx?pdf_Spec012=1&pdf_Spec101=39,40,52,53,54,56&pdf_Spec113=16,18,19,20&pdf_Spec201=1800-2000,2000-2400,2400-2600&pdf_so=p1",">こちら</a>からご確認ください
            </p>
            </details>
            
            
            </details>
            <details>
            <summary>一人暮らしをする人へ</summary>";
            if($month==3){
                echo"<h2>まだアパートを決めていない人へ</h2>
                <p>物件はどんどん埋まっていっています。今すぐに不動産屋にアポを取って、このウェブサイトである程度土地について勉強してから物件探しをしてみてください。";
            };
            echo"<details>
            <summary>浜キャン生はこちら!</summary>
            <h2>坂上と坂下について</h2>
            <p>浜キャンは台地の上にあります。<br>
            その台地の上と下をつなぐ道路の坂がかなりあるため、毎日の通学を考えるとかなり大変かもしれません。<br>
            下に表示されているGoogleストリートビューは浜キャンから150メートルほど離れた場所です。<br>
            見て分かる通り、かなり急な長い坂になっています。因みに、坂の先にある建物は浜キャンの建物の一つです。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!4v1646491301177!6m8!1m7!1svODgy7NAaoLXwj9PMnF-SQ!2m2!1d34.72891481290574!2d137.7144885379222!3f153.99774243815293!4f-5.418017547228487!5f1.598266724894137"," width=","100%"," height=","450px"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            <p>坂上も坂下もスーパーなどは一通り揃っているので生活の便利さに大きな差はありませんが、通学にの便利さには大きな差があると言えるでしょう。<br>
            また、原付での通学は2Km以上でないといけないので大学近くの坂下のアパートを借りてしまうと「キツイから原付にする」という事もできません。<br>
            <b>ただし、坂上の家賃は坂下の大体1.5倍ほどします。</b>お財布と相談しながら物件を決めてはいかがでしょうか？。<br>
            因みに大学から浜松駅までは自転車で20分ほどです。自転車でよく駅近くに向かいたい方は浜キャンの南～東側の物件をおすすめします。<br>
            また、下のGoogleマップの通り、スーパーなどはキャンパスの北西～北東にかけて多いです。<br>
            ただし、キャンパスのすぐ南にあるドラッグストアは比較的食料品が豊富なのでキャンパス南に住むと買い物に苦労するという事はあまりありません。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13116.714724393394!2d137.7221326507909!3d34.72589021113813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z44K544O844OR44O8!5e0!3m2!1sja!2sjp!4v1646495360235!5m2!1sja!2sjp"," width=","100%"," height=","450"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            
            </details>
            <details>
            <summary>静キャン生はこちら!</summary>
            <h2>大谷と小鹿、池田の違いについて</h2>
            <p>静大生向けアパートにはこれら三つの地名がよく出ると思います。<br>
            これら三つの地域にはそれぞれ特徴がありますのでアパート選びの参考にしてくださいね!</p>
            <ul>
                <li>大谷</li>
                <p>大谷は、一言で言うと静大のお膝元です。単純に通学を楽にしたいのであれば、大谷一択でしょう。<br>
                しかしながら、大谷の静大生向けのアパートが集中しているスーパーや薬局など地域は生活に必要な施設からはかなり離れています。<br>
                コンビニはありますが、生活必需品の購入などのために遠出する必要があります。</p>
                <li>小鹿</li>
                <p>小鹿は静大から一歩離れた地域です。静大から徒歩で10分から20分ほど離れています。<br>
                大谷と比べると静大生行きつけの飲食店や、スーパーなどがあります。そのため生活をするためには比較的便利な地域だと言えると思います。<br>
                徒歩で通学することのできる地域はここまでだと思います。</p>
                <li>池田</li>
                <p>池田は東静岡駅周辺の地域です。このあたりでは最も発展した地域だと言えるでしょう。<br>
                そのため、生活に困ることはないでしょう。ただし、この地域から静大までは徒歩で40分ほど、自転車だと15分ほど掛かります。<br.
                キャンパス内での移動を考えると、朝に強い人でないといけないかもしれません。</p>
            </ul>
            <p>静大周辺の地域の特性上、自転車は必須になると思います。また、この下に参考のために小鹿の地図を挿入しました。</p>
            <iframe src=","https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13077.436108975902!2d138.42748202249592!3d34.9726707280903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a365cde44aa6d%3A0x7ff997de188a91c5!2z44CSNDIyLTgwMjEg6Z2Z5bKh55yM6Z2Z5bKh5biC6ae_5rKz5Yy65bCP6bm_!5e0!3m2!1sja!2sjp!4v1646325394556!5m2!1sja!2sjp"," width=","100%"," height=","450"," style=","border:0;"," allowfullscreen=",""," loading=","lazy","></iframe>
            </details>
            </details>
            <details>
            <summary>浜キャン生に知ってほしいこと</summary>
            <h2>ウェルカムキャンパス</h2>
            <p>みんなでレクリエーションをすることによって友達作りができるかもしれません<br>
            また、先輩とも交流できるかもしれません</p>
            <details>
            <summary>行動情報学科の人へ</summary>
            <p>一年後期のプログラミングは三つの学科の中で一番きついと言われています。<br>
            今のうちにjavaをやっておいて損はないと思います。</br>
            また、この学科はよく言えば自由、悪く言えば自分のやりたいことが明確に無いと迷いやすいのでこのつかの間の休息期間を使って自分のやりたいことを探してみるといいと思います。<br>
            べつに勉強に関わることでなくても、例えば「サークルをがんばる！」だとか「友達を作る」でもいいのでそういった自分の生活のハリになるような目標を立ててみると充実した大学生活を送ればいいのではないかと思います。</p>
            </details>
            </details>
            <details>
            <summary>静キャン生に知ってほしいこと</summary>
            <h2>プレ入学式</h2>
            <p>みんなでレクリエーションをすることによって友達作りができるかもしれません<br>
            また、先輩とも交流できるかもしれません</p>
            <details>
            <summary>夜間主の人へ</summary>
            <p>昼間なら2・3年生配当の科目が1年生から履修できるのは夜間のアドバンテージです。<br>
            今年開講された科目が来年開講されるとは限りません。<br>
            興味のある分野の科目は、多少無理をしてでも取っておくことをおすすめします。</p>
            </details>
            </details>
           
            <p>不安なことや慣れないことが多くて大変だと思いますが、大学生活は楽しいこともたくさんありますよ!<br>
            なにか分からないことがあったらTwitterにいる先輩達に聞いてくださいね!<br>
            (中の人含め）みんな喜んで答えてくれると思います！</p>
            </div>";
        };
        if("notice"==$page){
            echo"<div class=","notice",">
            <h1>見てくれた皆さんへのお知らせ</h1>
            <p>宣伝欄と更新履歴についてです。</p>
            <h2>アマゾンアソシエイト</h2>
            <p>
            皆さんが<a href=","https://amzn.to/37gSfSB",">こちら</a>のリンクを踏んでアマゾンに飛んでいただけると僕に少しばかり紹介料が入る仕組みになっています。<br>
            もちろん、皆さんが損するような仕組みではないのですが、月額680円のサーバー代金などの足しにさせていただけると幸いです。<br>
            また、僕が得するのはいやだという方もいらっしゃると思うので、今後アフィリエイトリンク等を使用することがあれば、僕にお金の入らないリンクを併記いたしますのでよろしくお願いします。
            </p>
            <h2>学情チャンプロジェクト</h2>
            <p>学務情報システムというあまり優秀ではないことでおなじみのシステムの擬人化コンテンツの運営委員会です。<br>
            不定期でイラストコンテストなどを開催しています。過去のコンテストについてや、公式の楽曲等について、創作ガイドライン等もあるのでぜひ<a href=","https://gakujochan.com",">学情チャンのウェブサイト</a>をチェックしてみてください。<br>
            もしもこのプロジェクトに参加したくなった場合は<a href=","https://twitter.com/gakujochan_info",">学情チャンプロジェクトの運営Twitter</a>にDMを送ってください!<br>
            また、ファンアートについてはいつでもお待ちしています！</p>
            <a class=","twitter-timeline"," data-lang=","ja"," data-height=","500"," href=","https://twitter.com/Gakuzyo_chan?ref_src=twsrc%5Etfw",">Tweets by Gakuzyo_chan</a> <script async src=","https://platform.twitter.com/widgets.js"," charset=","utf-8","></script> 
            <h2>更新履歴</h2>
            <time datetime=","2022-03-11",">2022/3/6</time>
            <p>アマゾンアソシエイトについてを追記しました<br>
            また、新入生へのネットリテラシーについての情報更新も行いました。</p>
            <time datetime=","2022-03-06",">2022/3/6</time>
            <p>このウェブサイトを新規製作しました</p>
            <time datetime=","2022-03-08",">2022/3/8</time>
            <p>不具合の修正を行いました</p>
            </div>";
        };
        if("question"==$page){
            echo"
            <div class=","question",">
            <h2>ウェブサイト運営者への質問</h2>
            <p>質問や訂正事項,掲載してほしい情報等がありましたら、<a href=","https://twitter.com/ghevp",">私のTwitter</a>にダイレクトメッセージを送ってくださると幸いです。<br>
            また、もしも何か質問があればいつでも待っているのでそちらに関してもDMへどうぞ<br>
            また、このウェブサイトの一番下にシレっとフォローボタンを配置しています。フォローしてくださると中の人が喜ぶのでフォローよろしくお願いします。</p>
            <a href=","https://twitter.com/messages/compose?recipient_id=&ref_src=twsrc%5Etfw"," class=","twitter-dm-button"," data-screen-name=","ghevp"," data-show-count=","false",">Message @ghevp</a><script  async  src=","https://platform.twitter.com/widgets.js","  charset=","utf-8","></script>
            <h2>協力者募集</h2>
            <p>このウェブサイトでは今後も更新作業を続ける予定です。もしも更新作業に協力してくれるという方がいましたら、作業用のdiscordに招待致しますのでDMを送ってくださると幸いです。</p>
            </div>";
        };
       
        
           
    ?>
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="静浜学生情報サイトを見てきました！" data-url="https://studinfo-shizuhama.ghevp.com/index.php?page=home" data-via="ghevp" data-lang="ja" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </main>
    <footer class="footer">

    
    <nav class="site-menu">
                    <ul>
                    <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=newstudents">新入生の皆さんへ</a></li>
                        <li><a href="index.php?page=notice">おしらせ</a></li>
                        <li><a href="index.php?page=question">質問など</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>

                <a class="footer-logo" href="index.php?page=home"><img src="img/logo.png"></a>
                <p class="attention">注意:このウェブサイトは静岡大学をはじめとした大学・企業・その他機関とは一切関係ありません。</p>
                <p class="copyright"><small>copyright <a href="https://ghevp.com">ぐゑ</a> all rights reserved.</small></p>
                <a href="https://twitter.com/ghevp?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">このウェブサイト作成者のTwitterをフォロー</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </footer>   
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
  </body>
</html>