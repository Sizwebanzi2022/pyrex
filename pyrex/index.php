<?php

$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority" ,FILTER_VALIDATE_INT);
$terms = filter_input(  INPUT_POST, 'terms', FILTER_VALIDATE_BOOLEAN);
