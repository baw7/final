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

<center>

<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday"><br>
    Gender:  <input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female<br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Register Now">
</form>


</body>
</html>
