<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Pegawai | Admin</title>
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
		<?php foreach($pegawai as $d){ ?>
		<form class="form-signin" action="<?php echo base_url().'datPeg/update'; ?>" enctype="multipart/form-data" method="post">                   
			<div class="form-group">                            
				<label>ID Data Pegawai</label>
					<input type="text" class="form-control" id="id_info" name="id_info" value="<?php echo $d->Id_DataPegawai  ?>" readonly="readonly" />                  
			</div>                        
			<div class="form-group">                            
				<label>NIP</label>                            
					<input type="number" class="form-control" id="nip" name="nip" value="<?php echo $d->NIP?>" placeholder="Nomor Induk Pegawai" required>                        
			</div>                        
			<div class="form-group">                           
				<label>Nama Pegawai</label>
					<input type="text" class="form-control" id="nm" name="nm" value="<?php echo $d->Nama_pegawai ?>" placeholder="Nama Pegawai" required>                  
			</div>                        
			<div class="form-group">                            
				<label>Jabatan</label>                            
					<input type="text" class="form-control" id="jbtn" name="jbtn" value="<?php echo $d->Jabatan ?>" placeholder="Jabatan" required>                                       
			</div>
			<div class="form-group">                            
				<label>Foto Pegawai</label>                            
					<input type="file" class="form-control" id="ft" name="ft" value="<?php echo $d->Foto_pegawai ?>" placeholder="Foto Pegawai">     
					<input type="hidden" name="old_image" value="<?php echo $d->Foto_pegawai ?>" />
			</div>
			<button type="submit" class="btn btn-primary" id="btn-simpan" style="width: 100%;" >Submit</button>
		<?php } ?>    								
		</form>
	
	
	<!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	