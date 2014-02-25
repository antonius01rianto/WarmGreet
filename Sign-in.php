<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WarmGreet-login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	function cek(form)
	{
		if(form.email.value == "")
		{
			document.getElementById('err').innerHTML = 'Please Fill Your Email';
			form.email.focus();
    		return (false);
		}
		else if(!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(form.email.value))
		{
			document.getElementById('err').innerHTML = 'Your Email is not Valid';
			form.email.focus();
    		return (false);
		}
		else if(form.password.value == "")
		{
			document.getElementById('err').innerHTML = 'Please Fill Your Password';
			form.password.focus();
    		return (false);
		}
		return (true);
	}
</script>

</head>

<body>
	<!--Mulai Header-->
	<div id="headerindex" style="min-height:593px;">
    	<div id="topline">
        
        </div>
    	<div id="menu">
			<center><div class="containmenu">            
                <div class="menuname">
                    <a href="values.php">VALUES</a>
                </div>
                <div class="menuname">
                    <a href="Stories.php">STORIES</a>
                </div>
                <div class="menuname">
                    <a href="#">JOBS</a>
                </div>
                <div class="menuname">
                    <a href="blog.php">BLOG</a>
                </div>
                <div class="menuname">
                    <a href="Sign-in.php" style="color:#FFF">SIGN IN</a>
                </div>
            </div></center>           
        </div>
        <div class="Title">
        	<center>
            	<div class="back">
                    <h1>
                        <a href="index.php">Warm Greet</a>
                    </h1>
                </div>
            
            <h2>
            	Let's Give A Warm Greet Together
            </h2></center>
        </div>
        <div>
        	<center>
            	<form action="doLogin.php" method="post" onsubmit="return cek(this)">
                	<input type="text" name="email" placeholder="Your Email" id="inputemail" style="" /><br/>
                    <input type="password" name="password" placeholder="Password" id="inputname" /><br/>
										
                    <input type="submit" value="Get Started" id="submitStart" />
                </form>
				
				<div id="err" style="font-size:22px;">
				<?php 
					if(isset($_SESSION['err']))
					{
						echo $_SESSION['err'];
						unset($_SESSION['err']);
					}
					else
					{
						echo "";
					}
					?>
				</div>
                
                <p class="SigninBottom">
                	<a class="forgotpassword" href="#">Forgot your password?</a><br />
                    Don't Have ID? <b><a class="SigninBottom" href="index.php">Get started here.</a></b>
                </p>
                
            </center>
        </div>
    
    </div>
    <!--Akhir Header-->

    <!--Mulai Footer-->
    <div id="footer">
    	<div id="containfooter">
        	<center>
                <div class="textfooter">Warmgreet &copy; 2014</div>
                <div class="textfooter"><a href="#">Support</a></div>
                <div class="textfooter"><a href="#">Privacy</a></div>
                <div class="textfooter"><a href="#">Terms</a></div>
                <div class="textfooter"><a href="#">Developer</a></div>
                <div class="textfooter"><a href="#">Press</a></div>
            </center>
        </div>

    </div>    
    <!--Akhir Footer-->
        


</body>
</html>
