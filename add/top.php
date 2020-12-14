<div id="page-loader" class="preloader">
  	<div class="loader">
		<div class="ball one"><div class="inner"></div></div>
    	<div class="ball two"><div class="inner"></div></div>
    	<div class="ball three"><div class="inner"></div></div>
    	<div class="ball four"><div class="inner"></div></div>
    	<div class="ball five"><div class="inner"></div></div>
    	<div class="ball six"><div class="inner"></div></div>
    	<div class="ball center"><div class="inner"></div></div>
	</div> 
</div>
<style>
	div.done{
		opacity: 0;
    z-index:-2;
    background: none;
	}
	    
.preloader{
    position: fixed;
    width: 100%;
    height: 100%;
    background: #000;
	top: 0;
	transition: .90s all;
	z-index:100;
}
.loader {
  position: absolute;
  width: 300px;
  height: 100px;
  left: 50%;
  top: 50%;
  margin-left: -150px;
  margin-top: -50px;
  border-radius: 20px;
}
.loader .ball {
  position: absolute;
  width: 0;
  height: 100%;
  left: -15px;
  bottom: 0;
  background: #4a9;
  opacity: 0;
  -webkit-animation: moveBall 2.8s infinite linear;
  animation: moveBall 2.8s infinite linear;
}
.loader .ball.one {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
.loader .ball.two {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}
.loader .ball.three {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
.loader .ball.four {
  -webkit-animation-delay: 0.6s;
  animation-delay: 0.6s;
}
.loader .ball.five {
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
}
.loader .ball.six {
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
}
.loader .ball .inner {
  height: 30px;
  width: 30px;
  position: absolute;
  background: #999;
  bottom: 0;
  left: 0;
  margin-left: -15px;
  border-radius: 100%;
}
.loader .ball.center {
  left: 50%;
  top: 50%;
  background: none;
  -webkit-animation: centerBall 2.8s infinite cubic-bezier(0.55, 0.055, 0.675, 0.19);
  animation: centerBall 2.8s infinite cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
.loader .ball.center .inner {
  top: -15px;
}
@-moz-keyframes centerBall {
  0%, 25%, 100% {
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  75% {
    opacity: 0;
  }
}
@-webkit-keyframes centerBall {
  0%, 25%, 100% {
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  75% {
    opacity: 0;
  }
}
@-o-keyframes centerBall {
  0%, 25%, 100% {
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  75% {
    opacity: 0;
  }
}
@keyframes centerBall {
  0%, 25%, 100% {
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  75% {
    opacity: 0;
  }
}
@-moz-keyframes moveBall {
  0% {
    left: -10%;
    opacity: 0;
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
    animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
  }
  10% {
    opacity: 0;
  }
  28.7% {
    transform: rotate(-180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  71.3% {
    transform: rotate(180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  90% {
    opacity: 0;
  }
  100% {
    left: 110%;
    transform: rotate(deg);
    opacity: 0;
  }
}
@-webkit-keyframes moveBall {
  0% {
    left: -10%;
    opacity: 0;
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
    animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
  }
  10% {
    opacity: 0;
  }
  28.7% {
    transform: rotate(-180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  71.3% {
    transform: rotate(180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  90% {
    opacity: 0;
  }
  100% {
    left: 110%;
    transform: rotate(deg);
    opacity: 0;
  }
}
@-o-keyframes moveBall {
  0% {
    left: -10%;
    opacity: 0;
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
    animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
  }
  10% {
    opacity: 0;
  }
  28.7% {
    transform: rotate(-180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  71.3% {
    transform: rotate(180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  90% {
    opacity: 0;
  }
  100% {
    left: 110%;
    transform: rotate(deg);
    opacity: 0;
  }
}
@keyframes moveBall {
  0% {
    left: -10%;
    opacity: 0;
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
    animation-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
  }
  10% {
    opacity: 0;
  }
  28.7% {
    transform: rotate(-180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  71.3% {
    transform: rotate(180deg);
    left: 50%;
    opacity: 1;
    -webkit-animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    animation-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }
  90% {
    opacity: 0;
  }
  100% {
    left: 110%;
    transform: rotate(deg);
    opacity: 0;
  }
}
</style>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
    <title><? echo $title; ?></title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<!--CSS-->
		<link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="/assets/css/on_bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/on_normalize.min.css" />
		<link rel="stylesheet" href="/assets/css/fontello.min.css">
		<link rel="stylesheet" href="/assets/css/style.min.css">
		<?  if( $page == '/' || $page == 'index') echo '<link rel="stylesheet" href="/assets/css/index.min.css">'; ?>

		<!--JS-->
		<script src="/assets/js/jquery-3.5.1.min.js"></script>
		<script src="/assets/js/modernizr.custom.25376.min.js"></script>
		<script src="/assets/js/script.min.js"></script>
		<script src="/assets/js/particales.plagin.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="//code-ya.jivosite.com/widget/XlnnXT4efK" async></script>
	</head>
	<body>
	<div id="perspective" class="perspective effect-airbnb">
	<!-- particles.js container -->
	<div id="particles-js"></div>
	<div class="container">
		<div class="image_fon"></div>
		<div class="wrapper"><!-- wrapper needed for scroll -->
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a id="showMenu" class="codrops-icon" href="#"><i class="icon-menu"></i><span><i>Менюӣ ман</i></span></a>
				<span class="right"><input  type="search" id="search" placeholder="Ному, Насаб"><button onclick="post_query('aform', 'search', 'search');" >Ҷустуҷӯ<i class="icon-search"></i></button></span>
			</div>


      <div class="main clearfix">
      <?  if( !$_SESSION['id'] ) echo '<div class="codrops-header"><h1>Донишкадаи санъати тасвирӣ ва дизайни Тоҷикистон. <span>Ба сомона касоне даромада метавонанд, ки аз тарафи донишкада махсус рамз доштабошанд. </span></h1></div>';  ?>
      <div class="content">
