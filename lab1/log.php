<?php
    require "./utils.php";
    // var_dump($_POST);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName =($_POST['firstName']);
        $lastName =($_POST['lastName']);
        $address = ($_POST['address']);
        $gender = ($_POST['gender']);
        $skill = ($_POST['skill']);
        // $skills = isset($_POST['skill']) ? $_POST['skill'] : [];
        $department = ($_POST['department']);
        $country = ($_POST['country']);
        $code = ($_POST['code']);
        // $code == "P8Q67h" ?

 
    //     echo "<p>Thanks " . ($gender == "male" ? "Mr." : "Miss.") . " $firstName $lastName</p>";
    //     echo "<p>Please Review Your Information</p>";
    //     echo "<p>Name: $firstName $lastName</p>";
    //     echo "<p>Address: $country, $address</p>";
    //     // echo "<p>Your Skills: $skills</p>";
    //     echo "<p>Your Skills:</p>";
    //     echo "<ul>";
    //     $length = count($skill); 
    //     for ($i = 0; $i < $length; $i++) {
    //         echo "<li>" . ($skill[$i]) . "</li>";
    //     }
    //     echo "</ul>";
      
    //     echo "<p>Department: $department</p>";
    // } else {
    //     echo "<p>No data submitted.</p>";
    }

    $data = "{$firstName}:{$lastName}:{$address}:{$gender}:{$country}:{$skill}\n";
 

    if($firstName and $lastName and $address and $gender and $country and $skill){

    $fileobject = fopen("info.txt", "a");
if($fileobject){
    fwrite($fileobject, $data);
    fclose($fileobject);
}


    header("Location: info.php");



 } else{
        /// prepare errors
        $errors = [];
        $old =[];
        foreach ($_POST as $key => $value) {
            if (! $value){
                $errors[$key] = "Please enter a {$key}";
            }else{
                $old[$key] = $value;
            }
        }
    
        // print_r($errors);
        # php provide function convert array to json string (serialization)
        $errors = json_encode($errors); # string
    
        $url  = "Location: form.php?errors={$errors}";
        // I need to send the errors to the form
        if(count($old)){
            $old = json_encode($old);
            $url  = "{$url}&old={$old}";
        }
        header($url);
    }
    
    


    ?>



</body>
</html>