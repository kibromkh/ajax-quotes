<html>

<head>
<title>AJAX Quotes</title>

<style>

/* New funky font imports */
@import url('https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Splash&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Eater&display=swap');

/* Background image */ 
body {
  background-image: url('https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

/* Quote container styles */
#quoteContainer {
  display: none;
  font-size: xx-large;
  text-shadow: 4px 4px 4px #aaa;
}

.fade-in {
  animation: fadeIn 1s ease;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }  
}

</style>

</head>

<body>

<h1>AJAX Quotes</h1>

<p>Every five seconds on the page a new quote will appear!</p>  

<div id="quoteContainer">Quotes go here</div>

<script>

// Array of new funky fonts
var fonts = ["Bungee Shade", "Splash", "Eater"];  

// Counter to iterate fonts
var counter = 0;

// Array of quotes
var quotes = ["Be the change you wish to see in the world. - Gandhi", 
              "Do what you can, with what you have, where you are. - Theodore Roosevelt",
              "Be yourself; everyone else is already taken. - Oscar Wilde"];

function getRandomQuote() {

  // Get random quote
  var quote = quotes[Math.floor(Math.random() * quotes.length)];

  // Get quote container 
  var quoteContainer = document.querySelector("#quoteContainer");

  // Set quote text
  quoteContainer.innerText = quote;  

  // Set font style
  quoteContainer.style.fontFamily = fonts[counter];

  // Increment counter
  counter++;
  if (counter >= fonts.length) {
    counter = 0;
  }

  // Show quote
  quoteContainer.style.display = "block";

  // Fade in
  quoteContainer.classList.add("fade-in");

  setTimeout(function() {
    quoteContainer.classList.remove("fade-in");
  }, 1000);

}

// Display random quote every 5 seconds  
setInterval(getRandomQuote, 5000);

// Show initial quote
getRandomQuote();

</script>

</body>

</html>
