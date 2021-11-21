<!DOCTYPE html>
<html lang="en">
<?php 
    $PageTitle = "SignUp | Twitter";
    require_once 'Backend/shared/header.php' 
?>   
<body>
    <section class="sign-container">
        <nav class="nav-header-sign__up">
            <ul>
                <li><a href="index.php"><li class="fa fa-twitter">Home</li></a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Language: English</a></li>
            </ul>
        </nav>
        <div class="form-container">
            <div class="form-content">
                <div class="header-form-content">
                    <h2>Create you account</h2>
                </div>
                <form action="" class="formField">
                    <div class="form_group">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firtName" autocomplete="off">
                    </div>
                    <div class="form_group">
                        <label for="lastName">LastName</label>
                        <input type="text" name="lastName" id="lastName" autocomplete="off">
                    </div>
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off">
                    </div>
                    <div class="form_group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off">
                    </div>
                    <div class="form_group">
                        <label for="confirmPas">Confirm Password</label>
                        <input type="password" name="confirmPas" id="confirmPas" autocomplete="off">
                    </div>
                    <div class="s-password">
                        <input type="checkbox" class="form-checkbox" id="s-password" autocomplete="off">
                        <label for="s-password">show password</label>
                    </div>
                    <div class="form-btn-wrapper">
                        <button type="submit" class="btn-form">SignUp</button>
                        <input type="checkbox" id="check" name="remember">
                        <label for="check">Remember me</label>
                    </div>
                </form>
            </div>
            <footer class="form-footer">
                <p>Already have an account <a href="login.php">LogIn</a></p>
            </footer>
        </div>
    </section>
</body>
</html>