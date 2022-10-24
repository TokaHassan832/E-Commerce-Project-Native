<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
    /* include cart item if it is not empty */
       count($product->getData('cart')) ? include ('Template/_cart-template.php') : include ('Template/notFound/_cart-notFound.php');
    /* include cart item if it is not empty */

    /* include wishlist */
       count($product->getData('wishlist')) ? include ('Template/_wishlist-template.php') : include ('Template/notFound/_wishlist-notFound.php');
    /* include wishlist */

    /*  include new phones section */
        include ('Template/_new-phones.php');
    /*  include new phones section */

?>

<?php
// include footer.php file
include ('footer.php');
?>


