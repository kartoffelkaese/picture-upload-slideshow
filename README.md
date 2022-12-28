# picture-upload-slideshow
Form for picture/video uploading. The uploads are passed to the uploads.php which is generating a thank-you-page if successful. The uploads are getting a 6digit random number before the file-extension and moved in the ./uploads-dir.

The gallery loops through the uploads-dir and displays the pictures

The Slideshow is generated via the uploads-ep.php. This file generates an array with the filenames and the slideshow is played out based on that array.
