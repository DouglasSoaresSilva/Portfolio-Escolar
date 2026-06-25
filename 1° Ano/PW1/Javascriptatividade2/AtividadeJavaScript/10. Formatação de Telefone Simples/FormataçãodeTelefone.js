function formatarTelefone(numero) {
  // Pega os quatro primeiros dígitos:
  let primeiraParte = numero.slice(0, 4);

  // Pega os quatro últimos dígitos:
  let segundaParte = numero.slice(4);

  // Retorna no formato desejado:
  return primeiraParte + "-" + segundaParte;
}

console.log(formatarTelefone("99887766")); 

//Depois disso retorna "9988-7766"