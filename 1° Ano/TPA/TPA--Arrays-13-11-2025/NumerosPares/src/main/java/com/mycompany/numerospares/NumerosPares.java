package com.mycompany.numerospares;
import java.util.Scanner;// Importa a classe Scanner 

public class NumerosPares {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);  // Criação de um objeto Scanner para ler entradas do usuário
        int[] numeros = new int[100];  // Declara um vetor de 100 números inteiros para armazenar os números digitados
        int[] pares = new int[100];  // Declara um vetor de 100 números inteiros para armazenar os números pares encontrados
        int contadorPares = 0;  // Variável para contar a quantidade de números pares

        System.out.println("Digite 100 números:");  // Mensagem solicitando para o usuário digitar 100 números
        for (int i = 0; i < numeros.length; i++) {  // Laço de repetição que vai de 0 até 99 (100 iterações)
            System.out.print("Número: " + (i + 1) + ": ");  // Exibe a mensagem pedindo para o usuário digitar o número (i + 1 para começar de 1)
            numeros[i] = input.nextInt();  // Lê o número digitado e o armazena no vetor 'numeros' na posição 'i'

            // Verifica se o número é par. O operador % calcula o módulo da divisão.
            if (numeros[i] % 2 == 0) {  // Se o número for divisível por 2 (se for par)
                pares[contadorPares] = numeros[i];  // Armazena o número par no vetor 'pares' na posição 'contadorPares'
                contadorPares++;  // Incrementa o contador para que o próximo número par seja armazenado na próxima posição
            }
        }

        System.out.println("Números Pares:");
        for (int i = 0; i < contadorPares; i++) {  // Laço que vai até o número de pares encontrados
            System.out.println(pares[i]);  // Exibe cada número par armazenado no vetor 'pares'
        }
    }
}