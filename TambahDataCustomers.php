<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Customer</title>
</head>
<body>
    <h1>TAMBAH DATA</h1>

    <form method="POST" action="proses_customers.php">
        <table>
            <tr>
                <td width="150">Customer Number</td>
                <td><input type="text" name="customerNumber"></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customerName"></td>
            </tr>
            <tr>
                <td>Customer Last Name</td>
                <td><input type="text" name="contactLastName"></td>
            </tr>
            <tr>
                <td>Customer First Name</td>
                <td><input type="text" name="contactFirstName"></td>
            </tr>
            <tr>
                <td>Customer Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>Address Line 1</td>
                <td><input type="text" name="addressLine1"></td>
            </tr>
            <tr>
                <td>Address Line 2</td>
                <td><input type="text" name="addressLine2"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type="text" name="state"></td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td><input type="text" name="postalCode"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country"></td>
            </tr>
            <tr>
                <td>Sales Rep Employee Number</td>
                <td><input type="text" name="salesRepEmployeeNumber"></td>
            </tr>
            <tr>
                <td>Credit Limit</td>
                <td><input type="text" name="creditLimit"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">
                    Tambahkan
                    </button>
                </td>
                <td><a href="Customers.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>