const express = require("express");
const mysql = require("mysql");
const bodyParser = require("body-parser");
const cors = require("cors");
const app = express()
const port = 3000

app.use(bodyParser.urlencoded({ extended: true }));
app.use(cors());

var conn = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "nodemcu"
});

conn.connect(function(err) {
  if (err){throw err;} 
  console.log("Connected!");
});




app.post('/', (req, res) => {
  console.log('Got body:', req.body);
  // time
  const dn = Date.now();
  const date = new Date(dn);
  const datetime =
    String(date.getFullYear()) + "-"
    + String(date.getMonth()) + "-"
    + String(date.getDay()) + " "
    + String(date.getHours()) + ":"
    + String(date.getMinutes()) + ":"
    + String(date.getSeconds())

  var sql = "INSERT INTO `temp`(`time`, `temp`) VALUES (" + "'" + datetime + "'" + "," + req.body.Temp + ")";
  var test = "INSERT INTO `temp`(`time`, `temp`) VALUES ('2024-11-21 00:02:14',32)"
  var qr = conn.query(sql);
  if(qr){
    console.log("succes");
    
  }
})

app.get('/', (req, res) => {
  res.send("Hello Temp Api");
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})
