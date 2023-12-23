<!-- app/Views/register.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_asset/css/style.css')?>">

</head>
<body>

<div class="container">
<div class="card">
<h2>Register Form</h2>
 
<form action="<?= site_url('register/save') ?>" method="post">
      <label for="fullname">Username:</label>
      <input type="text" id="fullname" placeholder="Enter your Username" name="username" required>

      <label for="email">Email:</label>
      <input type="text" id="email" placeholder="Enter your email" name="email" required>

      <label for="new-password">Password:</label>
      <input type="text" id="new-password" placeholder="Enter your password" name="password" required>

      <button type="submit">Register</button>
    </form>
    <div class="switch">Already have an account? <a href="<?php echo base_url('login')?>" onclick="switchCard()">Login here</a></div>

</div>
</div>

</body>
</html>

