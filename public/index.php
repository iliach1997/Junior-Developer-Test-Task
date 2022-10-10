<?php
include_once '../app/vendor/views/partials/header.php';
$conn = mysqli_connect("localhost", "root", "", "junior_developer");

if (isset($_POST['delete']) && isset($_POST['deleteid'])) {
    foreach ($_POST['deleteid'] as $deleteid) {
        $delete = "DELETE FROM products WHERE id=$deleteid";
        mysqli_query($conn, $delete);
    }
}

?>
<div class="div_box">
    <h1>Product List</h1>
    <div class="div_button">
        <a href="./Addproduct.php"><button class="button_add">ADD</button></a>
        <form method='post'>
            <button class="mass_delete" type="submit" name="delete">MASS DELETE</button>
    </div>
</div>
<div class="divstyck"></div>

<div class="product_div">
    <?php $products = mysqli_query($conn, "SELECT * FROM products ORDER BY option_type DESC"); ?>
    <?php foreach ($products as $i => $product) { ?>


        <div class="box">
            <div><input type="checkbox" name="deleteid[]" class="checkbox" value="<?php echo $product['id']; ?>"></div>

            <div><?php echo $product['sku']; ?></div>
            <div><?php echo $product['name']; ?> </div>
            <div><?php echo $product['price'] . "$"; ?></div>
            <div class="size"><?php if (!empty($product['size'])) {
                                    echo 'Size: ' . $product['size'] . " MB";
                                } ?></div>
            <div><?php if (!empty($product['weigth'])) {
                        echo 'Weigth: ' . $product['weigth'] . ' ' . 'KG';
                    } ?></div>

            <div class="heigth"><?php if (!empty($product['heigth'])) {
                                    echo 'Dimension: ' . $product['heigth'] . "x";
                                    echo $product['width'] . "x";
                                    echo $product['length'];
                                } ?>
            </div>
        </div>



    <?php } ?>
</div>
</form>

<!-- http://localhost/-Final-project/Junior-Developer-Test-Task/public/index.php -->