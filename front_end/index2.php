
<?php
function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
}

$source_img = 'source.jpg';
$destination_img = 'destination .jpg';

$d = compress($source_img, $destination_img, 90);

<?php
if(isset($_POST['submit']))
{
    $temp_name = $_FILES["file"]["tmp_name"]; // get the temporary filename/path on the server
    $name = $_FILES["file"]["name"]; // get the filename of the actual file

    // Create uploads folder if it doesn't exist.
    if (!file_exists("uploads")) {
        mkdir("uploads", 0777);
        chmod("uploads", 0777); // Set read and write permissions of folder, needed on some servers
    }

    // Move file from temp to uploads folder
    move_uploaded_file($temp_name, "uploads/$name");
    chmod("uploads/$name", 0677); // Set read and write permissions if file

}
?>

<form action="mmerp.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file" />
    <input type="submit" name="report_recap" value="submit"/>
</form>
