<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Product</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>
    
    <form method="POST" action="proses_product.php">
        <table>
            <tr>
                <td width="150">Product Code</td>
                <td><input type="text" name="productCode"></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="productName"></td>
            </tr>
            <tr>
                <td>Product Line</td>
                <td><input type="text" name="productLine"></td>
            </tr>
            <tr>
                <td>Product Scale</td>
                <td><input type="text" name="productScale"></td>
            </tr>
            <tr>
                <td>Product Vendor</td>
                <td><input type="text" name="productVendor"></td>
            </tr>
            <tr>
                <td>Product Description</td>
                <td><input type="text" name="productDescription"></td>
            </tr>
            <tr>
                <td>Quantity In Stock</td>
                <td><input type="text" name="quantityInStock"></td>
            </tr>
            <tr>
                <td>Buy Price</td>
                <td><input type="text" name="buyPrice"></td>
            </tr>
            <tr>
                <td>MSRP</td>
                <td><input type="text" name="MSRP"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">
                    Tambahkan
                    </button>
                </td>
                <td><a href="Products.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>