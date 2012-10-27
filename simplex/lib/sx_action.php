<?php
 /**
  * アクション関数ライブラリ
  */

  /**
   * ビューの呼び出し
   *
   * @param $view_path ビューファイルへのパス
   * @param $sxr_params リクエストパラメータ
   */
  function sxa_view( $view_path, &$sxr_params ){
   if( !file_exists( SX_WEBROOT."/".$view_path.".php") ){
    echo ( "view '".$view_path.".php' is not exists." );
    debug_print_backtrace();
    exit;
   }
   require_once( SX_WEBROOT."/".$view_path.".php");
   if( !function_exists("display") ){
    echo ( "function 'display' is undefined in '".$view_path.".php" );
    debug_print_backtrace();
    exit;
   }
   display($sxr_params);
  }
  
  /**
   * モデルオペレーションの呼び出し
   *
   * @param $modelname モデル名
   * @param $operationname オペレーション名
   * @param &$sxa_params リクエストパラメータ
   */
  function sxa_operation( $modelname, $operationname, &$sxa_params){
   if( !file_exists( SX_MODELDIR."/".$modelname.".php") ){
    echo ( "model '".$modelname.".php' is not exists.");
    debug_print_backtrace();
    exit;
   }
   require_once( SX_MODELDIR."/".$modelname.".php" );
   if( !function_exists($modelname."_".$operationname) ){
    echo ( "function '".$modelname."_".$operationname."' undefined in '".$modelname.".php" );
    debug_print_backtrace();
    exit;
   }
   $funcname = $modelname."_".$operationname;
   $funcname( $sxa_params );
  }
