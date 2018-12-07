var express = require('express');

var app = express();

app.use(express.static("public"));

app.set("views", "views");
app.set("view engine", "ejs");

// index page 
app.get('/', function(req, res) {
    res.render('views/index');
});

app.listen(5000, function() {
	console.log("The server is up and listening on port 5000");
});