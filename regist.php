<html>
  <head>
    <meta http-equiv = "content-type" content = "text/html"; charset = "utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Coda" rel="stylesheet" type="text/css">
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
    <div id="contents">
      <form>
        <textarea name = "res" rows="5"><?php echo $body;?></textarea>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alnair.xii.jp" data-text="<?php echo $body;?>" data-lang="en" data-via="燃費ちぇっか（簡易版)">tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </form>
    </div>
    <div id ="link">
      <a href="http://alnair.xii.jp/app/fcc/index.html">back </a><br />
    </div>
    <div id="footer">
       <div class="copyright"><font color="#fff">Copyright &copy; 2014-2016 <a href="http://alnair.xii.jp">2rs_kei </a>
          All Rights Reserved.</font></div>
    </div>
  </body>
</html>
