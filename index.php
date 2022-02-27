<!DOCTYPE html>
<html lang="ja"> 
    <head>
        <meta charset="UTF-8">
       
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">   
        <link rel="stylesheet" href="css/style.css"><!--後でphpのif文の作成-->
      <title> <?php 
      if (isset($title) == "") {
        echo "静浜学生情報サイト";
    } else {
        echo "" . $title . " - 静浜学生情報サイト";
    }
       ?>
      </title><!--後で変更-->
    </head>
    <body>
   <p>test</p>
    <header class="header">
        <div class="header-inner">
            <a href=""><img src="img/logo.png"></a>
            <div class="header-mobile-button">
                <button class="toggle-menu-button"></button>
            </div>
            <div class="header-site-menu">
                <nav class="site-menu">
                    <ul>
                        <li>ホーム</li>
                        <li>新入生の皆さんへ</li>
                        <li>おしらせ</li>
                        <li>困った時</li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
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
    </main>
    <footer class="footer">

    
    <nav class="site-menu">
                    <ul>
                        <li>Home</li>
                        <li>新入生の皆さんへ</li>
                        <li>おしらせ</li>
                        <li>困った時</li><!--増やすときはボタンの使用で変更-->
                    </ul>
                </nav>

                <a class="footer-logo" href=""><img src="img/logo.png"></a>
                <p class="attention">注意:このウェブサイトは静岡大学をはじめとした大学・企業・その他機関とは一切関係ありません。</p>
                <p class="copyright"><small>copyright&copy;<a href="https://ghevp.com">ぐゑ</a>all rights reserved.</small></p>
    </footer>   
  </body>
</html>