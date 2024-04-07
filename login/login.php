<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="../css/login.css">
    <title>StaffSync</title>
</head>
<body>
    <div class="container">
        <form id="loginForm" action="../action/login_action.php" method="post">
            <h1>StaffSync</h1>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                    title="Please enter a valid email address">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>

            <button type="submit" name="submit">Login</button>
        </form>
        <p class="register-link">Don't have an account? <a href="../login/register.php">Register</a></p>
    </div>
</body>
</html>
