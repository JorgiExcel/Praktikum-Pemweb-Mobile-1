<html>
<head>

</head>
<body>
    <form method="post">
        <select name="pilihan">
            <option value="1">1. Joko Toriq</option>
            <option value="2">2. Arif Muhammad</option>
            <option value="3">3. Santoso</option>
            <option value="4">4. Agus Tjokro</option>
            <option value="5">5. Syarifudin</option>
        </select>
<label>id pemilih</label>
    <input type="number" name="id_pemilih"/>
    <button name="kirim" type="submit" >kirim</button>
<form>
    <?php 
        require './koneksi.php';
        if (isset($_POST["kirim"])) {
        // menangkap data yang di kirim dari form
        $pilihan = $_POST['pilihan'];
        $id_pemilih = $_POST['id_pemilih'];

        $data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");

        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data1);
        echo $cek; 
        if($cek <= 0){
            $data =mysqli_query($koneksi,"INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");
        if ($data) {
    ?>
            <script language="javascript">
            alert("Data Berhasil Ditambah");
            </script>
        <?php
            }}else if ($cek >= 0){
        ?>
            <script language="javascript">
            alert("Maaf Id sudah digunakan ");
            </script>
    <?php  
            }  
        }
    ?> 	
</body>
</html>