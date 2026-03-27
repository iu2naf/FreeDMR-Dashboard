<?php
header("Content-type: text/css");
include_once '../include/config.php';
?>
@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Inter:wght@400;500;600;700&display=swap');

:root {
  --primary: #2563eb;
  --primary-dark: #1d4ed8;
  --secondary: #64748b;
  --success: #22c55e;
  --warning: #f59e0b;
  --danger: #ef4444;
  --accent: #06b6d4;
  
  --bg-main: #0f172a;
  --bg-card: #1e293b;
  --bg-hover: #334155;
  --bg-input: #0f172a;
  
  --text-primary: #f1f5f9;
  --text-secondary: #94a3b8;
  --text-muted: #64748b;
  
  --border: #334155;
  --border-light: #475569;
  
  --tg-orange: #f97316;
  --dmr-blue: #0ea5e9;
  --call-green: #22c55e;
  
  --radius-sm: 4px;
  --radius-md: 8px;
  --radius-lg: 12px;
  
  --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.4);
}

*, *::before, *::after {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 20px;
  background: var(--bg-main);
  background-image: 
    radial-gradient(ellipse at top, #1e293b 0%, transparent 50%),
    radial-gradient(ellipse at bottom right, #1e3a5f 0%, transparent 40%);
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 14px;
  color: var(--text-primary);
  min-height: 100vh;
}

h2 {
  text-align: center;
  color: var(--text-primary);
  font-size: 24px;
  font-weight: 600;
  margin: 20px 0;
  text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.img-top {
  display: block;
  margin: 10px auto;
  max-width: 300px;
  filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
}

fieldset {
  background: var(--bg-card);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px 20px;
  margin: 16px auto;
  box-shadow: var(--shadow);
  max-width: 1100px;
}

fieldset.big { max-width: 1100px; }
fieldset.med { max-width: 900px; }
fieldset.small { max-width: 70%; }

legend {
  background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
  color: white;
  padding: 8px 16px;
  border-radius: var(--radius-md);
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.5px;
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px;
}

th, td {
  padding: 12px 8px;
  text-align: center;
  border-bottom: 1px solid var(--border);
}

th {
  background: linear-gradient(180deg, #2d3a4f 0%, #1e293b 100%);
  color: var(--text-secondary);
  font-weight: 600;
  text-transform: uppercase;
  font-size: 11px;
  letter-spacing: 0.5px;
  position: sticky;
  top: 0;
}

tr:hover {
  background: var(--bg-hover);
}

tr:nth-child(even) {
  background: rgba(255, 255, 255, 0.02);
}

.log th {
  background: var(--primary-dark);
  color: white;
}

/* Active QSO */
.active-qso {
  width: 100%;
  border: none;
  background: transparent;
}

.active-qso th {
  background: transparent;
  color: var(--accent);
  padding: 8px;
}

.active-qso td {
  background: rgba(6, 182, 212, 0.1);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  padding: 16px;
  margin: 4px;
  display: inline-block;
}

/* Wait data */
.w4data {
  width: 100%;
  background: var(--bg-card);
  border: 2px dashed var(--border);
  border-radius: var(--radius-md);
  padding: 30px;
  text-align: center;
  color: var(--warning);
  font-size: 14px;
  font-weight: 500;
}

/* Tables */
.stctg, .lnksys {
  table-layout: fixed;
  background: var(--bg-card);
}

.stctg .th1wd { width: 120px; }
.stctg .th2wd { width: 160px; }
.stctg .th3wd { width: 90px; }
.stctg .th4wd { width: 40px; }
.stctg .th5wd { width: 50%; }
.stctg .th6wd { width: 65px; }
.stctg .th7wd { width: 65px; }

.lnksys .th1wd { width: 120px; }
.lnksys .th2wd { width: 160px; }
.lnksys .th3wd { width: 100px; }
.lnksys .th4wd { width: 50px; }
.lnksys .th5wd { width: auto; }
.lnksys .th6wd { width: 40%; }

.connted-bkgnd {
  background: rgba(34, 197, 94, 0.15) !important;
  color: var(--success);
  font-weight: 500;
}

.ts1-bkgnd {
  background: rgba(249, 115, 22, 0.1);
}

.peer-conn {
  background: rgba(34, 197, 94, 0.15);
  color: var(--success);
}

.peer-disc {
  background: rgba(239, 68, 68, 0.2);
  color: var(--danger);
}

.location {
  font-size: 11px;
  color: var(--tg-orange);
  font-weight: 500;
}

/* OpenBridge */
.opb {
  background: var(--bg-card);
}

.opb .col1 { text-align: left; padding-left: 20px; font-weight: 600; color: var(--accent); }
.opb .col2 { font-size: 12px; color: var(--text-secondary); }
.opb .col3 { font-size: 12px; color: var(--text-primary); }

.opb .th1wd { width: 12%; }
.opb .th2wd { width: 12%; }
.opb .th3wd { width: 70%; }

/* Connected to Server */
.conn2srv {
  background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 16px;
  margin-top: 8px;
}

.conn2srv .tittle {
  color: var(--accent);
  font-weight: 600;
  font-size: 13px;
  margin: 8px 0;
  display: block;
}

.conn2srv .hs-peers {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin: 12px 0;
}

/* Tooltips */
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.tooltip::after {
  content: '';
  position: absolute;
  bottom: -4px;
  left: 0;
  width: 100%;
  height: 2px;
  background: var(--accent);
  opacity: 0;
  transition: opacity 0.2s;
}

.tooltip:hover::after {
  opacity: 1;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 280px;
  background: #2d3748;
  border: 1px solid var(--border-light);
  box-shadow: var(--shadow-lg);
  color: #e2e8f0;
  text-align: left;
  border-radius: var(--radius-md);
  padding: 12px;
  position: absolute;
  z-index: 100;
  left: 100%;
  top: 0;
  opacity: 0;
  transition: opacity 0.2s, transform 0.2s;
  transform: translateX(-10px);
  font-size: 12px;
  line-height: 1.5;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
  transform: translateX(8px);
}

.tooltiptext b {
  color: var(--accent);
}

/* Colors */
.txt-yellow { color: #fbbf24; }
.txt-green { color: var(--call-green); }
.txt-red { color: var(--danger); }
.txt-blue { color: var(--dmr-blue); }
.txt-orange { color: var(--tg-orange); }
.txt-008000 { color: #008000; }
.txt-0065ff { color: #0065ff; }
.txt-b5651d { color: var(--tg-orange); }
.txt-464646 { color: #94a3b8; }
.txt-002d62 { color: #002d62; }
.txt-3a4aa6 { color: #3a4aa6; }
.txt-b70101 { color: #b70101; }

.bkgnd-1d1 { background: rgba(34, 197, 94, 0.3); }
.bkgnd-8ecfb4 { background: rgba(142, 207, 180, 0.3); }
.bkgnd-cefdce { background: rgba(206, 253, 206, 0.2); }
.bkgnd-ff0000 { background: rgba(255, 0, 0, 0.2); }

.fnt-7pt { font-size: 10px; }
.fnt-8pt { font-size: 11px; }

/* TX/RX Badges */
.TX, .RX {
  padding: 4px 8px;
  border-radius: var(--radius-sm);
  font-weight: 600;
  font-size: 11px;
}

.TX {
  background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
  color: white;
}

.RX {
  background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
  color: white;
}

/* QSO Badge */
.qso-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(6, 182, 212, 0.1);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  padding: 8px 12px;
  margin: 4px;
  font-family: 'JetBrains Mono', monospace;
  font-size: 13px;
}

.qso-badge .type {
  font-weight: 700;
  font-size: 11px;
  padding: 2px 6px;
  border-radius: 3px;
}

.qso-badge .type.M { background: var(--call-green); color: white; }
.qso-badge .type.O { background: var(--accent); color: white; }

.qso-badge .call { color: var(--dmr-blue); font-weight: 600; }
.qso-badge .arrow { color: var(--danger); }
.qso-badge .tg { color: var(--tg-orange); font-weight: 600; }

/* Slot Indicator */
.slot-indicator {
  display: inline-block;
  padding: 4px 10px;
  border-radius: var(--radius-sm);
  font-weight: 600;
  font-size: 12px;
}

.slot-indicator.TS1 {
  background: rgba(249, 115, 22, 0.2);
  color: var(--tg-orange);
}

.slot-indicator.TS2 {
  background: rgba(14, 165, 233, 0.2);
  color: var(--dmr-blue);
}

/* Peer Status */
.peer-status {
  display: inline-block;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 11px;
  font-weight: 600;
}

.peer-status.connected {
  background: rgba(34, 197, 94, 0.2);
  color: var(--success);
}

.peer-status.disconnected {
  background: rgba(239, 68, 68, 0.2);
  color: var(--danger);
}

/* Status */
.status-active {
  background: var(--success);
  color: white;
  padding: 2px 8px;
  border-radius: var(--radius-sm);
  font-size: 11px;
  font-weight: 600;
}

.status-inactive {
  background: var(--secondary);
  color: white;
  padding: 2px 8px;
  border-radius: var(--radius-sm);
  font-size: 11px;
  font-weight: 600;
}

/* DMR ID */
.dmr-id {
  font-family: 'JetBrains Mono', monospace;
  font-weight: 600;
  color: var(--accent);
  background: rgba(6, 182, 212, 0.1);
  padding: 2px 6px;
  border-radius: 3px;
}

/* Links */
a {
  color: var(--dmr-blue);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s;
}

a:hover {
  color: var(--accent);
  text-decoration: underline;
}

/* Buttons */
<?php echo "a.button, .dropbtn { "; echo THEME_COLOR; echo " }"; ?>

a.button {
  text-shadow: none;
  border: none;
  padding: 10px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  margin: 6px 4px;
  border-radius: var(--radius-md);
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  transition: all 0.2s ease;
}

a.button:hover {
  background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.3);
  color: white !important;
}

.button:hover { background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%); color: white; }  
.dropdown:hover .dropbtn { background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%); color: white; }

.dropbtn {
  border: none;
  padding: 10px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  margin: 6px 4px;
  border-radius: var(--radius-md);
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  cursor: pointer;
}

/* Dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background: var(--bg-card);
  min-width: 160px;
  box-shadow: var(--shadow-lg);
  z-index: 1000;
  border-radius: var(--radius-md);
  border: 1px solid var(--border);
}

.dropdown-content a {
  color: var(--text-primary);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background: var(--bg-hover);
}

.dropdown:hover .dropdown-content { display: block; }

/* Log window */
#log, #moni {
  height: 40em;
  text-align: left;
  overflow-y: scroll;
  font-size: 13px;
  background: #0d1117;
  color: #58a6ff;
  font-family: 'JetBrains Mono', monospace;
  padding: 12px;
  border-radius: var(--radius-md);
  border: 1px solid var(--border);
}

/* Images */
.images img {
  display: block;
  padding-bottom: 10px;
  margin-left: auto;
  margin-right: auto;
  max-width: 100%;
  border-radius: var(--radius-md);
}

/* Update note */
.update-note {
  font-size: 12px;
  color: var(--text-muted);
  margin-top: 12px;
  font-style: italic;
}

/* Footer */
footer {
  text-align: center;
  margin-top: 30px;
  padding: 20px;
  color: var(--text-muted);
  font-size: 12px;
  border-top: 1px solid var(--border);
}

footer p {
  margin: 8px 0;
}

/* Responsive */
@media (max-width: 768px) {
  body {
    padding: 10px;
  }
  
  fieldset {
    padding: 12px;
    margin: 12px 0;
  }
  
  table {
    font-size: 11px;
  }
  
  th, td {
    padding: 8px 4px;
  }
  
  .conn2srv .hs-peers {
    flex-direction: column;
  }
  
  .tooltip .tooltiptext {
    width: 220px;
    left: 0;
    top: 100%;
    transform: translateY(8px);
  }
  
  .tooltip:hover .tooltiptext {
    transform: translateY(8px);
  }
  
  a.button {
    padding: 8px 12px;
    font-size: 12px;
  }
}

/* Navigation buttons container */
.nav-buttons {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  margin: 16px auto;
  padding: 12px;
}

/* Navbar */
.navbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 8px 16px;
  margin: 16px auto;
  max-width: 1100px;
  box-shadow: var(--shadow);
}

.navbar a {
  color: var(--text-primary);
  text-align: center;
  padding: 12px 20px;
  text-decoration: none;
  border-radius: var(--radius-md);
  transition: all 0.2s ease;
  font-weight: 500;
  font-size: 14px;
  margin: 4px;
}

.navbar a:hover {
  background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.navbar .dropdown {
  position: relative;
  display: inline-block;
}

.navbar .dropbtn {
  cursor: pointer;
}

.navbar .dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  background: var(--bg-card);
  min-width: 160px;
  box-shadow: var(--shadow-lg);
  z-index: 1000;
  border-radius: var(--radius-md);
  border: 1px solid var(--border);
}

.navbar .dropdown-content a {
  display: block;
  padding: 12px 16px;
  margin: 0;
  border-radius: 0;
}

.navbar .dropdown-content a:first-child {
  border-radius: var(--radius-md) var(--radius-md) 0 0;
}

.navbar .dropdown-content a:last-child {
  border-radius: 0 0 var(--radius-md) var(--radius-md);
}

.navbar .dropdown:hover .dropdown-content,
.navbar .dropdown:focus-within .dropdown-content,
.navbar .dropdown.active .dropdown-content {
  display: block;
}

@media (max-width: 768px) {
  .navbar {
    flex-direction: column;
    align-items: stretch;
  }
  
  .navbar a {
    text-align: left;
    padding: 10px 16px;
  }
  
  .navbar .dropdown-content {
    position: static;
    transform: none;
    box-shadow: none;
    border: none;
    background: transparent;
    padding-left: 16px;
  }
  
  .navbar .dropdown-content a {
    padding: 8px 16px;
  }
}