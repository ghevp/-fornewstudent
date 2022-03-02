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
            <li>CPUがIntel社のCoreシリーズ,AMD社のRyzenシリーズ以外のもの</li>
            <p><b>工学部、情報学部の方以外</b>はApple社のM1チップ搭載のMacbookを使用することも可能ですが、MacOSになれていない人が調子に乗ってMacを使うのはお勧めしません。<br>
            周りにMacを使っている人が非常に少ないことが予想されますので何かトラブルがあった際に対処することが困難となってしまいます。<br>
            Macを買うのは家庭のPCがMacである等、逆にWindows11搭載製品を買うと困る人だけにしましょう。<br>
            <b>工学部、情報学部の人はそのような場合であってもWindows11搭載のものを購入してください。</b>Windows11でないと授業を受けることが不可能、もしくは非常に困難な授業がたくさんあります。</p>
            <li>重量が2Kg以上のもの、画面サイズが15インチより大きいもの</li>
            <p>重量が重かったり、画面サイズが大きいと持ち運びが不便になります。<br>
            大学にPCを持ち込んで勉強することも多々ありますので購入するPCは2Kg以下かつ画面サイズが15インチ以下のものを選択しましょう。<br>
            重量は軽ければ軽いほど移動時の負担は減りますが、重量を削減すると画面も比例して小さくなる傾向にあります。そうなると作業効率が弱まってしまうのでそのあたりは自分の体力等と相談してPCを購入すると良いと思います。<br>
            また、PCを購入したら<b>絶対にPCの大きさにあったPCバッグもしくはケースを購入してください。</b>持ち運ぶという観点から考えると、これがないとほぼ間違いなくPCは壊れてしまいます。
            <li>ストレージSSDではないものや容量が256GB未満のもの、メモリの容量が8GB未満のもの</li>
            <p>レポート等を保存する事を考えると最低256GBは必要です。<b>趣味などに使う予定のある人はさらに大容量のストレージが必要になります。</b><br>
            また、ストレージがHDD、eMMCのものは絶対に避けましょう。起動や動作がSSDのものに比べて段違いに遅いです。<br>
            また、メモリ容量が8GB未満のものであるとそもそも満足にPCが動作しない可能性があります。絶対に避けましょう。
            
            <li>
            </ul>
            <h2>学部別おすすめのPC</h2>
            <p>学科ごとにお勧めのPCを記載しています。<br>
            あくまでも参考程度にご覧ください。</p>
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