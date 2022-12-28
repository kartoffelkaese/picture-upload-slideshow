<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/gal.css">
    <title>Galerie</title>
</head>
<body>
  <div class="iphone">
    Wenn Ihr ein iPhone habt, werden Eure Bilder hier mit großer Wahrscheinlichkeit nicht angezeigt. <b>Wir haben Sie aber trotzdem bekommen.</b> Danke!
  </div>
    <div class="gallery" id="gallery">
        <?php
            // Set the path to the folder containing the images
            $folder = './uploads';
            // Open the folder
            $handle = opendir($folder);
            // Loop through the files in the folder
            while (false !== ($file = readdir($handle))) {
                // Check if the file is an image or a video
                if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                  // Output the file with the desired HTML structure
                  echo "<div class='gallery-item'>\n";
                  echo "  <div class='content'>\n";
                  // Check if the file is an image or a video
                  if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
                    // Output an image
                    echo '    <img src="' . $folder . '/' . $file . '" alt="">';
                  } 
                  echo "  </div>\n";
                  echo "</div>\n";
                }
              }            // Close the folder
            closedir($handle);
        ?>
    </div>
    <a href='index.php'><button class='glow bouncy galeriebutton'>Mehr hochladen</button></a>
    <script src="js/galerie-bilder.js"></script>
</body>
</html>