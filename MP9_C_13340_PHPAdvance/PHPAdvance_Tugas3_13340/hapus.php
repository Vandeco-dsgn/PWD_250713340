<?php
    require 'koneksi.php';

    $id = $_GET['id'] ?? '';

    if($id == '' || !ctype_digit($id)){
       echo '<p style="color:red;">!! ID Tidak Valid. !!</p>';  
    }else{
        $query = ('DELETE FROM menu WHERE id = ?');
        $stmt = mysqli_prepare($conn, $query );
        mysqli_stmt_bind_param($stmt, 'i', $id);
        if(mysqli_stmt_execute($stmt)){
           echo '<p>Data berhasil dihapus.</p>';
        }else{
            echo '<p>Data berhasil ditemukan.</p>';
        }
    }

