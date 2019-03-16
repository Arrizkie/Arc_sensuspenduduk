<?php
  include 'header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Summary</h1>
</div>

<?php
include 'koneksi.php';
?>
	<table  class="table table-striped table-bordered " cellspacing="0" width="100%">
		<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Region Name</th>
			<th>Total Population</th>
			<th>Total Income</th>
			<th>Average</th>
			<th>Status</th>
		</tr>
		</thead>
		<?php
		$ambil=mysql_query("SELECT person.id, person.region_id, regions.id,regions.name, COUNT(id) as jumlah ,SUM(income) as total, AVG(income) as rata 
			FROM person INNER JOIN regions ON person.region_id=regions.id GROUP BY region_id");
		while ($data=mysql_fetch_array($ambil)) {
		?>
		<tr>
			<td><?php echo $data['region_id']?></td>
			<td><?php echo $data['name']?></td>
			<td><?php echo $data['jumlah']?> Orang</td>
			<td>Rp <?php echo number_format($data['total'], 0, ',', '.')?></td>
			<td>Rp <?php echo number_format($data['rata'], 0, ',', '.')?></td>
			<td>
			<?php 
			if($data['rata']<=1700000){
				echo '<h4 style="background-color:red;">merah</h4>';
			}elseif($data['rata']>=1700000 && $data['rata']<=2200000){
				echo '<h5 style="background-color:yellow;">kuning</h5>';
			}elseif($data['rata']>=2200000){
				echo '<h5 style="background-color:green;">hijau</h5>';
			}
			?>
			</td>
		</tr>
		<?php
		}
		?>
	</table>		


