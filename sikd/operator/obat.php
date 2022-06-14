<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}


$query = "SELECT * FROM obat ";
$read = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
<div class="mainop">
			<h2>DAFTAR OBAT</h2>
			<table>
				<thead>
					<tr>
					<td>No</td>
					<td>Nama Obat</td>
					<td>Kode Obat</td>
					<td>Jenis Obat</td>
					<td>Stok</td>
					</tr>
				</thead>
				<tbody>
			<?php
			$no = 0;
			while($row = mysqli_fetch_assoc($read) ){ 
			$no++;
			?>
					<tr>
					<td><?= $no ?></td>
					<td><?= $row['namaobat'] ?></td>
					<td><?= $row['kodeobat'] ?></td>
					<td><?= $row['jenisobat'] ?></td>
					<td><?= $row['stok'] ?></td>
					</tr>
<?php } ?>
			</tbody>
			</table>
			</table>
		</div>
	</div>
<?php footerku(); ?>