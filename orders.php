<?php
include_once('./includes/headerNav.php');
?>

<div class="overlay" data-overlay></div>

<header>
    <?php require_once './includes/topheadactions.php'; ?>
    <?php require_once './includes/desktopnav.php'; ?>
    <?php require_once './includes/mobilenav.php'; ?>
</header>

<main>
    <div class="product-container" style="background-color: #f8f9fa; padding: 20px;">
        <div class="container">
            <h2 style="color: #28a745;">Order Confirmation</h2>

            <?php
            $grand_total = 0;
            $hasCartItems = !empty($_SESSION['mycart']) && count($_SESSION['mycart']) > 0;

            if ($hasCartItems) {
                echo '<p style="color: #17a2b8;">Your order has been placed successfully. Here are the details of your order:</p>';
            ?>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <thead>
                        <tr style="background-color: #007bff; color: white;">
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['mycart'] as $value) {
                            $total_price = $value['price'] * $value['product_qty'];
                            $grand_total += $total_price;
                        ?>
                            <tr style="background-color: #f1f1f1; color: #333;">
                                <td><img class="cart-product-image" src="./admin/upload/<?php echo $value['product_img']; ?>" alt="Product Image" style="max-width: 50px; height: auto;"></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo "₹" . $value['price']; ?></td>
                                <td><?php echo $value['product_qty']; ?></td>
                                <td><?php echo "₹" . $total_price; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="grand-total" style="margin-top: 20px; font-size: 18px; font-weight: bold;">
                    <h3 style="color: #dc3545;">Grand Total: ₹<?php echo $grand_total; ?></h3>
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
                    <div class="user-details" style="margin-top: 30px; background-color: #e9ecef; padding: 15px; border-radius: 5px;">
                        <h3 style="color: #28a745;">Shipping Information</h3>
                        <p><strong style="color: #007bff;">First Name:</strong> <?php echo htmlspecialchars($_POST['first_name']); ?></p>
                        <p><strong style="color: #007bff;">Last Name:</strong> <?php echo htmlspecialchars($_POST['last_name']); ?></p>
                        <p><strong style="color: #007bff;">Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></p>
                        <p><strong style="color: #007bff;">City:</strong> <?php echo htmlspecialchars($_POST['city']); ?></p>
                        <p><strong style="color: #007bff;">Postal Code:</strong> <?php echo htmlspecialchars($_POST['postal_code']); ?></p>
                        <p><strong style="color: #007bff;">Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
                        <p><strong style="color: #007bff;">Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
                    </div>
                <?php } ?>

                <div class="thank-you-message" style="margin-top: 30px; background-color: #d4edda; padding: 20px; border-radius: 5px;">
                    <h2 style="color: #28a745;">Thank You for Your Order!</h2>
                    <p style="color: #155724;">Your order is being processed and will be shipped shortly.</p>
                </div>
            <?php
            } else {
                echo "<p style='color: #dc3545; font-size: 16px;'>No items available in cart.</p>";
            }
            ?>
        </div>
    </div>
</main>

<?php require_once './includes/footer.php'; ?>
