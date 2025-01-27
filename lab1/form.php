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
              <input type="text"  name="firstName">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last name:</label>
                <input type="text"  name="lastName">
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <textarea name="address" id="address"></textarea>
              </div>
              <div class="mb-3">
                <label for="country" class="form-label">country:</label>
                <select name="country" id="country">
                    <option value="">Select a country</option>
                    <option value="egypt">egypt</option>
                    <option value="america">america</option>
                    <option value="german">german</option>
                    <option value="turkey">turkey</option>
                </select>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <input type="radio" name="gender"  value="male"><label for="">Male</label>
                    <input type="radio"  name="gender" value="female"><label for="">Female</label>
                  </div>
              </div>
              <div class="mb-3">
  <label class="form-label">Skills:</label>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" type="checkbox" id="php" value="php">
    <label class="form-check-label" for="php">PHP</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" type="checkbox" id="html" value="html">
    <label class="form-check-label" for="html">HTML</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" type="checkbox" id="mysql" value="mysql">
    <label class="form-check-label" for="mysql">mySQL</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" name="skill[]" type="checkbox" id="js" value="js">
    <label class="form-check-label" for="js">JS</label>
  </div>
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
              <input type="text" placeholder="Open Source" name="department" id="department" value="Open source" readonly>
          </div>
          <!-- <label for="department">Select Department:</label>
        <select name="department" id="department">
            <option value="">Open source</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>
        </select> -->
              <div class="mb-3">
                <label for="code">Please insert the code in the box below:</label><br><label for="code">P8Q67h</label><br>

                <input type="text" id="code" name="code" required><br><br>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>