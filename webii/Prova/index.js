//npm install express --save
const express = require('express');
const app = express();
//npm install ejs --save
app.set("view engine", "ejs");
app.use(express.urlencoded({ extended: true }));   

app.get('/', (req, res) => {
    res.redirect('/login.html');
});

app.get('/login.html', (req, res) => {
    res.sendFile(__dirname + '/login.html');
});


app.get('/cont', (req, res) => {
    JSON.stringify(users)
})

var users = new Object();
users = [{usuario:"fpp1",senha:"fpp1",cont: 0},{usuario:"fpp2",senha:"fpp2",cont:0},{usuario:"fpp3",senha:"fpp3",cont:0}]

var cont 
app.post('/login', (req, res) => {
    var login = req.body.login;
    var senha = req.body.senha;

    var libera = true

    for(i=0;i<3;i++){
        if((login==users[i].usuario)&&(senha==users[i].senha)){
            users[i].cont+=1 
            console.log(users[i])
            res.render("entrou");
            libera = false;
            break;
        }
    }
    
    if(libera){
        res.render("nao");
    }
});

app.listen(3000);