<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th{
            background-color: yellow;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form method="post" action="tugas3.php">

        <h4>Categories</h4>
        <label for="category_name">Nama :</label>
        <input type="text" id="category_name" name="category_name"><br><br>

        <h4>Products</h4>
        <label for="category_id">Id Deskripsi :</label>
        <input type="number" id="category_id" name="category_id"><br><br>
        <label for="product_name">Nama :</label>
        <input type="text" id="product_name" name="product_name"><br><br>
        <label for="description">Deskripsi :</label>
        <input type="text" id="description" name="description"><br><br>
        <label for="price">Harga :</label>
        <input type="number" id="price" name="price"><br><br>
        <label for="status">Status :</label>
        <select id="status" name="status">
            <option value="accepted">accepted</option>
            <option value="rejected">rejected</option>
            <option value="waiting">waiting</option>
        </select><br><br>        
        <input type="submit" value="Submit"><br><br><br><br>

    </form>
</body>
</html>

<?php
    // Konfigurasi database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'sinauo';

    // Membuat koneksi ke database
    $conn = mysqli_connect($host, $user, $password, $database);

    // Cek koneksi
    if (!$conn) {
        die('Koneksi database gagal: ' . mysqli_connect_error());
    }else{
        // echo "Koneksi sukses";
    }

    // Fungsi untuk memasukkan data ke tabel categories
    function insert_into_categories($conn){
        // Ambil data dari form categories
        $category_name = $_POST['category_name'];    
        $query = "INSERT INTO categories (name, created_at, updated_at) VALUES ('$category_name', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP())";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo '<br>Data berhasil ditambahkan di tabel Categories';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }

    // Fungsi untuk memasukkan data ke tabel products
    function insert_into_products($conn){
        // Ambil data dari form products
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        
        $query = "INSERT INTO products (category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by) 
        VALUES 
        ($category_id,'$product_name', '$description', $price, '$status', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP(), NULL, CURRENT_TIMESTAMP(), NULL)";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo '<br>Data berhasil ditambahkan di tabel Product';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    }

    // Menjalankan fungsi insert ketika tombol diklik
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        insert_into_categories($conn);
        insert_into_products($conn);
    }

    // Query untuk menampilkan data
    $query = "SELECT p.id AS product_id, c.name, p.name AS product_name, p.price, p.status 
                FROM categories AS c 
                RIGHT JOIN products AS p 
                ON c.id = p.category_id
                ORDER BY p.id ASC";

    // Eksekusi query
    $result = mysqli_query($conn, $query);
?>

    <!-- Tampilkan data -->
    <table id="myTable">
        <thead>
            <th>Id Product</th>
            <th>Category Name</th>
            <th>Product_Name</th>
            <th>Price</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php  
            while ($row = mysqli_fetch_assoc($result)) : 
            ?>
            <tr>
                <td><?= $row['product_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['product_name'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['status'] ?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>



