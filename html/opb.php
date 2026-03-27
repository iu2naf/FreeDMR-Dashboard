<?php include_once 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>FDMR Monitor - OpenBridge</title>
  <script src="scripts/hbmon.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.php">
  <meta name="description" content="Copyright (c) 2016-23.The Regents of the K0USY Group. All rights reserved. Version OA4DOA">
</head>

<body>
  <img class="img-top" src="img/logo.png?random=323527528432525.24234" alt="">
  <h2><?php echo REPORT_NAME; ?></h2>
  <nav class="nav-buttons">
    <?php include_once 'buttons.php'; ?>
  </nav>
  <noscript>You must enable JavaScript</noscript>
  <fieldset class="big">
    <legend><b>.: OpenBridge Status :.</b></legend>
    <p id="opb"></p>
  </fieldset>
  <footer>
    <p>
      Copyright (c) 2016-<?php echo date("Y"); ?><br>
      The Regents of the <a target="_blank" href="http://k0usy.mystrikingly.com">K0USY Group</a>. All rights reserved.<br>
      <a title="FDMR Monitor v1.0.8" target="_blank" href="https://github.com/iu2naf/FDMR-Monitor_OA4DOA.git">© FreeDMR Italia - Developed by FreeDMR-IT Dev Team 2026</a>
    </p>
  </footer>
</body>

</html>