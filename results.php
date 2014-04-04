<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <style>
        pre {
            width: 700px;
            white-space: pre-wrap;
        }
    </style>
  </head>
  <body>
    <?php
    foreach (glob("reports/*.txt") as $filename) {
        $json = json_decode(file_get_contents($filename, FALSE));
        $report = json_encode($json, JSON_PRETTY_PRINT);
        echo "<h1>".$filename."</h1>\n";
        echo "<pre>".$report."</pre>\n";
    }
    ?>
  </body>
</html>