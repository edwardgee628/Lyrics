<?php
echo <<<END
<form action="GetSelectedSongLyric.php">
<select name="playlist[]" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<input type="submit">
</form>

<!-- playlist=saab&cars=audi -->
END;
if(!empty($_POST)){
	var_dump($_POST['playlist']);
}
?>