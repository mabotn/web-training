<?php 
require '_header.html';
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style type="text/css">
	.mdl-textfield{
		margin-left: 20px
	}
	table {
		right: 0;
		left: 0;
		margin: auto;
		margin-top: -180px;
		margin-bottom: 50px
	}
</style>
<form action="#upload" method="post" enctype="multipart/form-data">
<br><br><br><br><br><br><br>
	
	<br><br>
	<table>
		<tr>
			<th>Label</th>
			<th class="mdl-textfield">Value</th>
		</tr>
		<tr>
			<td>
				<label for="name">Name</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="name">
				  <label class="mdl-textfield__label" for="name">name...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="description">Description</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="description">
				  <label class="mdl-textfield__label" for="description">Description...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="categorie">Categorie</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="categorie">
				  <label class="mdl-textfield__label" for="categorie">Categorie...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="price">Price</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="price">
				  <label class="mdl-textfield__label" for="price">Price...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="quantity">Quantity</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="text" name="quantity">
				  <label class="mdl-textfield__label" for="quantity">Quantity...</label>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="image">Image</label>
			</td>
			<td>
				<div class="mdl-textfield mdl-js-textfield">
				  <input class="mdl-textfield__input" type="file" name="image">
				  <label class="mdl-textfield__label" for="image">Image...</label>
				</div>
			</td>
		</tr>
		<tr><td></td><td><button type="submit" name="sumit" value="UPLOAD" class="btn btn-default btn-block">UPLOAD</button></td></tr>
	</table>

	
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