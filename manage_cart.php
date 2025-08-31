<?php
session_start();

if (isset($_POST['add_to_cart'])) {

    // Check if the cart already exists in the session
    if (isset($_SESSION['mycart'])) {

        // Check if the product already exists in the cart
        $item_id = array_column($_SESSION['mycart'], 'product_id');
        $item_check_id = array_search($_POST['product_id'], $item_id);

        // If product exists, update the quantity
        if ($item_check_id !== false) {
            // Loop through the cart and update the quantity of the existing product
            $_SESSION['mycart'][$item_check_id]['product_qty'] = $_POST['product_qty'];
        } else {
            // If the product doesn't exist, add it to the cart
            $count_card = count($_SESSION['mycart']);
            $_SESSION['mycart'][$count_card] = array(
                'name' => $_POST['product_name'],
                'price' => $_POST['product_price'],
                'product_id' => $_POST['product_id'],
                'category' => $_POST['product_category'],
                'product_qty' => $_POST['product_qty'],
                'product_img' => $_POST['product_img']
            );
        }

        // Redirect to the product detail page
        header('Location: viewdetail.php?id=' . $_POST['product_id'] . '&category=' . $_POST['product_category']);
        exit();

    } else {
        // If cart doesn't exist, create a new cart and add the product
        $_SESSION['mycart'][0] = array(
            'name' => $_POST['product_name'],
            'price' => $_POST['product_price'],
            'product_id' => $_POST['product_id'],
            'category' => $_POST['product_category'],
            'product_qty' => $_POST['product_qty'],
            'product_img' => $_POST['product_img']
        );

        // Redirect to the product detail page
        header('Location: viewdetail.php?id=' . $_POST['product_id'] . '&category=' . $_POST['product_category']);
        exit();
    }

}
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $product_id_to_remove = $_GET['id'];

    foreach ($_SESSION['mycart'] as $key => $item) {
        if ((string)$item['product_id'] === (string)$product_id_to_remove) {
            unset($_SESSION['mycart'][$key]);
            break;
        }
    }

    $_SESSION['mycart'] = array_values($_SESSION['mycart']); // Reindex the array
    header('Location: cart.php');
    exit();

}




?>