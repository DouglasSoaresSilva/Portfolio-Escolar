# TPA ---– Exercícios de Matrizes em Java

Este repositório contém uma coleção de exercícios em Java que trabalham conceitos de matrizes, como leitura de dados, operações matemáticas e manipulação de formatos. Requisitados pelo professor Marcelo Collado.

---

## Exercício 1 – Leitura de Matriz 4x4, Soma e Média dos Valores Pares
**Diretório:** Matrizes/1- Matrizmediapares  
O código lê uma matriz 4x4 de inteiros, soma os valores pares e calcula sua média.

- Utiliza `Scanner` para entrada do usuário.
- Cria matriz 4x4 de inteiros.
- Soma e conta valores pares durante a leitura.
- Usa dois loops for aninhados para percorrer linhas/colunas.
- Calcula média condicionando divisão por zero.
- Exibe resultados no final.

---

## Exercício 2 – Criação e Exibição de Matrizes Pré-definidas
**Diretório:** Matrizes/2- Matrizes Dados Diferentes  
O exercício está dividido em três partes, cada uma com um tipo de matriz:

### 2A – Matriz de Letras
Cria uma matriz de caracteres ('a' a 't') e exibe usando loops for.

### 2B – Matriz de Inteiros
Cria matriz preenchida com inteiros e exibe os valores mantendo o formato.

### 2C – Matriz de Decimais
Define matriz de `double`, exibindo todos os elementos.

Todos utilizam loops aninhados para percorrer e mostrar os valores.  

---

## Exercício 3 – Matriz 5x5: Soma de Ímpares, Soma das Colunas e das Linhas
**Diretório:** Matrizes/3- Matrizimpares  
- Lê matriz 5x5 do usuário.
- Soma todos os valores ímpares ao ler.
- Calcula soma de cada coluna e de cada linha separadamente.
- Três estruturas de loops para leitura, soma vertical e soma horizontal.

---

## Exercício 4 – Matriz 3x5: Repetidos, Pares e Ímpares
**Diretório:** Matrizes/4- MatrizRepetidos  
- Lê 15 valores em matriz 3x5.
- Verifica repetidos via estrutura auxiliar (como lista ou array).
- Conta pares e ímpares conforme lê cada valor.
- Loops duplos percorrem toda matriz; comparações registram repetições e paridade.

---

## Exercício 5 – Matriz 4x4 de Decimais: Diagonais Principal e Secundária
**Diretório:** Matrizes/5- MatrizDiagonal  
- Lê matriz 4x4 (`double`).
- Dois loops para leitura.
- Um loop para exibir diagonal principal (linha=coluna).
- Outro para diagonal secundária (coluna=3-linha).

---

## Exercício 6 – Figuras com Matrizes
**Diretório:** Matrizes/6- MatrizesFormatos  
Três exemplos de formatação de matriz com o símbolo `*`.

### 6A – Matriz completamente preenchida com \*
Matriz 4x4 preenchida com símbolo, exibida por dois pares de loops.

### 6B – Moldura de \* com centro vazio
Bordas recebem `*`, interior recebe espaço. Condições nos loops verificam bordas.

### 6C – Triângulo formado por \*
Somente as colunas até o índice da linha são preenchidas, demais espaços ficam em branco.

---

Cada exercício pode ser acessado nos respectivos diretórios, onde está o código fonte Java que implementa as operações descritas acima.
