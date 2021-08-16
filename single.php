<?
if( in_category( 4 ) ){
	include( 'single-baseknowledge.php' );
}elseif( in_category( 9 )){
	include( 'single-winegrowers.php' );
}else{
	include( 'single-news.php' );
}
?>