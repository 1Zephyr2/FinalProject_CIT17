<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - MedTherapy</title>
    <link rel="stylesheet" href="createaccount-styles.css">
</head>
<body>
    <div class="container">
        <h1>Create Your Account</h1>
        <form id="createAccountForm">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit">Create Account</button>
            <p class="message">Already have an account? <a href="index.php">Login here</a></p>
        </form>
    </div>
    <script src="create-account.js"></script>
</body>
</html>