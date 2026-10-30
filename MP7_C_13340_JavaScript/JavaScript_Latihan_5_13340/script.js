function fn_ValForm(){
            var sMsg = "";

            if(document.getElementById("nama").value == ""){
                sMsg += "\n* Anda belum mengisikan nama";
            }
            if(document.getElementById("email").value == ""){
                sMsg += "\n* Anda belum mengisikan email";
            }
            if(document.getElementById("umur").value == ""){
                sMsg += "\n* Anda belum mengisikan umur";
            }
            if(document.getElementById("koleksi favorit").value == ""){
                sMsg += "\n* Anda belum mengisikan koleksi favorit";
            }

            if(sMsg != ""){
                alert("Peringatan:\n" + sMsg);
                return false;
            }else{
                return true;
            }
            
        /*    var iUmur;
        
                if(iUmur <= 17){
                alert("Anggota Pelajar");
                }else{
                    alert("Anggota Umum");
                }

            var cek = ^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$; */
}
    
