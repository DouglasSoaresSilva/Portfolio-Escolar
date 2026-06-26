package com.mycompany.matrizformatoa;
/**
 *
 * Código feito por Douglas Soares Silva, no dia 19/11 de 2025 requisitado pelo professor Marcello Collado
 */
public class MatrizFormatoA {
    public static void main(String[] args) {
        // Definindo uma matriz 4x4, onde cada célula armazenará um caractere
        char[][] matriz = new char[4][4];

        // Preenchendo a matriz com '*' para formar um quadrado completo
        // Usamos dois laços aninhados para percorrer cada célula da matriz
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                matriz[i][j] = '*';  // Em cada célula, colocamos o caractere '*'
            }
        }

        // Exibindo a matriz linha por linha
        // Usamos outro par de laços para imprimir cada linha da matriz
        for (int i = 0; i < 4; i++) {
            for (int j = 0; j < 4; j++) {
                System.out.print(matriz[i][j] + " "); // Imprime cada caractere seguido de um espaço
            }
            System.out.println();  // Após cada linha, faz uma quebra de linha
        }
    }
}
