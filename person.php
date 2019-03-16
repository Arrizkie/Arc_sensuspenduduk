<?php
  include 'header.php';
?>
<?php
include 'koneksi.php';
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list':
	?>
<h1 class="wow animated fadeInDown">Add Persons</h1>
<form method="GET" action="input_person.php">
								 <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Name*" name="person_name" id="person_name" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
			<div class="col-dm-6">
			<select name="region_id" class="form-control" placeholder="Name*">
				<?php
				$ambil=mysql_query("SELECT * FROM regions");
				?>
			    <option value="">Choose Your Region</option>
			    <?php
				while ($data=mysql_fetch_array($ambil)){
				echo "<option value='$data[id]'>$data[name]</option>";
				}?>
			</select>
			</div>
			</div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Address*" name="address" id="address" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Income*" name="income" id="income" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="date" class="form-control" placeholder="Date *" name="created_at" id="created_at" required data-validation-required-message="Please enter your phone number.">
	                                    <p class="help-block text-danger"></p>
	                            <div class="form-group">
	                            	<div class="col-md-3">
               <input type="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Save"/>
              <p class="help-block text-danger"></p>
            </div>
         </div>
         </div>
			</section>
</script>
</form>
    </head>
</body>
         </div>
         </div>
     </div>
<?php
include 'koneksi.php';
?>
	<table  class="table table-striped table-bordered " cellspacing="0" width="100%">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Region</th>
			<th>Addres</th>
			<th>Income</th>
			<th>Created</th>
			 <th style="width:175px;">Action</th>
		</tr>
		</thead>
<?php
		$ambil=mysql_query("SELECT * FROM person ORDER BY id");
		while ($data=mysql_fetch_array($ambil)) {
		?>
		<tr>
			<td><?php echo $data['id']?></td>
			<td><?php echo $data['person_name']?></td>
			<td><?php echo $data['region_id']?></td>
			<td><?php echo $data['address']?></td>
			<td><?php echo $data['income']?></td>
			<td><?php echo $data['created_at']?></td>
			<td><a href=\"edit_person.php?id=$data[id]\">Edit</a> | 
              <a href=\"hapus_person.php?id=$data[id]\">Delete</a></td> 
			</td>
		</tr>
		<?php
		}
		?>
	</table>
    </head>
</body>

		</section>
	</section>
<?php
	break;
}
?>
