<!doctype html>
<head>
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
</head>
<html>
<body>


<h1><center>
    <?php
    echo $data['site_name'];
    ?> </h1>

<center>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>
<br>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </div>
    </div>



</form>
<h4><a href="index.php?page=accounts&action=register">New? Register Here</a></h4>

    
<h4><a href="index.php?page=accounts&action=all"> All Accounts</a></h4>
<h4><a href="index.php?page=tasks&action=all"> All Tasks</a></h4>
 
</body>
</html>
