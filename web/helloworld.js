var http = require('http');

http.createServer(function (req, response) {
    response.writeHead(200, {"Content-Type": "application/json"});
    response.writeHead(404, {"Content-Type": "text/html"});
    response.write("<h1>Hello World</h1>");
	response.end();
	
}).listen(8888);
