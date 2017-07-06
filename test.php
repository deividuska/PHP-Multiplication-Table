<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Multiplication table</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 <body>
<main>
<div class="container-text">
<span>My first Multiplication Table</span>
</div>
 <table>
    <?php 

        //First top row left to right
        echo '<tr>';
        echo '<th>&nbsp;</th>';
        for ($col = 1; $col <=10; $col++) :
            echo "<th>$col</th>";
        endfor;
        echo '</tr>';
        //Rest of the of the rows

        for ($row = 1, $col = 1; $row <=10; $row++) :
            echo '<tr>';
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 10) :
            echo '<td>' . $row * $col++ . '</td>';
        endwhile;
        echo '</tr>';
        //End of the rows reset code
        $col = 1;
        endfor;

         ?>
 </table>
</main>
 </body>
</html>