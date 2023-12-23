<!-- app/Views/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_asset/css/style.css')?>">
</head>
<body>

<?php if (session()->getFlashdata('error')): ?>
    <div><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>
<div class="container">
<div class="card">
    <h2>Login Form</h2>
    <form action="<?= site_url('login/authenticate') ?>" method="post">
      <label for="username">Email:</label>
      <input type="text" id="username" placeholder="Enter your username" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password" name="password" required>

      <button type="submit">Login</button>
    </form>
    <div class="switch">Don't have an account? <a href="<?php echo base_url('register')?>" onclick="switchCard()">Register here</a></div>
  </div>
  </div>
</body>
</html>

<script>
    function switchCard() {
  const loginCard = document.querySelector('.container .card:nth-child(1)');
  const registerCard = document.querySelector('.container .card:nth-child(2)');

  if (loginCard.style.display === 'none') {
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  } else {
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
}

</script>
