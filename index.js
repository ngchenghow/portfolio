const express = require('express')

var smtp_express = express()
smtp_express.get('/', function (req, res) {
    res.send('SMTP Resp')
})
smtp_express.listen(6000)

var app = express()
var admin=express()
admin.on('mount',function(){
    console.log('admin mounted')
})
admin.get('/',function(req,res){
    res.send('Admin Page');
});
app.get('/products', function (req, res) {
    res.send('Product Page')
})
app.get('/', function (req, res) {
    res.send('Portfolio Home Page')
})
app.use('/admin',admin);
app.listen(5000)

