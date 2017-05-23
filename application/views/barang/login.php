<head>
	<meta charset="UTF-8">

	<title>Mirella Jaya Delivery</title>
	
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">

</head>

<body>
<form method="post" action="<?php echo base_url().'barang/login'?>">

  <div class="login-form">
     <h1>Mirella Jaya</h1>
     <div class="form-group ">
       <input type="text" name="username" class="form-control" placeholder="Username " id="UserName">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="pass" class="form-control" placeholder="Password" id="Passwod">
       <i class="fa fa-lock"></i>
     </div>
		<span class="alert">Invalid Credentials</span>
		<a class="link" href="#">Lost your password?</a>
		<button type="submit" class="log-btn" value="LOGIN">Log in</button>
		
         
	
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/indek.js"></script>

</form>
</body>