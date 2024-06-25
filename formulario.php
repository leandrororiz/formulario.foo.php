<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
 <style>
    input{
      display: flex;

    }
 </style>

<body>

<form action="foo.php" method="post">
        Nome: <input type="text" name="nome" /><br />
        Usuario: <input type="text" name="user" /><br />
        Email: <input type="text" name="email" /><br />
        CPF: <input type="number" name="CPF" /><br />
        Data de Nascimento: <input type="number" name="DatadeNascimento" /><br />
        Sexo: <select name="Sexo" > 
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminimo</option>
        </select><br /><br>
        Endereço: <input type="text" name="End" /><br />
        <input type="submit" value="Me aperte!" />
    </form>


</body>
</html>