<?php
// Write all files from ./uploads/ in $imageUrls-Array
$files = scandir('uploads');
$imageUrls = [];
foreach ($files as $file) {
  if (strpos($file, '.jpg') !== false || strpos($file, '.png') !== false) {
    $imageUrls[] = './uploads/' . $file;
  }
}

echo json_encode($imageUrls);
?>