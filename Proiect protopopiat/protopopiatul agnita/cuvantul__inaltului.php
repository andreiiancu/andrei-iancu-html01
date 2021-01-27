<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
</head>
<body>

<button>Toggle between hiding and showing the paragraphs</button>

<p>This is a paragraph with little content.</p>

<p><img src="../protopopiatul agnita/assets/img/evanghelia.jpg" alt=""></p>
<p>This is another small paragraph.</p>


<?php include("/home/simplefo/public_html/simplephpscripts/news-script-php/news/news.php"); ?>

</body>
</html>
