package com.mycompany.matrizrepetidos;
import java.util.Scanner;
import java.util.HashSet;

/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */

public class MatrizRepetidos {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int linhas = 3;
        int colunas = 5;
        int[][] matriz = new int[linhas][colunas];

        // Preenchendo a matriz
        System.out.println("Digite os valores da matriz 3x5:");
        for (int i = 0; i < linhas; i++) {
            for (int j = 0; j < colunas; j++) {
                System.out.print("Elemento [" + i + "][" + j + "]: ");
                matriz[i][j] = sc.nextInt();
            }
        }

        // Variáveis para contagem
        int pares = 0;
        int impares = 0;

        // Estrutura para identificar repetidos
        HashSet<Integer> conjunto = new HashSet<>();
        boolean possuiRepetidos = false;

        // Processando a matriz
        for (int i = 0; i < linhas; i++) {
            for (int j = 0; j < colunas; j++) {
                int valor = matriz[i][j];

                // Verifica repetição
                if (conjunto.contains(valor)) {
                    possuiRepetidos = true;
                } else {
                    conjunto.add(valor);
                }

                // Contagem de pares e ímpares
                if (valor % 2 == 0) {
                    pares++;
                } else {
                    impares++;
                }
            }
        }

        // Resultados
        System.out.println("\nRESULTADOS:");
        System.out.println("A matriz possui elementos repetidos? " + (possuiRepetidos ? "Sim" : "Não"));
        System.out.println("Quantidade de números pares: " + pares);
        System.out.println("Quantidade de números ímpares: " + impares);

        sc.close();
    }
}
