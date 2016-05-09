<html>
  <head>
    <meta http-equiv = "content-type" content = "text/html"; charset = "utf-8" />
    <link rel="stylesheet" type="text/css" href="common.css">
    <title>燃費ちぇっか（簡易版）</title>
  </head>

  <body>
    <?php
    date_default_timezone_set("Asia/Tokyo");
    if(($_POST[dist] <= 0) or ($_POST[fuel] <= 0)){
      $body = "入力された値が不正です";
    }else{

      $fuelcost = $_POST[dist] / $_POST[fuel];

      $body = sprintf("[給油記録]：%.1fkm走行し、%.1fL給油しました。燃費%.2fkm/L\n",
                        $_POST[dist],
                        $_POST[fuel],
                        $fuelcost
                      );
    }
    ?>

    <form>
      <ul>
        <li>
          <input type = "text" name = "fuel" value = "<?php echo $body;?>"  />
        </li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alnair.xii.jp" data-text="<?php echo $body;?>" data-lang="ja" data-via="燃費ちぇっか（簡易版)">tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </li>
      </ul>
    </form>
  </body>
</html>
