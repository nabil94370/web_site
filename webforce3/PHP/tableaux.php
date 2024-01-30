<?php

$tab = [
    "Rouge"=> ["#FF0000", "rgb(255, 0, 0)"],
    "Orange"=> ["#FF4500", "rgb(255, 69, 0)"],
    "Cyan"=> ["#00FFFF", "rgb(0, 255, 255)"],
    "Rose"=> ["#FFC0CB", "rgb(255, 192, 203)"]
]

?>
<ul>
    <?php
         foreach ($tab as $key => $value) {
            ?>
            <li><?php echo  $key .", ". $value[1]; ?></li>
            <?php   
         }
    ?>
</ul>


<ul>
    <?php
         foreach ($tab as $key => $value) {
            ?>
            <li><?php echo  $key ." ". $value[0]; ?></li>
            <?php   
         }
    ?>
</ul>



<?php

echo $tab['Cyan'][1];
