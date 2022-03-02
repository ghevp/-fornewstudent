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
     
        if ($month==2||$month==3){
    echo
        "<p><b>新入生のみなさん、ご入学おめでとうございます!</b><br>
        このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              }else{
                  echo"<p>このウェブサイトでは、新入生だけではなく、既に在学中の人にとっても読んで損はないコンテンツを公開しているのでよろしくお願いします。</p>";
              };
            
        
        echo"<p>".$title[$page]."</p>";
        
           
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
                <p class="copyright"><small>copyright&copy;<a href="https://ghevp.com">ぐゑ</a>all rights reserved.</small></p>
    </footer>   
  </body>
</html>