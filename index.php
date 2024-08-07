<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>File Manager</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <h2>Uploaded Files:</h2>
    <ul>
        <?php
        $files = scandir('files');
        foreach($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li><a href='download.php?file=$file'>$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>