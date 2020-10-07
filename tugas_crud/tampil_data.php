<?php
    include "koneksi.php";

    $result = mysqli_query($kon,'SELECT * FROM mahasiswa');
    

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Database Mahasiswa</title>
</head>
<body style="margin: 10px;">
    <h2 style="text-align: center;">Daftar Data Mahasiswa</h2>
    <hr style="size: 50%;"/>
    <!-- <a href="tampil_data.php" ><button type="button" class="btn btn-light">Tampil</button></a> -->
    <a href="tambah_data.php" ><button type="button" class="btn btn-primary">Tambah Data</button></a>
    <br>
    <br>
    <table class="table table-striped">
        <thead class = "table-info" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Olahraga Favorit</th>
                <th scope="col">Foto Profil</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($row=mysqli_fetch_array($result))  // VARIABEL UNTUK CRUD GUNAKAN $row BUKAN $data
                {
                echo "<tr>";
                
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td>".$row['agama']."</td>";
                echo "<td>".$row['olahraga_fav']."</td>";
                echo "<td><img src='images/".$row['foto']."' width='100' height='100'></td>";
                echo "<td>"?><a href="edit.php?id=<?php echo $row['id']; ?>" ><button type="button" name="sub" class="btn btn-warning">Edit</button></a> 
                             <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" name="sub" class="btn btn-danger">Hapus</button></a>
                <?php 
                }
        
            ?>
        </tbody>
    </table>

</body>
</html>