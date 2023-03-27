<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="lainnya.css">
</head>
<body>
    <?php
        include 'koneksi.php';

        $querydua = "SELECT * FROM customers";
        $sql_dua = mysqli_query($con, $querydua);
    ?>

    <div class="Head">
        <h2>CUSTOMERS</h2>
    </div>
    
    <a href="TambahDataCustomers.php"><button class="tambahdata">Tambah Data</button></a>

    <table border=1;>
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Sales Rep Employee Number</th>
                <th>Credit Limit</th>
                <th>Edit Data</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($hasil_sql = mysqli_fetch_assoc($sql_dua)){
        ?>
            <tr>
                <td>
                    <?php echo $hasil_sql['customerNumber'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['customerName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['contactLastName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['contactFirstName'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['phone'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['addressLine1'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['addressLine2'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['city'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['state'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['postalCode'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['country'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['salesRepEmployeeNumber'];?>
                </td>
                <td>
                    <?php echo $hasil_sql['creditLimit'];?>
                </td>
                <td>
                    <a href="edit.php"><button>Edit</button></a>
                    <a href="HapusData.php"><button>Hapus</button></a>
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