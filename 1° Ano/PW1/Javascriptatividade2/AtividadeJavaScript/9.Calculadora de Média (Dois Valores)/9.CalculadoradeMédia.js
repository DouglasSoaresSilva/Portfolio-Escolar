const readline = require("readline");

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

function calcularMediaSimples(N1, N2) {
    var media = (N1 + N2) / 2;

    if (media >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

rl.question("Qual a primeira nota? ", function(res1) {
  const N1 = Number(res1);

  rl.question("Qual a segunda nota? ", function(res2) {
    const N2 = Number(res2);

    console.log("Você foi: " + calcularMediaSimples(N1, N2));

    rl.close();
  });
});
