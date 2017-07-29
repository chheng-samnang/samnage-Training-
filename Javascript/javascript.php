<button onClick="hello()">Click Here</button><br>
<script>
	function hello(){
		alert("Hello world");
	}
	function show(){
		var y=parseInt(document.getElementById("Valuey").value);
		var x=parseInt(document.getElementById("Valuex").value);
		var sum=y+x;
		alert(sum);
	}
</script>
<body>
	Value Y:<input type="text" name="txtName" id="Valuey"><br>
	Value X:<input type="text" name="txtName" id="Valuex">
	<button onClick="show()">Sum</button>
</body>