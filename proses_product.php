<?php
include 'koneksi.php';
if (isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        $productCode = $_POST['productCode'];
        $productName = $_POST['productName'];
        $productLine = $_POST['productLine'];
        $productScale = $_POST['productScale'];
        $productVendor = $_POST['productVendor'];
        $productDescription = $_POST['productDescription'];
        $quantityInStock = $_POST['quantityInStock'];
        $buyPrice = $_POST['buyPrice'];
        $MSRP = $_POST['MSRP'];

        $query = "INSERT INTO Products VALUES
        ('$productCode', '$productName', '$productLine', '$productScale',
        '$productVendor', '$productDescription', '$quantityInStock',
        '$buyPrice', '$MSRP')";
        $sql = mysqli_query($con, $query);

        if($sql){
            echo "Data berhasil ditambah <a href = 'Products.php'>[HOME]</a>";
        } else {
            echo "data salah";
        }
    }
}
?>