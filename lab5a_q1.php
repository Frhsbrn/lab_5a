<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
        // Declare variables for personal details
        $name = "Your Name"; // Replace with your actual name
        $matricNumber = "Your Matric Number"; // Replace with your matric number
        $course = "Your Course"; // Replace with your course
        $yearOfStudy = "Your Year of Study"; // Replace with your year
        $address = "Your Address"; // Replace with your address
    ?>
    <table border="1">
        <tr>
            <td>NOR FARAH SABRINA BINTI ROSLI</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>DI220044</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>BIP</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>NO 65 LALUAN KLEBANG JAYA 42, TAMAN KLEBANG JAYA 312O0 CHEMOR PERAK</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
