<html>
	  
<head>
	<meta http-equiv="Content-Type">
	<title>Selecionar múltiplos elementos do select</title>
</head>

<body>
	<form action="action_page.php">
		<select name="cars[]" multiple>
			<option value="volvo">Volvo</option>
			<option value="saab">Saab</option>
			<option value="opel">Opel</option>
			<option value="audi">Audi</option>
		</select>
		<input type="submit">
	</form>	
</body>

</html>