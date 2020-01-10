<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>質問ページ - 質問入力(1/3)</title>
    <link rel="stylesheet" href="color.css" />
    <link rel="stylesheet" href="question.css" />
    <script src="question.js"></script>
  </head>

  <body>
    <header>
      <p>
        <a href="site-top.html">
          尾大情報共有サイト(仮)
        </a>
      </p>
    </header>
    <div class="progress">
      <h2>進行状況</h2>
      <ul>
        <li class="darker-blue">1.</li>
        <li>記述</li>
        <li>2.</li>
        <li>確認</li>
        <li>3.</li>
        <li>投稿</li>
      </ul>
    </div>

    <!-- 質問内容 -->
    <main class="content">
      <h2>質問内容</h2>
      <form action="check-question.php" method="post">
        <input type="text" name="title" id="title" />
        <textarea name="details" id="details"></textarea>
      <div>
        <h3>質問ジャンル</h3>
          <select name="genre" id="genre">
            <option value="none">--選んでください--</option>
            <optgroup label="大学">
              <option value="caliculam">授業</option>
              <option value="books">教科書</option>
            </optgroup>
            <optgroup label="娯楽">
              <option value="event">イベント</option>
              <option value="shopping">ショッピング</option>
              <option value="food">飲食</option>
              <option value="instagramable">インスタ映え</option>
            </optgroup>
            <optgroup label="アルバイト">
              <option value="inside-onomichi">尾道</option>
              <option value="outside-onomichi">尾道周辺</option>
            </optgroup>
            <optgroup label="生活">
              <option value="supermarket">スーパー</option>
            </optgroup>
            <option value="other">その他</option>
          </select>
        </div>
      </main>
      
      <div>
        <input type="submit" value="確認">    
      </div>
    </form>

    <footer>
      <a href="site-top.html">トップページに戻る</a>
      <address>Copyright&copy; 2019 Onomichi University 木村ゼミ</address>
    </footer>

    <script src="question.js"></script>
  </body>
</html>