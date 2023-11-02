const express = require('express');
const app = express();


const port = 3008;

// Set EJS as the view engine
app.set('view engine', 'ejs');
app.set('views', __dirname + '/views');
app.use(express.static('public'));

// Define routes
app.get('/', (req, res) => {
  res.render('index');
});
app.get('/addgallery', (req, res) => {
  res.render('addgallery');
});
app.get('/pricing', (req, res) => {
  res.render('pricing');
});


// Start the server
app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});
