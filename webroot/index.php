<?php
 /**
  * デフォルトアクションの呼び出し
  */
  
 // 必須ライブラリの読み込み
 require_once("./env.php");
 require_once( SX_LIBDIR."/app_constants.php");
 require_once( SX_FWLIBDIR."/sx_util.php");
  
 if( !file_exists( SX_INDEX ) ){
  echo "Default action file '".SX_INDEX."' is not exists.";
  exit;
 }
 
 require_once(SX_INDEX);
