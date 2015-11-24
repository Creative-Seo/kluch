<?php
// 7411ca86eb4fbafe8cfda550e6865cfe //
require_once(dirname(__FILE__) . '/../refer/functions.php');
$phone = getPhone();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<link href="/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<link rel="canonical" href="<?php echo $canonical; ?>">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />

<!-- build:remove -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!-- /build -->
<!-- build:css inline ../css/meta.min.css -->
	<link href="/css/meta.css" rel="stylesheet">
<!-- /build -->
<!-- build:remove -->
	<link href="/css/style.css" rel="stylesheet">
<!-- /build -->
<!-- build:template
	<script>
	(function(u){function loadCSS(e,t,n){"use strict";function r(){for(var t,i=0;i<d.length;i++)d[i].href&&d[i].href.indexOf(e)>-1&&(t=!0);t?o.media=n||"all":setTimeout(r)}var o=window.document.createElement("link"),i=t||window.document.getElementsByTagName("script")[0],d=window.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",i.parentNode.insertBefore(o,i),r(),o}for(var i in u){loadCSS(u[i]);}}(['http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic','http://fonts.googleapis.com/css?family=PT+Serif:400,700&subset=latin,cyrillic']));
	</script>
/build -->

<script>function menu(){document.getElementById('cd-primary-nav').classList.toggle('nav-is-visible');document.getElementById('cd-main-header').classList.toggle('nav-is-visible');return false;}</script>

</head>