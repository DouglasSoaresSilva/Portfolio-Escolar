const readline = require("readline");

function senhaForte(senha) {
    if (senha.length > 8 && senha !== "12345678") {
        return true;
    } else {
        return false;
    }
}
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

rl.question("Digite sua senha numérica para saber se é forte ou não: ", function (resposta) {
  let senha = resposta;

  console.log(senhaForte(senha));
  rl.close();
});