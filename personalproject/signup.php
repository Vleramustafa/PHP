<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS for styling -->
  <style>
    body {
      background-color: #f0f8ff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    .login-container h3 {
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    .form-group label {
      font-weight: bold;
    }

    .btn-primary {
      background-color: #bf160a;
      border-color: #bf160a;
    }

    .btn-primary:hover {
      background-color: #9e1c13;
      border-color: #9e1c13;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }

    .sign-in-link {
      text-align: center;
      margin-top: 20px;
    }

    .sign-in-link a {
      text-decoration: none;
      color: #007bff;
    }

    .sign-in-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h3>Create Account</h3>
    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your first name" required>
      </div>

      <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" class="form-control" id="surname" placeholder="Enter your surname" required>
      </div>

      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>

      <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>

    <div class="sign-in-link">
      <p>Already have an account? <a href="login.php">Sign In</a></p>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
