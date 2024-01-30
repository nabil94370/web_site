<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <main style="display: flex;gap:10px;">
        <?php
        $i = 1;
        $y = 1;
        while ($y <= 10) {
            ?>
            <table>
            <?php
            while ($i <= 10) {
                ?>
                <tr>
                    <td><?php echo $y.' x '.$i. ' = '.$y*$i ?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        $i = 1;
        $y++;
    }
        ?>
        </main>


    <?php 
    
    $tab = [
        'Italie'=> 'Rome',
        'Luxembourg'=> 'Luxembourg',
        'Danemark'=> 'Copenhague',
        'Irlande'=> 'Dublin',
        'Hongrie'=> 'Budapest',
    ];
    
    ?>




</body>

</html>