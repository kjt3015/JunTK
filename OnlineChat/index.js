// https://geundung.dev/58
// https://geundung.dev/60?category=719250


console.log('Heool Nodejs!!');

// 설치한 express module 불러오기
const express = require('express')

// 설치한 socket.io 모듈 불러오기
const socket = require('socket.io')

// Node.js 기본 내장 모듈 불러오기
const http = require('http')
const fs = require('fs')

// express객체 생성
const app = express()

// express http 서버 생성
const server = http.createServer(app)

// 생성된 서버를 socket.io에 바인딩
const io = socket(server)

// 정적파일을 제공하기 위해 미들웨어를 사용하는 코드
app.use('/css', express.static('./static/css'))
app.use('/js', express.static('./static/js'))


// Get 방식으로 / 경로에 접속하면 실행 됨
app.get('/', function(request, response){    
    console.log('유저가 서버로 접속하였습니다.')
    // response.send('Hello, Express Server.')
    
    fs.readFile('./static/index.html', function(err, data){
        if(err){
            response.send('에러')
        } else{
            response.writeHead(200, {'Content-Type':'text/html'})
            response.write(data)
            response.end()
        }
    })
})

io.sockets.on('connection', function(socket){
    console.log('유저 접속 됨')
    
    socket.on('send', function(data){
        console.log('전달된 메시지:', data.msg)
    })
    
    socket.on('disconnect', function(){
        console.log('접속 종료')
    })
})

// 서버를 81포트로 listen
server.listen(81, function(){
    console.log('서버 실행중..')
})
