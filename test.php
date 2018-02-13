<!DOCTYPE html>
<html>
<body>
<div id="content">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();//creat a new xmlhttp request object
  //on ready function --> defin a function to be called when the readystate property change
  //ready state -->hold the status of xmlhttp request
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML =
      this.responseText;
    }
  };//if status is equall with 200 its ok ,if it's 403 it's forbiden, if it's 404 it's not found 
  xhttp.open("GET", "test.txt", true);
  xhttp.send();
}
</script>
</body>
</html>