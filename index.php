<html>
<head>
  <title>Driim OÜ - Serveri logid</title>
  <meta charset="UTF-8">
</head>
<body style="font-family: monospace; background-color: #111; color: #0f0;">
<h2>logisüsteem</h2>

<h3>ngrok Logs</h3>
<pre><?php @readfile('/var/log/ngrok.log'); ?></pre>

<h3>System Updates log</h3>
<pre><?php @readfile('/var/log/system_updates_logs.log'); ?></pre>

</body>
</html>
 ngrok.log  system_updates_logs.logsystem_updates_logs.log
