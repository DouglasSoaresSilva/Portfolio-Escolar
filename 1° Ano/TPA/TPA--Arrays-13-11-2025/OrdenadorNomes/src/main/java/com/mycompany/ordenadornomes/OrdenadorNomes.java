package com.mycompany.ordenadornomes;

import java.util.Arrays;
import java.util.Collections;

public class OrdenadorNomes {
    public static void main(String[] args) {
       
        String[] nomes = {"Jorge", "Ezio", "João", "Mariana", "Sofia", "Carlos"}; //Array de strings, cada string é um nome.
       
        Arrays.sort(nomes);  //O arrays.sort coloca as palavras na ordem do alfabeto, considerando as letras maiúsculas e minúsculas. (A-Z)
        System.out.println("Nomes em ordem crescente:");
        for (String nome : nomes) { //O laço for percorre os elementos do Array e imprime na tela 
            System.out.println(nome);
        }

    
        Arrays.sort(nomes, Collections.reverseOrder()); //mesma funcionalidade do array.sort, porém aqui ele inverte os nomes em ordem decrescente, de Z-A
        System.out.println("Os nomes em ordem decrescente:");
        for (String nome : nomes) {
            System.out.println(nome);
        }
    }
}