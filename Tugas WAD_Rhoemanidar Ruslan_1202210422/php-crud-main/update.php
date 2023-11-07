<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
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
		           value="<?=$row['name'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

		   <!-- <div class="form-group">
		     <label for="id_pelanggan">id_pelanggan</label>
		     <input type="id_pelanggan" 
		           class="form-control" 
		           id="id_pelanggan" 
		           name="id_pelanggan" 
		           value="<?=$row['id_pelanggan'] ?>" >
		   </div> -->
		   
		   <div class="form-group">
		     <label for="alamat">alamat</label>
		     <input type="alamat" 
		           class="form-control" 
		           id="alamat" 
		           name="alamat" 
		           value="<?=$row['alamat'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="telepon">telepon</label>
		     <input type="telepon" 
		           class="form-control" 
		           id="telepon" 
		           name="telepon" 
		           value="<?=$row['telepon'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="barang">barang</label>
		     <input type="barang" 
		           class="form-control" 
		           id="barang" 
		           name="barang" 
		           value="<?=$row['barang'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="tanggal_lahir">tanggal_lahir</label>
		     <input type="tanggal_lahir" 
		           class="form-control" 
		           id="tanggal_lahir" 
		           name="tanggal_lahir" 
		           value="<?=$row['tanggal_lahir'] ?>" >
		   </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id_pelanggan']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>