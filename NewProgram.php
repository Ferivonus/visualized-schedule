<!DOCTYPE html>
<HTML>
  <head>
    <meta charset="utf-8">
    <meta name= "description" content="Fahrettin baştürk blog.">
    <meta name ="author" content="Fahrettin">
    <meta name ="keywords" content= "Fahrettin Baştürk, Astroloji, Tarot">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Blog's Homepage </title>
    <link rel="stylesheet" type="text/css" href="css/newmyCss.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/MyProgram.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/topNav.css?<?php echo time(); ?>">
    <script src="javaScript/javascriptCodes.js"></script>
  </head>
    <body>

    <ul class="topnav" id="myTopNavbar">
      <li><a href="default.php">Home</a></li>
      <li><a href="me.php">Me</a></li>
      <li><a class="active" href="MyBlog.php">Blog</a></li>
      <li><a href="MyEssays.php">My Essays</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Projects</a>
            <div class="dropdown-content">
                <a href="project1.php">Unity Tarot</a>
                <a href="project2.php">Tarot Drawer</a>
                <a href="project3.php">Dairy</a>
                <a href="LoginPanelHomework.php">Login panel Homework</a>
                <a href="ToDoList.php">To do list</a>
            </div>
    </li>
    <li class="right"><a href="#about">About</a></li>
    <li class="iconTop"><a style="font-size:15px;" href="javascript:void(0);" onclick="myFunctionTop()">&#9776;</a></li>
    </ul>


    <div class = "Program">
      <p class="contentMyText" >Anyway, there is my school schedule too, and please do not disturb me when I am at class:</p>
      <table class="MyProgram">
        <tbody>
          <tr>
          <th>&nbsp;</th>
          <th>9.30</th>
          <th>10.30</th>
          <th>11.30</th>
          <th>12.30</th>
          <th>13.30</th>
          <th>14.30</th>
          <th>15.30</th>
          <th>16.30</th>
          <th>17.30</th>
          <th>18.30</th>
        </tr>

        <tr>
          <th>Pazartesi</th>
            <td colspan="2">CMPE 376</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
        
        <tr>
          <th>Salı</th>
            <td colspan="2" > Math 276 </td>
            <td>&nbsp;</td>
            <td colspan="3" >Art 288</td>
            <td colspan="3">Art 265</td>
            <td>&nbsp;</td>


        </tr>
        
        <tr>
          <th>Çarşamba</th>
          <td colspan="2" >SE 427</td>
          <td colspan="1" >SE 427 lab</td>
          <td colspan="2" >Math 276</td>
          <td colspan="2" >Ise 493 </td>
          <td>&nbsp;</td>
          <td colspan="2" >Turk 401</td>
        </tr>
        
        <tr>
          <th>Perşembe</th>
            <td colspan="3">ISE 414</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
        
        <tr>
          <th>Cuma</th>
          <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="2" >Cmpe 376 lab</td>
            
            <td colspan="2">Art 291</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>



        </tr>

        </tbody>
      </table>
      <br>
      <table class="MyProgramDetailed">
      <tbody>
        <tr>
          <th>Name</th>
          <th>Section</th>
          <th>Akts</th>
        </tr>

        <tr>
          <th>Math276</th>
            <td>4</td>
            <td>6</td>
        </tr>
        <tr>
          <th>CMPE376</th>
            <td>2 / 2</td>
            <td>5</td>
        </tr>
        <tr>
          <th>ISE399</th>
            <td>0</td>
            <td>6 / 0</td>
        </tr>
        <tr>
          <th>SE427</th>
            <td>2 / 2</td>
            <td>5</td>
        </tr>
        <tr>
          <th>ART288</th>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
          <th>ART291</th>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
          <th>ART265</th>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
          <th>TURK401</th>
            <td>2</td>
            <td>2</td>
        </tr>
        <tr>
          <th>ISE493</th>
            <td>2</td>
            <td>5</td>
        </tr>
        <tr>
          <th>ISE414</th>
            <td>3</td>
            <td>5</td>
        </tr>
        <tr>
          <th colspan="2" >&nbsp;</th>
            <td>46</td>
        </tr>
        </tbody>
      </table>
    </div>
      

          <script>
        function myFunction() {
          var x = document.getElementById("myNavbar");
          if (x.className === "botnav") {
            x.className += " responsive";
          } else {
            x.className = "botnav";
          }
        }
          </script>



      <div class="botnav" id="myNavbar">
        <a href="#home" class="active">Home</a>
        <a href="tarotCards.php">Tarot meanings</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
      
    </body>
</HTML>
