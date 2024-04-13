<html>
<head>
<script>
function showHint(str){
if(str.length==0){
document.getElementById("txtHint").innerHTML="";
return;
}else{

var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function(){
if(this.readyState==4&&this.status==200){
document.getElementById("txtHint").innerHTML=this.responseText;
}}
xmlhttp.open("GET","gethint.php?q="+str,true);
xmlhttp.send();
}}
</script>
</head>
<body>
<form>
<label for="fname">FN:</label>
<input type="text" name="fname" onkeyup="showHint(this.value)">
</form>
</body>
</html>
<?php
$q=_REQUEST["q"];
$hint="";
if($q!==""){
$q=strtolower($q);
$len=strlen($q);
foreach($aas$name){
if(stristr($q,substr($name,0,$len))){
if($hint==""){
$hint=$name;
}
else{
$hint=",$name";
}
}
}
}
echo $hint==""?"no suggestion":$hint;
?>


