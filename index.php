<html>
<?php
	$con=mysqli_connect("35.233.11.254","root","admin","Pokemon");
	$records=mysqli_query($con,"select * from pokelist");
		echo "<table border='1'>";

	
	
	
?>

<br>
<br>
<br>
<br>


<form action="dataentry.php" method="post">
	Search a pokemon by name:<input name="search"><br>
	
	<input type="submit"><br>
</form>


<form action="delete.php" method="post">
	Delete a pokemon by name:<input name="search"><br>
	
	<input type="submit"><br>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<form action="insert.php" method="post">
	<u>Insert a new pokemon, make sure to put the # before the number</u><br><br>
	Number:<input name="num"><br>
	Name:<input name="name"><br>
	Type1:<input name="type1"><br>
	Type2:<input name="type2"><br>
	Generation:<input name="gen"><br>
	Legendary:<input name="leg"><br>
	<input type="submit"><br>

</form>	

<br>
<br>
<br>
<br>
<form action="Update.php" method="post">
	<u>Update a pokemon's values by specifying a the pokemon number, put # before the number</u><br><br>
	Number:<input name="num"><br>
	Name:<input name="name"><br>
	Type1:<input name="type1"><br>
	Type2:<input name="type2"><br>
	Generation:<input name="gen"><br>
	Legendary:<input name="leg"><br>
	<input type="submit"><br>

</form>	
</html>
