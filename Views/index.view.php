<?php include("header.view.php")?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<ul style="height: 900px;">
<?php foreach ($goods as $key => $value) {?>
	<li><?php echo $value-> title ?></li>
<?php }?>
</ul>

<?php include("footer.view.php")?>