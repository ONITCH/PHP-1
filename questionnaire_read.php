
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Hind&display=swap" rel="stylesheet">
    <!-- cssを読み込み -->
  <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body>

    <header></header>
    <form action="questionnaire_create.php" method="POST">
        <table class="fieldset">
            <tr>
                <th>N A M E : </th>
                <td><input type="text" name="name"></td>
            <!-- </tr>
            <tr> -->
                <th>A I R L I N E : </th>
                <td><input type="text" name="company"></td>
            </tr>
            <tr>
                <th>F R O M : </th>      
                <td><input type="text" name="flightfrom"></td>
            <!-- </tr>
            <tr> -->
                <th>T O : </th>
                <td><input type="text" name="flightto"></td>
            </tr>
            <tr>
                <th>D A T E : </th>
                <td><input type="date" name="date"></td>
                <th></th>
                <td><button> P R I N T </button></td>
            </tr>
        
        </table>
                
        </div>
        </div>
    </form>


<!-- CSVデータ読み込み、書き込み箇所 -->
<?php
// $fp=0;
// if( empty($fp) ){  
// echo '何もないよ';  
// }
// test.csvファイルを開いて、読み込みモードに設定する
$fp = fopen('data/questionnaire.csv', 'r');
flock($fp,LOCK_EX);



while($data = fgetcsv($fp)){
    echo '<div class="margin-top">';
    echo '<div class="wide">';
      echo'<div class="wrapper" style="display: none">';
        echo'<div class="top"><p>AIR TICKET</p></div>';
        echo'<div class="contents">';
            echo'<div class="name">'.$data[0].'</div>';
            echo'<div class="flight-info">';
                echo'<div class="company">'.$data[1].'</div>';
                echo'<div class="from-to">';
                    echo'<div class="flightfrom">'.$data[2].' <img src="plane.png"> '.$data[3].'</div>';
                echo'</div>';
            echo'</div>';
            echo'<div class="date">'.$data[4].'</div>';
        echo'</div>';
        echo'<div class="bottom"></div>';
      echo'</div>';
      echo'<div class="wrapper-back"></div>';
      echo'</div>';
      echo'</div>';
}
 
// テーブルの閉じタグ
echo '</table>';
 
// 開いたファイルを閉じる
flock($fp,LOCK_UN);
fclose($fp);
?>
  </div>
  </div> 

  <!-- ・・・・・・・・JS・・・・・・・ -->
  <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
$(function() {
  // 一旦hide()で隠してフェードインさせる
  $('.wrapper').hide().fadeIn(1200);
 
});

  </script>
</body>

</html>