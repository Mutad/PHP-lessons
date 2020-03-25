<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess table</title>
    <style>
        table{
            width: 270px;
        }
        td{
            height: 30px;
        }
        .black{
            background-color: black;
        }
        .white{
            background-color: white;
        }
    </style>
</head>
<body>
    <table>

        <?php
        for ($i=0; $i < 9; $i++) { 
            echo "<tr>";
            for ($j=0; $j < 9; $j++) { 
                if (($i + $j)%2==0){
                    echo "<td class=\"black\"></td>";
                }
                else{
                    echo "<td class=\"white\"></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>