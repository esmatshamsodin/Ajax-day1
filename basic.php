<!DOCTYPE html>
<html>
<body>
  <h2>Let AJAX change this text</h2>
<div id="content">
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("content").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "basic-day1.txt", true);
  xhttp.send();}
</script>

</body>
</html>