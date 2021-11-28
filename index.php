<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>4eachblog掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php 

        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");

        ?>
        
        <img src="4eachblog_logo.jpg" class="logo">
        <header>
            <ol>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ol>
        </header>

        <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>

            <div>
                <label>ハンドルネーム</label><br>
                <input type="text" name="handlename" class="text">
            </div>
            <div>
                <label>タイトル</label><br>
                <input type="text" name="title" class="text">
            </div>
            <div>
                <label>コメント</label><br>
                <textarea name="comments" id="" cols="60" rows="5"></textarea>
            </div>
            <input type="submit" value="投稿する" class="submit">
        </form>

        <?php
            while ($row = $stmt->fetch()) {

                echo '<div class="kiji">';
                echo '<h3>'.$row["title"].'</h3>';
                echo '<p class="nakami">'.$row["comments"].'</p>';
                echo '<p class="namae">'.$row["handlename"].'</p>';
                echo '</div>';
            }
        ?>

        </div>

        <div class="right">
            <h2>人気の記事</h2>
            <ol>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ol>
            <h2>オススメリンク</h2>
            <ol>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ol>
            <h2>カテゴリ</h2>
            <ol>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ol>
        </div>

        <footer>
        <p>copyright © internous | 4each blog the which provides A to Z about programming.</p>
        </footer>

     </body>

</html>