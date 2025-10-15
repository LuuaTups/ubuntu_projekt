<html>
<head>
  <title>Driim OÜ - Serveri logid</title>
  <meta charset="UTF-8">
</head>
<body style="font-family: monospace; background-color: #111; color: #0f0;">
<h2>Driim OÜ logisüsteem</h2>

<h3>Uuenduste logi (update_check.log)</h3>
<pre><?php @readfile('/var/log/driimou/update_check.log'); ?></pre>

<h3>Backup logi (backup.log)</h3>
<pre><?php @readfile('/var/log/driimou/backup.log'); ?></pre>

<h3>GitHub logi (git_backup.log)</h3>
<pre><?php @readfile('/var/log/driimou/git_backup.log'); ?></pre>

</body>
</html>
