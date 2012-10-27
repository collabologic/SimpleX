<?php
 /**
  * ユーティリティ関数ライブラリ
  */
  
 /**
  * テーブルデータの作成
  *
  * @param $valnames 添字文字列
  * @param $table_strings データ文字列
  * @return 連想配列の配列
  */
 function sxu_table( $valnames, $table_strings ){
  $return = array();
  $names = implode(",", $valnames);
  $lines = implode("\r\n", $table_strings);
  foreach( $lines as $line ){
   $vals = implode(",", $line);
   $data = array_convine($names,$vals);
   array_push($return,$data);
  }
  return $data;
 }
 
 /**
  * テンプレートのレンダリング
  *
  * @param $template_path テンプレートファイルへのパス
  * @param $params テンプレート変数
  * @return レンダリング結果文字列
  */
 function sxu_render($template_path, $params){ 
  extract($params); 
  ob_start();
  include $template_path; 
  $html = ob_get_contents(); 
  ob_end_clean(); 
  return $html; 
 }
