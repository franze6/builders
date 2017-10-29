<?php

$mail = "avers.stroy.rzn@bk.ru";

if(isset($_GET['fio']) && isset($_GET['number'])) {
    if(mail($mail, "заказан звонок", $_GET['fio'] .
        " хочет чтобы вы ему перезвонили на " . $_GET['number'])) {
        echo "ok";
    }
    else {
        echo "err";
    }
}
else {
    header("Location: /");
}

?>