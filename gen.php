<?php
$conf = array('name' => $_GET['name'],
              'extra' => $_GET['id'],
              'password' => $_GET['password'],
              'report' => $_GET['report']);
$json_base64 = base64_encode(json_encode($conf, JSON_UNESCAPED_SLASHES));

$url_format = "pvpnet://lol/customgame/joinorcreate/%s/%s/%s/%s/%s";
$url = sprintf($url_format, $_GET['map'], $_GET['type'], $_GET['teamsize'], $_GET['spectators'], $json_base64);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tournament code generated</title>
    <style>
        pre {
            width: 400px;
            white-space: pre-wrap;
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
  </head>
  <body>
    <h1>Tournament code generated</h1>
    <pre><?php echo $url ?></pre>
  </body>
</html>