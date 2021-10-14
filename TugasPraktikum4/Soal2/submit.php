<html>
<html lang="en">

<head>
    <meta name="author" content="AlvinRahmatilasyah 2172016">
    <title>Submit</title>
</head>
<body align="center">
<table border= '3' align= 'center' cellspacing = '0' width= '350'>
    <form>
        <tr>
            <td colspan= '2' align= 'center' bgcolor= 'ADFF2F'>Kalkulator</td>
        </tr>
        <tr>
            <td bgcolor= 'green'> Angka pertama </td>
            <?php
                echo"<td>$_GET[angka1]</td>";
                ?>
        </tr>
        <tr>
            <td bgcolor= '228B22'> Angka kedua </td>
            <?php
            echo"<td>$_GET[angka2]</td>";
            ?>
        </tr>
        <tr>
            <td bgcolor= '228B22'> Operator </td>
            <?php
            echo "<td>$_GET[operator]</td>";
            ?>
        </tr>
        <tr>
            <td colspan= '2' bgcolor= 'ADFF2F'> Hasil : 
                <?php 
                $angka1 = $_GET["angka1"];
                $angka2 = $_GET["angka2"];
                 $operator = $_GET["operator"];
                if ($operator =="+") {
                    echo $angka1+$angka2;
                    } 
                    else if ($operator =="-") {
                            echo $angka1-$angka2;
                            }
                    else if ($operator =="*") {
                            echo $angka1*$angka2;
                            }
                    else if ($operator == "/") {
                             echo $angka1/$angka2;
                            }
                ?>
            </td>
        </tr>
</body>
</html>