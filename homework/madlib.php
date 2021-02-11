<!DOCTYPE html>
<html>
    <head>
        <title>My MADLIB Story</title>
        <link rel="stylesheet" href="madlib.css">
    </head>
    <body>
        <h1>My MADLIB Story</h1>
        <form action="madlib.php" method="post">
            Adjective: <input type="text" name="adjective"/><br />
            Season: <input type="text" name="season" /><br />
            Furniture: <input type="text" name="furniture" /><br />
            Noun: <input type="text" name="noun" /><br />
            Beverage: <input type="text" name="beverage" /><br />
            Number: <input type="text" name="number" /><br />
            Place: <input type="text" name="place" /><br />
            Article of Clothing: <input type="text" name="clothing" /><br />
            Related to You: <input type="text" name="relative" /><br />
            Name of a State: <input type="text" name="state" /><br />
            <input type="submit" name="submit_btn" value="Submit">
        </form>

        <?php
        if (isset($_POST['submit_btn'])) {
            $adjective = $_POST['adjective'];
            $season = $_POST['season'];
            $furniture = $_POST['furniture'];
            $noun = $_POST['noun'];
            $beverage = $_POST['beverage'];
            $number = $_POST['number'];
            $place = $_POST['place'];
            $clothing = $_POST['clothing'];
            $relative = $_POST['relative'];
            $state = $_POST['state'];
        }
        echo "<h2>A Cold Day In February</h2>";
        echo "It was a <b>$adjective</b> day in February.<br/>";
        echo "Vince was sure it was the coldest <b>$season</b> he had ever lived through.<br/>";
        echo "Sitting at the <b>$furniture</b>, he enjoyed his <b>$noun</b> coffee while planning his day.<br/>";
        echo "After finishing his <b>$beverage</b>, Vince was ready to start his day.<br/>";
        echo "He had <b>$number</b> errands that needed to be done that day.<br/>";
        echo "The first stop was at the <b>$place</b> with just of short list of groceries.<br/>";
        echo "His next stop was the dry cleaners to pick up a couple of <b>$clothing</b>.<br/>";
        echo "His final stop was the post office, to send a package to his <b>$relative</b> who lived in <b>$state</b>.";
    ?>
    </body>
</html>