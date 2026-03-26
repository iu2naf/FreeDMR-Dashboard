<?php include_once 'include/config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="300">
  <title>FreeDMR Monitor - System Info</title>
  <link rel="stylesheet" type="text/css" href="css/styles.php">
  <meta name="description" content="Copyright (c) 2016-23.The Regents of the K0USY Group. All rights reserved. Version OA4DOA">
</head>
<body>
  <img class="img-top" src="img/logo.png?random=323527528432525.24234" alt="">
  <h2><?php echo REPORT_NAME;?></h2>
  <nav class="nav-buttons">
    <?php include_once 'buttons.php';?>
  </nav>

  <fieldset class="med">
    <legend><b>.: System Info :.</b></legend>
    <div class="images">
      <img alt="" src="img/tempC.png">
      <img alt="" src="img/hdd.png">
      <img alt="" src="img/mem.png">
      <img alt="" src="img/cpu.png">
      <img alt="" src="img/mrtg/localhost_2-day.png">
    </div>
    <p class="update-note">
      <span class="txt-blue"><b>BLUE</b></span> Outgoing Traffic in Bits per Second | 
      <span class="txt-green"><b>GREEN</b></span> Incoming Traffic in Bits per Second
    </p>
  </fieldset>
  <footer>
    <p>
      Copyright (c) 2016-<?php echo date("Y");?><br>
      The Regents of the <a target="_blank" href="http://k0usy.mystrikingly.com">K0USY Group</a>. All rights reserved.<br>
      <a title="FDMR Monitor OA4DOA v1.0.0" target="_blank" href="https://github.com/yuvelq/FDMR-Monitor.git">Version OA4DOA</a>
    </p>
  </footer>
</body>
</html>