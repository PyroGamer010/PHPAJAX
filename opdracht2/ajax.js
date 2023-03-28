function leesBoeken() {
    let xhr = new XMLHttpRequest();
  
    xhr.onload = function() {
      if (xhr.status === 200) {
        let boeken = JSON.parse(xhr.responseText);
        let output = "";
        
        for (let i in boeken) {
          output += "<p>" + boeken[i].title + " - " + boeken[i].author + " - " + boeken[i].isbn + "</p>";
        }
  
        document.getElementById("boeken-output").innerHTML = output;
      }
    };
  
    xhr.open("GET", "boeken_uitlees.php", true);
    xhr.send();
  }
  