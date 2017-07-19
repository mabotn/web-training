<?php 
require '_header.html';
?>
<form action="#upload" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br>
	
<center><h1>Upload Category into Database</h1></center>

	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th>Value</th>
		</tr>
		<tr>
			<td>
				<label for="nom">Name</label>
			</td>
			<td>
				<input type="text" name="nom"><br>
			</td>
		</tr>

		<tr>
			<td>
				<label for="image">Image</label>
			</td>
			<td>
				<input type="file" name="image"><br>
			</td>
		</tr>

	</table>

	<button type="submit" name="sumit" value="UPLOAD">UPLOAD</button>

</form>

<div id="upload">
<?php 

	if(isset($_POST['sumit']))
	{
		if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
			echo "Please select an image.";
		else
		{
			$image = addslashes($_FILES['image']['tmp_name']);
			$name = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			//saveimage($name,$image);
			
		}

		$name = $_POST['nom'];
		
		$requeteSql = "INSERT INTO type(nom,image) VALUES('$name','$image')";
		$DB->update($requeteSql);
	}
	
	/*function saveimage($name,$image)
	{
		$con = mysqli_connect('localhost','root','','formation');
		$id1 = $DB->query()
		$qry = "UPDATE produits SET image = '$image' WHERE id=";
		$result = mysqli_query($con,$qry);
		if ($result) 
			echo "<br> Image Uploaded.";
		else
			echo "<br> Image not Uploaded.";


	}*/
	

	


	
?>
</div>