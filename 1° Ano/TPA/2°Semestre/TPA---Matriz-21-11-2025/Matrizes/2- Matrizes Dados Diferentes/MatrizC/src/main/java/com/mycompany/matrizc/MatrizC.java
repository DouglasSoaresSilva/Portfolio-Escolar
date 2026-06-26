package com.mycompany.matrizc;
/**
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class MatrizC {
    public static void main(String[] args) {
        // Definindo a matriz 3x3 de números decimais
        double[][] matriz = {
            {1.9, 2.5, 10.0},
            {1.0, 7.8, 2.5},
            {3.5, 2.2, 4.7}
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