<?php

if( isset($_GET['sel']) && is_array($_GET['sel'])){
    foreach($_GET['sel'] as $fruit){
        echo"<p>vous avez choisi $fruit \n" ;
    }
    
}
else {
    echo "<p>vous n'avez pas choisi de fruit \n";
}
?>