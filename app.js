// Función que permite al chatbot responder a las preguntas del usuario
function talk() {
	// Objeto que contiene preguntas y respuestas predefinidas para el chatbot
	var know = {
		'¿Quién eres?': 'Hola, soy Chatbot de Isabella EA ',
		'¿Cómo estás?': 'Bien :)',
		'¿Cuántos seguidores tienes?':
			'Tengo mi familia de 200000 miembros, no tengo seguidores, tengo una familia de apoyo ',
		ok: 'Muchas gracias ',
		Bye: '¡De acuerdo! Nos vemos pronto..',
	};

	// Obtiene el valor de la pregunta del usuario desde el elemento de entrada
	var user = document.getElementById('userBox').value;

	// Muestra la pregunta del usuario en el elemento de chat
	document.getElementById('chatLog').innerHTML = user + '<br>';

	// Si la pregunta del usuario está en el objeto know, muestra la respuesta correspondiente
	if (user in know) {
		document.getElementById('chatLog').innerHTML = know[user] + '<br>';
	} else {
		// Si la pregunta del usuario no está en el objeto know, muestra un mensaje de error
		document.getElementById('chatLog').innerHTML = 'Lo siento, no entendí <br>';
	}
}
