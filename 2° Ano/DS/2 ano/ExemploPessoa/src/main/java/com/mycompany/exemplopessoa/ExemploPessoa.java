package com.mycompany.exemplopessoa;
/**
 * @author Douglas Soares
 */
// Classe principal que executa o programa
public class ExemploPessoa {
    public static void main(String[] args) {
        // Criando uma instância da classe Pessoa
        // O tipo é 'Pessoa' e o construtor é 'Pessoa()'
        Pessoa umaPessoa = new Pessoa();
        
        umaPessoa.nome = "Alberto";
        umaPessoa.sexo = "Masculino";
        umaPessoa.país = "Brasil";

        // Executando os métodos do objeto
        umaPessoa.pessoaAnda();
        umaPessoa.pessoaFala();
        umaPessoa.pessoaCorre();
        umaPessoa.pessoaEstuda();
        umaPessoa.pessoaBrinca();
        System.out.println(umaPessoa.nome);
        System.out.println(umaPessoa.sexo);
        System.out.println(umaPessoa.país);
        
  }
}