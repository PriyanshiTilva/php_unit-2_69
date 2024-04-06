<?php
$name=$email=$gender=$comment=$website="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=
test_input($_POST["name"]);
$email=
test_input($_POST["email"]);
$website=
test_input($_POST["website"]);
$comment=
test_input($_POST["comment"]);
$gender=
test_input($_POST["gender"]);}
function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;}
?>

<html>
<body>
<form  method="post" action="<?php echohtmlspecialchars($_SERVER["PHP_SELF"]);
?>">
Name:<input type="text" name="name"><br><br>
E-mail:<input type="text" name="email"><br><br>
website:<input type="text" name="website"><br><br>
comment:<input type="text" name="comment"><br><br>
Gender:<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="male">MALE
<input type="radio" name="gender" value="other">OTHER<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>













