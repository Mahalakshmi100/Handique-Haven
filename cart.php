<?php include_once('./includes/headerNav.php'); ?>

<div class="overlay" data-overlay></div>

<header>
    <!-- top head action, search etc in php -->
    <?php require_once './includes/topheadactions.php'; ?>
    <?php require_once './includes/desktopnav.php' ?>
    <?php require_once './includes/mobilenav.php'; ?>

    <!-- style -->
    <style>
        :root {
            --main-maroon: #CE5959; /* Main color for buttons and highlights */
            --deep-maroon: #89375F; /* Darker maroon for hover effects */
            --bg-light: #f8f9fa; /* Light background for sections */
            --bg-dark: #343a40; /* Dark background for footer */
            --text-light: #fff; /* Light text color */
            --text-dark: #333; /* Dark text color */
            --action-color: #007bff; /* Blue for action buttons and links */
            --border-color: #e0e0e0; /* Border color for table and containers */
        }

        td,
        th {
            text-align: center;
            padding: 10px;
            border: 1px solid var(--border-color);
        }

        td img {
            max-width: 80px;
            height: auto;
        }

        .delete-icon {
            color: #dc3545; /* Red color for delete icon */
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
        }

        .delete-icon:hover {
            color: #c82333; /* Darker red on hover */
        }

        .child-register-btn {
            margin-top: 20px;
            width: 85%;
            margin-left: auto;
            margin-right: auto;
            background-color: var(--main-maroon);
            box-shadow: 0px 0px 4px #615f5f;
            line-height: 60px;
            color: var(--text-light);
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            font-size: 19px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .child-register-btn:hover {
            background-color: var(--deep-maroon); /* Darker maroon on hover */
        }

        @media screen and (max-width: 794px) {
            .child-register-btn {
                margin-top: 30px;
                width: 100%; /* Full width on smaller screens */
            }
        }

        .grand-total {
            text-align: right;
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: var(--main-maroon);
        }

        .product-container {
            background-color: var(--bg-light);
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        h2, h3 {
            color: var(--main-maroon);
        }

        /* Styling for table headers */
        th {
            background-color: var(--deep-maroon);
            color: var(--text-light);
        }

        /* Styling for the footer section */
        footer {
            background-color: var(--bg-dark);
            color: var(--text-light);
            padding: 20px;
            text-align: center;
        }

    </style>
</header>

<main>
    <div class="product-container">
        <div class="container">
            <h2>Your Cart</h2>
            <table>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th> <!-- Added Total Price column -->
                    <th>Action</th> <!-- Added Action column for Remove button -->
                </tr>
                <?php
                $grand_total = 0;
                if (isset($_SESSION['mycart'])) {
                    foreach ($_SESSION['mycart'] as $key => $value) {
                        $total_price = $value['price'] * $value['product_qty']; // Calculate total price for each product
                        $grand_total += $total_price; // Add to grand total
                ?>
                        <tr>
                            <td>
                                <img class="cart-product-image" src="./admin/upload/<?php echo $value['product_img']; ?>" alt="Product Image">
                            </td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo "₹" . $value['price']; ?></td> <!-- Display price in ₹ -->
                            <td><?php echo $value['product_qty']; ?></td>
                            <td><?php echo "₹" . $total_price; ?></td> <!-- Display total price in ₹ -->
                            <td>
                                <!-- Remove button to delete the item from the cart -->
                                <a href="manage_cart.php?action=remove&id=<?php echo urlencode($value['product_id']); ?>" class="delete-icon">Remove</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="6" style="color: var(--text-dark);">No items available in cart</td>
                    </tr>
                <?php } ?>
            </table>

            <?php
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
            ?>
                <div class="child-register-btn">
                    <p><a href="checkout.php" style="color:#FFFFFF">Proceed To CheckOut</a></p>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) { ?>
                <div class="grand-total">
                    <h3><strong>Grand Total: ₹<?php echo $grand_total; ?></strong></h3> <!-- Display grand total in ₹ -->
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php require_once './includes/footer.php'; ?>