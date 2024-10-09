<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <a href="blog.php">Blogs</a>
    <h1>Piesakies webināram!</h1>

    <form action="/confirmation.php" method="post">
        <label for="name">Vārds: </label>
        <input type="text" name="name" id="name"> <br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email"> <br>

        <label for="level">Līmenis: </label>
        <select name="level" id="level">
            <option value="">--Please choose an option--</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select> <br>

        <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>

        <label for="yes">Yes</label>
        <input type="radio" name="contact" id="yes">

        <label for="no">No</label>
        <input type="radio" name="contact" id="no"> <br>

        <input type="submit" value="Submit"> <br> <br>
    </form>

    <?php
        $ary = [1, 2, 3]; //Indexed Array

        $person = [
            "name" => "Anna",
            "age" => 18,
            "email" => "example@mail.com"
        ]; //Associative Array (Hashmap)

        $names = [
            ["name" => "janis", "email" => "somemail@mail.com", "level" => "beginner"],
            ["name" => "davis", "email" => "somemail@mail.com", "level" => "intermediate"],
            ["name" => "anna", "email" => "somemail@mail.com", "level" => "advanced"],
        ]; //Multi-dimensional Array

        foreach($names as $name) {
            echo "Vārds: {$name['name']}, Email: {$name['email']}, Level: {$name['level']} <br>";
        }

    ?>

    <script src="js/app.js"></script>
</body>
</html>