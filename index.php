<html>

<head>
  <title>Sling Academy</title>
  <style>
    /* We will get the position of this element */
    #example-element {
      /* width: 20px;
      height: 10px;
      background-color: lightblue;
      margin: 50px; */
    }

    /* The result will be displed within this element */
    #output {
      font-size: 30px;
      color: blue;
    }
  </style>

</head>

<body>
  <h2>Welcome to Sling Academy</h2>
  <button id="show-position">Show position</button>
  <div id="example-element">*</div>
  <div id="output"></div>

  <script>
    // Put your JS code here
    // Get the elements by their ids
    const button = document.getElementById("show-position");
    const element = document.getElementById("example-element");
    const output = document.getElementById("output");

    // Define a function to display the position of the element
    const displayPosition = () => {
      // Use getBoundingClientRect() to get the position of the element
      const rect = element.getBoundingClientRect();

      const x = rect.left + window.scrollX;
      const y = rect.top + window.scrollY;

      // Create a string with the position information
      const position = `X: ${x} <br>Y: ${y}`;

      // Display the position in the output element
      output.innerHTML = position;
    }

    // Add an event listener to the button to call displayPosition on click
    button.addEventListener("click", displayPosition);

    // Add an event listener to the window to call displayPosition on resize
    //window.addEventListener("resize", displayPosition);
  </script>
</body>

</html>