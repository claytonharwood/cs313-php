var path = require('path');
var express = require('express');
var app = express();

app.use(express.static("public"));

app.set("views", "views");
app.set("view engine", "ejs");

app.use(express.json() );      
app.use(express.urlencoded({ extended: true }));

app.use(express.static(path.join(__dirname, 'public')))

// index page 
app.get('/', function(req, res) {
    res.render('index');
});

app.listen(5000, function() {
	console.log("The server is up and listening on port 5000");
});