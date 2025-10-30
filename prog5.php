<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post" >
    <table>
        <tr>
            <td>Enter First Number:</td>
            <td><input type="text" name="num1"></td>
        </tr>
        <tr>
            <td>Enter Second Number:</td>
            <td><input type="text" name="num2"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Calculate">
            </td>
        </tr>

        <?php
             if(isset($_POST['submit']))
             {
                $num1= $_POST['num1'];
                $num2= $_POST['num2'];

                if(is_numeric($num1) and is_numeric($num2))
                {
                    echo "<tr><td colspan='2'> Addition :</td><td><p>" . ($num1 + $num2) . "</p></td></tr>";
                    echo "<tr><td colspan='2'> Subtraction :</td><td><p>" . ($num1 - $num2) . "</p></td></tr>";
                    echo "<tr><td colspan='2'> Multiplication :</td><td><p>" . ($num1 * $num2) . "</p></td></tr>";
                    echo "<tr><td colspan='2'> Division :</td><td><p>" . ($num1 / $num2) . "</p></td></tr>";
                }else{
                    echo "<script type='text/javascript'>alert('ENTER VALID NUMBERS');</script>";
                }
             }
        ?>
    </table>
</form>

</body>
</html>
