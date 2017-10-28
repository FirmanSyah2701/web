<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
		<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">Aplikasi Apotek</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Barang <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="barang">Barang</a></li>
            <li><a href="input_barang">Input barang</a></li>
            <li><a href="lihat_barang">Lihat barang</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Penjualan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="penjualan">Penjualan</a></li>
            <li><a href="input_penjualan">Input Penjualan</a></li>
            <li><a href="lihat_penjualan.php">Lihat Penjualan</a></li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		<div class="container">
		<div class="row"></div>
		<div class="col-lg-offset-4 col-lg-4">
	<form action="">
		<input class="form-control" type="text" name="Kode_barang" placeholder="Kode Barang" required><br>
		<input class="form-control" type="text" name="Nama_barang" placeholder="Nama Barang" required><br>
		<input class="form-control" type="text" name="Jenis_barang" placeholder="Jenis Barang" required><br>
		<input class="form-control" type="text" name="Qty" placeholder="Qty" required><br>
		<input class="form-control" type="text" name="Harga" placeholder="Harga" required><br>
		<input type="submit" value="Ok" class="btn btn-primary">
		<input type="submit" value="Batal" class="btn btn-danger">
	</form>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>