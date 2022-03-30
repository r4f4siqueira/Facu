var cores ={ black:"\x1b[30m", red:"\x1b[31m"}//variavel com as cores

function color(nomecor,texto){//funcao que troca cor do texto pegando as cores do array
    console.log(cores[nomecor]+texto+'\x1b[0m')
}
module.exports = color; //exportei somente a funcao


//console.log('\x1b[33m%s\x1b[0m','olá!')
//color('red','teste')

/*
FgBlack = "\x1b[30m"
FgRed = "\x1b[31m"
FgGreen = "\x1b[32m"
FgYellow = "\x1b[33m"
FgBlue = "\x1b[34m"
FgMagenta = "\x1b[35m"
FgCyan = "\x1b[36m"
FgWhite = "\x1b[37m"
*/