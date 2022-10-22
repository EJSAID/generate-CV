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
    <form action="envoyer.php" method="POST">
    <style>
        .icon{
            color:#03a9f4;
        }
       
    </style>
    
      <div class="container">
        <div class="left-side">
            <div class="profiletext">
                <div class="imgBx">
                <img src="icone-utilisateur-bleu.png" >
               <input name="image" type="file" onchange="readURL(this)" accept="image/* "  style="position:relative; font-size:21px; top:100px; left:20px; right:20px;">
               
               
                </div>
                <h2> <input type="text" placeholder="Full Name" name="name" style="width:90%;" ><br>
                    <input type="text" placeholder="Profession" name="profession" style="width:90%;" ></h2>
            </div>
            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon" ><i class="fab fa fa-phone" aria-hidden="true"></i></span>
                        <input type="text" placeholder="Telephone" name="telephone" style="width:89%;" ><br>
                    </li>
                    <li>
                        <span class="icon" ><i class="fab fa fa-envelope"></i></span>
                        <input type="text" placeholder="Email" name="email" style="width: 88%;" ><br>
                    </li>
                    <li>
                        <span class="icon" ><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <input type="text" placeholder="City, Country" name="city" style="width:90%;" ><br>
                    </li>
                  
                </ul>
            </div>
            <div class="contactInfo_education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <h5> <input type="text" placeholder="Exemple 2021-2022" name="date1"  style="width:90%;"></h5><br>
                        <h4> <input type="text" placeholder="your diploma" name="dip1" style="width:90%;" > </h4><br>
                        <h4> <input type="text" placeholder="name of your unviversity" name="uni1" style="width:90%;" > </h4><br>
                       
                    </li>
                    <li>
                        <h5> <input type="text" placeholder="Exemple 2021-2022" name="date2"   style="width:90%;" ></h5> <br>
                        <h4> <input type="text" placeholder="your diploma" name="dip2"  style="width:90%;" > </h4><br>
                        <h4> <input type="text" placeholder="name of your unviversity" name="uni2" style="width:90%;"> </h4> <br>
                    </li>
                    <li>
                        <h5> <input type="text" placeholder="Exemple 2021-2022" name="date3" style="width:90%;"></h5><br>
                        <h4> <input type="text" placeholder="your diploma" name="dip3" style="width:90%;" > </h4><br>
                        <h4> <input type="text" placeholder="name of your unviversity"  name="uni3" style="width:90%;"> </h4><br>
                    </li>
                </ul>
            </div>
            <div class="contactInfo_language">
                <h3 class="title">Language</h3>
                <ul>
                    <li>
                        <span class="text"> <input type="text" placeholder="Language 1" name="lang1"></span>
                        <input name="range11" type="range" style="width: 95%;">
                       
                    </li>
                    <li>
                        <span class="text"> <input type="text" placeholder="Language 2" name="lang2"></span>
                        <input name="range12" type="range" style="width: 95%;" >
                    </li>
                    <li>
                        <span class="text">  <input type="text" placeholder="Language 3" name="lang3"></span>
                        <input name="range13" type="range" style="width: 95%;">
                    </li>                    
                </ul>
                <div class="QR">
                    
                    <h5  class="title" ><br><pre>Scan the code to see my GitHub</pre></br></h5>
                    <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                    <img src="qr-code (1).png" class="img">
                    <input class="upload-image" type="file" onchange="readURL(this)" accept="image/* "  style="position:relative; font-size:21px; top:10px; left:20px; right:20px;">
                  
                </div>

         </div>
        </div>
        <div class="right-side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                  <textarea name="story" rows="20" cols="33" style="width: 95%;" placeholder="yes" > your profil here.... </textarea> 
                <div class="skills">
                    <h2 class="title2">Skills</h2>
                   
                    <div class="box">
                        <input name="Skill1" type="text" placeholder="Skill 1">
                        <input name="range1" type="range" style="width: 95%;">
                    </div>
                    <div class="box">
                        <input name="Skill2" type="text" placeholder="Skill 2">
                        <input name="range2" type="range" style="width: 95%;">
                    </div>
                    <div class="box">
                        <input name="Skill3" type="text" placeholder="Skill 3">
                        <input name="range3" type="range" style="width: 95%;">
                    </div>
                    <div class="box">
                        <input name="Skill4" type="text" placeholder="Skill 4">
                        <input name="range4" type="range" style="width: 95%;">
                    </div>
                    <div class="box">
                        <input name="Skill5" type="text" placeholder="Skill 5">
                        <input name="range5" type="range" style="width: 95%;">
                    </div>
                    <div class="box">
                        <input name="Skill6" type="text" placeholder="Skill 6">
                        <input name="range6" type="range" style="width: 95%;">
                    </div>
                  

            </div>
      </div>
      <div class="interest">
        <h2 class="title2">Personality</h2>
        <ul>
            <li> <input name="pers1" type="text" placeholder="Personality 1" style="width: 80%;"></li>
            <li> <input  name="pers2" type="text" placeholder="Personality 2" style="width: 80%;"></li>
            <li> <input  name="pers3" type="text" placeholder="Personality 3" style="width: 80%;"></li>
            <li> <input  name="pers4" type="text" placeholder="Personality 4" style="width: 80%;"></li>
        </ul>
      </div> 
      <div class="interest">
        <h2 class="title2"><br><pre>Hobbies</pre></h2>
        <ul>
            <li><input  name="hobb1" type="text" placeholder="Hobbie 1" style="width: 80%;" ></li>
            <li><input name="hobb2" type="text" placeholder="Hobbie 2" style="width: 80%;"></li>
            <li><input name="hobb3" type="text" placeholder="Hobbie 3" style="width: 80%;"></li>
            <li><input name="hobb4" type="text" placeholder="Hobbie 4" style="width: 80%;"></li>
        </ul>
      </div> 
      <div class="interest">
        <h2 class="title2"> <br><pre>Interest</pre> </h2>
        <ul>
            <li><input name="inter1" type="text" placeholder="Interest 1" style="width: 80%;"></li>
            <li><input name="inter2" type="text" placeholder="Interest 2" style="width: 80%;"></li>
            <li><input name="inter3" type="text" placeholder="Interest 3" style="width: 80%;"></li>
            <li><input name="inter4" type="text" placeholder="Interest 4" style="width: 80%;"></li>
        </ul>
    </div >
      <div class="media"> 
        <h3 class="title2"><br><pre>Follow me</pre></h3> 
      <ul>
        <li><i class="fa fa-facebook-square" aria-hidden="true"></i><input  name="link1" type="text" placeholder="link" style="width: 80%;"></li>
        <li><i class="fa fa-telegram" aria-hidden="true"></i><input  name="link2" type="text" placeholder="link" style="width: 80%;"></li>
        <li><i  class="fa fa-instagram" aria-hidden="true"></i>
            <input  name="link3" type="text" placeholder="link" style="width: 80%;"> </li>
        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i><input type="text" name="link4" placeholder="link" style="width: 80%;"></li>
      
     </ul> 
        </div> 
        <button class="main-btn" type="submit" name="Creer" >Valider</button>
    </form>
</body>

</html>  

