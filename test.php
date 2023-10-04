<html>
<head>

</head>
<body>
  <h2>Welcome to Sling Academy</h2>
  <button id="show-position">Show position</button>
  <div id="example-element">*</div>
  <div id="output"></div>

<?php
function start($xy,$z){
    $stri = (string)$xy;
    $x = $stri[0];
    $y = $stri[1];
    $strz = (string)$z;
    $j = $strz[0];
    $k = $strz[1];
    $a=$x- $j;
    $b=$y-$k;
    
}
start(23,56);
?>

  <script>

    const button = document.getElementById("show-position");
    const element = document.getElementById("example-element");
    const output = document.getElementById("output");

    const displayPosition = () => {
    
      const rect = element.getBoundingClientRect();
      const x = rect.left + window.scrollX;
      const y = rect.top + window.scrollY;
      
      const position = `X: ${x} <br>Y: ${y}`;
     
      output.innerHTML = position;
    }

    button.addEventListener("click", displayPosition);

  </script>
</body>
</html>