<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AOU || miniproject</title>
<!--<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--extra-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('lock.jpg');background-repeat: no-repeat;background-position: center; background-size: cover;background-attachment: fixed;">

<!--<img src="123.jpg" style="width:400px;height:400px;">-->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#myModal" class="trigger-btn" data-toggle="modal">Faculty_login</a>
  <!--<a href="#">Security_login</a>
   <button type="button" data-toggle="modal" data-target="#myModal1">
                  Login Form
                </button>-->
                <a href="#my_Modal" data-toggle="modal" class="trigger-btn">security_login</a>
  <a href="https://rguktsklm.ac.in/" target="_blank">About</a>
  <img style="width:120px;height:120px;margin-top:130px;margin-left: 50px;" src="rgukt_logo.jpg">
  <h3 style="margin-left: 30px;">RGUKT SKLM</h3>
</div>

<div id="main">
  <h1>Rajiv gandhi university of knowledge technologies</h1>
  <h2>Srikakulam</h2>
  <button class="openbtn" onclick="openNav()">☰</button>  
  <h2>Automating Out-pass Updating System Using Face Recognization</h2>
</div>
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="userid.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Login</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">


<form action="security1.php" method="post">
          <div class="form-group">
            <!--<input type="text" class="form-control" name="username" placeholder="Username" required="required">-->
            <span class="input-icon"><i class="fa fa-user"></i></span>
<input type="email" name="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
           <!-- <input type="password" class="form-control" name="password" placeholder="Password" required="required"> -->
           <span class="input-icon"><i class="fas fa-key"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
          </div>
        </form>
</div>
</div>
</div>
</div> 
<!--modal-2-->
<div class="modal2">
<div class="modal fade" id="my_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                               <h3 class="title">login</h3>
                               <!-- <form action="" method="post">
                                <div class="form-group">
                                  <span class="input-icon"><i class="fa fa-user"></i></span>
                                  <input type="email" class="text-input" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <a href=""><button class="btn">Login</button></a>
                              </form>-->
                              <form action="security.php" method="post">
          <div class="form-group">
            <!--<input type="text" class="form-control" name="username" placeholder="Username" required="required">-->
            <span class="input-icon"><i class="fa fa-user"></i></span>
<input type="email" name="email" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
           <!-- <input type="password" class="form-control" name="password" placeholder="Password" required="required"> -->
           <span class="input-icon"><i class="fas fa-key"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
          </div>
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
