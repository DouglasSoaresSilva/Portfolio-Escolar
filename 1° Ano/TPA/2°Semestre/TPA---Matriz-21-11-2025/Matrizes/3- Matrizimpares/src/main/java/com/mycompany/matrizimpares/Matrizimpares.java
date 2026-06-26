package com.mycompany.matrizimpares;

import java.util.Scanner; // Declara a classe scanner

/**
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class Matrizimpares {
    public static void main(String[] args) {
        // Criando o objeto Scanner para ler a entrada do usuário
        Scanner scanner = new Scanner(System.in);
        
        // Definindo as dimensões da matriz (5x5)
        int[][] matriz = new int[5][5];
        
        // Variáveis para armazenar soma dos ímpares e quantidade dos ímpares
        int somaImpares = 0;
        int quantidadeImpares = 0;
        
        // Preenchendo a matriz com os valores inseridos pelo usuário
        System.out.println("Digite os 25 valores para a matriz 5x5:");
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.printf("Digite o valor para a posição [%d][%d]: ", i, j);
                matriz[i][j] = scanner.nextInt(); // Não há verificação de erro aqui
                
                // Verificando se o número é ímpar
                if (matriz[i][j] % 2 != 0) {
                    somaImpares += matriz[i][j];
                    quantidadeImpares++;
                }
            }
        }
        
        // Exibindo a soma dos números ímpares
        System.out.println("\nA soma dos números ímpares digitados é: " + somaImpares);
        
        // Soma das linhas
        System.out.println("\nSoma de cada linha:");
        for (int i = 0; i < 5; i++) {
            int somaLinha = 0;
            for (int j = 0; j < 5; j++) {
                somaLinha += matriz[i][j];
            }
            System.out.println("Soma da linha " + (i + 1) + ": " + somaLinha);
        }

        // Soma das colunas
        System.out.println("\nSoma de cada coluna:");
        for (int j = 0; j < 5; j++) {
            int somaColuna = 0;
            for (int i = 0; i < 5; i++) {
                somaColuna += matriz[i][j];
            }
            System.out.println("Soma da coluna " + (j + 1) + ": " + somaColuna);
        }

        // Fecha o scanner
        scanner.close();
    }
}
