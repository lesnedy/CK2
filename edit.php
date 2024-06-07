<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['ID'];
    $firstName = $_POST['FIRSTNAME'];
    $lastName = $_POST['LASTNAME'];
    $salary = $_POST['PHONENUMBER'];

    $sql = "UPDATE customer SET FIRSTNAME='$FIRSTNAME', LASTNAME='$LASTNAME', PHONENUMBER='$PHONENUMBER' WHERE ID='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM customer WHERE ID='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit customer</title>
</head>
<body>
    <h2>Edit customer</h2>
    <form method="post" action="">
        <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
        <label>FIRSTNAME:</label><br>
        <input type="text" name="FIRSTNAME" value="<?php echo $row['FIRSTNAME']; ?>" required><br>
        <label>Last Name:</label><br>
        <input type="text" name="LASTNAME" value="<?php echo $row['LASTNAME']; ?>" required><br>
        <label>Salary:</label><br>
        <input type="text" name="PHONENUMBER" value="<?php echo $row['PHONENUMBER']; ?>" required><br><br>
        <input type="submit" value="Update customer">
    </form>
    <a href="index.php">Back to customer List</a>
</body>
</html>
