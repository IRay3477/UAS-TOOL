<?php
session_start();
if (isset($_SESSION['sesi']) && $_SESSION['sesi'] == 'penerbit') {
    header("location:login.php");
} else {
    include("koneksi.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="utf-8">
    </head>

    <body>
        <div class="container">
            <h1>Login</h1>
            <form method="post">
                <label>Username</label><br />
                <input type="email" name="nama_penerbit" /><br />
                <label>Password</label><br />
                <input type="text" name="tahun" /><br />
                <input type="submit" name="submit" value="Login">
            </form>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $nama_penerbit      = $_POST['nama_penerbit'];
            $tahun   = md5($_POST['tahun']);

            $login      = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE nama_penerbit='" . $nama_penerbit . "' AND tahun='" . $tahun . "' LIMIT 1");
            $data       = mysqli_fetch_array($login);

            if ($login->num_rows > 0) {
                $_SESSION['sesi'] = 'penerbit';
                $_SESSION['id_penerbit'] = $data['id_penerbit'];
                echo '
            <script>
                alert("Anda Berhasil Login dan Menuju Ke Halaman Admin");
                window.location = "index.php";
            </script>
            ';
            } else {
                echo '
                    <script>
                        alert("Maaf email atau Password tidak sesuai!");
                        window.location = "index.php";
                    </script>
                    ';
            }
        }
        ?>
    </body>

    </html>
<?php } ?>