<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WarmGreet</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function cek(form)
	{
		if(form.name.value == "")
		{
			document.getElementById('err').innerHTML = 'Please Fill Your Name';
			form.name.focus();
    		return (false);
		}
		else if(form.email.value=="")
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
		return (true);
	}
</script>

</head>

<body>
	<!--Mulai Header-->
	<div id="headerindex">
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
                <?php
            	if(!isset($_SESSION['username']))
				{
					?>
            <a href="merchant-Profile.php">PROFILE</a>
            <?php 
				} 
				else
				{ ?>
				 <a href="Sign-in.php">SIGN IN</a>
				<?php } ?>   
            </div>
            </div></center>
            <?php
            	if(!isset($_SESSION['username']))
				{
					?>
            <a href="merchant-Profile.php"><div id="Logoprofile"><center>LOGO PROFILE</center></div></a>
            <?php 
				} 
				else
				{ echo "aaa";}
			?>    
			       
        </div>
        <div class="Title">
        	<center><h1>
            	Warm Greet
            </h1>
            <h2>
            	Get A Warm Greet From The Worlds
            </h2></center>
        </div>
        <div>
        	<center>
            	
            	<form action="doRegist.php" method="post" onsubmit="return cek(this)">
                	<input type="text" name="name" class="form-control" placeholder="Your Name" style="width:350px; margin-top:20px;">                    
                	<input type="email" name="email" class="form-control" placeholder="Your Email" style="width:350px; margin-top:10px;">                    
                    <input type="password" name="password" class="form-control" placeholder="Your Password" style="width:350px; margin-top:10px;">
                    <div id="err" style="font-size:22px; color:#F00; margin-top:10px;"><?php 
					if(isset($_SESSION['err']))
					{
						echo $_SESSION['err'];
						unset($_SESSION['err']);
					}
					else
					{
						echo "";
					}
					?></div>	
                    <button type="submit" class="btn btn-success" style="width:350px;margin-left:5px; margin-top:20px;">Get Started</button>
                </form>
            </center>
        </div>
    
    </div>
    <!--Akhir Header-->

    <!--Mulai Konten-->
	<center>
    	<div class="contain">
        	<div id="subtitle">
                <h1 class="titlecontain">
                    Warm Greet Is Your Place To Share Everything
                </h1>
                <h3 class="titlecontain">
                	It's comfortable, reasonable, and valuable to share Your day with Your Friends
                </h3>
            </div>
            <div style="width:750px;height:1px;background-color:#CCC; margin-top:30px">
            	  <!--Garis b"@"as-->          
            </div>
            
            <div class="maincontain">
        		
                <div id="main1">
                	<!--Gambar1-->
                </div>
                
                <div id="main2">
                	<!--K"@"a-k"@"a-->
                </div>
                
                <div id="main3">
                	<!--Gambar2-->
                </div>
                
        	</div>
    		
            <div style="width:750px;height:1px;background-color:#CCC; margin-top:30px">
            	  <!--Garis b"@"as-->          
            </div>
            
            <div style="margin-bottom:20px;">
            	<h3 class="containbottom">
					Warm Greet is available for free for iPhone, iPad, Android, and Kindle Fire.
                </h3>
                
                <div class="iconfree">
                	<center>
                        <div class="containfree">
                            <div id="free1">
                            
                            </div>
                                                                    
                            <div id="free2">
                            
                            </div>
                                                                    
                            <div id="free3">
                            
                            </div>
                        </div>
                    </center>
                </div>
                
            </div>
            
        </div>               
    </center>
    <!--Akhir konten-->
    
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