<?php include_once 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FDMR Monitor - TG Count</title>
  <script src="scripts/hbmon.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.php">
  <meta name="description" content="Copyright (c) 2016-23.The Regents of the K0USY Group. All rights reserved. Version OA4DOA">
</head>

<body>
  <?php include_once 'include/header.php'; ?>
  <noscript>You must enable JavaScript</noscript>
  <div id="tgcount"></div>
  <script>
  let sortColumn = 'rank';
  let sortDirection = 'asc';
  let currentSearch = '';
  let currentFilter = 'all';

  function initTGTable() {
    const table = document.getElementById('tgTable');
    if (!table) return;
    
    const tbody = table.querySelector('tbody');
    const searchInput = document.getElementById('tgSearch');
    const filterSelect = document.getElementById('tgFilter');
    const headers = table.querySelectorAll('th[data-sort]');
    
    if (currentSearch) searchInput.value = currentSearch;
    if (currentFilter) filterSelect.value = currentFilter;

    function getCellValue(row, column) {
      const cells = row.cells;
      switch(column) {
        case 'rank': return parseInt(cells[0].textContent) || 0;
        case 'number': return parseInt(row.dataset.tg) || 0;
        case 'name': return row.dataset.name;
        case 'qso': return parseInt(cells[3].querySelector('.tg-qso-count').textContent) || 0;
        case 'time': return parseInt(cells[4].querySelector('.tg-time').textContent.replace(/[^0-9]/g, '')) || 0;
        default: return 0;
      }
    }
    
    function sortTable(column) {
      const rows = Array.from(tbody.querySelectorAll('tr.tg-row'));
      
      if (sortColumn === column) {
        sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
      } else {
        sortColumn = column;
        sortDirection = 'asc';
      }
      
      headers.forEach(h => {
        h.classList.remove('sorted-asc', 'sorted-desc');
        if (h.dataset.sort === column) {
          h.classList.add(sortDirection === 'asc' ? 'sorted-asc' : 'sorted-desc');
        }
      });
      
      rows.sort((a, b) => {
        const valA = getCellValue(a, column);
        const valB = getCellValue(b, column);
        
        if (typeof valA === 'string') {
          return sortDirection === 'asc' ? valA.localeCompare(valB) : valB.localeCompare(valA);
        }
        return sortDirection === 'asc' ? valA - valB : valB - valA;
      });
      
      rows.forEach(row => tbody.appendChild(row));
    }
    
    headers.forEach(header => {
      header.addEventListener('click', () => sortTable(header.dataset.sort));
    });
    
    function filterRows() {
      currentSearch = searchInput.value.toLowerCase();
      currentFilter = filterSelect.value;
      const rows = tbody.querySelectorAll('tr.tg-row');
      
      rows.forEach(row => {
        const tg = row.dataset.tg || '';
        const name = row.dataset.name || '';
        const calls = row.dataset.calls || '';
        const matchesSearch = !currentSearch || 
          tg.includes(currentSearch) || 
          name.includes(currentSearch) || 
          calls.includes(currentSearch);
        
        const tgNum = parseInt(tg) || 0;
        let matchesFilter = currentFilter === 'all';
        if (currentFilter === 'tgif') matchesFilter = tgNum >= 3100 && tgNum < 3200;
        if (currentFilter === 'bm') matchesFilter = tgNum >= 4000;
        if (currentFilter === 'dmr') matchesFilter = tgNum > 0 && tgNum < 3100;
        
        row.classList.toggle('hidden', !matchesSearch || !matchesFilter);
      });
    }
    
    searchInput.addEventListener('input', filterRows);
    filterSelect.addEventListener('change', filterRows);
    
    if (sortColumn !== 'rank' || sortDirection !== 'asc') {
        const currentSortDirection = sortDirection;
        sortDirection = currentSortDirection === 'asc' ? 'desc' : 'asc';
        sortTable(sortColumn);
    }
    if (currentSearch || currentFilter !== 'all') {
        filterRows();
    }
  }
  </script>
  <footer>
    <p>
      Copyright (c) 2016-<?php echo date("Y"); ?><br>
      The Regents of the <a target="_blank" href="http://k0usy.mystrikingly.com">K0USY Group</a>. All rights reserved.<br>
      <a title="FDMR Monitor v1.0.8" target="_blank" href="https://github.com/iu2naf/FDMR-Monitor_OA4DOA.git">© FreeDMR Italia - Developed by FreeDMR-IT Dev Team 2026</a>
    </p>
  </footer>
</body>

</html>