package com.mycompany.matrizformatoc;
/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */

public class MatrizFormatoC {
    public static void main(String[] args) {

        // Matriz que representa a figura C (5 linhas x 5 colunas)
        char[][] matriz = {
            {'*', ' ', ' ', ' ', ' '},
            {'*', '*', ' ', ' ', ' '},
            {'*', '*', '*', ' ', ' '},
            {'*', '*', '*', '*', ' '},
            {'*', '*', '*', '*', '*'}
        };

        // Imprime a matriz
        for (int i = 0; i < matriz.length; i++) {
            for (int j = 0; j < matriz[i].length; j++) {
                System.out.print(matriz[i][j] + " ");
            }
            System.out.println();
        }
    }
}
