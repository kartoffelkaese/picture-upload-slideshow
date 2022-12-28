<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <title>Dateien Hochgeladen</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $files = $_FILES['files'];

    // Loop through the array of uploaded files
    for ($i = 0; $i < count($files['name']); $i++) {
        // File properties
        $file_name = $files['name'][$i];
        $file_tmp = $files['tmp_name'][$i];
        $file_size = $files['size'][$i];
        $file_error = $files['error'][$i];

        // Work out the file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // Allowed file types
        $allowed = array('jpg', 'jpeg', 'png', 'gif', 'heic', 'mp4');

        // Check if the file type is allowed
        if (in_array($file_ext, $allowed)) {
            // Check if there were any errors
            if ($file_error === 0) {
                // Check if the file is below the allowed size
                if ($file_size <= 2147483648) {
                    // Generate a random 6-digit number
                    $random_number = rand(100000, 999999);

                    // Create the new file name
                    $file_name_new = $file_name . '-' . $random_number . '.' . $file_ext;

                    // Set the file upload path
                    $file_destination = 'uploads/' . $file_name_new;

                    // Attempt to move the file to the uploads folder
                    if (move_uploaded_file($file_tmp, $file_destination)) {
                        $success = TRUE;
                    } else {
                        echo "<p class='grey_11'>Da ist was schiefgelaufen.</p>";
                    }
                } else {
                    echo "<p class='grey_11'>Eine Datei ist zu groß!.</p>";
                }
            } else {
                echo "<p class='grey_11'>Da ist was schiefgelaufen.</p>";
            }
        } else {
            echo "<p class='grey_11'>Bitte nur Bilder oder Videos!</p>";
        }
    }
} else {
    header("Location: ./index.php");
}

if($success == TRUE) {
    echo "<p class='grey_11'>Datei(en) erfolgreich Hochgeladen!<br><br>Mausi und Mini sagen Danke!</p>".
    "<img class='thankyou roll-in-blurred-top' src='img/thankyou.png' alt='Mini und Mausi sagen danke!'><br><br>".
    "<a href='galerie.php'><button class='glow bouncy galeriebutton'>Hier geht es zur Galerie</button></a>";
    $success = FALSE;
}
?>    
</body>
</html>