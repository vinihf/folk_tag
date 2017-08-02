<html lang='en'>
<head>
<title>Tag the image</title>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script>
	function validate(form){
		if(form.tag.value==""){
			alert("Insert a tag");
			return false;
		}
		return true;
	}
</script>
</head>
<body>
<?php
	include_once "db/MySQL.class.php";
	$conn = new MySQL();
	$sql = "select * from image where id = 2";
	$image = $conn->search($sql);
?>
<div class='container-fluid'>
<div class='row'>
<div class='col-md-4 col-md-offset-4'>
<h2>Tag the image below:</h2>
<form method="post" action="create.php" onsubmit="return validate(this);">
<input type="text" name="tag">
<input type="hidden" name="image" value=2>
<input type="submit" name="Send" value="Send">
</form>
</div>
</div>
<div class='row'>
<div class='col-md-4 col-md-offset-4'>
<?php
echo "<img style='height:450px;width:auto;' class='img-thumbnail' src=img/".$image[0]['src'].">";
?>
</div>
</div>
</div>
</body>
</html>