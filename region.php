<?php
  include 'header.php';
?>

<h1 class="wow animated fadeInDown">List of Regions</h1>
						<p class="wow animated fadeInLeft">You can add a new regions or do some updates.</p>
				<form method="GET" action="input_region.php">
								 <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Region's Name *" name="name" id="name" required data-validation-required-message="Please enter your email address.">
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
</form>
</section>
</script>
 
 
         
<?php
include 'koneksi.php';
?>
	<table  class="table table-striped table-bordered " cellspacing="0" width="100%">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama Daerah</th>
			<th>Created at</th>
			 <th style="width:175px;">Action</th>
		</tr>
		</thead>
<?php
		$ambil=mysql_query("SELECT * FROM regions ORDER BY id");
		while ($data=mysql_fetch_array($ambil)) {
		?>
		<tr>
			<td><?php echo $data['id']?></td>
			<td><?php echo $data['name']?></td>
			<td><?php echo $data['created_at']?></td>
			<td><a href=\"edit_region.php?id=$data[id]\">Edit</a> | 
              <a href=\"hapus_region.php?id=$data[id]\">Delete</a></td> 
			</td>
		</tr>
		<?php
		}
		?>
	</table>
    </head>
</body>

	
