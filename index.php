<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGL</title>
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/index_style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- <h1>WELCOME TO MGL</h1> -->
    <div id="header_index" class="flex">
        <nav class="navbar">
            <h2 class="logo"><a href="index.php">MGL</a></h2>
            <ul>
                <!-- <li><a href="home.php">Home</a></li> -->
                <li><a href="about.php">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a id="signup" class="border1" href="#">Signup</a></li>
            </ul>
        </nav>
        <div class="progress-container">
            <div class="progress-bar dark-mode-pb" id="myBar"></div>
        </div>
    </div>
    <div id="mainBody">
        <!-- LOGIN BOX -->
        <div class="loginBox show">
            <h1>Login</h1>
            <form id="loginForm" method="post">
                <div class="inputGroup">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="inputGroup">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="inputGroup flex jSpacebw"> <span>
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </span>
                    <a href="#" class="forgotPassword">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? &nbsp;<a href="#" id="showSignup">Register</a></p>
        </div>
        <!-- SIGN UP BOX -->
        <div class="signupBox hide" id="signupBox">
            <h1>Signup</h1>
            <form id="signupForm" method="post">
                <div class="inputGroup">
                    <label for="signupName">Name:</label>
                    <input type="text" id="signupName" name="signupName" required>
                </div>
                <div class="inputGroup">
                    <label for="signupEmail">Email:</label>
                    <input type="email" id="signupEmail" name="signupEmail" required>
                </div>
                <div class="inputGroup">
                    <label for="signupPassword">Password:</label>
                    <input type="password" id="signupPassword" name="signupPassword" required>
                </div>
                <button type="submit">Signup</button>
            </form>
            <p>Already have an account? &nbsp;<a href="#" id="showLogin">Login</a></p>
        </div>

    </div>
    <script src="js/script.js"></script>
    <div id="footer">
        All Rights Reserved &copy; 2024 | Sumitskh
    </div>
</body>

</html>