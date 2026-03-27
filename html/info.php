<?php include_once 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>FDMR monitor - Info</title>
  <link rel="stylesheet" type="text/css" href="css/styles.php">
  <meta name="description" content="Copyright (c) 2016-23.The Regents of the K0USY Group. All rights reserved. Version OA4DOA">
</head>

<body>
  <img class="img-top" src="img/logo.png?random=323527528432525.24234" alt="">
  <h2><?php echo REPORT_NAME; ?></h2>
  <nav class="navbar">
    <?php include_once 'buttons.php'; ?>
  </nav>
  <fieldset class="big">
    <legend><b>&nbsp;.: Talk Groups :.&nbsp;</b></legend>
    <table class="log">
      <thead>
        <tr>
          <th style="width: 150px;">TG#</th>
          <th style="width: 80px;">TS 1</th>
          <th style="width: 80px;">TS 2</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span class="dmr-id">TG 5</span></td>
          <td></td>
          <td><span class="txt-green">D | S</span></td>
          <td>Talk group XLX132-D D-Star/DMR/C4FM.</td>
        </tr>
        <tr>
          <td><span class="dmr-id">TG 9999</span></td>
          <td></td>
          <td><span class="txt-green">D | S</span></td>
          <td>Echo (Parrot).</td>
        </tr>
      </tbody>
    </table>
    <div class="update-note">Hotspot: D - duplex | S - simplex</div>
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