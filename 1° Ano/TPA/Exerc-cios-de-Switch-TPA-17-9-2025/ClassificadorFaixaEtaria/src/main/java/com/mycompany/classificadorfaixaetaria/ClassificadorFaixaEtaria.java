package com.mycompany.classificadorfaixaetaria;
import java.util.Scanner;
//Código feito por DouglasSoaresSilva - Professor Marcelo Collado
public class ClassificadorFaixaEtaria {

    public static void main(String[] args) {
       Scanner sc = new Scanner(System.in);

        // Pedir idade do usuário
        System.out.print("Digite sua idade: ");
        int idade = sc.nextInt();

        int faixa = 0; // variável para armazenar código da faixa etária

        // Usar if/else para definir a faixa
        if (idade >= 0 && idade <= 12) {
            faixa = 1;
        } else if (idade >= 13 && idade <= 17) {
            faixa = 2;
        } else if (idade >= 18 && idade <= 59) {
            faixa = 3;
        } else if (idade >= 60) {
            faixa = 4;
        } else {
            faixa = -1; // idade inválida
        }

        // Usar switch para imprimir a faixa correspondente
        switch (faixa) {
            case 1:
                System.out.println("Criança");
                break;
            case 2:
                System.out.println("Adolescente");
                break;
            case 3:
                System.out.println("Adulto");
                break;
            case 4:
                System.out.println("Idoso");
                break;
            default:
                System.out.println("Idade inválida!");
        }

        sc.close();
    }
}
