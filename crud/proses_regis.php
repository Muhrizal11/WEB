<?php
   require_once '../helper/connection.php';
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($koneksi, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($koneksi, $password);
        $query    = "INSERT into `admin` (username, password)
                     VALUES ('$username','$password')";
        $result   = mysqli_query($koneksi, $query);
        if ($result) {
            echo  "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
      }
?>