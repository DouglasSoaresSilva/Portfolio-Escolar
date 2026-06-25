const readline = require("readline");
   
   function encontrarMaiorEntreTres(a, b, c) {
    if (a > b && a > c) { //&& funciona como "And" em inglês ou "e" em português, executando as 2 ações
        return a;
    } else if (b > a && b > c) {
        return b;
    } else {
        return c;
    }
}

const maior = encontrarMaiorEntreTres(a, b, c);

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Digite sua idade: ", function (resposta) {
  let idade = Number(resposta);

  console.log(podeDirigir(idade));
  rl.close();
});
