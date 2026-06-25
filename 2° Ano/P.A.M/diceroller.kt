package com.example.diceroller

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.Image
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.wrapContentSize
import androidx.compose.material3.Button
import androidx.compose.material3.Text
import androidx.compose.material3.TextField
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.res.painterResource
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.diceroller.ui.theme.DicerollerTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            DicerollerTheme {
                DicerollerApp()
            }
        }
    }
}

@Composable
fun DicerollerApp() {
    DiceWithButtonAndImage(
        modifier = Modifier
            .fillMaxSize()
            .wrapContentSize(Alignment.Center)
    )
}

@Composable
fun DiceWithButtonAndImage(modifier: Modifier = Modifier) {
    var diceResult by remember { mutableStateOf(1) }
    var guessText by remember { mutableStateOf("") }
    var feedbackMessage by remember { mutableStateOf("") }

    val imageResource = when (diceResult) {
        1 -> R.drawable.dice_1
        2 -> R.drawable.dice_2
        3 -> R.drawable.dice_3
        4 -> R.drawable.dice_4
        5 -> R.drawable.dice_5
        else -> R.drawable.dice_6
    }

    Column(
        modifier = modifier.padding(16.dp),
        horizontalAlignment = Alignment.CenterHorizontally
    ) {
        Image(
            painter = painterResource(imageResource),
            contentDescription = "Face do dado mostrando o número $diceResult"
        )

        Spacer(modifier = Modifier.height(16.dp))

        TextField(
            value = guessText,
            onValueChange = { guessText = it },
            label = { Text("Seu palpite (1-6)") },
            singleLine = true
        )

        Spacer(modifier = Modifier.height(8.dp))

        Button(onClick = {
            val guess = guessText.toIntOrNull()
            if (guess == null || guess !in 1..6) {
                feedbackMessage = "Palpite inválido! Digite um número entre 1 e 6."
            } else {
                val roll = (1..6).random()
                diceResult = roll
                feedbackMessage = if (guess == roll) {
                    "🎉 Acertou! O dado caiu em $roll."
                } else {
                    "❌ Errou! Você disse $guess, mas o dado caiu em $roll."
                }
            }
        }) {
            Text(text = "Rolar", fontSize = 24.sp)
        }

        Spacer(modifier = Modifier.height(16.dp))

        Text(
            text = feedbackMessage,
            fontSize = 18.sp
        )
    }
}

@Preview(showBackground = true)
@Composable
fun PreviewDiceWithButtonAndImage() {
    DicerollerTheme {
        DiceWithButtonAndImage()
    }
}
