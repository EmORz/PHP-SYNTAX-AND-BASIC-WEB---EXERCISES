<form>
    <div>Name:</div>
    <input type="text" name="name"/>
    <div>Age:</div>
    <input type="number" name="age"/>
    <div>Town:</div>
    <select name="town">
        <option value="10">Sofia</option>
        <option value="20">Varna</option>
        <option value="30">Plovdiv</option>
    </select>
    <div><input type="submit"></div>
    <?php var_dump($_GET);?>
</form>