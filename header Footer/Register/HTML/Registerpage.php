<!DOCTYPE html>
<html>
    <head>
        <title>WayWe Register</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../CSS/register.css">
    
	    <style>
        body
        {
        background-image: url('bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
        }
        </style>
	
	
   </head>
        <body>
		
	           
		
            <header>
                <img src="../Images/waywe.png" class="logo"  alt="Logo">
                <h3 class="font1" style="color: black; top: 30px; position: absolute;  left:-50px;">App</h3>
                <button onclick="document.location='../AccType/log.html'" class="log-reg-btn"
            style="position: absolute; top: 95px; right: 250px; background-color: #333;"><span>Login</span></button>
        <button onclick="document.location='../AccType/reg.html'" class="log-reg-btn"
            style="position: absolute; top: 95px; right: 110px; background-color: #0276bd"><span>Register</span></button>
        <a href="#"><img src="../Images/user-1648810-1401302.png" class="user" alt="user" style="position: absolute; top: 85px; right: 10px"></a>

        
        <div class="menu-bar">
			<a href="#">Home</a>
			<a href="#">Best Products</a>
			<a href="#">New Releases</a>
            <a href="#">Categories</a>

            <!-- search bar -->
                <button type="submit" class="search-btn"><img src="../Images/search_icon.jpg" style="width: 26px; height: 26px;"></button>
                <input type="text" name="search" placeholder="Search Here...">
               <!-- search bar end -->
			  </div>
			</div>
		</div> 
            </header>
 <form>
     <img id="img" src="apps.jpeg" height="90%" width="40%" align="right">
     <div class="Formcontain">
	 <form action="Registerpage.html" method="post"
         <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
           <hr>
              <label for="firstname"><b>First Name</b></label><br>
	          <input type="text" placeholder="Enter First name" name="fname" required>
	          <br>
              <label for="lastname"><b>Last Name</b></label><br>
	          <input type="text" placeholder="Enter Last name" name="lname" required>
	          <br>
              <label for="email"><b>Email</b></label><br>
              <input type="text" placeholder="Enter Email" name="eml" required>
	          <br>
              <label for="psw"><b>Password</b></label><br>
              <input type="password" placeholder="Enter Password" name="pwd" required>
	          <br>
              <label for="psw-repeat"><b>Repeat Password</b></label><br>
              <input type="password" placeholder="Repeat Password" name="Rpwd" required>
           <hr>

      <p>
          By creating an account you agree to our <a href="#">
           Terms & Privacy</a>
      </p>
           <br><br><br><br><br><br>
             <div class="signin">
                 <p>Already have an account? <a href="loginpage.html">Sign in</a>.</p>
             </div>
   
                 <br>
	
	              <button type="submit" class="regbtn">Register</button>
 
                        </div>
   
 </form>


        <footer  class="footer">
            <img src="../Images/payment-method.png" class="pay-method">
            <div class="inner-footer">
                <div class="social-links">
                    <ul>
                    <li class="social-items"><a href="#"><img src="../Images/twitter.png" height="30px" width="30px" ></a></li>
                    <li class="social-items"><a href="#"><img src="../Images/facebook.png" height="30px" width="30px" ></a></li>
                    <li class="social-items"><a href="#"><img src="../Images/instagram.png" height="30px" width="30px" ></a></li>
                    <li class="social-items"><a href="#"><img src="../Images/linkedin.png" height="30px" width="30px" ></a></li>
                    </ul>
                
            </div><br>
            <div class="quick-links">
                <ul>
                    <li class="quick-items"><a href="#">Home</a></li>
                   
                    <li class="quick-items"><a href="#">Contact us</a></li>
                    <li class="quick-items"><a href="#">About us</a></li>
                    <li class="quick-items"><a href="#">Services</a></li>
                </ul>
            </div>
            </div>

            <div class="outer-footer">
                Copyright &copy;2021 WayWe App.All Right Reserved
            </div>
        </footer>
        </body>
</html>