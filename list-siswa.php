<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Negeri 1</title>
    <link rel="stylesheet" href="styledb.css">
</head>

<body>
    <header>
        <?php include "Layout/header.html"; ?>
        <h3>Siswa Yang Sudah Mendaftar</h3>
    </header>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($ch, $sql);
            $no = 1; 

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Nama']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Alamat']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Jenis_Kelamin']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Agama']) . "</td>";
                echo "<td>" . htmlspecialchars($siswa['Sekolah_Asal']) . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $siswa['Id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['Id'] . "' onclick='return confirm(\"Hapus Data?\");'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query); ?></p>

    <?php include "Layout/footer.html"; ?>
</body>
</html>
