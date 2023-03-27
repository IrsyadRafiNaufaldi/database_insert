<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="lainnya.css">
</head>
<body>
    <?php
        include 'koneksi.php';

        $querysatu = "SELECT * FROM products";
        $sql_satu = mysqli_query($con, $querysatu);
    ?>

    <div class="Head">
        <h2>Product</h2>
    </div>

    <a href="TambahDataProduct.php"><button class="tambahdata">Tambah Data</button></a>

    <table>
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Line</th>
                <th>Product Scale</th>
                <th>Product Vendor</th>
                <th>Product Description</th>
                <th>Quantity In Stock</th>
                <th>Buy Price</th>
                <th>MSRP</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($hasil_sql_satu = mysqli_fetch_assoc($sql_satu)){
        ?>
            <tr>
                <td>
                    <?php echo $hasil_sql_satu['productCode'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productLine'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productScale'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productVendor'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['productDescription'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['quantityInStock'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['buyPrice'];?>
                </td>
                <td>
                    <?php echo $hasil_sql_satu['MSRP'];?>
                </td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <div class="kembali">
        <a href="Database.php"><button>Kembali</button></a>
    </div>
</body>
</html>