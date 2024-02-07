<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_GET["idno"];

$query = "SELECT * FROM  st_table WHERE id=$id";
$retval = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($retval);

// value
if (isset($_POST['edit'])) {
    $var_dump = ($_POST['email']);
    $var_dump1 = ($_POST['pass']);
    //img edit
    $filename = $_FILES["uploadimg"]["name"];
    $tempname = $_FILES["uploadimg"]["tmp_name"];
    $upload = move_uploaded_file($tempname, 'up/' . $filename);
    // value end
    $update = " UPDATE st_table SET email='$var_dump' ,pass='$var_dump1',img='$filename' WHERE id='$id'";
    $query_run = mysqli_query($conn, $update);
    if ($query_run) {
        header("Location: php.php");
    } else {
        echo "no";
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="number">Email:</label>
            <input type="number" value="<?php echo $row['email'] ?>" id="email" name="email" />
            <label for="email">Email:</label>
            <input type="email" value="<?php echo $row['pass'] ?>" name="pass" />
            <div class="form-group">
                <input class="form-control" type="file" name="uploadimg" value="" />
            </div>
        </div>

        <button type="submit" name="edit">edit</button>
    </form>
    <!--  -->
</body>

</html>