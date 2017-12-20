<!doctype html>

<html>
<head>
	<style>
  nav { 
	 margin-top:25px;
	float:left;
} 

body
{
background-color: #EBF5FB;
font-family: verdana;
font-size:9px;
}

h3
{
font-family: verdana;
font-size:9px;
}

h4
{
font-family: verdana;
font-size:9px;
}

h1
{
font-family: verdana;
font-size:11px;
}

h2
{
font-family: verdana;
font-size:11px;
}
	
header .row {
padding: 10px 25px 25px 10px;
font-weight:bold;
}

td, th {	padding: 6px; }

tr {
    font-size: 12px;
	border:none;
}
tr th { border-bottom:#ccc 1px solid;  }
tr:nth-child(odd) {
    background-color: white;
}

button.edit {
    padding: 6px 12px 6px 12px;
    background-color: grey;
    color: grey;
}

button.edit:hover {
    padding: 6px 12px 6px 12px;
    background-color: grey;
    color: white;
}
button.delete:hover {
    background-color: yellow;
    color: white;
}
#contact {
	padding:35px;
	background-color:white;
}
footer {
	margin-top:75px;
	
}

div#field {
    margin-bottom: 10px;
}
#updateForm input {
    margin-bottom: 18px;
}
	</style>
</head>
<body>

<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>


<?php
print_r($data);
?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>


</body>
</html>
