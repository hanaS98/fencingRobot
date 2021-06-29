# * Control Panel for fencing Robot * 

This repository is about an interface to control a fencing robot.
<p><img src="./interface.png" width="400" height="600" title="interface"></p>

 ## Description 
<p>This project is an interface of a control panel made to move fencing robot arm and base.</p>
<p>There are four pages in this repository and a database</p>

#### 1. robotConntrolPanel.html:
 
This page include the code for html, there are 2 section in the code one to control the arm and the other one is to control the base of the robot.

* The robot arm section:

There are 6 servo to control the arm of the robot thats why there are 6 range sliders, each slider has values that ranges between 0 and 180, also there is two buttons one for saving the values from the range sliders to the database at mySQL and the other is to display the values in seprate page.

<div><img src="./robotArmCode.png" width="450" height="350" title="robotarmcode">
<img src="./buttons.png" width="450" height="350" title="buttons"></div>


* The robot base section:

There are 5 buttons each button move the base to sepcific direction and the the direction is saved to the database.

<img src="./robotbasecode.png" width="450" height="300" title="robotbasecode">

#### 2. robotControlPanelStyle.css:

This page include the design of the elements on the html page like the background, fonts and the layout style.
<p><img src="./robotstylecode.png" width="450" height="300" title="stylepage"></p>

#### 3. connect.php:

This page connect the values of the servos to the database and if the values are sucessfully saved a page will appear with the saved values.
<p><img src="./connectpage.png" width="450" height="300" title="connectpage"></p>

#### 4. lastRecord.php:

This page retrive the last row in the database and display it.
<p><img src="./lastrecordpage.png" width="450" height="350" title="lastrecordpage"></p>

#### 5. robotcontroller.sql:

This is the database file.
<p><img src="./database.png" width="450" height="200" title="database"></p>

#### 5. robotcontroller.sql:

This is the database file.
<p><img src="./database.png" width="450" height="200" title="database"></p>


