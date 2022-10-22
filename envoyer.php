
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realisation de CV</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style_css.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
        .icon{
            color:#03a9f4;
        }
    </style>
    
    
            
    
      <div class="container">
        <div class="left-side">
            <div class="profiletext">
                <div class="imgBx">
                <?php echo $_POST["image"] ,"<br>";?>
                </div>
                <h2><?php echo $_POST["name"] ,"<br>";?><span><?php echo $_POST["profession"] ,"<br>";?></span></h2>
            </div>
            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon" ><i class="fab fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $_POST["telephone"] ,"<br>";?></span>
                    </li>
                    <li style="width:250px;">
                        <span class="icon" ><i class="fab fa fa-envelope"></i></span>
                        <span class="text"><?php echo $_POST["email"] ,"<br>";?></span>
                    </li>
                    <li>
                        <span class="icon" ><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $_POST["city"] ,"<br>";?></span>
                    </li>
                  
                </ul>
            </div>
            <div class="contactInfo_education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <h5><?php echo $_POST["date1"] ,"<br>";?></h5>
                        <h4><?php echo $_POST["dip1"] ,"<br>";?></h4>
                        <h4><?php echo $_POST["uni1"] ,"<br>";?></h4>
                       
                    </li>
                    <li>
                        <h5> <?php echo $_POST["date2"] ,"<br>";?></h5>
                        <h4><?php echo $_POST["dip2"] ,"<br>";?></h4>
                        <h4><?php echo $_POST["uni2"] ,"<br>";?></h4>
                    </li>
                    <li>
                        <h5> <?php echo $_POST["date3"] ,"<br>";?></h5>
                        <h4><?php echo $_POST["dip3"] ,"<br>";?></h4>
                        <h4><?php echo $_POST["uni3"] ,"<br>";?></h4>
                    </li>
                </ul>
            </div>
            <div class="contactInfo_language">
                <h3 class="title">Language</h3>
                <ul>
                    <li>
                        <span class="text"><?php echo $_POST["lang1"] ,"<br>";?></span>
                        <span class="percent"><div <?php echo 'style="width:',$_POST["range11"] ,'%;"';?>></div></span>
                    </li>
                    <li>
                        <span class="text"><?php echo $_POST["lang2"] ,"<br>";?></span>
                        <span class="percent"><div <?php echo 'style="width:',$_POST["range12"] ,'%;"';?>></div></span>
                    </li>
                    <li>
                        <span class="text"><?php echo $_POST["lang3"] ,"<br>";?></span>
                        <span class="percent"><div <?php echo 'style="width:',$_POST["range13"] ,'%;"';?>></div></span>
                    </li>                    
                </ul>
                <div class="QR">
                    
                    <h5  class="title" ><br><pre>Scan the code to see my GitHub</pre></br></h5>
                    <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                    <img src="qr-code (1).png" class="img">
                  
                </div>

         </div>
        </div>
        <div class="right-side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p><?php echo $_POST["story"] ,"<br>";?></p>
                <div class="skills">
                    <h2 class="title2">Skills</h2>
                   
                    <div class="box">
                        <h4><?php echo $_POST["Skill1"] ,"<br>";?></h4>
                        <div class="percent"><div  <?php echo 'style="width:',$_POST["range1"] ,'%;"';?>></div></div>
                    </div>
                    <div class="box">
                        <h4><?php echo $_POST["Skill2"] ,"<br>";?></h4>
                        <div class="percent"><div  <?php echo 'style="width:',$_POST["range2"] ,'%;"';?>></div></div>
                    </div>
                    <div class="box">
                        <h4><?php echo $_POST["Skill3"] ,"<br>";?></h4>
                        <div class="percent"><div  <?php echo 'style="width:',$_POST["range3"] ,'%;"';?>></div></div>
                    </div>
                    <div class="box">
                        <h4><?php echo $_POST["Skill4"] ,"<br>";?></h4>
                        <div class="percent"><div  <?php echo 'style="width:',$_POST["range4"] ,'%;"';?>></div></div>
                    </div>
                    <div class="box">
                        <h4><?php echo $_POST["Skill5"] ,"<br>";?></h4>
                        <div class="percent"><div <?php echo 'style="width:',$_POST["range5"] ,'%;"';?>></div></div>
                    </div>
                    <div class="box">
                        <h4><?php echo $_POST["Skill6"] ,"<br>";?></h4>
                        <div class="percent"><div  <?php echo 'style="width:',$_POST["range6"] ,'%;"';?>></div></div>
                    </div>
                  

            </div>
      </div>
      <div class="interest">
        <h2 class="title2">Personality</h2>
        <ul>
            <li><?php echo $_POST["pers1"] ,"<br>";?></li>
            <li><?php echo $_POST["pers2"] ,"<br>";?></li>
            <li><?php echo $_POST["pers3"] ,"<br>";?></li>
            <li><?php echo $_POST["pers4"] ,"<br>";?></li>
        </ul>
      </div> 
      <div class="interest">
        <h2 class="title2"><br><pre>Hobbies</pre></h2>
        <ul>
            <li><?php echo $_POST["hobb1"] ,"<br>";?></li>
            <li><?php echo $_POST["hobb2"] ,"<br>";?></li>
            <li><?php echo $_POST["hobb3"] ,"<br>";?></li>
            <li><?php echo $_POST["hobb4"] ,"<br>";?></li>
        </ul>
      </div> 
      <div class="interest">
        <h2 class="title2"> <br><pre>Interest</pre> </h2>
        <ul>
            <li><?php echo $_POST["inter1"] ,"<br>";?></li>
            <li><?php echo $_POST["inter2"] ,"<br>";?></li>
            <li><?php echo $_POST["inter3"] ,"<br>";?></li>
            <li><?php echo $_POST["inter4"] ,"<br>";?></li>
        </ul>
    </div >
      <div class="media"> 
        <h3 class="title2"><br><pre>Follow me</pre></h3> 
      <ul>
        <li><a <?php echo 'href="',$_POST["link1"],'"';?>><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li><a  <?php echo 'href="',$_POST["link2"],'"';?>><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
        <li><a <?php echo 'href="',$_POST["link3"],'"';?>><i  class="fa fa-instagram" aria-hidden="true"></i></a></i>
        </li>
        <li><a  <?php echo 'href="',$_POST["link4"],'"';?>><i class="fa fa-linkedin-square" aria-hidden="true"></a></i></li>
      
     </ul> 
        </div> 
       
</body>

</html>  

