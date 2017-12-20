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

<form action="index.php?page=tasks&action=create" method="post">
        Owner Email: <input type="text" name="owneremail" value="<?php echo $data->owneremail ?>"><br/>
        Owner ID: <input type="text" name="ownerid" value="<?php echo $data->ownerid ?>"><br/>
        Create Date: <input type="text" name="createddate"><br/>
        Due Date: <input type="text" name="duedate"><br/>
        Message: <input type="text" name="message"><br/>
        Is Done: <input type="text" name="isdone"><br/><br>

        <button type="submit" id="create">Add</button>
    </form>


</body>
