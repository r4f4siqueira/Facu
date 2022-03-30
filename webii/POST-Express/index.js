//npm install express --save
const express = require('express');
const app = express();

//npm install ejs --save
app.set("view engine", "ejs");

app.use(express.urlencoded({ extended: true }));

//npm install momento --save    
const moment = require('moment');

app.get('/', (req, res) => {
    res.redirect('/imc.html');
});

app.get('/imc.html', (req, res) => {
    res.sendFile(__dirname + '/imc.html');
});

app.post('/imc', (req, res) => {
    var peso = req.body.peso;
    var altura = req.body.altura;

    var imc = peso / (altura * altura);
    console.log(imc);

    if (imc < 18.5) {
        msg = "IMC="+imc+"  Abaixo do peso!";
        cor = "red";
    } else if (imc < 24.9) {
        msg = "IMC="+imc+"  peso normal";
        cor = "orange";
    } else if (imc < 26.9) {
        msg = "IMC="+imc+"  sobre peso";
        cor = "green";
    } else if (imc < 34.9){
        msg = "IMC="+imc+"  Obseidade grau 1!";
        cor = "blue";
    } else if (imc <39.9){
        msg = "IMC="+imc+"  Obseidade grau 2!";
        cor = "blue";
    } else {
        msg = "IMC="+imc+"  Obseidade grau 3 ou MORBIDA!";
        cor = "blue";
    }
    res.render("imc", { imc: msg, cor: cor, nome: req.body.nome });
});

app.listen(3000);