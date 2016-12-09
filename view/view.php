<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="CSS/mystyle.css" />
  </head>

  <body>
    <?php echo $message; ?>
    
    <div class="cups">
      <?php foreach ($cupArray as $cup) { echo $cup->show(); } ?>

      <div class="clear"></div>
    </div>

    <div class="player">
      <?php echo $player->show(); ?>
    </div>
  </body>
</html>
