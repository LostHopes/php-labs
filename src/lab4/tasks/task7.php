<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завдання №7</title>
</head>

<body>
    <form method="post" action="answers.php">
        <p>Питання 1: Який ваш улюблений колір?</p>
        <input type="radio" name="color" value="red"> Червоний<br>
        <input type="radio" name="color" value="blue"> Синій<br>
        <input type="radio" name="color" value="green"> Зелений<br>

        <p>Питання 2: Яка ваша операційна система?</p>
        <input type="checkbox" name="os[]" value="mac">Mac<br>
        <input type="checkbox" name="os[]" value="win">Windows<br>
        <input type="checkbox" name="os[]" value="linux">Linux<br>

        <p>Питання 3: Яка ваша улюблена тварина?</p>
        <select name="animal">
            <option value="cat">Кіт</option>
            <option value="dog">Собака</option>
            <option value="hamster">Хом'як</option>
        </select>
        <p>Питання 4: Який ваш вік?</p>
        <input type="number" name="age">

        <input type="submit" value="Відправити">
    </form>
    

</body>

</html>