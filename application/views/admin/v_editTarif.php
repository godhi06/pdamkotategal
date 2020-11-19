<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tarif | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/admin/css/style.css'?>" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<style>
			body {
				font-family: 'Poppins', sans-serif;
				background: #fafafa;
			}
		</style>
    </head>
	</br></br>
		<?php foreach($tarif as $t){ ?>
		<form class="form-signin" action="<?php echo base_url().'Tarif/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Tarif</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $t->Id_Tarif ?>" readonly="readonly" />                  
			</div>     
			<div class="form-group">                            
				<label>Kelompok Pelanggan</label>
					<input type="text" class="form-control" id="klmpk" name="klmpk" value="<?php echo $t->Kelompok_Pelanggan ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Tarif I (1-10 M3 (Rp.))</label>
					<input type="number" min="0" class="form-control" id="trf1" name="trf1" value="<?php echo $t->Tarif_I ?>" />                  
			</div> 
			<div class="form-group">                            
				<label>Tarif II (1-10 M3 (Rp.))</label>
					<input type="number" min = "0" class="form-control" id="trf2" name="trf2" value="<?php echo $t->Tarif_II ?>" />                  
			</div> 
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	