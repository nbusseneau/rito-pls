<?php
$data = file_get_contents("php://input");
if($data === false || strlen($data) < 1)
{
  die("No data.");
}
$id = json_decode($data)->tournamentMetaData->passbackDataPacket;
file_put_contents("reports/".$id.".txt", $data);
echo "OK report ".$id.".txt.<br />\n";