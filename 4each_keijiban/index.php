<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>4eachblog 掲示板</title>
</head>
<body>
    <?php
                   mb_internal_encoding("utf8");
                   $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
                   $stmt = $pdo->query("select*from 4each_keijiban");
    ?>
    <div class="wrapper">
        <header>
            <div class="logo"><img src="4eachblog_logo.jpg" alt=""></div>
            <div class="nav">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="left">
                <div class="clear"></div>
                    <h2>プログラミングに役立つ掲示板</h2>
                    <form method="post" action="insert.php">
                        <h3>入力フォーム</h3>
                        <div>
                            <label>ハンドルネーム</label>
                            <br><input type="text" name="handlename">
                        </div>
                        <div>
                            <label>タイトル</label>
                            <br><input type="text" name="title">
                        </div>
                        <div>
                            <label>コメント</label>
                            <br> <textarea name="comments" cols="40" rows="8"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="投稿する">
                        </div>
                    </form>

                   <?php
                while ($row = $stmt->fetch()) {
                  echo "<div class='kiji'>";
                     echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                    echo "</div>";
                   }
                   while ($row = $stmt->fetch()) {
                    echo "<div class='kiji'>";
                       echo "<h3>".$row['title']."</h3>";
                          echo "<div class='contents'>";
                          echo $row['comments'];
                              echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                              echo "</div>";
                      echo "</div>";
                     }
                    ?>
            </div>
            <div class="right">
                <div class="right-article">
                    <h3>人気の記事</h3>
                    <ul>
                        <li>PHPおすすめ本</li>
                        <li>PHP Myadminの使い方</li>
                        <li>今人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                <div class="right-article">
                    <h3>おすすめリンク</h3>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                </div>
                <div class="right-article">
                    <h3>カテゴリ</h3>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>
        <div class="clear"></div>
        <footer><p>copyright©internous | 4each blog the which provides A to Z about programming.</p></footer>
    </div>
    
</body>
</html>