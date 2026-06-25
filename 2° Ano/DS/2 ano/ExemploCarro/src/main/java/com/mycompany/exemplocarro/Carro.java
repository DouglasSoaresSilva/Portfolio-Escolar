package com.mycompany.exemplocarro;
/**
 *
 * @author Douglas Soares
 */
public class Carro {
    
    String modelo;
    String cor;
    String motor;
    
    void ligar() {
        System.out.println("Ligando o carro");
    }
    void desligar() {
        System.out.println("Desligando o carro");
    }
    void acelerar() {
        System.out.println("Acelerando o carro");
    }
    void brecar() {
        System.out.println("Brecando o carro");
    }
    void mudarMarcha() {
        System.out.println("Marcha engatada");
    }
}