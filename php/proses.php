<?php
$nama = $_POST["txtnama"];
$dir = "file/";
$img = $_FILES['flfoto']['name'];
$img_tmp = $_FILES['flfoto']['tmp_name'];
$img_size = $_FILES['flfoto']['size'];
$destination = $dir.$img;

$jenis_file = array("jpg","jpeg","png");
$img_ext = strtolower(end(explode('.', $img)));
if(in_array($img_ext, $jenis_file))
{
	if($img_size>1024000)
{

    echo "<script>alert('Upload GAGAL ANJENGGG!!!!');</script>";
	echo"<script>url:location='form.php'</script>";
} 
else 
{
	move_uploaded_file($img_tmp, $destination);
	echo"<script>alert('upload SUKSES');</script>";
}
}
else
{
	echo "<script>alert('jenis file tidak support !');</script>";
	echo "<script>url:location='form.php'</script>";
}


?>