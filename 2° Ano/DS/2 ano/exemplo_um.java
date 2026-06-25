import javax.swing.JOptionPane;
public class exemplo_um {

    public static void main(String[] args) {
        int a; // Declara uma variável inteira para armazenar o número digitado
        
        //Chama o método que apenas exibe um aviso na tela
        digite();
        
        /* 1. JOptionPane.showInputDialog: Abre uma janela para o usuário digitar algo (retorna Texto/String)
           2. Integer.parseInt: Converte esse texto digitado em um número inteiro
           3. Armazena o resultado na variável 'a'
        */
        a = Integer.parseInt(JOptionPane.showInputDialog("Digite um número: "));
        
        //Chama o método 'dobro' passando o valor de 'a' como argumento
        dobro(a);
    }

    // Método estático que não retorna valor (void) e apenas exibe uma mensagem de instrução
    static void digite() {
        JOptionPane.showMessageDialog(null, "Digite um número: ");
    }

    // Método que recebe um número inteiro 'n', calcula o dobro e exibe o resultado
    static void dobro(int n) {
        int d = n * 2; // Realiza o cálculo matemático
        
        // Exibe o resultado final concatenando texto com as variáveis n e d
        JOptionPane.showMessageDialog(null, "Dobro de " + n + " é " + d);
    }
}