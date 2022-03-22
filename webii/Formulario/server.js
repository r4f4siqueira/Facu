const http = require('http');
const fs = require('fs');
const url = require('url');
var formidable = require('formidable');
var moment = require('moment');

const server = http.createServer((req,res)=>{
    file = (req.url=="/")?"/login.html":req.url;
    //console.log(file);//mostrar o arquivo que está abrindo
    
    if(file == "/login"){//if para validar se existe a URL
        var form = new formidable.IncomingForm();
        form.parse(req,(err,fields,file)=>{
            var hoje= moment();// para pegar a data de hoje, basta passar moment vazio
            var datanacimento = moment(fields.datanacimento);//transformando string em data
            var diff = hoje.diff(datanacimento,'years')//calculando a diferenca de data
            console.log(fields);
            if(diff<16){
                res.writeHeader(200,{'Content-Type':'text/html'});
				res.write('<h1>Nao Pode Votar</h1>');
                res.write('<a href="../">Voltar</a>');
				res.end();
            }else if(diff<18){
                res.writeHeader(200,{'Content-Type':'text/html'});
				res.write('<h1>Se quiser VOTA</h1>');
                res.write('<a href="../">Voltar</a>');
				res.end();
            }else if(diff>=18){
                res.writeHeader(200,{'Content-Type':'text/html'});
				res.write('<h1>OBRIGADO VOTAR</h1>');
                res.write('<a href="../">Voltar</a>');
				res.end();
            }else{
                res.writeHeader(200,{'Content-Type':'text/html'});
				res.write('<h1>Data invalida</h1>');
                res.write('<a href="../">Voltar</a>');
				res.end();
            }
        });
    }else{//Caso a url nao exista vai fazer isso ai abaixo
        var diretorio = __dirname;
        var q = url.parse(file,true);
        fs.readFile(diretorio+q.pathname,(erro,html)=>{
            if(erro){
                res.writeHead(404,{'Content-Type':'text/html'});
                res.write("Pagina inválida");
                res.end();
            }else{
                res.writeHead(200,{'Content-Type':'text/html'});
                res.end(html);
            }
        });
    }
});

server.listen(3000);