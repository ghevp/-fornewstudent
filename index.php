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
   <p>test</p>
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
                        <li><a href="index.php?page=question">困った時</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
    <?php
     date_default_timezone_set('Asia/Tokyo');
        $month = date("m");
        if("home"==$page){
        if ($month==2||$month==3){
    echo
        "<p><b>新入生のみなさん、ご入学おめでとうございます!</b><br>
        このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              }else{
                  echo"<p>このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              };
              echo"<p>a</p>";
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
　          <iframe src=","pdf/newstudent.pdf","  frameboader=","0","></iframe>
            </div>
            <div class=","add-info",">
            <h2>補足情報</h2>
            <p><b>宗教勧誘等を受けた直後にそのことをSNSに投稿しないようにしてください</b><br>
            勧誘日時と大学名や住所を組み合わせてアカウントを特定される危険があります。<br>
            仮に大学名について嘘をついたとしても住所から推察可能です。<br>
            少なくとも勧誘を受けた当日に投稿しないようにしてください。<br></p>
            </div>
            <div class=","info-before",">
            <h1>入学前に知って欲しい情報</h1>
            <h2>両キャンパスの人に知ってほしい情報</h2>
            <details>
            <summary>PCについてはこちら!</summary>
            <h2>はじめに</h2>
            <p>TwitterやYouTubeなどのSNSで生協PCはダメだ!等の情報が散見されますが、これは<b>人によります</b>。<br>
            <b>PCカバーをつけずに自転車のかごにPCを入れるような人</b>、<b>PCの画面部分を持ち、PCを持ち上げて運ぼうとする人</b>など極めて基礎的なコンピュータに対する知識がない人、モノを大切に扱う能力のない人は<b>非常に強固な保障の効いた生協PCの購入をおすすめします</b>。<br>
            <b>しかしながら</b>そうでない人に関しては生協以外を通して購入した方が金銭的な負担は低いと思われますし、何より自分に合ったパソコンを選ぶことができるので生協以外でのPC購入がおすすめです。<br>
            ここでは、各学部ごとにお勧めのPCを紹介するとともに<b>絶対に避けたほうが良いPC</b>についてもご紹介します。</p>
            <h2>絶対に購入してはいけないPC</h2>
            <p>下記の条件を<b>すべて満たさない</b>PCを購入することを強くお勧めします。
            <ul>
            <li>CPUがIntel社のCoreシリーズ,AMD社のRyzenシリーズ<b>以外</b>のもの</li>
            <p><b>工学部、情報学部の方以外</b>はApple社のM1チップ搭載のMacbookを使用することも可能ですが、MacOSになれていない人が調子に乗ってMacを使うのはお勧めしません。<br>
            周りにMacを使っている人が非常に少ないことが予想されますので何かトラブルがあった際に対処することが困難となってしまいます。<br>
            Macを買うのは家庭のPCがMacである等、逆にWindows11搭載製品を買うと困る人だけにしましょう。<br>
            また、<b>教育学部美術専修又は地域創造学館アートマネジメントコース</b>の人はMacを使ってもいいかもしれません。詳しくは、「学部別おすすめPC」において記載します。<br>
            <b>工学部、情報学部の人はそのような場合であってもWindows11搭載のものを購入してください。</b>Windows11でないと授業を受けることが不可能、もしくは非常に困難な授業がたくさんあります。<br>
            また、同様の理由でOSがwindowsであってもCPUがArm系のものは絶対に避けてください。</p>
            <li>重量が2Kg以上のもの、画面サイズが15インチより大きいもの</li>
            <p>重量が重かったり、画面サイズが大きいと持ち運びが不便になります。<br>
            大学にPCを持ち込んで勉強することも多々ありますので購入するPCは2Kg以下かつ画面サイズが15インチ以下のものを選択しましょう。<br>
            重量は軽ければ軽いほど移動時の負担は減りますが、重量を削減すると画面も比例して小さくなる傾向にあります。そうなると作業効率が弱まってしまうのでそのあたりは自分の体力等と相談してPCを購入すると良いと思います。<br>
            また、PCを購入したら<b>絶対にPCの大きさにあったPCバッグもしくはケースを購入してください。</b>持ち運ぶという観点から考えると、これがないとほぼ間違いなくPCは壊れてしまいます。
            <li>ストレージSSDではないものや容量が256GB未満のもの、メモリの容量が8GB未満のもの</li>
            <p>レポート等を保存する事を考えると最低256GBは必要です。<b>趣味などに使う予定のある人はさらに大容量のストレージが必要になります。</b><br>
            また、ストレージがHDD、eMMCのものは絶対に避けましょう。起動や動作がSSDのものに比べて段違いに遅いです。<br>
            また、メモリ容量が8GB未満のものであるとそもそも満足にPCが動作しない可能性があります。絶対に避けましょう。
            
         
            </ul>
            <h2>学部別おすすめのPC</h2>
            <p>学科ごとにお勧めのPCを記載しています。<br>
            中の人はパソコンヲタクではありますが情報の不備等がある可能性があるので、あくまでも参考程度にご覧ください。</p>
            <details>
            <summary>情報学部</summary>
            <p>先述しましたが、Macは絶対に避けてください。というのもOSだけではなく、現代のMacに搭載されているCPUと一般的なWindows11の
            <h2>ゲームも楽しみたい人へ</h2>
            <p>ゲームをするためにはグラフィックボードは必須です。ですので、グラフィックボード搭載のPCを買うとよいでしょうがFPS等の非常に高いスペックを要求されるゲームをする場合はデスクトップPCを別に購入することをお勧めします。<br>
            中程度のゲームであればグラフィックボード搭載のノートPCでも対応は可能です。<br>
            そのような用途のPCを求めている人にはGeForce RTX™ 3050 Tiを搭載していながらも持ち運びが可能な軽量さを兼ね備えている<a href=","https://www.dell.com/ja-jp/shop/%E3%83%87%E3%83%AB%E3%81%AE%E3%83%8E%E3%83%BC%E3%83%88%E3%83%91%E3%82%BD%E3%82%B3%E3%83%B3/inspiron-15-plus-%E3%83%97%E3%83%A9%E3%83%81%E3%83%8A/spd/inspiron-15-7510-laptop/cai215hspchs16on3ojp#features_section",">Inspiron 15 Plus</a>をおすすめします。</p>
            <h2>それ以外の人へ</h2>
            <p>情報学部の授業では多量のメモリを必要とするソフトを使う事が多々あります。ですので、メモリ16GBを搭載した<a href=","https://www.dell.com/ja-jp/shop/cty/pdp/spd/inspiron-15-3511-laptop/cai3453hlwts16on3ojp?gacd=9643257-23732657-5785552-266271997-127759547&dgc=af&VEN1=/Vv6e0WKODg-*auGi30V6YDcCKerYpozIg&dclid=CPj1-bKCqvYCFQaNvAodUQoM7Q&nclid=DIBttjKlZEo-8QBoXQvCfzuePsqAVOgbZNvNUi6irqfJQk-ScuiSR2d27tOCOlWS#features_section",">Inspiron 15 3000</a>をおすすめします。</p>
            </details>
            <details>
            <summary>工学部</summary>
            </details>
            <details>
            <summary>人文社会科学部,農学部</summary>
            <p>レポート等を書いたりするのにパソコンは必須ですがハイスペックである必要はありません<br>
            しかしながら、ある程度のスペックを確保すると快適に勉強することができるので、AMD Ryzen™ 7 5700Uを搭載した<a href=","https://deals.dell.com/ja-jp/productdetail/damd",">Inspiron 14 AMD</a>をお勧めします。</p>
            </details>
            <details>
            <summary>教育学部、地域創造学環</summary>
            <h2>教育学部美術専修の人、地域創造学環のアートマネジメントコースの人へ</h2>
            <p>デザイン分野ではMacを使う事が多いそうなのでMacを購入して慣れておくことも良いのではないかと思います。<br>
            しかしながら、教師になりたい方は学校現場では基本的にWindowsを使用するという観点から、WindowsPCを推奨します。<br>
            おすすめのPCは<a href=","https://www.apple.com/jp_edu_1460/shop/buy-mac/macbook-air",">MacBookAir</a>です。作品をたくさん作るのであれば512GBモデルを選択した方がいいのではないかと思います。</p>
          
            <h2>教育学部技術教育専修の人へ</h2>
            <p>他学部に比べて高いスペックのPCが要求されます。高いスペックを要求される授業が求められるため、メモリが16GB、SSD容量が512GBで、Intel Core™ i7-1165G7 を搭載した<a href=","https://www.dell.com/ja-jp/shop/cty/pdp/spd/inspiron-15-3511-laptop/cai3453hlwts16on3ojp?gacd=9643257-23732657-5785552-266271997-127759547&dgc=af&VEN1=/Vv6e0WKODg-*auGi30V6YDcCKerYpozIg&dclid=CPj1-bKCqvYCFQaNvAodUQoM7Q&nclid=DIBttjKlZEo-8QBoXQvCfzuePsqAVOgbZNvNUi6irqfJQk-ScuiSR2d27tOCOlWS#features_section",">Inspiron 15 3000</a>をおすすめします。<br>
            </p>
            <h2>それ以外の人へ</h2>
            <p>レポート等を書いたりするのにパソコンは必須ですがハイスペックである必要はありません<br>
            しかしながら、ある程度のスペックを確保すると快適に勉強することができるので、AMD Ryzen™ 7 5700Uを搭載した<a href=","https://deals.dell.com/ja-jp/productdetail/damd",">Inspiron 14 AMD</a>をお勧めします</p>
            </details>
            <details>
            <summary>理学部</summary>
            </details>
            
            </details>
            <details>
            <summary>浜キャン生はこちら!</summary>
            <h2>用語説明<h2>
            
            </details>
            <details>
            <summary>静キャン生はこちら!</summary>
            <h2>用語説明<h2>
            
            </details>
            生協<br>
            授業のガイダンス<br>
            教科書<br>
            プレ入学式<br>
            
            下宿する人向け<br>
            静キャンに住む人<br>
            住民票<br>
            
            在学生も見てほしい大学生活の情報<br>
            サークル<br>
            運転免許<br>
            バイト<br>
            静キャン前ファミマに注意<br>
            TOEIC</p>
            </div>";
        };
        if("notice"==$page){
            echo"<p>見てくれた皆さんへのお知らせ</p>";
        };
        if("question"==$page){
            echo"<p>しつもん</p>";
        };
       
        
           
    ?>
    </main>
    <footer class="footer">

    
    <nav class="site-menu">
                    <ul>
                    <li><a href="index.php?page=home">ホーム</a></li>
                        <li><a href="index.php?page=newstudents">新入生の皆さんへ</a></li>
                        <li><a href="index.php?page=notice">おしらせ</a></li>
                        <li><a href="index.php?page=question">困った時</a></li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>

                <a class="footer-logo" href="index.php?page=home"><img src="img/logo.png"></a>
                <p class="attention">注意:このウェブサイトは静岡大学をはじめとした大学・企業・その他機関とは一切関係ありません。</p>
                <p class="copyright"><small>copyright <a href="https://ghevp.com">ぐゑ</a> all rights reserved.</small></p>
                
    </footer>   
  </body>
</html>