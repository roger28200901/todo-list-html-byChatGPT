<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>

</head>
<style>
  *  {
  font-family: 'Roboto', 'Lato', sans-serif;
}

  body {
  margin: 0;
  background-image: url('https://plexcollectionposters.com/images/2021/05/16/background-images-for-login-page3bc68c53b0db224b.jpg');
  background-size: cover;
}
form {
  background-color: white;
}
nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  background-color: #333;
  color: #fff;
  font-size: 1.2em;
}

.logo {
  padding: 0 20px;
  text-decoration: none;
  color: #fff;
}

.menu-icon {
  display: none;
  cursor: pointer;
}

.nav-links {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-links li {
  padding: 0 20px;
}

.nav-links a {
  text-decoration: none;
  color: #fff;
  transition: all 0.3s ease;
}

.nav-links a:hover {
  color: #eee;
}

@media (max-width: 768px) {
  .menu-icon {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 60px;
    right: 0;
    background-color: #333;
    width: 100%;
    height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
  }

  .nav-links.active {
    height: calc(100vh - 60px);
  }

  .nav-links li {
    display: block;
    text-align: center;
  }
}
.fa.fa-bars {
  margin-right: 20px;
}


form {
  max-width: 500px;
  margin: 50px auto;
  border: 1px solid rgb(0, 0, 0);
  padding: 50px;
  border-radius: 2em;
  text-align: center;
}

h1 {
  margin-bottom: 30px;
}

.form-group {
  margin-bottom: 30px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input {
  width: 100%;
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
    color:rgba(29, 25, 6, 0.767);
    background:hsl(50, 80% ,60%);
    cursor: pointer;
    font-size: 24px;
    border: none;
    transition: all cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
}

.login-container form {
  background: linear-gradient(to bottom, hsl(214, 14%, 20%), hsl(214, 14%, 13%), hsl(214, 14%, 5%));
  color: white;
}
.form-group {
  display: flex !important;
  align-items: center;
}

.form-group label {
  flex: 1;
}

.form-group input {
  flex: 2;
}

</style>
<body>
  <nav>
    <a href="#" class="logo">Logo</a>
    <div class="menu-icon" onclick="toggleMenu()">
      <i class="fa fa-bars"></i>
    </div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div class="login-container">
    <form method="POST" action="login.php">
      <h1>Login</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />  
      </div>
      <br />
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <br />
      <?php
      // Display an image with the code text overlaid on top
      echo '<img src="verification_code_image.php" alt="Verification code">';

      // Add a text input field where the user can enter the code
      echo '<input type="text" name="verification_code" required>';
      ?>
      <input type="submit" name="Login" value="Login" />
    </form>
  </div>
  
  <script>
    function toggleMenu() {
    const navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("active");
  }

  </script>
</body>
</html>