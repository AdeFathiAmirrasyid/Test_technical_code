<?php
$value = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="text-center">
      <form action="" method="post">
        <input type="text" class="mt-5" name="inputan" placeholder="Input angka" id="myInput" />
        <div class="row justify-content-center mt-5">
          <div class="col-md-3">
            <button type="button" onclick="segitiga()">Generate Segitiga</button>
          </div>

          <div class="col-md-3">
            <button type="button" onclick="ganjil()">Generate Bilangan ganjil</button>
          </div>

          <div class="col-md-3">
            <button type="button" onclick="prima()">Generate Bilangan Prima</button>
          </div>
        </div>
      </form>
    </div>
    <h1>Result :</h1>

    <h4 id="result"></h4>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    function ganjil() {
      $.ajax({
        type: "POST",
        url: "../backend/index.php",
        data: {
          num1: $("#myInput").val()
        },
        success: function (data) {

          $("#result").html(data);
        },
      });
    }

    function prima() {
      $.ajax({
        type: "POST",
        url: "../backend/index2.php",
        data: {
          num1: $("#myInput").val()
        },
        success: function (data) {

          $("#result").html(data);
        },
      });
    }

    function segitiga() {
      $.ajax({
        type: "POST",
        url: "../backend/index3.php",
        data: {
          num1: $("#myInput").val()
        },
        success: function (data) {
          $("#result").html(data);
        },
      });
    }
  </script>
</body>

</html>