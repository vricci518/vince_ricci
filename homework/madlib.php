<!DOCTYPE html>
<html>

<head>
    <title>My MADLIB Story</title>
    <link rel="stylesheet" href="madlib.css">
</head>

<body>
    <h1>My MADLIB Story</h1>
    <form action="madlib.php" method="post">
        Adjective: <input type="text" name="adjective" /><br />
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
        $adjective = '';
        $season = '';
        $furniture = '';
        $noun = '';
        $beverage = '';
        $number = '';
        $place = '';
        $clothing = '';
        $relative = '';
        $state = '';

        if(!empty($_POST['adjective'])){
            $adjective = $_POST['adjective'];
        }else {
            echo "<h1 style='color: red'>Adjective cannot be empty!!</h1>";
        }
        if(!empty($_POST['season'])){
            $season = $_POST['season'];
        }else {
            echo "<h1 style='color: red'>Season cannot be empty!!</h1>";
        }
        if(!empty($_POST['furniture'])){
            $furniture = $_POST['furniture'];
        }else {
            echo "<h1 style='color: red'>Furniture cannot be empty!!</h1>";
        }
        if(!empty($_POST['noun'])){
            $noun = $_POST['noun'];
        }else {
            echo "<h1 style='color: red'>Noun cannot be empty!!</h1>";
        }
        if(!empty($_POST['beverage'])){
            $beverage = $_POST['beverage'];
        }else {
            echo "<h1 style='color: red'>Beverage cannot be empty!!</h1>";
        }
        if(!empty($_POST['number'])){
            $number = $_POST['number'];
        }else {
            echo "<h1 style='color: red'>Number cannot be empty!!</h1>";
        }
        if(!empty($_POST['place'])){
            $place = $_POST['place'];
        }else {
            echo "<h1 style='color: red'>Place cannot be empty!!</h1>";
        }
        if(!empty($_POST['clothing'])){
            $clothing = $_POST['clothing'];
        }else {
            echo "<h1 style='color: red'>Article of Clothing cannot be empty!!</h1>";
        }
        if(!empty($_POST['relative'])){
            $relative = $_POST['relative'];
        }else {
            echo "<h1 style='color: red'>Related to You cannot be empty!!</h1>";
        }
        if(!empty($_POST['state'])){
            $state = $_POST['state'];
        }else {
            echo "<h1 style='color: red'>Name of a State cannot be empty!!</h1>";
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
    }
    ?>
</body>

</html>