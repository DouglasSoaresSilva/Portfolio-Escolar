# TPA --– Exercícios de Matrizes em Java

Este repositório contém uma coleção de exercícios em Java que trabalham conceitos de matrizes, como leitura de dados, operações matemáticas e manipulação de formatos. Feitos por <strong>Douglas Soares Silva</strong>, exercício requisitados pelo professor <strong>Marcelo Collado.</strong>

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
<img width="695" height="525" alt="4x4" src="https://github.com/user-attachments/assets/e604bcd8-41ca-4bf5-9184-dd9f5ea1ffa5" />


---

## Exercício 2 – Criação e Exibição de Matrizes Pré-definidas
**Diretório:** Matrizes/2- Matrizes Dados Diferentes  
O exercício está dividido em três partes, cada uma com um tipo de matriz:

### 2A – Matriz de Letras
Cria uma matriz de caracteres ('a' a 't') e exibe usando loops for.
<img width="973" height="441" alt="MatrizA" src="https://github.com/user-attachments/assets/e41123f3-b02c-4116-ae65-a38f4a88cb90" />

### 2B – Matriz de Inteiros
Cria matriz preenchida com inteiros e exibe os valores mantendo o formato.
<img width="1002" height="424" alt="MatrizB" src="https://github.com/user-attachments/assets/fd1de9f3-150c-4a0a-ac92-2b7ec833f01f" />

### 2C – Matriz de Decimais
Define matriz de `double`, exibindo todos os elementos.
<img width="955" height="441" alt="MatrizC" src="https://github.com/user-attachments/assets/f50de9e9-0778-4d27-8d92-9a2798a7594a" />

Todos utilizam loops aninhados para percorrer e mostrar os valores.  

---

## Exercício 3 – Matriz 5x5: Soma de Ímpares, Soma das Colunas e das Linhas
**Diretório:** Matrizes/3- Matrizimpares  
- Lê matriz 5x5 do usuário.
- Soma todos os valores ímpares ao ler.
- Calcula soma de cada coluna e de cada linha separadamente.
- Três estruturas de loops para leitura, soma vertical e soma horizontal.
<img width="435" height="603" alt="Insercaodadosimpares" src="https://github.com/user-attachments/assets/c5449eea-644d-4ff7-ae21-9197c6dbf106" />
<img width="461" height="469" alt="Outputcolunaslinhasimpares" src="https://github.com/user-attachments/assets/fbbf7ddc-65dc-4e16-8fd6-618ed65b78b4" />

---

## Exercício 4 – Matriz 3x5: Repetidos, Pares e Ímpares
**Diretório:** Matrizes/4- MatrizRepetidos  
- Lê 15 valores em matriz 3x5.
- Verifica repetidos via estrutura auxiliar (como lista ou array).
- Conta pares e ímpares conforme lê cada valor.
- Loops duplos percorrem toda matriz; comparações registram repetições e paridade.
<img width="852" height="702" alt="MatrizRepetidos" src="https://github.com/user-attachments/assets/6ad26fe5-808f-4203-b21d-52aa39d3768b" />
---


## Exercício 5 – Matriz 4x4 de Decimais: Diagonais Principal e Secundária
**Diretório:** Matrizes/5- MatrizDiagonal  
- Lê matriz 4x4 (`double`).
- Dois loops para leitura.
- Um loop para exibir diagonal principal (linha=coluna).
- Outro para diagonal secundária (coluna=3-linha).
<img width="805" height="538" alt="MatrizDiagonal" src="https://github.com/user-attachments/assets/b66e8b4a-5e92-4000-b949-2f3037978eaf" />

---

## Exercício 6 – Figuras com Matrizes
**Diretório:** Matrizes/6- MatrizesFormatos  
Três exemplos de formatação de matriz com o símbolo `*`.

### 6A – Matriz completamente preenchida com \*
Matriz 4x4 preenchida com símbolo, exibida por dois pares de loops.
<img width="958" height="458" alt="FormatoA" src="https://github.com/user-attachments/assets/d1529ff4-444d-4872-98e3-977993b1071f" />

### 6B – Moldura de \* com centro vazio
Bordas recebem `*`, interior recebe espaço. Condições nos loops verificam bordas.
<img width="955" height="449" alt="MatrizFormatoB" src="https://github.com/user-attachments/assets/bfe4fb70-848f-4003-afcc-a848fb3e4a66" />

### 6C – Triângulo formado por \*
<img width="970" height="505" alt="FormatoC" src="https://github.com/user-attachments/assets/c365cde8-0904-484a-a873-0cd52d8fa11a" />

Somente as colunas até o índice da linha são preenchidas, demais espaços ficam em branco.
---

Cada exercício pode ser acessado nos respectivos diretórios, onde está o código fonte Java que implementa as operações descritas acima.
