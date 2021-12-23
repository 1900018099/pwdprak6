<?php 
include 'config.php';
?>
 
<h3>Form Pencarian Nim/h3>
 
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" nim="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nim</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from mhs where nim like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from mhs");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
	</tr>
	<?php } ?>
</table>