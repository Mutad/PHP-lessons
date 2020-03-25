<?php
$count = empty($_GET['count'])? 5:$_GET['count'];

for ($i=1; $i <= $count; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo '*';
    }

    echo '<br>';
}

if (!empty($_GET['reverse'])){
    for ($i=$count; $i > 0; $i--) { 
        for ($j=0; $j < $i; $j++) { 
            echo '*';
        }
    
        echo '<br>';
    }
}