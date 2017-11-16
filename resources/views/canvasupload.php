<?php

  $_tmp = explode(";base64,", $_POST['imgUpload']);
   if(count($_tmp) == 2) {
      $filename = $_POST['original_name'].".png";

      $imageData = base64_decode($_tmp[1]);

      $fp = fopen("../../public/images/conti/".$filename, "wb");
      if($fp) {
         fwrite($fp, $imageData);
         fclose($fp);
         echo "success";
      }else{
         echo "failed";
      }
  }

  // file_put_contents 함수
  //------------------------------
  // $_tmp = split(";base64,", $_POST['imgUpload']);
   // if(count($_tmp) == 2) {
   //    $filename = original_name + ".png";
   //    $imageData = base64_decode($_tmp[1]);
   //    $fp = fopen($filename, "wb");
   //    if($fp) {
   //       fwrite($fp, $imageData);
   //       fclose($fp);
   //       echo "success";
   //    }
   //    else {
   //       echo "failed";
   //    }
   // }

?>
