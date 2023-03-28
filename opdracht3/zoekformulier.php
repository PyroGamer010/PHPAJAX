<!DOCTYPE html>
<html>
<head>
  <title>Zoekformulier</title>
  <script src="ajax.js"></script>
</head>
<body>
  <form>
    <label for="titel">Titel:</label>
    <input type="text" id="titel" name="titel">
    <button type="button" onclick="zoekBoeken()">Zoek</button>
  </form>

  <div id="resultaten"></div>
</body>
</html>
