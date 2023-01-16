<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name').' - '.$title);?></title>
	<link rel="shortcut icon" href="https://pan.reincarnatey.net/view/themes/nexmoe/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/css/mdui.min.css">
	<link rel="stylesheet" href="https://pan.reincarnatey.net/view/themes/nexmoe/css/styles.css">
	<script src="https://cdn.jsdelivr.net/npm/mdui@0.4.3/dist/js/mdui.min.js"></script>
	<style>
            body {
                background-color: #f2f5fa;
                padding-bottom: 60px;
                background-position: center bottom;
                background-repeat: no-repeat;
                background-attachment: fixed
            }
            .nexmoe-item {
	            margin: 20px -8px 0!important;
	            padding: 15px!important;
	            border-radius: 5px;
	            -webkit-box-shadow: 1px 1px 20px 1px rgba(0,0,0,.05);
	            box-shadow: 1px 1px 20px 1px rgba(0,0,0,.05);
	            background-color: rgba(255, 255, 255, 0.7)
            }
            .mdui-img-fluid,.mdui-video-fluid {
                border-radius: 5px;
                border: 1px solid #eee
            }
            .mdui-list {
                padding: 0
            }
            .mdui-list-item {
                margin: 0!important;
                border-radius: 5px;
                padding: 0 10px 0 5px!important;
                border: 1px solid #eee;
                margin-bottom: 10px!important
            }
            .mdui-list-item:last-child {
                margin-bottom: 0!important
            }
            .mdui-list-item:first-child {
                border: none
            }
            .mdui-toolbar {
                width: auto;
                margin-top: 60px!important
            }
            .mdui-appbar .mdui-toolbar {
                height: 56px;
                font-size: 16px
            }
            .mdui-toolbar>* {
                padding: 0 6px;
                margin: 0 2px;
                opacity: .5
            }
            .mdui-toolbar>.mdui-typo-headline {
                padding: 0 16px 0 0
            }
            .mdui-toolbar>i {
                padding: 0
            }
            .mdui-toolbar>a:hover,a.mdui-typo-headline,a.active {
                opacity: 1
            }
            .mdui-container {
                max-width: 980px
            }
            .mdui-list>.th {
                background-color: initial
            }
            .mdui-list-item>a {
                width: 100%;
                line-height: 48px
            }
            .mdui-toolbar>a {
                padding: 0 16px;
                line-height: 30px;
                border-radius: 30px;
                border: 1px solid #eee
            }
            .mdui-toolbar>a:last-child {
                opacity: 1;
                background-color: #1e89f2;
                color: #ffff
            }
            @media screen and (max-width: 980px) {
                .mdui-list-item .mdui-text-right {
                    display:none
                }
                .mdui-container {
                    width: 100%!important;
                    margin: 0
                }
                .mdui-toolbar>* {
                    display: none
                }
                .mdui-toolbar>a:last-child,.mdui-toolbar>.mdui-typo-headline,.mdui-toolbar>i:first-child {
                    display: block
                }
            }
        </style>
	<style>
		body {
			background-image: url(https://pan.reincarnatey.net/view/themes/nexmoe/bg.png) !important;
			background-position: center bottom !important;
			background-size: cover !important;
			background-attachment: fixed !important;
			background-repeat: no-repeat !important;
		}
	</style>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="https://pan.reincarnatey.net/view/themes/nexmoe/picture/logo.png" /></a>
			<div class="navRight">
				<ul class="navul">
					<li class="navli"><a href="https://blog.reincarnatey.net/" target="_blank">我的博客</a></li>
					<li class="navli"><a href="https://blog.reincarnatey.net/" target="_blank">还是博客</a></li>
					<li class="navli"><a href="https://blog.reincarnatey.net/" target="_blank">然而我没有博客</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
	<script src="https://pan.reincarnatey.net/view/themes/nexmoe/js/urusai.js" async></script>
	<script>
  	  	function delay(j) {   
			var start=new Date().getTime();   
			while(true) if(new Date().getTime()-start>j)  break;
		}
  	    var links = document.getElementsByClassName("fileLinks");
        function downall(){
            for(i=0;i<links.length;i++){
				window.open(links[i].href,"download"+i)
            delay (2000);
            }
        }
  	</script>
</body>
</html>