package com.mycompany.numerosimpares;

import java.util.Scanner;// Importa a classe Scanner

public class NumerosImpares {
    public static void main(String[] args) { 
        Scanner input = new Scanner(System.in);  // Cria o objeto Scanner para ler entradas do usuário
        int[] numeros = new int[100];  // Declara um vetor de 100 inteiros para guardar os números digitados
        int[] impares = new int[100];  // Declara um vetor de 100 inteiros para armazenar os números ímpares encontrados
        int contadorImpares = 0;  // Variável para contar a quantidade de números ímpares encontrados

        System.out.println("Digite 100 números:");  // Mensagem solicitando para o usuário digitar 100 números
        for (int i = 0; i < numeros.length; i++) {  // Laço de repetição que vai de 0 até 99 (100 iterações)
            System.out.print("Número: " + (i + 1) + ": ");  // Exibe a mensagem pedindo para o usuário digitar o número (i + 1 para começar de 1)
            numeros[i] = input.nextInt();  // Lê o número digitado e o armazena no vetor 'numeros' na posição 'i'

            // Verifica se o número é ímpar. O operador % calcula o módulo
            if (numeros[i] % 2 != 0) {  // Se o número não for divisível por 2 (ou seja, for ímpar)
                impares[contadorImpares] = numeros[i];  // Armazena o número ímpar no vetor 'impares' na posição 'contadorImpares'
                contadorImpares++;  // Incrementa o contador de ímpares para que o próximo ímpar seja armazenado na próxima posição
            }
        }

        System.out.println("Números Ímpares:");  // Exibe a mensagem informando que os números ímpares serão mostrados
        for (int i = 0; i < contadorImpares; i++) {  // Laço que vai até o número de ímpares encontrados
            System.out.println(impares[i]);  // Exibe cada número ímpar armazenado no vetor 'impares'
        }
    }
}