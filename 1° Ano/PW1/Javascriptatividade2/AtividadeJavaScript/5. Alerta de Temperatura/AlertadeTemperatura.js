const readline = require("readline");

function checarTemperatura(temp) {
  if(temp < 10) {
    return "Alerta de Frio";
  } else if(temp >= 10 && temp <= 25) {
    return "Temperatura ideal"
} else {
    return "Alerta de Calor";
 }
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Qual é a temperatura?: ", function (resposta) {
  let temp = Number(resposta);

  console.log(checarTemperatura(temp));
  rl.close();
});

