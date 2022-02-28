<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: pink;
        }
    </style>
</head>
<body>
    <!-- contoh 1 -->
    <!-- <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for( $i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table> -->

    <!-- contoh 2 -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1) : ?>
            <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    
</body>
</html>