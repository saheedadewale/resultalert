<!DOCTYPE html>
<html>
<head>
	<title>::Result Alert System</title>
<!--bootstrap cdn -->
<?php include_once 'siteHead.php' ?>

<style type="text/css">
	body{
		
	}
	
	/*******/
	
  .jumbotronSection{
      height: 400px;
      background-color: transparent;
        }
      
   
 .col-lg-3{
     padding-top: 10px;
 }
.col-lg-3:hover{
    border: 1px solid green;
    box-shadow: 3px 3px green;
    cursor: pointer;
}
.main-content{
	background-image: url('images/nacomes.jpeg');
		
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;

}
</style>
</head>
<body>
	<p class="text-center"><img src="images/logo1.png" style="margin-top: 20px;"></p>
	<br>
	<br>
	<main class="main-content">
		<div class="container">
			<div class="jumbotron jumbotronSection">
		<div class="row">
			<div class="col-lg-3">
				
			</div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
               <a href="loginAdmin.php"> <img src="images/acct.png">
                <strong>Administrator</strong>
                <p>An Administartor/Coordinator should click on this link</p>
               </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                   <a href="lecturerLogin.php"> <img src="images/form.png">
                    <strong>Lecturer/Technologist</strong>
                    <p>A registered Lecturer/Technologist  should click this link</p>
                </a>
            </div>
           
            
        </div>
			</div>
		</div>
	</main>




<footer>
	<p class="text-center"> &copy; 2019 | Developed By Michael and Mathew</p>
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jqueryFile.js"></script>
</body>
</html>
