<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' type='text/css' href='../library/bootstrap/bootstrap.css'/>
<link rel='stylesheet' type='text/css' href='../library/bootstrap/style.css'/>
<title>SI Klinik - Admin</title>
</head>

<body>
<div class='container-fluid' style='margin-top:20px;'>
<?php include("navbar.php"); ?>
	<div class='row-fluid'>
	<?php include("sidebar.php"); ?>
    <div class="span9">
    <div class='well' fixed center;'>
		<b>Sistem Informasi Klinik</b>
		<p style='margin-top:10px'>

		<?php include ("pasien.php") ?>
	</div>
    </div>
</div>
</body>
</html>
