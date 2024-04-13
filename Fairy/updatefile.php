<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
var text=$('#textArea').val();
$.ajax({
url:'update.php',
type:'POST',
data:{text:text},
success:function(response){
$('#status').html('file updated');
},
error:function(xhr,status,error){
$('#status').html('error in updating');
}
});
});
});
<?php
$file='textfile.txt';
$text=$_POST['text'];
file_put_contents($file,$text);
echo 'File updated.';
?>