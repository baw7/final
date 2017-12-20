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


<form action="index.php?page=tasks&action=updateTask&id=<?php echo $data->id ?>" method="POST">
    Owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail ?>"><br>
    Owner id: <input type="text" name="ownerid" value="<?php echo $data->ownerid ?>"><br>
    Created date: <input type="text" name="cdate" value="<?php echo $data->createddate ?>"><br>
    Due date: <input type="text" name="ddate" value="<?php echo $data->duedate ?>"><br>
    Message: <input type="text" name="message" value="<?php echo $data->message ?>"><br>
    isdone: <input type="text" name="isdone" value="<?php echo $data->isdone ?>"><br>
    <br>
    <button type="submit">Update</button>
</form>
=
</body>
</html>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id ?>" method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
