<?php  if (!defined("IS_INITPHP")) exit("Access Denied!");  /* INITPHP Version 1.0 ,Create on 2017-01-08 02:09:40, compiled from ../app/web/template/index/index.htm */ ?>
<!DOCTYPE html>
<html>
<body>

	<!-- content wrapper -->
	<div class=main>
		<div class="center clear">
			<!-- main content column -->
			<main id=main><!--CONTENT-->
				<div class="demo-wrapper">
	
					<h1>Demo: Fullscreen API</h1>
	
					<div style="padding: 20px;">
						<button onclick="launchFullscreen(document.documentElement);"
							class="sexyButton">Launch Fullscreen</button>
						<button onclick="exitFullscreen();" class="sexyButton">Hide
							Fullscreen</button>
						<button onclick="dumpFullscreen();" class="sexyButton">Dump
							Fullscreen Property Data</button>
					</div>
				</div>
			</main>
		</div>
	</div>
<style>
	:-webkit-full-screen {
		background: pink;
	}
	
	:-moz-full-screen {
		background: pink;
	}
	
	:-ms-fullscreen {
		background: pink;
	}
	
	:full-screen { /*pre-spec */
		background: pink;
	}
	
	:fullscreen { /* spec */
		background: pink;
	}
</style>
				<script>
// Find the right method, call on correct element
function launchFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}

function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}

function dumpFullscreen() {
  console.log("document.fullscreenElement is: ", document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
  console.log("document.fullscreenEnabled is: ", document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
}

// Events
document.addEventListener("fullscreenchange", function(e) {
  console.log("fullscreenchange event! ", e);
});
document.addEventListener("mozfullscreenchange", function(e) {
  console.log("mozfullscreenchange event! ", e);
});
document.addEventListener("webkitfullscreenchange", function(e) {
  console.log("webkitfullscreenchange event! ", e);
});
document.addEventListener("msfullscreenchange", function(e) {
  console.log("msfullscreenchange event! ", e);
});

// Add different events for fullscreen
</script>

</body>
</html>
