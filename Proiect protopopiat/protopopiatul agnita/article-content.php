

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article</title>

<meta
    content=""
    name="description"
  >
  <meta
    content=""
    name="keywords"
  >

  <meta
    name="description"
    content="carousel with javascript"
  >
  <meta
    name="keywords"
    content="carousel,javascript"
  >
  <meta
    name="author"
    content="Yifang Di"
  >
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"
  >

  <link
    rel="stylesheet"
    href="http://192.168.1.4:5501/Proiect%20protopopiat/protopopiatul%20agnita/index.html"
  >

  <!-- Vendor CSS Files -->
  <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link
    href="assets/vendor/icofont/icofont.min.css"
    rel="stylesheet"
  >
  <link
    href="assets/vendor/boxicons/css/boxicons.min.css"
    rel="stylesheet"
  >
  <link
    href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
    rel="stylesheet"
  >
  <link
    href="assets/vendor/venobox/venobox.css"
    rel="stylesheet"
  >
  <link
    href="assets/vendor/aos/aos.css"
    rel="stylesheet"
  >

  <!-- Template Main CSS File -->
  <link
    href="assets/css/style.css"
    rel="stylesheet"
  >

  <link
    href="/your-path-to-fontawesome/css/all.css"
    rel="stylesheet"
  >

  <link
    href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"
    rel="stylesheet"
  >
  <link
    rel="stylesheet"
    href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
  >

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
  >

  <!--load all styles -->


  <!-- =======================================================
    * Template Name: BizLand - v1.2.0
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
<!-- news -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <!-- news -->

</head>
<body>

<?php
  include 'headerparohii.php'
  ?>


  <br> <br> <br>

  <article class="col-lg-12">
	<h1 class="text-danger">
		<span class="focusing">Pe urmele</span>
		<span class="the">Lui</span>
		<span class="heart">Dumnezeu</span>
	</h1>
	<cite>
		Autor: <span class="name">Jay Wamsley</span> |
		Photo: <span class="name">Jay Drowns</span>
	</cite>
	<img src="../protopopiatul agnita/assets/img/coves.jpg" alt="not actually Fabio" />
	<aside>Fabio Sagebin is currently in the final year of a residency at the University of Rochester Medical Center.</aside>
	<main class="col-lg-12" >
		<p><span class="dropcap">A dozen</span> years ago, soon-to-be UVU student Fabio Sagebin was doing research - on whether or not higher education was for him and, if so, where he should enroll. A dozen years from now, Dr. Sagebin will again likely be doing research - this time on better ways to repear hearts.</p>
		<p>Currently a member of the University of Rochester Medical Center's cardiothoracic surgery integrated residency program, Sagebin says a decade ago, he was "fully intending to finish high school, go on a mission, and come home and work construction with my dad." His family - who had emigrated when he was 3 years old to Utah from a small city in southern Brazil, near the Uruguayan border - had begun a successful business, building steel-frame homes. His mission for The Church of Jesus Christ of Latter-Day Saints had taken him to New York City, specifically Brooklyn and Queens.</p>
		<p>A visit with his mission president "changed the trajectory for me," Sagebin remembers. "I worked closely with my mission president, and during that mentorship he planted the seed that I really needed a formal education.</p>
		<p>"Unfortunately, I had not really prepared for that at that point. My parents were wonderful people, hardworking people, but we didn't have the social infrostructure necessary for college prep. It was not something that was inculcated in my family culture. I didn't take the SAT of the ACT, and I really hadn't prepared for college. So, when I came home, I just looked for an open-enrollment college."</p>
	</main>
</article>

<style>
/* Layout */
html, body {
	background-color:#eee3c8 ;
	margin: 0;
	padding: 0 0 15px;
}
article {
	margin: auto;
	max-width: 1000px;
	display: grid;
	grid-template-columns: auto 1fr auto;
	grid-gap: .5em;
}
h1, cite, img, aside, main {
	grid-column: 2;
}
main {
	max-width: 450px;
	margin: auto;
	text-align: justify;
}
img {
	width: 100%;
}
p:first-child {
	margin-top: 0;
}
p:last-child::after {
	content: ' ■';
	opacity: 0.2;
}
/* Title Layout */
h1 span {
	display: block;
}
.focusing {
	margin-bottom: -10px;
}
.the {
	transform: translateY(50%);
	background: #eee3c8;
	width: 50px;
	margin: auto;
}
.heart {
	border: thin solid black;
	border-width: thin 0;
	padding: 10px 0 0;
}
/* Typography */
h1 {
	text-align: center;
}
.focusing {
	font-family: 'questa-grande';
	text-transform: uppercase;
	font-size: 1em;
}
.the {
	font-family: 'brandon-grotesque';
	text-transform: uppercase;
	font-size: 0.5em;
}
.heart {
	font-family: 'ltc-bodoni-175';
	text-transform: uppercase;
	font-size: 2em;
}
cite {
	font-family: 'brandon-grotesque';
	font-style: normal;
	text-transform: uppercase;
	text-align: center;
}
.name {
	font-weight: 900;
}
main {
	font-family: 'abril-text';
}
.dropcap {
	font-family: 'brandon-grotesque';
	text-transform: uppercase;
	font-size: 0.9em;
	letter-spacing: 0.1em;
}
aside {
	font-family: 'brandon-grotesque';
	font-style: italic;
	text-align: right;
}


@media only screen and (min-width:750px) {
	/* Layout */
	html, body { padding: 30px 0; }
	article {
		grid-template-columns: 1fr 3fr 1fr;
		grid-gap: 1.5em;
	}
	main {
		margin: 0;
	}
	aside {
		grid-column: 1;
		grid-row: 4;
		margin-top: 7em;
	}
	/* Title */
	.focusing {
		font-size: 2.2em;
		margin-bottom: -15px;
	}
	.the {
		font-size: 0.75em;
	}
	.heart {
		font-size: 4em;
	}
}
</style>

<!-- CAROUSEL -->
<!-- Navigation -->


<!-- Gallery -->
<!--
Gallery is linked to lightbox using data attributes.

To open lightbox, this is added to the gallery element: {data-toggle="modal" data-target="#exampleModal"}.

To open carousel on correct image, this is added to each image element: {data-target="#carouselExample" data-slide-to="0"}.
Replace '0' with corresponding slide number.
-->

<div class="row col-lg-12" id="gallery" data-toggle="modal" data-target="#exampleModal">
  <div class="col-12 col-sm-6 col-lg-3">
    <img class="w-100" src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="0">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
    <img class="w-100" src="https://images.unsplash.com/photo-1546534505-d534e27ecb35?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="1">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
    <img class="w-100" src="https://images.unsplash.com/photo-1546111380-cfca9a43dd85?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="2">
  </div>
  <div class="col-12 col-sm-6 col-lg-3">
    <img class="w-100" src="https://images.unsplash.com/photo-1547288242-f3d375fc7b5f?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="3">
  </div>
</div>

<!-- Modal -->
<!--
This part is straight out of Bootstrap docs. Just a carousel inside a modal.
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1546534505-d534e27ecb35?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1546111380-cfca9a43dd85?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://images.unsplash.com/photo-1547288242-f3d375fc7b5f?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Fourth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Custom Styling Toggle. For demo purposes only. -->
<div class="switch-wrap">
  <label class="switch">
    <input type="checkbox" id="styleSwitch" onclick="switchStyle();">
    <span class="slider round"></span>
  </label>
  <span class="switch-text">Toggle between <em>Bootstrap defaults</em> and <em>custom styling</em>.</span>
</div>

<style>
  HTML CSS JSResult Skip Results Iframe
EDIT ON
#gallery img {
  height: 75vw;
  -o-object-fit: cover;
     object-fit: cover;
}
@media (min-width: 576px) {
  #gallery img {
    height: 35vw;
  }
}
@media (min-width: 992px) {
  #gallery img {
    height: 18vw;
  }
}

.carousel-item img {
  height: 60vw;
  -o-object-fit: cover;
     object-fit: cover;
}
@media (min-width: 576px) {
  .carousel-item img {
    height: 350px;
  }
}

* {
  transition: 0.3s;
}

#gallery.custom {
  padding: 0 15px;
}
#gallery.custom img {
  display: block;
  margin: 15px 0;
  border-radius: 300px 30px 300px 300px;
}
#gallery.custom img:hover {
  border-radius: 30px 90px 30px 30px;
}

#exampleModal.custom .modal-content {
  background: none;
  border: none;
}
#exampleModal.custom .modal-header {
  border: none;
}
#exampleModal.custom .modal-header button {
  background: none;
  border-radius: 100px 100px 0 0;
  padding: 5px 10px;
  opacity: 1;
  position: relative;
  top: 3px;
  border: solid 2px white;
}
@media (min-width: 992px) {
  #exampleModal.custom .modal-header button {
    top: 15px;
  }
}
#exampleModal.custom .modal-header button:hover {
  top: 3px;
}
#exampleModal.custom .modal-header span {
  color: white;
}
#exampleModal.custom .modal-body {
  padding: 0;
  border: none;
  position: relative;
}
#exampleModal.custom .modal-body::before, #exampleModal.custom .modal-body::after {
  content: "";
  height: 50px;
  width: 50px;
  display: block;
  position: absolute;
  background: white;
  border-radius: 3px 10px;
}
@media (min-width: 768px) {
  #exampleModal.custom .modal-body::before, #exampleModal.custom .modal-body::after {
    border-radius: 3px 30px;
    height: 100px;
    width: 100px;
  }
}
#exampleModal.custom .modal-body::before {
  top: -5px;
  left: -5px;
}
@media (min-width: 768px) {
  #exampleModal.custom .modal-body::before {
    top: -15px;
    left: -15px;
  }
}
#exampleModal.custom .modal-body::after {
  bottom: -5px;
  right: -5px;
  z-index: -1;
}
@media (min-width: 768px) {
  #exampleModal.custom .modal-body::after {
    bottom: -15px;
    right: -15px;
  }
}
#exampleModal.custom .modal-footer {
  border: none;
  margin-top: 60px;
}
@media (min-width: 992px) {
  #exampleModal.custom .modal-footer {
    margin-top: 40px;
  }
}
#exampleModal.custom .modal-footer .btn {
  margin: auto;
  border: solid 2px white;
  background: none;
  text-transform: uppercase;
  font-size: 0.8em;
  letter-spacing: 0.1em;
  font-weight: bold;
  padding: 0.2em 0.7em;
}
#exampleModal.custom .modal-footer .btn:hover {
  background: white;
  color: black;
}
#exampleModal.custom .carousel-control-prev, #exampleModal.custom .carousel-control-next {
  font-size: 2em;
  top: auto;
  opacity: 1;
  bottom: -52px;
}
@media (min-width: 768px) {
  #exampleModal.custom .carousel-control-prev, #exampleModal.custom .carousel-control-next {
    top: 0;
    opacity: 0.5;
    bottom: 0;
  }
}
#exampleModal.custom .carousel-control-next-icon, #exampleModal.custom .carousel-control-prev-icon {
  height: 30px;
  width: 30px;
}
@media (min-width: 768px) {
  #exampleModal.custom .carousel-control-prev {
    left: -90px;
  }
}
@media (min-width: 768px) {
  #exampleModal.custom .carousel-control-next {
    right: -90px;
  }
}
#exampleModal.custom .carousel-indicators {
  bottom: -60px;
}
@media (min-width: 992px) {
  #exampleModal.custom .carousel-indicators {
    bottom: -30px;
  }
}
#exampleModal.custom .carousel-indicators li {
  height: 30px;
  border-radius: 100px;
  background: none;
  border: solid 2px white;
}
@media (min-width: 992px) {
  #exampleModal.custom .carousel-indicators li {
    height: 10px;
  }
}
#exampleModal.custom .carousel-indicators li:hover {
  background: white;
}
#exampleModal.custom .carousel-indicators li.active {
  background: white;
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
@media (min-width: 576px) {
  .switch {
    margin: 0;
  }
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: 0.4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.switch-wrap {
  text-align: center;
  background-color: #b1fbc1;
  padding: 30px;
  border-radius: 3px;
  margin: 30px 0 0;
}
@media (min-width: 576px) {
  .switch-wrap {
    position: fixed;
    bottom: 0;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    width: 100%;
    justify-content: center;
    padding: 10px;
  }
}

.switch-text {
  display: block;
  margin: 0.5em;
}
@media (min-width: 576px) {
  .switch-text {
    margin: 0 1em 0 0;
  }
}
</style>

<script>
  function switchStyle() {
  if (document.getElementById('styleSwitch').checked) {
    document.getElementById('gallery').classList.add("custom");
    document.getElementById('exampleModal').classList.add("custom");
  } else {
    document.getElementById('gallery').classList.remove("custom");
    document.getElementById('exampleModal').classList.remove("custom");
  }
}
</script>


<?php
  include 'footer.php'
  ?>
</body>
</html>
