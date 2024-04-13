<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("button").click(function(){
$("div").text($("form").serialize());
});
});
</script>
</head>
<body>
<form action="">
First nm:<input type="text" name="firstnm" values="mickey"><br>
last nm:<input type="text" name="lastnm" values="mouse"><br></form>
<button>Serialize</button>
</body>
</html>
