<!doctype html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
        <input type="password" placeholder="Enter Password" name="pass" required>
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
