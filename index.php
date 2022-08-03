<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <form action="processar.php" method="post">

            <input name="nomes[]" type="text" /> <br />
            <input name="nomes[]" type="text" /> <br />
            <input name="nomes[]" type="text" /> <br />
            <input name="nomes[]" type="text" /> <br />
            <input name="nomes[]" type="text" /> <br />

            <button type="submit">Enviar</button>

        </form>

    </div>
    
</body>
</html>