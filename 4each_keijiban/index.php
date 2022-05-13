<! DOCTYPE html> <html lang="ja">
<head>
 <meta charset="UTF-8">
<title>4eachbrog掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php

  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","");
  $stmt = $pdo->query("select*from 4each_keijiban");

  ?>

  <div class="eachblog"><img src="4eachblog_logo.jpg"></div>
  
<header>

  <ul>
    <li>トップ　</li>
    <li>プロフィール　</li>
    <li>4eachについて　</li>
    <li>登録フォーム　</li>
    <li>問い合わせ　</li>
    <li>その他　</li>
  </ul>
</header>

<main>

<div class="main-container">


  <div class="left">
    <body>

      <div class="grayall">
        
       <h4>プログラミングに役立つ掲示板</h4>
       <div class="gray0">
        <h1> 入力フォーム</h1>
        <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename"> 
          </div>
    
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>
      
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="45" rows="7" name="comments"></textarea>
          </div>
           
          <div>
            <input type ="submit" class="submit" value="投稿する">
      
          </div>
        </form>
      </div>
      </div>
              
       <?php
        echo "<div class='gray'>";

        echo "<div class='title1'>";
        echo"<h5>タイトル</h5>";
        echo" <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>
              記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、";
              
        echo"<div class='handlename'>posted by 通りすがり</div>";

        echo"</p>";
          echo"</div>";
        echo"</div>";
        ?>

        <?php
        while ($row = $stmt->fetch()){
          echo"<div class=gray>";
          echo"<h5>".$row['title']."</h5>";
          echo"<p>".$row['comments']."</p>";
          echo"<div class='handlename'>posted by".$row['handlename']."</div>";
          echo"</div>";
          echo"</div>";
        }
        ?>

        <div class="gray2">

          <div class="title2">
            <h5>タイトル</h5>
            <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>
              記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、
              </p＞

          </div>

        </div>


       
        </div>
      </div>
    </body>
  </div>




    <div class="right">
        <div class="t">
          <br>
           <h5>人気の記事</h5>
        </div>
       <div class="coramu">
            <p>PHPオススメ本</p>
           <p>PHP MyAdminの使い方</p>
           <p>今人気のエディタ Top5</p>
           <p>HTMLの基本</p>
           <br>
       </div>
        <div class="t">
           <h5>オススメリンク</h5>
        </div>
        <div class="coramu">
             <p>インターノウス株式会社</p>
             <p>XAMPPのダウンロード</p>
             <p>Eclipseのダウンロード</p>
              <p>Bracketsのダウンロード</p>
              <br>
        </div>
         <div class="t">
             <h5>カテゴリ</h5>
        </div>
             <div class="coramu">
               <p>HTML</p>
               <p>PHP</p>
               <p>MySQL</p>
               <p>Javascript</p>
            </div>

     </div>

</div>

</main>

<footer>
  copyright ©︎ internus | 4each blog the which provides A to Z about programming. 
</footer>
</body> 
</html>

