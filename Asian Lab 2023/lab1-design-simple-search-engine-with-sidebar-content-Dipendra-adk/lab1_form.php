<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Login:</legend>
    <?php 
    echo "<h1 style='color:red'>My Form</h1>";
    if(isset($_POST['submit'])){
        echo 'Password is:'.$_POST['pwd'];
    }
    ?>
<form action="" method="post">
    <div>
        <label for="">UserName</label>
        <input type="text" name="UserName" />
    </div>

    <div>
        <label for="">Password</label>
        <input type="password" name="pwd" />
    </div>
    <div>
        <input type="color" name="" id="" />
        <input type="date" name="" id="" />
        <input type="Submit" value="login" name="submit" />
    </div>
</fieldset>
</form>

<form action="" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
0
<input type="range" id="a" name="a" value="50" oninput="showValueOfA()" />
<span id="a_value">50</span>
+
<input type="number" id="b" name="b" value="50"/>
=
<output name="x" for="a b"></output>
<br/>
<input type="submit"/>
</form>

<script>
    function showValueOfA(){
        var a_element = document.getElementById("a_value"); 
        a_element.innerHTML = document.getElementById("a").value;
    }
    </script>

<!--    Html Input types    -->
<form>
  <label for="username">Username:</label><br>
  <!--Input type ="text"-->
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <!--Input type ="password"-->
  <input type="password" id="pwd" name="pwd"><br>
  <!--Input type =" Submit"-->
  <input type="submit" value="Submit"><br>
  <!--input type ="reset"-->
  <input type="reset"><br>
  <!--inout type ="radio"-->
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label><br>
  <!--input type ="checkbox"-->
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> I have a boat</label><br>
  <!--Input type ="button"-->
  <input type="button" onclick="alert('Hello World!')" value="Click Me!"><br>
  <!--input type ="color"-->
  <label for="favcolor">Select your favorite color:</label>
  <input type="color" id="favcolor" name="favcolor"><br>
  <!--input type ="date"-->
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br>
  <!--input type="datetime"-->
  <label for="BornDate"> Birth Date:  </label>
  <input type="datetime" id="BornDate" name="BornDate"><br>
  <!--input type ="datetime-local"-->
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime"><br>
  <!--input type ="email"-->
  <label for="emailid">Email ID :</label>
  <input type="email" id="emailid" name="emailid"><br>
  <!--input type="month"-->
  <label for="bdaymonth">Birthday (month and year):</label>
  <input type="month" id="bdaymonth" name="bdaymonth"><br>
  <!--  input type="number"-->
  <label for="quantity">Quantity (between 1 and 5):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5"><br>
  <!--input type="search"-->
  <label for="gsearch">Search Google:</label>
  <input type="search" id="gsearch" name="gsearch"><br>
<!--input type ="time"-->
<label for="appt">Select a time:</label>
  <input type="time" id="appt" name="appt"><br>
  <!--input type="week"-->
  <label for="week">Select a week:</label>
  <input type="week" id="week" name="week"><br>
  <!--input type ="url"-->
  <label for="homepage">Add your homepage:</label>
  <input type="url" id="homepage" name="homepage">

</form>
</body>

</html>

<!-- What are different form elements,attributes
write difference between get and post-->

<!-- 
what are different form elements explain with example -->