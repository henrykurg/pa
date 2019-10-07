<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, th, td {
            border:solid 1px #333;
            border-collapse: collapse;
        }
        th, td{
            text-align: center;
            padding: 0.25rem;
        }
        thead{
            background: orange;
        }
    </style>
    <title>Document</title>

</head>
<body>


<?php
$x=8;
$y=2;
//aritmetic operators
$sum=$x+$y;
$diff=$x-$y;
$product=$x*$y;
$division=$x/$y;
$residual= $x % $y;

echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Nimetus</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>x+y</td>
                <td>Liitmine</td>
                <td>'.$x.' + '.$y.'</td>
                <td>'.$sum.'</td>
            </tr>
            <tr>
                <td>x-y</td>
                <td>Lahutamine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$diff.'</td>
            </tr>
            <tr>
                <td>x*y</td>
                <td>Korrutamine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$product.'</td>
            </tr>
             <tr>
                <td>x/y</td>
                <td>Jagamine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$division.'</td>
            </tr>
             <tr>
                <td>x%y</td>
                <td>Jääk</td>
                <td>'.$x.' % '.$y.'<br>5%2</td>
                <td>'.$residual.'<br>'.(5%2).'</td>
            </tr>
        </tbody>
    </table>
';
?>
</body>
</html>
