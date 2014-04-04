<?php
$data = array(
  'tournamentMetaData' => array('passbackDataPacket' => 'testInput')
);

$options = array(
  'http' => array(
    'method' => 'POST',
    'content' => json_encode($data),
    'header' =>  "Content-Type: application/json\r\n" .
                 "Accept: application/json\r\n"
    )
);

$context = stream_context_create($options);
$result = file_get_contents("http://skymirrh.net/insalan/report.php", false, $context);
echo $result;
echo "OK testInput.<br />\n";