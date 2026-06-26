package com.mycompany.matrizmedia;
import java.util.Scanner; //Declara a classe scanner
/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class Matrizmedia {
    public static void main(String[] args) {
        // Criando o objeto Scanner para ler a entrada do usuário
        Scanner scanner = new Scanner(System.in);
        
        // Definindo as dimensões e declarando as variáveis que serão utilizadas na matriz para a exibição da média e da soma
        int[][] matriz = new int[4][4];
        int somaPares = 0;
        int quantidadePares = 0;
        
        // Preenchendo a matriz com os valores inseridos pelo usuário
        System.out.println("Digite os 16 valores para a matriz 4x4:");
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                System.out.printf("Digite o valor para a posição [%d][%d]: ", i, j);
                matriz[i][j] = scanner.nextInt();
                
                // Verificando se o número é par e, caso for par, somando-o e aumentando a quantidade de números pares
                if (matriz[i][j] % 2 == 0) {
                    somaPares += matriz[i][j];
                    quantidadePares++;
                }
            }
        }
        double mediaPares;
        if (quantidadePares > 0) {
           mediaPares = (double) somaPares / quantidadePares;
            } else {
           mediaPares = 0;
        }
        // Exibindo a soma e a média dos números pares
        System.out.println("A soma dos números pares digitados é: " + somaPares);
        System.out.println ("A média dos números pares digitados é: " + mediaPares);
        // Fecha o scanner
        scanner.close();
    }
}

