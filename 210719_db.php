<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
	<form action="210719_db2.php" method="POST"> <!-- GET,POST의 이중사용 -->
		<p>제목 : <input type="text" name="title"></p>
        <p>본문 : <textarea name="description" id="" cols="30" rows="10"></textarea></p>
        <select name="mode">
		    <option value="">선택</option>
		    <option value="insert">INSERT</option>
		    <option value="delete">DELETE</option>
		    <option value="select" selected="selected">SELECT</option>
		</select>
        <p><input type="submit" /></p>
	</form>>
		
	</form>
</body>
</html>