// Función que permite al chatbot responder a las preguntas del usuario
function talk() {
	// Objeto que contiene preguntas y respuestas predefinidas para el chatbot
	var know = {
		'¿Quién eres?': 'Hola, soy el chatbot de Isabella EA',
		'¿Cómo estás?': 'Bien, gracias :)',
		'¿Qué puedo hacer por ti?':
			'Puedes buscar a Isabella EA en Google >> Gracias más tarde',
		'¿Cuántos seguidores tienes?':
			'Tengo una familia de 200000 miembros, no tengo seguidores, tengo una familia apoyadora',
		'Buen trabajo': 'Gracias, ¡hasta luego!',
		'¿Qué pasa?': '¡Hola de nuevo! ¿En qué puedo ayudarte hoy?',
		'¿De dónde eres?':
			'Soy un chatbot, así que no tengo un lugar de origen específico',
		'¿Qué te gusta hacer?':
			'Me gusta ayudar a las personas a hacer preguntas y obtener respuestas rápidas',
		'¿Cuál es tu edad?': 'No tengo edad, soy un chatbot',
		'¿Tienes una familia?':
			'Sí, tengo una familia de 200000 miembros en Isabella EA',
		'¿Cómo puedo contactarte?':
			'Puedes contactarme a través de la página de Isabella en Google',
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
