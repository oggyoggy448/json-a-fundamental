<?php
    if(isset($_GET['x']) && !empty($_GET['x'])){
        $data = json_decode($_GET['x']);
        echo 'age is:'. $data->age."<br/>";
        echo 'Name is:'. $data->name . "<br/>";
        echo 'first number is:'. $data->numbers[0]. "<br/>";
        echo 'first value is:'.$data->other->k1. "<br/>";
    }
?>