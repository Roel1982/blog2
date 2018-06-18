<?php
  if ($_REQUEST) {
    $auteur = $_REQUEST["auteur"];
    $bericht = $_REQUEST["bericht"];
    $submit = $_REQUEST["submit"];

    $file = 'blog.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current = "$auteur<br> $bericht<br>" . $current;
    // Write the contents back to the file
    file_put_contents($file, $current);
  }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="javascript.js"></script>
  </head>
  <body onload="iFrameOn();">
    <form action="index.php" method="post" name="myForm" id="myForm">
      Auteur:

      <input type="text" name="auteur" value=""><br><br>
      <input type="button" onclick="iBold()" value="B">
      <input type="button" onclick="iUnderline()" value="U">
      <input type="button" onclick="iItalic()" value="I"><br><br>


      Bericht: <br> <textarea style="display:none;" name="bericht" id="bericht" rows="8" cols="80"></textarea><br>
      <iframe name="richTextField" id="richTextField" style="border:#000 1px solid; width:700px; height:400px;"></iframe>


      <input name="myBtn" type="button" value="Submit Data" onclick="javascript:submit_form();">
    </form>
    <?php
        echo $current;
    ?>
  </body>
</html>
