const readline = require("readline"); 
 
 function classificarMoeda(valor) {
    if (valor === 0.01) {
        return "Um Centavo";
    } else if (valor === 0.05) {
        return "Cinco Centavos";
    } else if (valor === 0.10) {
        return "Dez Centavos";
    } else if (valor === 0.25) {
        return "Vinte e Cinco Centavos";
    } else if (valor === 0.50) {
        return "Cinquenta Centavos";
    } else if (valor === 1.00) {
        return "Um Real";
    } else {
        return "Valor Desconhecido";
    }
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Qual o valor da moeda?: ", function (resposta) {
  let valor = Number(resposta);

  console.log(classificarMoeda(valor));
  rl.close();
});
