<html>
<head>
	<title>About</title>
	<link rel="stylesheet" href="style.css">
</head>

		<center><img src="kc.png" width="100px" alt=""></center>
		<h1 class="title">Karimganj College</h1>
		<?php 
			include('navbar.html');
        ?>
		<div class="inner-box" align="center">
     
                    <h3 style="color: #500; padding-top: 30px">
                        We would love to hear from you.
                    </h3><br><br><br>
                    
                    <h2>
                        Contact us by:
                    </h2><br>
                    <img src="email-13765.png" width="100" height="100" alt="email" onclick="mail();"/>
                    <a href="https://www.facebook.com/murshedahmed.khan.5/" style="padding-left: 30px; padding-right: 30px; padding-top: 20px">
                        <img src="facebook-logo-493.png" width="100" height="100" alt="facebook" />
                    </a>
                    <a href="https://twitter.com/murshed_4hmed">
                        <img src="twitter-logo-png-5859.png" width="100" height="100" alt="twitter"/>
                    </a><br>
                    <p id="msg" style="color: #500; font-size: large"></p>

                    
                    <footer align="center" style=" padding-top: 50px; padding-bottom: 20px; font-family: monospace; color: gray">
                        This site is developed by MURSHED AHMED[&copy 2020 Karimganj College]
                    </footer>
                    
                    <script>
                        function mail(){
                            document.getElementById("msg").innerHTML="Mail us at : murshed4400@gmail.com";
                        }
                    </script>
		</div>
</body>
</html>

