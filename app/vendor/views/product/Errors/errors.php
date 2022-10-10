<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $option_type = $_POST['option_type'];
    $size = $_POST['size'];
    $weigth = $_POST['weigth'];
    $heigth = $_POST['heigth'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $errors = [];

    if (!$sku) {
        $errors[0] = 'Product #sku is required !!!';
    }


    if (!$name) {
        $errors[1] = 'Product #name is required !!!';
    }


    if (!$price) {

        $errors[2] = 'Product #price is required !!!';
    }
    if (preg_match("/^[a-zA-Z-']*$/", $price)) {

        $errors[2] = 'Please enter a number';
    }

    if ($option_type === 'type-switcher') {
        $errors[3] = 'Please choose type-switcher !!!';
    }


    if ($option_type === 'dvd') {
        if (!$size) {
            $errors[4] = 'Product size is required !!!';
        }
        if (preg_match("/^[a-zA-Z-']*$/", $size)) {

            $errors[4] = 'Please enter a number';
        }
    }
    if ($option_type === 'book') {
        if (!$weigth) {
            $errors[5] = 'Product weigth is required !!!';
        }
        if (preg_match("/^[a-zA-Z-']*$/", $weigth)) {

            $errors[5] = 'Please enter a number';
        }
    }
    if ($option_type === 'furniture') {
        //  errors heigth
        if (!$heigth) {
            $errors[6] = 'Product heigth is required !!!';
        }
        if (preg_match("/^[a-zA-Z-']*$/", $heigth)) {
            $errors[6] = 'Please enter a number';
        }

        // errors width
        if (!$width) {
            $errors[7] = 'Product width is required !!!';
        }
        if (preg_match("/^[a-zA-Z-']*$/", $width)) {
            $errors[7] = 'Please enter a number';
        }

        //  erorrs length


        if (!$length) {
            $errors[8] = 'Product length is required !!!';
        }
        if (preg_match("/^[a-zA-Z-']*$/", $length)) {
            $errors[8] = 'Please enter a number';
        }
    }


    return $errors;
}
