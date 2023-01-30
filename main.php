<?php
$token = "5650458831:AAEtMUsSUknqxLItAd7sJRjLEkJJh5rkGx4";
//https://api.telegram.org/5650458831:AAEtMUsSUknqxLItAd7sJRjLEkJJh5rkGx4/getUpdates

$chat_id = "-854441772";

    $name = ($_GET['name']);
    $phone = ($_GET['phone']);
    $email = ($_GET['email']);
    $summ = ($_GET['summ']);
    $promo = ($_GET['promo']);
    $order = ($_GET['order']);
    $address = ($_GET['address']);
    $hidden1 = ($_GET['hidden1']);
    $hidden2 = ($_GET['hidden2']);
    $hidden3 = ($_GET['hidden3']);

    $order = str_replace('benterb', '%0A', $order);

    if (empty($promo)){
        $arr = array(
            'Заказ:' => $order,
            'Имя:' => $name,
            'Телефон:' => $phone,
            'Адрес:' => $address,
            'Email:' => $email,
            'Сумма'=> $summ,
            ''=> $hidden1,
          

        );  
    }
    else{
        $arr = array(
            'Заказ:' => $order,
            'Имя:' => $name,
            'Телефон:' => $phone,
            'Email: ' => $email,
            'Адрес:' => $address,
            'Промокод:' =>  $promo,
            'Сумма'=> $summ,
            ''=> $hidden1,

        );   
    }
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



?>
