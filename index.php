<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="sytle.css">
</head>
<body>
	<h1>BEHIND THE WHEEL</h1>
	<h3><marquee>PREPARING YOU FOR THE HIGHWAY OF LIFE! </marquee></h3>
      <form action="login.php" method="post">
       	<H2>LOGIN</H2>
       	<?php if (isset($_GET['error'])) { ?>
       		<p class="error"><?php echo $_GET['error']; ?></p>
       	<?php } ?>
       	<label>User Name </label>
       	<input type="text" name="uname" placeholder="User Name"><br>
       	<label>Password</label>
       	<input type="password" name="password" placeholder="Password"><br>
       	<button type="submit">LOGIN</button>
      </form>
</body>
</html>