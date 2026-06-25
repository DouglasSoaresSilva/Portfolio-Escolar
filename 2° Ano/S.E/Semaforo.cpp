// Definição dos pinos
const int LED_VERMELHO = 13;
const int LED_AMARELO = 12;
const int LED_VERDE = 11;

void setup() {
  // Configura os pinos como saídas
  pinMode(LED_VERMELHO, OUTPUT);
  pinMode(LED_AMARELO, OUTPUT);
  pinMode(LED_VERDE, OUTPUT);
}

void loop() {
  digitalWrite(LED_VERDE, HIGH);
  delay(5000); // 5 segundos
  digitalWrite(LED_VERDE, LOW);

  digitalWrite(LED_AMARELO, HIGH);
  delay(2000); // 2 segundos
  digitalWrite(LED_AMARELO, LOW);

  digitalWrite(LED_VERMELHO, HIGH);
  delay(5000); // 5 segundos
  digitalWrite(LED_VERMELHO, LOW);
}