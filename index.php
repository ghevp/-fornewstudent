<!DOCTYPE html>
<html lang="ja"> 
    <head>
        <meta charset="UTF-8">
       
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">   
        <link rel="stylesheet" href="css/style.css"><!--後でphpのif文の作成-->
        <title>新入生向けネットリテラシー啓発（仮称）</title> <!--後で変更-->
    </head>
    <body>
    <div class="content">
    <div class="main">
    <h1>新入生向けネットリテラシー啓発（仮称）</h1>
    <div class="main2">
        <?php
        date_default_timezone_set('Asia/Tokyo');
        $month = date("m");
      
        if ($month==2||$month==3){
    echo
        "<p><b>新入生のみなさん、ご入学おめでとうございます!</b><br>
        このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              }else{
                  echo"<p>このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              };
    ?>
    <h2>
        はじめに
            </h2>
    <details>
        <summary>
            
            静岡キャンパスの人へ
            
        </summary>
        <h2>
            知っておくべき事
        </h2>
        <p>
        人文社会科学部のプレ入学式は微妙<br>
        家は朝寝坊しても平気がいいのなら大谷、生活が便利なのがいいのなら小鹿<br>
        夜の静大前ファミマに注意<br>
        </p>
    </details>
    <details>
        <summary>
        
            浜松キャンパスの人へ
        
        </summary>
        <h2>
            知っておくべき事
        </h2>
        <p>
    <a href="https://gakujochan.com"target="blank"><img src="img/ad/slide_top.png" width="100%"></a>
    </p>
    </details>
    </div>

</div>
    <div class="senden">
    <p>
        宣伝欄
    </p>
    <p>
        学情チャンプロジェクトの宣伝<br></p>
    <p>
    <a href="https://gakujochan.com"target="blank"><img src="img/ad/slide_top.png" width="100%"></a>
    </p>
    <?php
    date_default_timezone_set('Asia/Tokyo');
    echo "<p>大学祭実行委員会の宣伝</p>"
    ?>
    </div>
    </div>
    <div class="bottom">
    <p>copyright©<a href="https://ghevp.com">ぐゑ</a> all rights reserved. </p>
    </div>
    </body>
</html>