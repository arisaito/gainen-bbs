<?php
$title = "";
$message = "";
$price = "";
$user = "";

if (isset($_POST['send']) === true) {
  $title = $_POST["title"];
  $message = $_POST["message"];
  $price = $_POST["price"];
  $user = $_POST["user"];
  $fp = fopen("bord.txt", "a");
  fwrite($fp, $user . "\t" . $message . "\n");
  fclose($fp);
}

$fp = fopen("bord.txt", "r");

$bord_array = [];
while ($line = fgets($fp)) {
  $temp = explode("\t", $line);
  $temp_array = [
    "user" =>
    $temp[0], "message" => $temp[1]
  ];
  $bord_array[] = $temp_array;
} ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>thought market</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/style.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</head>

<body>
  <div class="bs-container">
    <div class="l-header">
      <h1 class="l-header__ttl">
        Thought Market
      </h1>
    </div>

    <div class="idea-contents">
      <div class="idea-contents__tag">
        <h2 class="idea-contents__tag__item is-active">新着</h2>
      </div>
      <ul class="row idea-contents__item">

        <?php foreach ($bord_array as $data) : ?>
          <?= "<li class='idea-item col-md-4'>" ?>
          <div class='idea-item__inner'>
            <?= $data["user"] . ":" . $data["message"]; ?>
          </div>
          <?= "</li>" ?>
        <?php endforeach; ?>

      </ul>
    </div>
    <div class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="" method="post">
            <div class="modal-body">
              <div class="form-group u_mtb30">
                <label for=" title" class="modal_label u_mb10">商品タイトル</label>
                <input type="text" id="title" name="title" class="modal_input l-w100p" placeholder="Enter Title" />
              </div>
              <div class="form-group u_mtb30">
                <label for="message" class="modal_label u_mb10">商品説明</label>
                <textarea type="text" id="message" name="message" class="modal_input l-w100p" placeholder="Enter Description" rows="7"></textarea>
              </div>
              <div class="form-group u_mtb30">
                <label for="category" class="modal_label u_mb10">カテゴリー</label>
                <select id="category" name="category" class="form-control modal_input" placeholder="選択する">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group u_mtb30">
                <label for=" price" class="modal_label u_mb10">値段</label>
                <input type="text" id="price" name="price" class="modal_input l-w50" placeholder="¥300" />
              </div>
              <div class="form-group u_mtb30">
                <label for="user" class="modal_label u_mb10">出品者名</label>
                <input type="text" id="user" name="user" class="modal_input l-w50" placeholder="Sample" />
              </div>
              <div class="u_mt100">
                <input type="submit" name="send" value="出品する" class="btn btn-primary" />
                <br>
                <button type="button" class="btn btn-secondary modal-btn--cancel">キャンセル</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="l-footer">
      <div class="l-footer__inner">
        <p class="c-ttl__sub">
          出品する
        </p>
      </div>
    </div>
</body>

</html>