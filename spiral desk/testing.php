<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style type = "text/css">
.bordered {
	border: 1px solid black;
}
ul li {
	border: 1px solid white;	
}
</style>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>


<script type = "text/javascript">
//<![CDATA[
//$(init);

function init(){
	var userName = $("#nameBox").val();
	$("#input").html(userName)
	$.post("greetUser.php", { "userName": userName }, processResult);
}

function processResult(data, textStatus){
	$("#output").html(data);
}
//]]>
</script></head>

<body>

<input type="text" id="nameBox" name="nameBox" />
<input type="button" value="Go" onclick="init()" />
<br />
Input:
<div id="input"></div>
Output:
<div id="output"></div>

</body>
</html>