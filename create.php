<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $sql = "INSERT INTO projects (title, description, link) VALUES ('$title', '$description', '$link')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Dani firqin fuadi</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nama: <input type="text" name="Nama" required><br><br>
        NIM: <textarea name="NIM" required></textarea><br><br>
        Prodi: <input type="text" name="Prodi"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
