const http = require("http");
var url = require("url");

const server = http.createServer((req, res) => {
    var u = "http://localhost:3000"+req.url;
    var q = url.parse(u,true);
    var mes = q.query.mes;
    var ano = q.query.ano;

    console.log('data = '+mes+"/"+ano);
    if(ano<=2004){
        res.write("<h1>Pode votar</h1>");
        res.end();
    }else if(ano>=2005){
        res.write("<h1>NAO Pode votar</h1>");
        res.end();
    }
});

server.listen(3000);