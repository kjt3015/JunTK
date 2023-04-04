console.log("Server Start");

const express = require('express');
const socket = require('socket.io');
const http = require('http');
const fs = require('fs');

const app = express();
const server = http.createServer(app);
const io = socket(server);


app.use('/css', express.static('./static/css'));
app.use('/js', express.static('./static/js'));

app.get('/', function (request, response) {
    fs.readFile('./static/index.html', function (err, data) {
        if (err) {
            response.send('에러')
        } else {
            response.writeHead(200, { 'Content-Type': 'text/html' })
            response.write(data)
            response.end()
        }
    })
})
app.get('/calculator/', function (request, response) {
    fs.readFile('./static/calculator.html', function (err, data) {
        if (err) {
            response.send('에러')
        } else {
            response.writeHead(200, { 'Content-Type': 'text/html' })
            response.write(data)
            response.end()
        }
    })
})

server.listen(3000, function () {
    console.log('Port Number 3000')
})