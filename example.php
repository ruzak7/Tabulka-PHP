<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            table, td, th {
                border: 1px black solid;
                width: 50px;
                height: 50px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'tabulka.php';
        $table = new tabulka("test");
        $table->nazev_sloupce("test1", 0); // Nastavení názvů sloupců
        $table->nazev_sloupce("test2", 1);
        $table->nazev_sloupce("test4", 3);
        $table->vloz_data("asdfg", 1); // Vložení dat do buněk
        $table->vloz_data("asdfg", 1);
        $table->vloz_data("asdfg", 1);
        $table->vloz_data("asdfg", 1);
        $table->vloz_data("asdfg", 1);
        $table->vloz_data("asdfg", 3);
        $table->vloz_data("asdfg", 3);
        $table->vloz_data("asdfg", 4);
        $table->vloz_data("asdfg", 4);
        echo $table;
        ?>
    </body>
</html>
