const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function tipoTriangulo(L1, L2, L3) {
  if (L1 === L2 && L2 === L3) {
    return "Equilátero";
  } else if (L1 === L2 || L1 === L3 || L2 === L3) {
    return "Isósceles";
  } else {
    return "Escaleno";
  }
}

rl.question("Qual o primeiro lado do Triângulo? (L1): ", function (resposta1) {
  let L1 = Number(resposta1);

  rl.question("Qual o segundo lado do Triângulo? (L2): ", function (resposta2) {
    let L2 = Number(resposta2);

    rl.question("Qual o terceiro lado do Triângulo? (L3): ", function (resposta3) {
      let L3 = Number(resposta3);

      console.log("Tipo do triângulo:", tipoTriangulo(L1, L2, L3));
      rl.close();
    });
  });
});