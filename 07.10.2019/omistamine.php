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

echo '
    <table>
        <thead>
            <tr>
                <th>Operaator</th>
                <th>Lühend</th>
                <th>Näide</th>
                <th>Tulemus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>x=x+2</td>
                <td>x += 2</td>
                <td>'.$x.' +=2</td>
                <td>'.($x+=2).'</td>
            </tr>
 ';
  $x=8;
  echo '
            <tr>
               <td>x=x-2</td>
                <td>x -= 2</td>
                <td>'.$x.' -=2</td>
                <td>'.($x-=2).'</td>
            </tr>
';
  $x=8;
  echo'   
            <tr>
               <td>x=x*2</td>
                <td>x *= 2</td>
                <td>'.$x.' *=2</td>
                <td>'.($x*=2).'</td>
            </tr>
  ';  
  $x=8;
  echo'
             <tr>
               <td>x=x/2</td>
                <td>x /= 2</td>
                <td>'.$x.' /=2</td>
                <td>'.($x/=2).'</td>
            </tr>
  ';
  $x=8;
  echo'   
             <tr>
                <td>x=x%2</td>
                <td>x %= 2</td>
                <td>'.$x.' %=2</td>
                <td>'.($x%=2).'</td>
            </tr>
  ';
  $x=8;
  echo'
             <tr>
                <td>x=x.2</td>
                <td>x .= 2</td>
                <td>'.$x.' .=2</td>
                <td>'.($x%=2).'</td>
            </tr>
        </tbody>
    </table>
';
?>
</body>
</html>
