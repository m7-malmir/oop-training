<html>
<head>

</head>
<body>
  <h2>Welcome to Sling Academy</h2>
  <button id="show-position">Show position</button>
  <div id="example-element">*</div>
  <div id="output"></div>

<?php


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