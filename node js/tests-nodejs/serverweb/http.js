const http = require('http');

var server = http.createServer(function(req, res){
    res.writeHead(200,{'Content-type':'text/plain'});
})