<label for="name">Nombre</label>
<input type="text" name="name" id="name" value="{{ isset($categoryData->name)?$categoryData->name:'' }}" >
<br>
<input type="submit" value="Guardar">