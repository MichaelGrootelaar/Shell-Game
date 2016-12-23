<?php
  session_start();

  if (!isset($_SESSION['options'])) {
    $options = [3,1];
  } else {
    $options = $_SESSION['options'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>General options</title>
    <script>
      function formChecker() {
        a = document.getElementById('numberCups').value;
        b = document.getElementById('numberBalls').value;

        if (a <= b) {
          document.getElementById('error').innerHTML = "*Balls can't be equel or higher then cups.";
          return false;
        }
      }
    </script>
  </head>

  <body>
    <form method="POST" action="actionOptions.php" onsubmit="return formChecker()">
      <h1>General options</h1>
      <p style="color:red;" id="error"></p>
      <label>Number of cups</label>
      <input type="number" max="6" id="numberCups" name="numberCups" value="<?php echo $options[0]; ?>"/><br />
      <label>Number of balls</label>
      <input type="number" max="5" id="numberBalls" name="numberBalls" value="<?php echo $options[1]; ?>"/><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
