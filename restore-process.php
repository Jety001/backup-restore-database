function doRestore()
{
    include('../conn.php');


    $db = mysqli_connect('localhost', 'root', '', 'test');
    $filename = 'backup.sql';
    $handle = fopen($filename, "r+");
    $contents = fread($handle, filesize($filename));
    $sql = explode(';', $contents);
    foreach ($sql as $query) {
        $result = mysqli_query($db, $query);
        if ($result) {
            message("<strong><i class='far fa-check-circle'></i> Success!</strong> Database has been successfully restore!", "warning");
            header("location:index.php");
        }
    }
    fclose($handle);
}
