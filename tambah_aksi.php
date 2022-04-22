 <?php
 	//koneksi database
    include 'koneksi.php';

    //menangkap data yang dikirim dari form
    $nama =$_POST['nama'];
    $nrp =$_POST['nrp'];
    $alamat =$_POST['alamat'];

    mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$nama','$nrp','$alamat')");

    header("location:index.php");
?>