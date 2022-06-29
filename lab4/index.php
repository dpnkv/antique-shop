<!DOCTYPE html>
<html>

    <body>
        <?php
        $pages = scandir("pages");
        $page = trim(strip_tags($_GET["page"]));

        if (!$page) {
            $page = "main";
        }

        include("pages/$page.php");
        include("pages/footer.php");
        ?>
    </body>
</html>