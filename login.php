<?php
            include_once "includes/header.php";
        ?>

<section id="includes/log_in_form">
    <h2 class="align_text_center">Log In</h2>
    <!-- The sign up form starts here -->
    <form action="includes/login.include.php" method="post">
       
        <input type="text" placeholder="Username/Email" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" name="submit" value="Log In">
    </form>
    <!-- The sign up form ends here -->

    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyInput"){
                echo "<p class='align_text_center' style='color:red;'>Please Fill In All The Fields!</P>";
            }
            else if($_GET["error"] == "wrongLogIn"){
                echo "<p class='align_text_center' style='color:red;'>Wrong Log In</P>";
            }

        }
?>
           

</section>


<?php
            include_once "includes/footer.php";
        ?>