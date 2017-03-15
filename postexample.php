	<h2>Put method </h2>
<form method="POST" action="putExample.php">
    <lable for="fname">Firstname</lable>
    <input type="text" id="fname" name="fname" value="">
    <br>
    <lable for="lname">Lastname</lable>
    <input type="text" id="lname" name="lname" value="">
    <br>
    <input type="submit" name="sendBtn" value="Send">

    </form>

    <?php
    $btn=$_POST['sendBnt'];
    if(isset$btn()){$fn=$_POST['fname'];
    $ln=$_POST['lname'];
    echo 'Hello' .$fn. ' ' .$ln;}
    
    ?>
