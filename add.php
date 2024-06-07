<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['FIRSTNAME'];
    $lastName = $_POST['LASTNAME'];
    $salary = $_POST['PHONENUMBER'];

    $sql = "INSERT INTO Employee (FIRSTNAME, LASTNAME, PHONENUMBER) VALUES ('$FIRSTNAME', '$LASTNAME', '$PHONENUMBER')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New customer</title>
</head>
<body>
   
    <h2>Add New customer</h2>
    <form method="post" action="">
        <label>FIRSTNAME Name:</label><br>
        <input type="text" name="FIRSTNAME" required><br>
        <label>LASTNAME:</label><br>
        <input type="text" name="LASTNAME" required><br>
        <label>PHONENUMBER:</label><br>
        <input type="text" name="PHONENUMBER" required><br><br>
        <input type="submit" value="Add customer">
    </form>
    <a href="index.php">Back to customer List</a>
</body>
</html>
