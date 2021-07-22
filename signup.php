<?php
            include_once "includes/header.php";
        ?>

<section id="sign_up_form">
    <h2 class="align_text_center">Sign Up</h2>
    <!-- The sign up form starts here -->
    <form action="includes/signup.include.php" method="post">
        <input type="text" placeholder="Full name" name="name">
        <input type="text" placeholder="Email" name="user_email">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm password" name="confirm_password">
        <input type="submit" value="Sign Up" name="submit">
    </form>
    <!-- The sign up form ends here -->

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyInput"){
                echo "<p class='align_text_center' style='color:red;'>Please Fill In All The Fields!</P>";
            }
            else if($_GET["error"] == "invalidUsername"){
                echo "<p class='align_text_center' style='color:red;'>Please Enter Valid Username</P>";
            }

            else if($_GET["error"] == "invalidEmail"){
                echo "<p class='align_text_center' style='color:red;'>Please Enter Valid Email</P>";
            }

            else if($_GET["error"] == "passwordsDontMatch"){
                echo "<p class='align_text_center' style='color:red;'>Your Passwords Don't Match!</P>";
            }

            else if($_GET["error"] == "usernameOrEmailTaken"){
                echo "<p class='align_text_center' style='color:red;'>Your Email or Username is Already Taken!</P>";
            }

            else if($_GET["error"] == "stmtfailed"){
                echo "<p class='align_text_center' style='color:red;'>Oops! Something went wrong</P>";
            }
        }

        if(isset($_GET["success"])){
            if($_GET["success"] == "SuccesfullySignedUp"){
                echo "<p class='align_text_center' style='color:green;'>You Have Signed Up!</P>";
            }
        } 

        ?>

</section>
<?php
            include_once "includes/footer.php";
        ?>