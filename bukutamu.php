<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flowers - Best Flowers Online Store</title>

        <link rel="stylesheet" href="css/bukutamu.css">
    </head>
    <body>

        <nav class="navbar"></nav>

        <?php
        include "koneksi.php";
        $sql= "select *from tamu";
        $hasil = mysql_query($conn, $sql);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope = "col">#</th>
                    <th scope = "col">First</th>
                    <th scope = "col">Last</th>
                    <th scope = "col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($r = mysql_fetch_assoc($hasil)){
                    echo"
                    <tr>
                        <th scope='row'>". $r['idtamu']."</th>
                        <td>" . $r['nama']."</td>
                        <td>" . $r['email']."</td>
                        <td>" . $r['pesan']."</td>
                    </tr>

                }
            </tbody>
        </table>    

        <script src="js/nav.js"></script>
    </body>
</html>