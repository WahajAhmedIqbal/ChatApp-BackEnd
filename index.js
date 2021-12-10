const express = require('express')
const app = express()
const http = require('http')
const cors = require('cors')
const { Server } = require('socket.io')

app.use(cors())

const server = http.createServer(app)

const io = new Server(server, {
    cors: {
        origin: "*",
        methods: ["GET", "POST"]
    }
})

const users = {}

io.on('connection', (socket) => {
    console.log("user connecte", socket.id)

    socket.on('send_message', (data) => {
        console.log(data)
        // const senderId = data.senderId
        // io.to(data.senderId).emit('receive_message', data)
        io.emit('receive_message', data);
        // socket.to(data.senderId).emit('receive_message', data)
    })

    socket.on('login', (data) => {
        console.log('a user ' + data.userId + " connected")
        users[socket.id] = data.userId
        console.log(users)
        io.emit('user_online', data.userId)
    })


    socket.on("disconnect", () => {
        console.log('user ' + users[socket.id] + " disconnected")
        delete users[socket.id]
    })
})


const port = 3001

server.listen(port, () => {
    console.log('server is listing on ', port)
})