        <?php
            include_once "includes/header.php";
        ?>


        

        <?php

        if(isset($_SESSION["userusername"])){
        echo "<h2 class='align_text_center' style='color:green;'> You are logged in! " .$_SESSION["userusername"]. "</h2> ";
        }
        ?>

        <h1 class="align_text_center">This is the title</h1>

        <!-- First article starts here -->
        <article class="center_align_container first_article">

  

            <h2>This is the first article</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum. </p>

        </article>
        <!-- First article ends here -->

        <!-- Second article starts here -->
        <article class="center_align_container second_article">

            <h2>This is the first article</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum. </p>

        </article>
        <!-- Second article ends here -->
        <?php
            include_once "includes/footer.php";
        ?>