<?php

    $promocodes = (object)array(
        'promo21' => 20,
        'promo32' => 15
    )

?>
 <? 
 $discount = $_POST['discount']; 

 if(isset($promocodes->{$discount})){
    echo($promocodes->{$discount});
    
 }
 else{
    echo(0);
 }
?>