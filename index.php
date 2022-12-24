<?php

/**
 * Chatbot con Javascript
 *
 * Este chatbot permite a los usuarios hacer preguntas y recibir respuestas automatizadas.
 *
 * Tabla de contenido:
 * - Declaración de tipo de documento para HTML5
 * - Elemento raíz del documento HTML y especificación del idioma del documento
 * - Contiene información sobre el documento que no se muestra directamente en la página
 * - Especifica la codificación de caracteres del documento
 * - Especifica la compatibilidad del documento con Internet Explorer
 * - Proporciona información sobre la vista del documento
 * - Especifica el título del documento
 * - Proporciona información sobre una hoja de estilos externa que se debe aplicar al documento
 * - Incluye las etiquetas de metadatos para el SEO
 * - Incluye las etiquetas de metadatos para las redes sociales
 * - Contiene el contenido del documento
 * - Contenedor para el contenido del chatbot
 * - Encabezado principal
 * - Encabezado secundario
 * - Contenedor para el input del usuario
 * - Input para el usuario
 * - Párrafo para mostrar las respuestas del chatbot
 * - Incluye el archivo JavaScript con la lógica del chatbot
 *
 * @author Alexander Oviedo Fadul
 * @copyright Isabella EA
 * @version 1.0.0
 * @license MIT
 * @package Chatbot con Javascript
 *  
 */
?>
<!-- Declaración de tipo de documento para HTML5 -->
<!DOCTYPE html>
<!-- Elemento raíz del documento HTML y especificación del idioma del documento -->
<html lang="es">
<!-- Contiene información sobre el documento que no se muestra directamente en la página -->

<head>
    <!-- Especifica la codificación de caracteres del documento -->
    <meta charset="UTF-8" />
    <!-- Especifica la compatibilidad del documento con Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Proporciona información sobre la vista del documento -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Especifica el título del documento -->
    <title>Chatbot con Javascript</title>
    <!-- Proporciona información sobre una hoja de estilos externa que se debe aplicar al documento -->
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="favicon.svg" />
    <!-- Incluye las etiquetas de metadatos para el SEO -->
    <!-- Palabras clave para el sitio -->
    <meta name="keywords" content="chatbot, preguntas, respuestas, javascript" />
    <!-- Descripción del sitio -->
    <meta name="description" content="Un chatbot que te ayudará a hacer preguntas y obtener respuestas rápidas." />
    <!-- Indicación de que el sitio es seguido por los motores de búsqueda -->
    <meta name="robots" content="index,follow" />
    <!-- Indicación de la autoría del sitio -->
    <meta name="author" content="Alexander Oviedo Fadul" />
    <!-- Incluye las etiquetas de metadatos para las redes sociales -->
    <!-- Facebook -->
    <meta property="og:title" content="Chatbot con Javascript" />
    <meta property="og:site_name" content="Chatbot con Javascript" />
    <meta property="og:url" content="https://isabellaea.com/Baul/Chatbot" />
    <meta property="og:description"
        content="Un chatbot que te ayudará a hacer preguntas y obtener respuestas rápidas." />
    <meta property="og:image" content="https://isabellaea.com/Baul/Chatbot/fondo.jpg" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Chatbot con Javascript" />
    <meta name="twitter:description"
        content="Un chatbot que te ayudará a hacer preguntas y obtener respuestas rápidas." />
    <meta name="twitter:image" content="https://isabellaea.com/Baul/Chatbot/fondo.jpg" />
</head>
<!-- Contiene el contenido del documento -->

<body>
    <!-- Contenedor para el contenido del chatbot -->
    <div class="glass">
        <!-- Encabezado principal -->
        <h1>¿Tienes alguna pregunta?</h1>
        <!-- Encabezado secundario -->
        <h2>Sí, haz alguna pregunta</h2>
        <!-- Contenedor para el campo de entrada del usuario -->
        <div class="input">
            <!-- Campo de entrada del usuario con una función JavaScript que se ejecuta cuando se presiona la tecla Enter -->
            <input type="text" id="userBox" onkeydown="if(event.keyCode == 13){ talk()}"
                placeholder="Escriba su pregunta" />
        </div>
        <!-- Elemento donde se mostrará la respuesta del chatbot -->
        <p id="chatLog"></p>
    </div>
    <!-- Inclusión de un archivo JavaScript que contiene el código del chatbot -->
    <script src="app.js"></script>

</body>

</html>