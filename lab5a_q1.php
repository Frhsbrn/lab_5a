<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        // Declare variables for personal details
        $name = "NOR FARAH SABRINA BINTI ROSLI"; // Replace with your actual name
        $matricNumber = "DI220044"; // Replace with your matric number
        $course = "BIP"; // Replace with your course
        $yearOfStudy = "3"; // Replace with your year
        $address = "IPOH, PERAK"; // Replace with your address
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
