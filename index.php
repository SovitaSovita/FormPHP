<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Validation</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <?php
    if(!empty($_POST["send"])){
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $username = $_POST["username"];
      $toEmail = "sovitasovita28@gmail.com";

      $mailHeader = "First Name: " . $fname .
      "\r\n Last Name: " . $lname .
      "\r\n Username: " . $username . "\r\n";

      if(mail($toEmail, $fname, $mailHeader)){
        $message = "Your Information is Received Successfully.";
      }

    }
  ?>
    <div class="container mt-5 bg-light p-3 rounded-3">
        <div class="row">
            <div class="col-lg-9">
                <form method="post" class="row g-3">
                    <div class="col-md-4">
                      <label for="fname" class="form-label">First name</label>
                      <input type="text" name="fname" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label for="lname" class="form-label">Last name</label>
                      <input type="text" name="lname" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="col-12">
                      <input class="btn btn-primary" type="submit" name="send">
                    </div>

                    <?php if(!empty($message)){ ?>
                      <span class="h6"><?php $message; ?></span>
                    <?php } ?>
                  </form>
            </div>
        </div>
    </div>

    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>