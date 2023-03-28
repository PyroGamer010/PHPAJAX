function zoekBoeken() {
  let title = document.getElementById("title").value;
  let xhr = new XMLHttpRequest();

  xhr.onload = function() {
    if (xhr.status === 200) {
      let boeken = JSON.parse(xhr.responseText);
      let output = "<table><tr><th>Titel</th><th>Auteur</th><th>ISBN</th><th>Uitgever</th></tr>";

      for (let i in boeken) {
        output += "<tr><td>" + boeken[i].title + "</td><td>" + boeken[i].author + "</td><td>" + boeken[i].isbn + "</td></tr>";
      }

      output += "</table>";
      document.getElementById("resultaten").innerHTML = output;
    } else {
      console.log("Er is een fout opgetreden: " + xhr.statusText);
    }
  };

  xhr.onerror = function() {
    console.log("Er is een fout opgetreden tijdens het ophalen van de gegevens.");
  };

  xhr.open("POST", "zoek_boeken.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("title=" + title);
}
