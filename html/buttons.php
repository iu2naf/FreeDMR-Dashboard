<!-- HBMonitor navbar code -->
<nav class="navbar">
  <a href="index.php">Home</a>
  <a href="linkedsys.php">Linked Systems</a>
  <a href="opb.php">OpenBridge</a>
  <a href="statictg.php">Static TG</a>
  <?php if (TGCOUNT_INC) {
    echo '<a href="tgcount.php">TG Count</a>';
  } ?>
  <a href="moni.php">Monitor</a>
  <a href="log.php">Lastheard</a>
  <div class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown(this)">Link</a>
    <div class="dropdown-content">
      <a href="https://hotspot.freemdr.it" target="_blank">Hotspot</a>
      <a href="http://mqtt.freedmr.it:7000" target="_blank">MQTT</a>
    </div>
  </div>
  <a href="info.php">Info</a>
</nav>
<script>
function toggleDropdown(el) {
  var dropdown = el.parentElement;
  dropdown.classList.toggle('active');
  document.addEventListener('click', function(e) {
    if (!dropdown.contains(e.target)) {
      dropdown.classList.remove('active');
    }
  });
}
</script>
