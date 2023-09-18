<?php
    session_start();
    require 'function.php';

    //menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password']; 

    //menyeleksi data dengan username dan password yg sesuai
    $login = mysqli_query($db, "SELECT * FROM pengguna WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);


    // cek apakah username dan password di temukan pada database


    if ($cek > 0) {

        $data = mysqli_fetch_assoc($login);


        // cek jika user login sebagai admin
        if ($data['level'] == "viewer") {




            // buat session login dan username
            $_SESSION['username'] = $username;

            $_SESSION['level'] = "viewer";
            // alihkan ke halaman dashboard admin


            echo "<script>
    alert ('Selamat datang Viewer');
    document.location.href = 'hal_viewer.php';
    </script>
    ";

            // cek jika user login sebagai petugas 
        } else if ($data['level'] == "petugas") {



            // buat session login dan username 
            $_SESSION['username'] = $username;

            $_SESSION['level'] = "petugas";

            // alihkan ke halaman dashboard petugas 

            echo "<script>
    alert ('Selamat datang Petugas');
    document.location.href = 'hal_petugas.php';
    </script>
    ";


            // cek jika user login sebagai user 
        } else if ($data['level'] == "user") {


            // buat session login dan username 
            $_SESSION['username'] = $username;

            $_SESSION['level'] = "user";


            // alihkan ke halaman dashboard user 
            echo "<script>
    alert ('Selamat datang User');
    document.location.href = 'hal_user.php';
    </script>
    ";
        } else {


            // alihkan ke halaman login kembali 
            echo "<script>
    alert ('Data mengalami kegagalan! Harap ulang kembali');
    document.location.href = 'index.php';
    </script>
    ";
        }
    } else {

        echo "<script>
    alert ('Data mengalami kegagalan! Harap ulang kembali');
    document.location.href = 'index.php';
    </script>
    ";
    }
    ?>