<?php
  $img = file_get_contents($imgsouce);
  $enc_img = base64_encode($img);
  $imginfo = getimagesize('data:application/octet-stream;base64,' . $enc_img);
  echo '<img src="data:' . $imginfo['mime'] . ';base64,'.$enc_img.'">';
