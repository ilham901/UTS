<!DOCTYPE html>
<html>
<head>
	<title>UTS Pemrograman Web 2</title>
	<style type="text/css">
		body {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<center>
		<form action="pemrograman2.php" method="get">
			<table>
				<tr>
					<td><label>Nama Wilayah</label></td>
					<td>
	                        <select name="wilayah">
	                            <option value="Jakarta">DKI Jakarta</option>
	                            <option value="Jawa Barat">Jawa Barat</option>
	                            <option value="Banten">Banten</option>
	                            <option value="Jawa Tengah">Jawa Tengah</option>
	                        </select>                               
	                    </td>
				</tr>
				<tr>
					<td><label>Jumlah Positif</label></td>
					<td><input type="number" name="positif"></td>
				</tr>
				<tr>
					<td><label>Jumlah Dirawat</label></td>
					<td><input type="number" name="dirawat"></td>
				</tr>
				<tr>
					<td><label>Jumlah Sembuh</label></td>
					<td><input type="number" name="sembuh"></td>
				</tr>
				<tr>
					<td><label>Jumlah Meninggal</label></td>
					<td><input type="number" name="meninggal"></td>
				</tr>
				<tr>
					<td><label>Nama Operator</label></td>
					<td><input type="text" name="operator"></td>
				</tr>
				<tr>
					<td><label>NIM</label></td>
					<td><input type="number" name="nim"></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="submit" value="Submit"></center></td>
				</tr>
			</table>
		</form>
	</center>	
</body>
</html>