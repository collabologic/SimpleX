<?php
 /**
  * ビュー関数ライブラリ
  */
  
 /**
  * ブラウザへの出力
  *
  * @param $output 出力するデータ
  * @param $header 出力時に変更するヘッダー情報配列
  */
 function sxv_output( $output, $header=array() ){
  foreach( $header as $key=>$value ){
   header($keyk,$value);
  }
  echo $output;
 }
 
 /**
  * レンダリングして出力
  *
  * @param $template テンプレートへのパス（designからの相対参照)
  * @param $param　テンプレート変数
  * @param $header 出力時に経にき王するヘッダー情報配列
  */
 function outputWithRender( $template, $params, $header ){
  $data = sxu_render( SX_DESIGN."/".$template, $params);
  sxv_output( $data, $header );
 }
  
