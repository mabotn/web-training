<form action="#upload" method="post" enctype="multipart/form-data">
<br>
	<input type="file" name="image">
	<br><br>
	<button type="submit" name="sumit" value="UPLOAD">UPLOAD</button>
	<button type="submit" name="sumit3" value="Voir Image">Cacher les images</button>
	<button type="submit" name="sumit2" value="Voir Image">Voir Image</button>

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
			saveimage($name,$image);
			
		}

	}
	
	

	function saveimage($name,$image)
	{
		$con = mysqli_connect('localhost','root','','formation');
		$qry = "UPDATE produits SET image = '$image' WHERE id=8";
		$result = mysqli_query($con,$qry);
		if ($result) 
			echo "<br> Image Uploaded.";
		else
			echo "<br> Image not Uploaded.";


	}


	
?>
</div>