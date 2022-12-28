<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/css.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
	<title>Bilder / Videos</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data" id="upload-form">
	<span class="grey_11">Hier kannst Du deine Fotos und Videos hochladen:</span>
	<br><br><br><br>
	<label for="files" class="glow bouncy" id="labelfiles">Dateien auswählen</label>
	<br>
	<input type="file" name="files[]" id="files" multiple style="display: none;">
	<br><br>
	<img src="img/arrow-prpl.png" alt="pfeil" id="select" class="pfeil">
	<p id="fileCount" class="grey_11"></p>
	<input type="submit" value="Hochladen" name="submit">
	<br>
	<progress id="upload-progress" value="0" max="100"></progress>
	<div id="progress-percentage"></div>
	<div id="time-left"></div>
</form>
<br><br><br><br>
<a href="galerie.php"><button class="galeriebutton">Hier geht es zur Galerie</button></a>
</body>
<script src="js/countfiles.js"></script>
<script src="js/files-time-upload.js"></script>
</html>
