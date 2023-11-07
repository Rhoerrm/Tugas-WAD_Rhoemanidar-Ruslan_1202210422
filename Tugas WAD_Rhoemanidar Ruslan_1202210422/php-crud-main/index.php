<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Create</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enter name">
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>

		   <div class="form-group">
		     <label for="id_pelanggan">id_pelanggan</label>
		     <input type="id_pelanggan" 
		           class="form-control" 
		           id="id_pelanggan" 
		           name="id_pelanggan" 
		           value="<?php if(isset($_GET['id_pelanggan']))
		                           echo($_GET['id_pelanggan']); ?>" 
		           placeholder="Enter id_pelanggan">
		   </div>

		   <div class="form-group">
		     <label for="alamat">alamat</label>
		     <input type="alamat" 
		           class="form-control" 
		           id="alamat" 
		           name="alamat" 
		           value="<?php if(isset($_GET['alamat']))
		                           echo($_GET['alamat']); ?>" 
		           placeholder="Enter alamat">
		   </div>

		   <div class="form-group">
		     <label for="telepon">telepon</label>
		     <input type="telepon" 
		           class="form-control" 
		           id="telepone" 
		           name="telepon" 
		           value="<?php if(isset($_GET['telepon']))
		                           echo($_GET['telepon']); ?>" 
		           placeholder="Enter telepon">
		   </div>

		   <div class="form-group">
		     <label for="barang">barang</label>
		     <input type="barang" 
		           class="form-control" 
		           id="barang" 
		           name="barang" 
		           value="<?php if(isset($_GET['barang']))
		                           echo($_GET['barang']); ?>" 
		           placeholder="Enter barang">
		   </div>
		   
		   <div class="form-group">
		     <label for="tanggal_lahir">tanggal_lahir</label>
		     <input type="tanggal_lahir" 
		           class="form-control" 
		           id="tanggal_lahir" 
		           name="tanggal_lahir" 
		           value="<?php if(isset($_GET['tanggal_lahir']))
		                           echo($_GET['tanggal_lahir']); ?>" 
		           placeholder="Enter tanggal_lahir">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>