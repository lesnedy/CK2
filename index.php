<?php
include 'db.php';

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>customer List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .edit-button {
            background-color: green;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
        .delete-button {
            background-color: red;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
        table {
            width: 40%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2>customer List</h2>
    <a href="add.php">Add New customer</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>PHONENUMBER</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['FIRSTNAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['PHONENUMBER']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['ID']; ?>" class="edit-button">Edit</a>
                <a href="delete.php?id=<?php echo $row['ID']; ?>" class="delete-button" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
