<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

$filename= "algolia.zip";
$zip = new ZipArchive;
$res = $zip->open($filename);
if ($res === TRUE) {
  
  $zip->extractTo('./');
  $zip->close();
  echo 'Unzip Completed!';
} else {
  echo 'doh!';
}

?>
