<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="var1">
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="var2">
        <button>Calculate<br></button>
    </form>
    <?php
    $var1= $_GET['var1'];
    $var2= $_GET['var2'];
    $op= $_GET['operator'];

    if ($op == '+')
    {
        $hasil = $var1 + $var2;
        echo "The Result is:".$hasil;
    }
    elseif ($op == '-')
    {
        $hasil = $var1 - $var2;
        echo "The Result is:".$hasil;
    }
    elseif ($op = '*') 
    {
        $hasil = $var1 * $var2;
        echo "The Result is:".$hasil;
    }
    elseif ($op == '/') 
    {
        $divide = $var1 / $var2;
        echo "The Result is:".$divide;
    }
    else 
    {
        echo "Something's wrong";
    }
    ?>
</body>
</html>