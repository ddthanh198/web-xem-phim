
<?php
echo $link;
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.progress{
		width: 100%;
		height: 5px;
		background-color:rgba(100,100,100, 0.2);
	}
	.progress_filled{
		height: 100%;
		width: 50%;
		background-color: red;

	}
	.player__controls{
		position: absolute;
		bottom: 0px;
		width: 100%;


	}
	.player{
		position: absolute;
		height: 70%;
	}
	.viewer{
		width: auto;
		height: 100%;
	}
</style>
<!-- <head>

	<title>xem video</title>
</head> -->

<head>

	<meta charset="utf-8">

	<title>Video Player Tutorial - by Valeriu Timbuc for DesignModo</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/mediaelement-and-player.min.js"></script>
	<link rel="stylesheet" href="css/style.css" media="screen">

	<style type="text/css">
		html, body { margin: 0; padding: 0; }
		body { background: #f2f2f2 url(img/bg.png) no-repeat top center; padding-top: 265px; }
		.mejs-container { margin: 0 auto; }
		.mejs-inner,
		.mejs-inner div,
		.mejs-inner a,
		.mejs-inner span,
		.mejs-inner button,
		.mejs-inner img {
			margin: 0;
			padding: 0;
			border: none;
			outline: none;
		}
		.mejs-container {
			position: relative;
			background: #000000;
		}

		.mejs-inner {
			position: relative;
			width: inherit;
			height: inherit;
		}

		.me-plugin { position: absolute; }

		.mejs-container-fullscreen .mejs-mediaelement,
		.mejs-container-fullscreen video,
		.mejs-embed,
		.mejs-embed body,
		.mejs-mediaelement {
			width: 100%;
			height: 100%;
		}

		.mejs-embed,
		.mejs-embed body {
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		.mejs-container-fullscreen {
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			overflow: hidden;
			z-index: 1000;
		}

		.mejs-background,
		.mejs-mediaelement,
		.mejs-poster,
		.mejs-overlay {
			position: absolute;
			top: 0;
			left: 0;
		}

		.mejs-poster img { display: block; }
		.mejs-overlay-play { cursor: pointer; }

		.mejs-inner .mejs-overlay-button {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 50px;
			height: 50px;
			margin: -25px 0 0 -25px;
			background: url(../img/play.png) no-repeat;
		}
		.mejs-container .mejs-controls {
			position: absolute;
			width: 100%;
			height: 34px;
			left: 0;
			bottom: 0;
			background: rgb(0,0,0);
			background: rgba(0,0,0, .7);
		}

		.mejs-controls .mejs-button button {
			display: block;
			cursor: pointer;
			width: 16px;
			height: 16px;
			background: transparent url(../img/controls.png);
		}
		.mejs-controls div.mejs-playpause-button {
			position: absolute;
			top: 12px;
			left: 15px;
		}

		.mejs-controls .mejs-play button,
		.mejs-controls .mejs-pause button {
			width: 12px;
			height: 12px;
			background-position: 0 0;
		}

		.mejs-controls .mejs-pause button { background-position: 0 -12px; }

		.mejs-controls div.mejs-volume-button {
			position: absolute;
			top: 12px;
			left: 45px;
		}

		.mejs-controls .mejs-mute button,
		.mejs-controls .mejs-unmute button {
			width: 14px;
			height: 12px;
			background-position: -12px 0;
		}

		.mejs-controls .mejs-unmute button { background-position: -12px -12px; }

		.mejs-controls div.mejs-fullscreen-button {
			position: absolute;
			top: 7px;
			right: 7px;
		}

		.mejs-controls .mejs-fullscreen-button button,
		.mejs-controls .mejs-unfullscreen button {
			width: 27px;
			height: 22px;
			background-position: -26px 0;
		}

		.mejs-controls .mejs-unfullscreen button { background-position: -26px -22px; }
		.mejs-controls div.mejs-horizontal-volume-slider {
			position: absolute;
			cursor: pointer;
			top: 15px;
			left: 65px;
		}

		.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
			width: 60px;
			background: #d6d6d6;
		}

		.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
			position: absolute;
			width: 0;
			top: 0;
			left: 0;
		}

		.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,
		.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
			height: 4px;

			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
		}
		.mejs-controls div.mejs-time-rail {
			position: absolute;
			width: 100%;
			left: 0;
			top: -10px;
		}

		.mejs-controls .mejs-time-rail span {
			position: absolute;
			display: block;
			cursor: pointer;
			width: 100%;
			height: 10px;
			top: 0;
			left: 0;
		}

		.mejs-controls .mejs-time-rail .mejs-time-total {
			background: rgb(152,152,152);
			background: rgba(152,152,152, .5);
		}

		.mejs-controls .mejs-time-rail .mejs-time-loaded {
			background: rgb(0,0,0);
			background: rgba(0,0,0, .3);
		}

		.mejs-controls .mejs-time-rail .mejs-time-current { width: 0; }
		.mejs-controls .mejs-time-rail .mejs-time-handle {
			position: absolute;
			cursor: pointer;
			width: 16px;
			height: 18px;
			top: -3px;
			background: url(../img/handle.png);
		}

		.mejs-controls .mejs-time-rail .mejs-time-float {
			position: absolute;
			display: none;
			width: 33px;
			height: 23px;
			top: -26px;
			margin-left: -17px;
			background: url(../img/tooltip.png);
		}

		.mejs-controls .mejs-time-rail .mejs-time-float-current {
			position: absolute;
			display: block;
			left: 0;
			top: 4px;

			font-family: Helvetica, Arial, sans-serif;
			font-size: 10px;
			font-weight: bold;
			color: #666666;
			text-align: center;
		}

		.mejs-controls .mejs-time-rail .mejs-time-float-corner { display: none; }
		.mejs-controls .mejs-time-rail .mejs-time-current,
		.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
			background: #82d344;
			background: -webkit-linear-gradient(top, #82d344 0%, #51af34 100%);
			background: -moz-linear-gradient(top, #82d344 0%, #51af34 100%);
			background: -o-linear-gradient(top, #82d344 0%, #51af34 100%);
			background: -ms-linear-gradient(top, #82d344 0%, #51af34 100%);
			background: linear-gradient(top, #82d344 0%, #51af34 100%);
		}
	</style>
	<meta name="robots" content="noindex,follow" />
</head>
<body>
<!-- 	<div class='player'>
		<video  class='player__video viewer' src="https://r2---sn-8pxuuxa-i5oel.googlevideo.com/videoplayback?pl=21&mv=m&ipbits=0&ms=au,onr&ei=iFmjXKOkNLWoigbc-53oAw&source=youtube&mt=1554209056&keepalive=yes&expire=1554230761&mm=31,26&mn=sn-8pxuuxa-i5oel,sn-npoe7n76&id=o-ALK6696USRdqpw_253YC4j5i9XQRRkStH2lfsnwQAKE8&clen=81211278&c=WEB&fvip=2&lmt=1550619966006674&dur=195.150&aitags=133,134,135,136,137,160,242,243,244,247,248,278,298,299,302,303,394,395,396,397,398&initcwndbps=1243750&ip=27.76.115.247&requiressl=yes&key=yt6&mime=video/webm&gir=yes&itag=303&txp=5531432&signature=16F364CC13B86791056ECEE176210D688780EB71.840DB5B10AE1E06DF6623417A14AA6059B721134&sparams=aitags,clen,dur,ei,gir,id,initcwndbps,ip,ipbits,itag,keepalive,lmt,mime,mm,mn,ms,mv,pl,requiressl,source,expire&alr=yes&cpn=3lpK0ZJyqlhfbn2k&cver=2.20190330&rn=31"></video>
		<div class="player__controls">
			<div class="progress">
				<div class="progress_filled"></div>

			</div>
			<button class="player__button toggle" title="toggle play">@</button>
			<input type="range" name="volume" class="player__slider" min=0 max='1' step="0.05" value="1" >
			<input type="range" name="playbackRate" class="player__slider" min='0.25' max='2' step='0.05' value="1">
			<button data-xxx='-10' class="player__button"> << 10s</button>
			<button data-xxx="25" class="player__button"> 25s >> </button>
		</div>
	</div>

















<audio  class="audio" src="https://r2---sn-8pxuuxa-i5oel.googlevideo.com/videoplayback?pl=21&mv=m&ipbits=0&ms=au,onr&ei=iFmjXKOkNLWoigbc-53oAw&source=youtube&mt=1554209056&keepalive=yes&expire=1554230761&mm=31,26&mn=sn-8pxuuxa-i5oel,sn-npoe7n76&id=o-ALK6696USRdqpw_253YC4j5i9XQRRkStH2lfsnwQAKE8&clen=3441557&c=WEB&fvip=2&lmt=1550628386730792&dur=195.161&initcwndbps=1243750&ip=27.76.115.247&requiressl=yes&key=yt6&mime=audio/webm&gir=yes&itag=251&txp=5511222&signature=2EDA5F9AA21F7840D94202A23EF7466101E46580.80E4EB6A9F3443B47A97DBD120C37044A22A182C&sparams=clen,dur,ei,gir,id,initcwndbps,ip,ipbits,itag,keepalive,lmt,mime,mm,mn,ms,mv,pl,requiressl,source,expire&alr=yes&cpn=3lpK0ZJyqlhfbn2k&cver=2.20190330"></audio>
<script type="text/javascript" src="{{asset('js/demofilm.js')}}"></script>


-->

<!-- 	<video width="640" height="267" poster="media/cars.png">
		<source src="https://r2---sn-8pxuuxa-i5oel.googlevideo.com/videoplayback?pl=21&mv=m&ipbits=0&ms=au,onr&ei=iFmjXKOkNLWoigbc-53oAw&source=youtube&mt=1554209056&keepalive=yes&expire=1554230761&mm=31,26&mn=sn-8pxuuxa-i5oel,sn-npoe7n76&id=o-ALK6696USRdqpw_253YC4j5i9XQRRkStH2lfsnwQAKE8&clen=81211278&c=WEB&fvip=2&lmt=1550619966006674&dur=195.150&aitags=133,134,135,136,137,160,242,243,244,247,248,278,298,299,302,303,394,395,396,397,398&initcwndbps=1243750&ip=27.76.115.247&requiressl=yes&key=yt6&mime=video/webm&gir=yes&itag=303&txp=5531432&signature=16F364CC13B86791056ECEE176210D688780EB71.840DB5B10AE1E06DF6623417A14AA6059B721134&sparams=aitags,clen,dur,ei,gir,id,initcwndbps,ip,ipbits,itag,keepalive,lmt,mime,mm,mn,ms,mv,pl,requiressl,source,expire&alr=yes&cpn=3lpK0ZJyqlhfbn2k&cver=2.20190330&rn=31" type="video/mp4">
	</video>
	<script>
		$(document).ready(function() {
			$('video').mediaelementplayer({
				alwaysShowControls: false,
				videoVolume: 'horizontal',
				features: ['playpause','progress','volume','fullscreen']
			});
		});
	</script> -->
</body>
</html>
