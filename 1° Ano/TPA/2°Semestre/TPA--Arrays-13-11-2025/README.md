<h1>Trabalho TPA</h1>
<h2>Ordenar nomes</h2>
<p>Este código cria vetor de nomes String[]</p> 
<img width="869" height="51" alt="image" src="https://github.com/user-attachments/assets/7e17e8bc-4cde-4091-945a-fbaccdbfee15" />
<p>O método Arrays.sort() serve para organizar os nomes em ordem alfabética</p>
<img width="169" height="28" alt="Arrays sort" src="https://github.com/user-attachments/assets/d8eb8f3b-d874-40df-8b7b-582c0fbea109" />
<p>Exibe uma mensagem no console para o usuário.</p>
 <img width="681" height="40" alt="image" src="https://github.com/user-attachments/assets/d0318a2c-b995-4942-a868-da2a8ef5906f" />

<br>
<p>Mensagem mostrada antes dos nomes serem exibidos para indicar o que o programa fará.</p>
<br>
<p>"Nomes em ordem crescente (A-Z):"
é o deploy em si</p>
<img width="264" height="470" alt="image" src="https://github.com/user-attachments/assets/1e950092-2ad9-404e-89cc-70b1d4ffe345" />


<p>Este é um laço de repetição do tipo for-each, usado para percorrer todos os elementos do array nomes.</p>
<br>
<p>String nome, cria uma variável chamada nome que vai guardar, a cada volta do laço, um dos nomes do array.</p>
<br>
<p>": nomes" indica que o laço deve percorrer todos os elementos do array nomes.</p>
<br>
<p>O laço funciona assim</p>
<br>
<p>Pega o primeiro nome do vetor (Ana) e guarda em nome.</p>
<br>
<p>Executa o que está dentro das chaves.</p>
<br>
<p>Mostra esse nome na tela (System.out.println(nome);).</p>
<br>
<p>Vai para o próximo nome do vetor e repete até o final.</p>
<img width="722" height="181" alt="image" src="https://github.com/user-attachments/assets/49c35fea-df85-4bfe-a829-46a8d87d0518" />
<p> Arrays.sort(nomes, Collections.reverseOrder()); inverte a ordem de comparação (para decrescente). </p>
<br>
<br>
<p>Deploy</p>
<img width="404" height="370" alt="image" src="https://github.com/user-attachments/assets/07105a44-9e9a-4724-aa41-6097d0fec06a" />
" />
<br>
<br>
<h2>Números pares e ímpares</h2>
<img width="344" height="40" alt="image" src="https://github.com/user-attachments/assets/415661db-2767-4c81-a894-aeaff4e23624" />

<p>Cria um vetor (array) chamado numeros que pode guardar 10 valores inteiros.</p>
<img width="340" height="42" alt="image" src="https://github.com/user-attachments/assets/b2281b85-a6fd-449b-8c80-25b17bbd2873" />

<p>Cria outro vetor, chamado pares, também com 10 posições.</p>
<img width="287" height="40" alt="image" src="https://github.com/user-attachments/assets/83d3c869-169e-45d7-a8de-65b6a21a0c6f" />

<p>Cria uma variável para contar quantos números pares foram encontrados até agora.</p>
<p>o programa precisa saber em qual posição guardar o próximo número par dentro do vetor pares.</p>
<img width="585" height="111" alt="image" src="https://github.com/user-attachments/assets/12917ff3-a6a4-45f3-a9e8-8a7b4c4db12c" />

<p>Cria um laço de repetição que vai se repetir 10 vezes, porque o vetor numeros tem 10 posições (numeros.length vale 10).O i++ aumenta o número a cada repetição</p>

<p>i + 1) serve para mostrar “Número 1”, “Número 2”, ... até “Número 10”,
em vez de começar do 0 (porque o computador começa em 0, mas as pessoas contam a partir do 1).</p>
<img width="503" height="139" alt="image" src="https://github.com/user-attachments/assets/22053ea4-5f8e-4884-a511-73fbfd429529" />

<p>O operador % calcula o resto da divisão por 2.

Se o resto for 0 (== 0), o número é par.Se o número é par ele é guardado no vetor "pares" e aumenta o número do contador</p>
<img width="507" height="95" alt="image" src="https://github.com/user-attachments/assets/4b9040a9-855b-4799-bbe0-979251540f0b" />

<p>Exibe a mensagem “Números pares:” na tela.</p>

<p>Cria um laço que vai percorrer apenas os números pares encontrados.</p>
<br>
<p>int i = 0, começa na posição 0 do vetor pares.</p>
<br>
<p>i < contadorPares, repete enquanto i for menor que a quantidade de pares encontrados.</p>
<br>
<p>i++ → aumenta i a cada volta do laço.</p>

<p>Exemplo</p>
<p>Se o usuário digitou 10 números e 4 deles são pares, então contadorPares = 4, e o laço rodará 4 vezes.</p>
<br>
<p>Mostra na tela o número par armazenado na posição i do vetor pares.</p>
<br>
<br>
<p>Deploy</p>
<img width="264" height="470" alt="image" src="https://github.com/user-attachments/assets/228d5301-bdf0-4857-b5c2-c8bf26dbb474"/>

<h2>Números ímpares</h2>
<p>Esta é única diferença deste código para o de números pares é o verficador de número ímpar:</p>
<img width="536" height="121" alt="image" src="https://github.com/user-attachments/assets/581e8296-69eb-452f-b9ab-578d866861c0"/>

<p> o verificador de número ímpares é diferente que faz só mostrar números ímpares no deploy, mas a lógica é a mesma</p>
<br>
<br>
<p>Deploy</p>
<img width="311" height="448" alt="image" src="https://github.com/user-attachments/assets/4078f562-68e9-48b5-b900-e238dcda8fe7" />
"/>
