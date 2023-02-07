// https://geundung.dev/58
console.log('Heool Nodejs!!');

// 설치한 express module 불러오기
const express = require('express')

// 설치한 socket.io 모듈 불러오기
const socket = require('socket.io')

// Node.js 기본 내장 모듈 불러오기
const http = require('http')

// express객체 생성
const app = express()

// express http 서버 생성
const server = http.createServer(app)

// 생성된 서버를 socket.io에 바인딩
const io = socket(server)

// 서버를 8181포트로 listen
server.listen(8181, function(){
    console.log('서버 실행중..')
})