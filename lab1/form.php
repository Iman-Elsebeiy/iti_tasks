<?php

    if (isset($_GET['errors'])){
        $errors = json_decode($_GET['errors'], true);
        extract($errors);  # variable with values --> based on errors
    }
    if(isset($_GET['old'])){
        $old_data = json_decode($_GET['old'], true);

        if(isset($old_data['firstName'])){
            $old_firstName = $old_data['firstName'];
        }
        if(isset($old_data['lastName'])){
            $old_lastName = $old_data['lastName'];
        }
        if(isset($old_data['address'])){
            $old_address = $old_data['address'];
        }
        if(isset($old_data['gender'])){
          $old_gender = $old_data['gender'];
      }
      if(isset($old_data['country'])){
        $old_country = $old_data['country'];
    }
    if(isset($old_data['skill'])){
      $old_skill = $old_data['skill'];
  }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1> form </h1> 

        <form action="log.php"  method="post">
            <div class="mb-3">
              <label for="firstName" class="form-label">First name:</label>
              <input type="text" value="<?php echo $old_firstName ?? ''; ?>" name="firstName">
              <p class="text-danger"> <?php echo $firstName ?? '' ?> </p>
            </div>
            <div class="mb-3 col-6">
                <label for="lastName" class="form-label">Last name:</label>
                <input type="text"  value="<?php echo $old_lastName ?? ''; ?>" name="lastName">
                <p class="text-danger"> <?php echo $lastName ?? '' ?> </p>
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" id="address"><?php echo $old_address ?? ''; ?></textarea>
                <p class="text-danger"> <?php echo $address?? '' ?> </p>
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">country:</label>
                <select name="country" id="country">
                    <option value="">Select a country</option>
                    <option value="egypt"  <?php echo (isset($old_country) && $old_country == 'egypt') ? 'selected' : ''; ?>>egypt</option>
                    <option value="america" <?php echo (isset($old_country) && $old_country == 'america') ? 'selected' : ''; ?>>america</option>
                    <option value="german <?php echo (isset($old_country) && $old_country == 'german') ? 'selected' : ''; ?>">german</option>
                    <option value="turkey" <?php echo (isset($old_country) && $old_country == 'turkey') ? 'selected' : ''; ?>>turkey</option>
                </select>
                <p class="text-danger"> <?php echo $country ?? '' ?> </p>
              </div>
              <div class="mb-3">
              <label for="gender" class="form-label">Gender:</label>
              <input type="radio" name="gender" value="male" <?= isset($old_data['gender']) && $old_data['gender'] === 'male' ? 'checked' : '' ?>> Male
              <input type="radio" name="gender" value="female" <?= isset($old_data['gender']) && $old_data['gender'] === 'female' ? 'checked' : '' ?>> Female
              <p class="text-danger"> <?= $gender ?? '' ?> </p>
              </div>
              <div class="mb-3">
  <label class="form-label">Skills:</label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" <?php echo (isset($old_skill) && in_array('php', $old_skill)) ? 'checked' : ''; ?> type="checkbox" id="php" value="php">
    <label class="form-check-label" for="php">PHP</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" <?php echo (isset($old_skill) && in_array('html', $old_skill)) ? 'checked' : ''; ?> type="checkbox" id="html" value="html">
    <label class="form-check-label" for="html">HTML</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" <?php echo (isset($old_skill) && in_array('mysql', $old_skill)) ? 'checked' : ''; ?> type="checkbox" id="mysql" value="mysql">
    <label class="form-check-label" for="mysql">mySQL</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" <?php echo (isset($old_skill) && in_array('js', $old_skill)) ? 'checked' : ''; ?> type="checkbox" id="js" value="js">
    <label class="form-check-label" for="js">JS</label>
  </div>
  <p class="text-danger"> <?php echo $skill ?? '' ?> </p>
</div>

              <div class="mb-3">
                <label for="userName" class="form-label">User name:</label>
                <input type="text"  name="userName">
              </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password :</label>
              <input type="password" name="pwd">
            </div>
            <div class="mb-3">
              <label for="department" class="form-label">Department:</label>
              <input type="text" placeholder="Open Source" value="<?php echo $old_department ?? ''; ?>" name="department" id="department" value="Open source" readonly>


            </div>
   
              <div class="mb-3">
                <label for="code">Please insert the code in the box below:</label><br><label for="code">P8Q67h</label><br>

                <input type="text" id="code" name="code"><br><br>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>