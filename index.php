<?php
session_start();
$url = isset( $_GET[ 'url' ] ) ? urlencode( filter_var( $_GET[ 'url' ], FILTER_SANITIZE_STRING ) ) : '';
$module = 'swapgender'; // For the moment, that's the only module

$page = 'main';
include_once( '_parts/head.php' );
include_once( '_parts/_search.php' );
include_once( '_parts/foot.php' );
?>
