package com.mycompany.matrizdiagonal;
/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class MatrizDiagonal {
    public static void main(String[] args) {

        // Criação de uma matriz 4x4 de números decimais (double)
        double[][] matriz = new double[4][4];

        // Preenchendo a matriz com valores (exemplo: i + j * 0.1)
        // Você pode modificar essa lógica como quiser
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                matriz[i][j] = i + j * 0.1; 
            }
        }

        // Exibindo a matriz completa (opcional)
        System.out.println("Matriz 4x4:");
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                System.out.print(matriz[i][j] + "\t"); //ajuda a formatar a saída para ficar mais bonita e mais legível.
            }
            System.out.println();
        }

        // a) Exibir diagonal principal
        System.out.println("Diagonal Principal:");
        // A diagonal principal ocorre quando i == j
        for (int i = 0; i < 4; i++) {
            System.out.println(matriz[i][i]);
        }

        // b) Exibir diagonal secundária
        System.out.println("Diagonal Secundária:");
        // A diagonal secundária ocorre quando i + j == tamanho - 1 (no caso, 3)
        for (int i = 0; i < 4; i++) {
            int j = 3 - i;
            System.out.println(matriz[i][j]);
        }
    }
}
