<?php

if($_POST){
    $bayaran = $_POST['bayaran'] ?? '';
    $jenis = $_POST['jenis'] ?? '';
    $harga = 600000;
    $message = array();
    $message2 = "";
    $bayaranKembali = 0;

    if(empty($bayaran) || empty($jenis)){
        $message[] = "Harap lengkapi semua data.";
    }

    if(!preg_match("/^[a-zA-Z]*$/", $jenis)){
        $message[] = "Jenis pembayaran hanya boleh mengandung huruf.";
    }

    if(!empty($message)){
        foreach($message as $msg){
            echo "<p style='color:red;'>!! " . htmlspecialchars($msg) . " !! </p>"
        }
    }else{
        function jenisPembayaran($jenis){
            switch(strtolower($jenis)){
                case 'a':
                    $potongan = 0.75;
                    break;
                
                    case 'b':
                        $potongan = 0.50;
                        break;
                    
                    case 'c':
                        $potongan = 0.25;
                        break;
                    
                    case 'd':
                        $potongan = 0;
                        break;

                    default:
                    $potongan = 0;
            }
            return $potongan
        }
        function infoJenisPembayaran($jenis){
            switch(strtolower($jenis)){
                case 'a':
                    $info = "Cicilan 25%";
                    break;
                
                case 'b':
                    $info = "Cicilan 50%";
                    break;
                    
                case 'c':
                    $info = "Cicilan 75%";
                    break;
                    
                case 'd':
                    Lunas
                    break;

                default:
                    $info = "Jenis Pembayaran tidak valid.";
            }
        return($info);
        }
        $potongan = jenisPembayaran($jenis);
        $infoJenis = infoJenisPembayaran($jenis);

        function totalBayar($harga, $potongan){
            return $harga - ($harga * $potongan);
        }

        $totalBayar = totalBayar($harga, $potongan);

        function pembayaran($bayaran, $totalBayar){
            if($bayaran < $totalBayar){
                return null;
            }else{
                $bayaranKembali = $bayaran - $totalBayar;
                return $bayaranKembali;
            }
        }

        $bayaranKembali = pembayaran($bayaran, $totalBayar);

        if($bayaranKembali === null){
            $message2 = "Jumlah yang dibayar kurang dari total pembayaran. Silahkan bayar sesuai jumlah  yang ditentukan.";
            $bayaranKembali = 0;
        }

        if(!empty($message2)){
            echo "<p style='color:red;'>!! " . htmlspecialchars($message2) . " !!</p>";
        }
    }
    
}