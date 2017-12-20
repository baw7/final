<!doctype html>
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
<?php
?>
<form action="index.php?page=accounts&action=updatePassword&id=<?php echo $data->id; ?> " method="post" id="form1">

<p><b>Enter your current password:</b></label>
<p><input type="text" name="currentPass" required>
<p><b>Enter new Password</b></label>
<p><input type="text" name="newPass1">
<p><b>Re-enter Password</b></label>
<p><input type="text" name="newPass2">
<p><button class="btn btn-primary" type="submit" form="form1" value="save">Update Password</button><a href="index.php?page=accounts&action=showProf">Cancel</a></div>

</form>

</body>

</html>
