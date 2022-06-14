<?php 
require_once 'view/view.php';
require_once '../Control.php';

if(!isset($_SESSION['user']) ){
	header('Location: ../index.php');
}

$query = "SELECT * FROM pendaftaran";
$dafpoli = data($query);

 ?>

<?php headerku(); ?>
<div class="konten">
	<div class="mainop">

		<div class="pilih">
			<h1>DAFTAR PASIEN</h1>
		</div>
		<div class=" padding">
		<?php while($row = mysqli_fetch_assoc($dafpoli)){ ?>
			<a href="list.php?poli=<?= $row['poli'] ?>">
				<div class="dafpoli border">
					Pasien Poli <?= $row['poli'] ?>
				</div>
			</a>
		<?php } ?>
		</div>


	</div>
</div>
<?php footerku(); ?>
