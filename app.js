var express = require("express");
var app = express();
var bodyParser = require("body-parser");

app.use(express.static("public"));
app.use(bodyParser.urlencoded({extended:true}));
app.set("view engine", "ejs");

app.get("/",function(req,res) {
	res.render("home");
});

app.get("/roofandbots",function(req,res) {
	res.render("roofandbots");
})

app.get("/future",function(req,res) {
	res.render("future");
});

app.get("/simulation",function(req,res) {
	res.render("simulation");
});

app.get("/vendors",function(req,res) {
	res.render("vendors");
});

app.get("/inventory",function(req,res) {
	res.render("inventory");
})

app.get("/customers",function(req,res) {
	res.render("customers");
})

app.listen(3000,function() {
	console.log("Server has started");
});