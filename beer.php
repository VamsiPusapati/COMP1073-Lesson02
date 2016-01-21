<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> </head>
    <body>
<h1>Beer Information</h1>
<form method="post" action="save-beer.php">
    <fieldset>
        <label for="name">Name:</label>
        <input name="name" id="name"/>
    </fieldset>
    <fieldset>
        <label for="alcohal_content">Alcohal Content:</label>
        <input name="alcohal_content" id="alcohal_content" />
    </fieldset>
    <fieldset>
        <label for="domestic">Domestic:</label>
        <input name="domestic" id="domestic" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="light">Light</label>
        <input name="light" id="light" type="checkbox" />
    </fieldset>
    <fieldset>
        <label for="price"> Price</label>
        <input name="price" id="price" />
    </fieldset>
    <button>save</button>
</form>

</body>



</html>