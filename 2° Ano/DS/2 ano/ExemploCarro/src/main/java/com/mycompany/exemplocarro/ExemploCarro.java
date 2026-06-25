package com.mycompany.exemplocarro;
/**
 * @author Douglas Soares
 */

//Declara a classe principal que executa o programa
public class ExemploCarro {
    public static void main(String[] args) {
        //Criando uma instância da classe Carro
        //O tipo é 'Carro' e o construtor é 'Carro()'
        Carro umCarro = new Carro();

        umCarro.modelo = "Kwid";
        umCarro.cor = "Azul";
        umCarro.motor = "1.0";
        
        //Executando os métodos do objeto
        umCarro.ligar();
        umCarro.mudarMarcha();
        umCarro.acelerar();
        umCarro.brecar();
        umCarro.desligar();
        System.out.println(umCarro.modelo);
        System.out.println(umCarro.cor);
        System.out.println(umCarro.motor);
  }
}