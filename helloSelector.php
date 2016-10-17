<!DOCTYPE html>
<html lang = "en">
    <a>
    Where would you like to say hello?
    </a>

    <ul>
        <?php
            echo "<a href='helloPrinter.php?planet=earth'> Earth</a><break>";
            echo "<a href='helloPrinter.php?planet=mars'> Mars</a>";
            echo "<a href='helloPrinter.php?planet=uranus'> Uranus</a>";
        ?>
    </ul>

<style>
    ul {list-style: decimal}
</style>
</html>