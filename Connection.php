<?php 

$link = mysqli_connect("localhost","root","","plant");

// if($link === false)
//     die("Error connection".mysqli_connect_error());
// else 
//     echo "Successfully connection".mysqli_get_host_info($link);

// Include database connection

session_start();

if (isset($_POST["add_to_cart"])) {
    // Get product details from the form
    $product_id = $_GET["id"];
    $product_name = $_POST["hidden_name"];
    $product_price = $_POST["hidden_price"];
    $product_quantity = $_POST["quantity"];
    $product_image = $_POST["image1_path"];

    // Create an array with product details
    $item_array = array(
        'item_id' => $product_id,
        'item_name' => $product_name,
        'item_price' => $product_price,
        'item_quantity' => $product_quantity,
        'image1_path' => $product_image
    );

    // Check if the shopping cart session is set
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

        // Check if the product is not already in the cart
        if (!in_array($product_id, $item_array_id)) {
            array_push($_SESSION["shopping_cart"], $item_array);
        } else {
            // Product is already in the cart
            echo '<script>alert("Item Already Added")</script>';
        }
    } else {
        // Shopping cart session is not set, create it
        $_SESSION["shopping_cart"][] = $item_array;
    }
}

// Check if 'action' is set (for removing items from the cart)
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            if ($value["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item Removed")</script>';
            }
        }
    }
}

function generateCart($shoppingCart,$currentPage) {
    $cart = '<div class="cart">';
    $cart .= '<h2 class="cart-title">Your Cart</h2>';

    if (!empty($shoppingCart)) {
        $total = 0;

        foreach ($shoppingCart as $key => $value) {
            $cart .= '<div class="product">';
            $cart .= '<div class="cart-box">';

            if (isset($value["image1_path"])) {
                $cart .= '<img src="' . $value["image1_path"] . '" class="cart-img">';
            } else {
                $cart .= '<img src="placeholder-image.jpg" class="cart-img">';
            }

            $cart .= '<div class="detail-box">';
            $cart .= '<p class="cart-product-title">' . $value["item_name"] . '</p>';
            $cart .= '<h6 class="product-price">' . $value["item_price"] . ' SR</h6>';
            $cart .= '<input type="number" value="' . $value["item_quantity"] . '" class="cart-quantity">';
            $cart .= '</div>';
            $cart .= '<div>';
            $cart .= '<a href="' . $currentPage . '?action=delete&id=' . $value["item_id"] . '" class="crat-remove">';
            $cart .= '<img src="bxs-trash.svg" class="crat-remove">';
            $cart .= '</a>';
            $cart .= '</div>';
            $cart .= '</div>';
            $cart .= '</div>';
            $total = $total + ($value["item_quantity"] * $value["item_price"]);
        }

        $cart .= '<div class="total">';
        $cart .= '<div class="total-title">Total</div>';
        $cart .= '<div class="total-price">' . "$" . number_format($total, 2) . '</div>';
        $cart .= '</div>';
        $cart .= '<button type="button" class="btn-buy" onclick="displayThankYouAndTotal(' . $total . ')">Buy Now</button>';
        $cart .= '<img src="bx-x (1).svg" class="close-cart" onclick="displayThankYouAndTotal(' . $total . ')">';
    }

    $cart .= '</div>';
    $cart .= '</main>';

    return $cart;
}




