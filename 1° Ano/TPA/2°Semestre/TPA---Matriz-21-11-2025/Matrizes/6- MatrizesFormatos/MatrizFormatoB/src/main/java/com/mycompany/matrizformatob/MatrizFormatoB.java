package com.mycompany.matrizformatob;
/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class MatrizFormatoB {
    public static void main(String[] args) {
        // Definindo uma matriz 4x4
        char[][] matriz = new char[4][4];

        // Preenchendo a matriz de maneira que ela tenha bordas com '*' e o interior vazio
        // Para isso, verificamos as bordas e preenchemos com '*' e os outros espaços com ' '
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                // Verificamos se estamos nas bordas (primeira ou última linha/coluna)
                if (i == 0 || i == 3 || j == 0 || j == 3) {
                    matriz[i][j] = '*'; // Nas bordas, é colocado '*'
                } else {
                    matriz[i][j] = ' '; // No meio, é colocado um espaço em branco
                }
            }
        }

        // Exibindo a matriz linha por linha
        // A ideia aqui é imprimir cada linha da matriz com um espaço entre os caracteres
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                System.out.print(matriz[i][j] + " "); // Imprime cada caractere seguido de um espaço
            }
            System.out.println(); // Quebra de linha para passar para a próxima linha da matriz
        }
    }
}
