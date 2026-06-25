package com.mycompany.bhaskara;
import java.util.Scanner;
//Código feito por DouglasSoaresSilva - Professor Carlos Alberto
public class Bhaskara{

    public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
           
        //Le a entrada dos valores inicial e o valor final
        System.out.print("Calcule a fórmula de Bháskara: ");
        System.out.print("Digite o valor 'a': ");
        double a = sc.nextDouble();
        System.out.print("Digite o valor 'b': ");
        double b = sc.nextDouble();
        System.out.print("Digite o valor 'c': ");
        double c = sc.nextDouble();
        
        //Calcula o Delta
        double delta = Math.pow(b, 2) - (4 * a * c);
        
        //Calcula a forma de Bhaskara após o usuario fornecer os dados.
        double x1 = (-b + Math.sqrt(delta)) / (2*a);
        double x2 = (-b - Math.sqrt(delta)) / (2*a);

        // Exibe o resultado
        System.out.println("A fórmula de Bháskara é:");
        System.out.println("X1: " + x1);
        System.out.println("X2: " + x2);
        sc.close(); //Fecha o Scanner
    }
}