<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register Page</title>

</head>

<body>

    <h1 style="text-align: center;">"Join the Team, Register Today!"</h1>
    <div class="container">
        <form id="registerForm" action="../action/registerEmployee_action.php" method="post" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-50">
                    <!-- firstname -->
                    <label for="first-name"><i class="fa fa-user"></i> First Name</label>
                    <input type="text" id="first-name" name="firstName" placeholder="Ewurama" required>
                    <!-- lastname -->
                    <label for="last-name"><i class="fa fa-user"></i> Last Name</label>
                    <input type="text" id="last-name" name="lastName" placeholder="Boateng-Yeboah" required>
                    <!-- Address -->
                    <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="address" name="address" placeholder="South Street 35" required>
                    <!-- department -->
                    <label for="department"><i class="fa fa-briefcase"></i> Department</label>
                    <input type="text" id="department" name="department" placeholder="HR" required>
                </div>
                <div class="col-50">
                    <!-- age -->
                    <label for="age"><i class="fa fa-calendar"></i> Age</label>
                    <input type="number" id="age" name="age" placeholder="30" required>
                    <!-- phone -->
                    <label for="phone"><i class="fa fa-phone"></i> Phone</label>
                    <input type="tel" id="phone" name="phone" placeholder="0595741421" required>
                    <!-- date of birth -->
                    <label for="date-of-birth"><i class="fa fa-calendar"></i> Date of Birth</label>
                    <input type="date" id="date-of-birth" name="dob" required>
                    <!-- email -->
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="ewurama@example.com" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Please enter a valid email address">
                    <!-- password -->
                    <label for="password"><i class="fa fa-lock"></i> Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <!-- confirm password -->
                    <label for="confirmPassword"><i class="fa fa-lock"></i> Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                </div>
            </div>
            <input type="submit" value="Submit" name=submit class="btn">
        </form>
        <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        <p class="login-link">Already have an account? <a href="../login/login.php">Login</a></p>
    </div>

    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>


</body>

</html>