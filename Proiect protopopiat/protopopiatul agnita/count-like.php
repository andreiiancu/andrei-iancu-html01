<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clik-count</title>
</head>
<body>

<!-- like-count -->
<section class="body-count">
<div class="main">

    <h3>Click Counter</h3>
    <button id="clickme"><i class="fas fa-thumbs-up"></i>: 0</button>

    <h5>Good practice: no JavaScript code in HTML</h5>

  </div>
</section>

<style>
  .body-count {
  margin: 0;
  padding: 0;
  font-family: "Lato", sans-serif;
  font-size: 20pt;
  font-weight: normal;
  background: lightblue; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(
    -90deg,
    lightblue,
    black
  ); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(
    -90deg,
    lightblue,
    black
  ); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(
    -90deg,
    lightblue,
    black
  ); /* For Firefox 3.6 to 15 */
  background: linear-gradient(-90deg, lightblue, black); /* Standard syntax */
}

.main {
  margin: 100px auto;
  text-align: center;
}

button {
  padding: 20px;
  background: transparent;
  text-shadow: 1px 1px 1px #202020;
  font-family: "Lato", sans-serif;
  font-size: 18pt;
  border: 1px solid lightblue;
  color: lightblue;
}
</style>
  <!-- end-like-count -->

  <script>
  var button = document.getElementById("clickme"),
  count = 0;
button.onclick = function() {
  count += 1;
  button.innerHTML = "Iti multumesc!: " + count;
};

</script>
</body>
</html>
