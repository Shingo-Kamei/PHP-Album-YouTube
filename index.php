<!-- fopenは、ファイルをオープンする関数です -->
<!-- file_get_contentsは、ファイルの内容を文字列として取得する関数です -->
<!-- rは、読み込みモード -->
<?php $fp=fopen("info.txt", "r"); ?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>サークルサイト</title>
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div style="padding: 30px 40px;">
    <h1>お知らせ</h1>
    <?php
    // ファイルが正常にオープンできたか確認
    // fopenが失敗した場合、falseを返す
      if($fp) {
        // fgetsは、ファイルから1行読み込む関数です
        $title = fgets($fp);
        // ファイルから読み込んだ内容を表示
        // <p><a href="info.php">'.$title.'</a></p>は何をしているかというと、
        // $titleの内容をリンクテキストとして表示し、そのリンク先をinfo.phpに設定しています。
        if($title) {
          echo '<p><a href="info.php">'.$title.'</a></p>';
        } else {
          // ファイルが空の場合の処理
          echo '<p>現在、お知らせはありません。</p>';
        }
          // ファイルを閉じる
          fclose($fp);
      } else {
        // ファイルが開けなかった場合
        echo '<p>お知らせの読み込みに失敗しました。</p>';
      }
    ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
