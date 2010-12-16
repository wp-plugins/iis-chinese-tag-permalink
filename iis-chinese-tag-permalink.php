<?php
/*
Plugin Name: IIS Chinese Tag Permalink
Plugin URI: http://blog.bossma.cn/in-iis-wordpress-chinese-tag-permalinks-plugin/
Description: in iis for wordpress chinese tag permalinks
Author: BOSSMA.CN
Author URI: http://blog.bossma.cn/
Version: 1.0
*/
add_action('init', 'bossma_get_urf8_pathandurl');
add_filter('get_pagenum_link','bossma_set_utf8_pagenumlink');

//for get all url
function bossma_get_urf8_pathandurl() {
 //if(isset($_SERVER['UNENCODED_URL'])){
 // $_SERVER['REQUEST_URI']=$_SERVER['UNENCODED_URL'];
 //}
 $_SERVER['PATH_INFO']=iconv("GBK","UTF-8",rawurldecode($_SERVER['PATH_INFO']));
 $_SERVER['REQUEST_URI']=iconv("GBK","UTF-8",rawurldecode($_SERVER['REQUEST_URI']));
}

//for generate tag pagenum link
//use utf8 encode
function bossma_set_utf8_pagenumlink($result){
 $tag_index=stripos($result,"/tag/");
 $link_len=strlen($result);
 if($tag_index!==false){
  $link_base=substr($result,0,$tag_index);
  $page_index=strripos($result,"/page/");
  if($page_index!==false){
   $tag_str=substr($result,$tag_index+5,$page_index-$tag_index-5);
   $result=$link_base."/tag/".rawurlencode($tag_str).substr($result,$page_index);
  }else{
   $tag_str=substr($result,$tag_index+5);
   $result=$link_base."/tag/".rawurlencode($tag_str)."/";
  }

 }
 return $result;
}
?>
