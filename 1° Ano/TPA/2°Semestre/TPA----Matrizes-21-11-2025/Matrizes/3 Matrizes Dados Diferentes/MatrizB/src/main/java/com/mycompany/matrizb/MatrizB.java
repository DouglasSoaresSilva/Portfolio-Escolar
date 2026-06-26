package com.mycompany.matrizb;
/**
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class MatrizB {
    public static void main(String[] args) {
        // Definindo a matriz 3x4
        int[][] matriz = {
            {19, 25, 100, 99},
            {10, 7, 25, 14},
            {35, 2, 47, 74}
        };
        // Exibindo a matriz
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                System.out.print(matriz[i][j] + " ");
            }
            System.out.println(); // Nova linha após cada linha da matriz
        }
    }
}