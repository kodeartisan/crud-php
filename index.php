<?php

// memanggil koneksi database
include_once("config.php");

$results = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

 ?>


<html>
    <head>
        <title>Belajar CRUD</title>
    </head>
    <body>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                     //echo "<pre>".print_r(mysqli_fetch_array($results), 1)."</pre>"; 
                      while($res = mysqli_fetch_array($results)) {?>
                            <tr>
                                <td><?php echo $res['id'];  ?></td>
                                  <td><?php echo $res['nama'];  ?></td>
                                    <td><?php echo $res['alamat'];  ?></td>
                                      <td><?php echo $res['umur'];  ?></td>
                                      <td>
                                        <a href="edit.php?id=<?php echo $res[id] ?>">Edit</a>
                                      </td>
                            </tr>

                     <?php }  ?>
                </tbody>

            </table>
    </body>
</html>



