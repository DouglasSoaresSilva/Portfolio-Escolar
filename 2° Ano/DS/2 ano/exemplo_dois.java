import javax.swing.JOptionPane;
public class exemplo_dois {
    public static void main(String[] args) {
        int t;      // Declara uma variável inteira 't' para armazenar o tamanho da palavra
        String p;   // Declara uma variável do tipo String 'p' para armazenar a palavra digitada

        // Chama o método personalizado 'digite' que mostra uma instrução inicial para o usuário digitar
        digite();

        // Abre uma caixa de entrada para o usuário digitar algo e guarda o texto na variável 'p'
        p = JOptionPane.showInputDialog("Digite uma palavra qualquer: ");

        // Chama o método 'tamanho', passando a palavra 'p' como argumento
        // O resultado (o número de caracteres) é guardado na variável 't'
        t = tamanho(p);

        // Exibe uma caixa de mensagem final mostrando a palavra e a quantidade de caracteres
        JOptionPane.showMessageDialog(null, p + " possui " + t + " caracteres");
    }

    // Método que recebe uma String 'x' e retorna um valor inteiro (int)
    static int tamanho(String x) {
        // O método .length() conta quantos caracteres existem na String
        return x.length();
    }
}