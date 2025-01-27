<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName =($_POST['firstName']);
        $lastName =($_POST['lastName']);
        $address = ($_POST['address']);
        $gender = ($_POST['gender']);
        $skill = ($_POST['skill']);
        // $skills = isset($_POST['skill']) ? $_POST['skill'] : [];
        $department = ($_POST['department']);
        $country = ($_POST['country']);

        echo "<p>Thanks " . ($gender == "male" ? "Mr." : "Miss.") . " $firstName $lastName</p>";
        echo "<p>Please Review Your Information</p>";
        echo "<p>Name: $firstName $lastName</p>";
        echo "<p>Address: $country, $address</p>";
        // echo "<p>Your Skills: $skills</p>";
        echo "<p>Your Skills:</p>";
        echo "<ul>";
        $length = count($skill); 
        for ($i = 0; $i < $length; $i++) {
            echo "<li>" . ($skill[$i]) . "</li>";
        }
        echo "</ul>";
      
        echo "<p>Department: $department</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>