<html>
  <head>
  </head>

  <body>
    <span style="font-size:20px;">Кальк</span><br>
    <input id="field" onkeyup="myEnter(event);"/>
	<button onclick="myClick();">Считать?</button><br>
	Рез:<div style="display: inline;" id="result">1</div>

<script>   
function myClick(){
  var a = document.getElementById('field').value;
  var b = eval(a);
  //console.log(b);
 
  document.getElementById('result').innerText = b;
}

function myEnter(ev){
  if(ev.key === 'Enter'){
    myClick();
  }
}


</script>
  </body>
</html>