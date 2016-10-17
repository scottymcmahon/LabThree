<!DOCTYPE html>
<html lang = "en">
    <a>
    Where would you like to say hello?
    </a>

    <ul>
        <?php
            echo "<li><a href='helloPrinter.php?planet=earth'> Earth</a></li>";
            echo "<li><a href='helloPrinter.php?planet=mars'> Mars</a></li>";
            echo "<li><a href='helloPrinter.php?planet=uranus'> Uranus</a></li>";
        ?>
    </ul>
</html>