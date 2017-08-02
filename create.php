<?php
include_once "db/MySQL.class.php";
$conn = new MySQL();
$sql = "insert into tag_image(image,tag) values(".$_POST['image'].",'".$_POST['tag']."')";
$conn->execute($sql);
?>
<script>
alert("Thank you!");
window.location = "index.php";
</script>