<!DOCTYPE html>
<html lang="en">
        <?php 
            include("./includes/head.html");
        ?>
    <body>
        
        <div class="container">
            <!--images-->
            <?php 
                include("./includes/header.html");
            ?>        
            <!--nav bar-->
            <?php
                include("./includes/ul.html");
            ?>

            <?php
            if (isset($_GET["about-me"])) {
                include("./pages/about-me.html"); 
            } 
            elseif (isset($_GET["my-passions"])) {
                include("./pages/my-passions.html");
            }
            elseif (isset($_GET["my-dreams"])) {
                include("./pages/my-dreams.html");
            }

            else{
            include("./pages/home.html");
            }
            ?>
            <!--copyright-->
            <?php
                include("./includes/footer.html")
            ?>
            
        </div>
    </body>

</html>
