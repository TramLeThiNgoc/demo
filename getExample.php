<h2>GET method </h2>
<form method="GET" action="getExample.php">
    <lable for="fname">Firstname</lable>
    <input type="text" id="fname" name="fname" value="">
    <br>
    <lable for="lname">Lastname</lable>
    <input type="text" id="lname" name="lname" value="">
    <br>
    <input type="submit" name="sendBtn" value="Send">

    </form>

    <?php
    $btn=$_GET['sendBnt'];
    if(isset$btn()){$fn=$_POST['fname'];
    $ln=$_GET['lname'];
    echo 'Hello' .$fn. ' ' .$ln;}
    
    ?>
