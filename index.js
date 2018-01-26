// var httpProxy = require('http-proxy');
// var apiProxy = httpProxy.createProxyServer();
// var serverOne = 'http://localhost:3001',
//     ServerTwo = 'http://localhost:3002',
//     ServerThree = 'http://localhost:3002';

// const express = require('express')

// var app = express()
// var admin=express()
// admin.on('mount',function(){
//     console.log('admin mounted')
// })
// admin.get('/',function(req,res){
//     res.send('Admin Page');
// });
// app.get('/products', function (req, res) {
//     res.send('Product Page')
// })
// app.get('/', function (req, res) {
//     res.send('Portfolio Home Page')
// })
// app.use('/admin',admin);
// app.listen(80)

var express = require('express');
var app = express();
var httpProxy = require('http-proxy');
var apiProxy = httpProxy.createProxyServer();
var serverOne = 'http://localhost:3001',
    ServerTwo = 'http://localhost:3002',
    ServerThree = 'http://localhost:3002';

app.all("/app1/*", function (req, res) {
    console.log('redirecting to Server1');
    apiProxy.web(req, res, { target: serverOne });
});

app.all("/app2/*", function (req, res) {
    console.log('redirecting to Server2');
    apiProxy.web(req, res, { target: ServerTwo });
});

app.all("/app2/*", function (req, res) {
    console.log('redirecting to Server3');
    apiProxy.web(req, res, { target: ServerThree });
});

app.listen(3000);