<?php
require '_header.html';
?>
<form action="#upload" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br>

	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th>Value</th>
		</tr>
		<tr>
			<td>
				<label for="name">Name</label>
			</td>
			<td>
				<input type="text" name="name"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description">Description</label>
			</td>
			<td>
				<input type="text" name="description"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="categorie">Categorie</label>
			</td>
			<td>
				<input type="text" name="categorie"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="price">Price</label>
			</td>
			<td>
				<input type="text" name="price"><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="quantity">Quantity</label>
			</td>
			<td>
				<input type="text" name="quantity"><br>
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
			//saveimage($name,$image);

		}

		$name = $_POST['name'];
		$description = $_POST['description'];
		$categ = $_POST['categorie'];
		$price = $_POST['price'];
		$stock = $_POST['quantity'];

		$requeteSql = "INSERT INTO produits(name,description,categorie,price,stock,image) VALUES('$name','$description', '$categ', '$price','$stock','$image')";
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
