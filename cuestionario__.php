<?php
// Define las preguntas del cuestionario, sus opciones y el índice de la respuesta correcta (basado en 0)
$quiz = [
    [
        'question' => 'Según el libro "Sistemas Operativos" de William Stallings, ¿por qué es fundamental tener conocimientos del hardware subyacente antes de estudiar los sistemas operativos?',
        'options' => [
            'Porque los sistemas operativos solo se ejecutan en hardware específico.',
            'Porque el sistema operativo explota los recursos de hardware del procesador para proporcionar servicios a los usuarios.',
            'Porque el hardware es más complejo que el software.',
            'Porque el diseño de sistemas operativos no ha cambiado en años.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuál de los siguientes no es un elemento básico del computador cuya comprensión es clave para el diseño de los sistemas operativos, según la fuente?',
        'options' => [
            'Registros del procesador',
            'Jerarquía de memoria',
            'Técnicas de comunicación de E/S',
            'Software de aplicación',
            'Interrupciones'
        ],
        'correct_index' => 3 // Corresponde a la opción 'd'
    ],
    [
        'question' => '¿Qué almacena el Contador de Programa (PC) dentro de los registros del procesador?',
        'options' => [
            'La dirección base de un segmento de memoria.',
            'El puntero a una rutina de tratamiento de interrupción.',
            'La dirección de la siguiente instrucción a leer.',
            'El estado actual de la operación de E/S.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Cuáles son las dos fases principales del ciclo de instrucción de un procesador?',
        'options' => [
            'Inicio y Parada.',
            'Compilación y Enlace.',
            'Búsqueda y Ejecución.',
            'Carga y Descarga.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Cuál es el propósito principal de las interrupciones en el contexto de la eficiencia del procesador?',
        'options' => [
            'Detener la ejecución del programa permanentemente.',
            'Permitir que el procesador realice otras tareas mientras espera que se complete una operación de E/S lenta.',
            'Recargar el sistema operativo en caso de error.',
            'Sincronizar la hora del sistema.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuál es el principal beneficio de las interrupciones para el procesador?',
        'options' => [
            'Reducen la necesidad de memoria principal.',
            'Aumentan significativamente la eficiencia del procesador al solapar la ejecución de instrucciones de usuario con las operaciones de E/S.',
            'Simplifican el diseño del hardware.',
            'Protegen la seguridad de los datos.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => 'En la jerarquía de memoria, ¿cómo se complementan las memorias más rápidas y caras?',
        'options' => [
            'Con memorias más lentas, baratas y grandes.',
            'Con memorias del mismo tipo, pero en mayor cantidad.',
            'Con memorias virtuales que no tienen coste físico.',
            'Con dispositivos de entrada/salida directamente conectados.'
        ],
        'correct_index' => 0 // Corresponde a la opción 'a'
    ],
    [
        'question' => '¿Cuál es la clave del éxito de la jerarquía de memoria, según la fuente?',
        'options' => [
            'El uso exclusivo de registros del procesador.',
            'La eliminación de la memoria principal.',
            'La disminución de la frecuencia de acceso a los niveles inferiores.',
            'La igualdad de velocidad entre todos los niveles de memoria.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => 'El Principio de Proximidad se divide en dos tipos. ¿Cuáles son?',
        'options' => [
            'Proximidad de CPU y Proximidad de GPU.',
            'Proximidad de Red y Proximidad de Disco.',
            'Proximidad espacial y Proximidad temporal.',
            'Proximidad lógica y Proximidad física.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => 'Si el tiempo medio de acceso a un sistema de memoria caché es `TS = T1 + (1 – A) * T2`, ¿qué representa \'A\' en esta fórmula?',
        'options' => [
            'El tiempo de acceso a la memoria principal.',
            'La capacidad total de la memoria caché.',
            'La tasa de aciertos (Hit Rate).',
            'El número de fallos de caché.',
            'La latencia del disco.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Cuál es uno de los propósitos principales del libro "Sistemas Operativos" de William Stallings?',
        'options' => [
            'Detallar exclusivamente el hardware de computadores.',
            'Presentar de la manera más clara y completa posible la naturaleza y características de los sistemas operativos actuales.',
            'Solo cubrir los sistemas operativos antiguos.',
            'Enseñar programación de aplicaciones.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuáles son los tres objetivos de diseño clave de un sistema operativo mencionados en la presentación?',
        'options' => [
            'Velocidad, tamaño y costo.',
            'Conveniencia, eficiencia y capacidad de evolución.',
            'Portabilidad, seguridad y privacidad.',
            'Conectividad, interactividad y estabilidad.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuál de las siguientes es una función principal del sistema operativo?',
        'options' => [
            'Diseñar nuevos componentes de hardware.',
            'Escribir el código para programas de usuario.',
            'Gestionar recursos y facilitar la ejecución de programas.',
            'Reparar fallos de hardware automáticamente.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Cuál fue un avance clave en la evolución de los sistemas operativos que permite a la CPU estar siempre ocupada ejecutando otro programa mientras uno espera por E/S?',
        'options' => [
            'La automatización manual.',
            'La multiprogramación.',
            'La computación en la nube.',
            'Los sistemas de un solo usuario.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => 'La memoria virtual permite a los programas direccionar la memoria desde un punto de vista:',
        'options' => [
            'Físico, sin importar la cantidad de memoria lógica disponible.',
            'Lógico, sin importar la cantidad de memoria física disponible.',
            'Directo, sin necesidad de direcciones.',
            'Temporal, solo para operaciones a corto plazo.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => 'En el funcionamiento de la memoria virtual, ¿en qué se dividen los procesos para su gestión?',
        'options' => [
            'En archivos ejecutables.',
            'En bloques de tamaño fijo llamados páginas.',
            'En secciones contiguas de memoria principal.',
            'En segmentos de código variable.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuál es el principal beneficio de la memoria virtual?',
        'options' => [
            'Permite el acceso directo a cualquier dispositivo de E/S.',
            'Permite que muchos procesos compartan una cantidad relativamente pequeña de memoria principal.',
            'Elimina la necesidad de almacenamiento secundario.',
            'Acelera la velocidad del procesador en sí mismo.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => 'En la estructura jerárquica del sistema operativo, ¿qué hace el Nivel 9 (Sistema de Ficheros)?',
        'options' => [
            'Gestiona la comunicación y mensajes entre procesos.',
            'Trata con la estructura lógica de los ficheros y operaciones de usuario.',
            'Interacciona con dispositivos externos como impresoras.',
            'Proporciona la interfaz al usuario.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cómo se conoce a menudo la interfaz del sistema operativo al usuario?',
        'options' => [
            'El Núcleo (Kernel).',
            'El Gestor de Memoria.',
            'El "Caparazón" (Shell).',
            'El Controlador de Dispositivos.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => 'Según la fuente, ¿qué característica de los sistemas operativos Windows XP y Windows Server 2003 se destaca en relación con su diseño?',
        'options' => [
            'Están basados exclusivamente en el lenguaje ensamblador.',
            'Incorporan pocos de los últimos desarrollos en tecnología de sistemas operativos.',
            'Están estrechamente basados en principios de diseño orientado a objetos.',
            'Son sistemas de un solo usuario y de una sola tarea.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Qué característica distintiva de Linux 2.6 se menciona en el contexto de procesos e hilos?',
        'options' => [
            'Linux no soporta hilos.',
            'No hay una distinción formal entre proceso e hilo; múltiples hilos pueden agruparse de tal forma que un único proceso contenga múltiples hilos.',
            'Cada hilo es un proceso completamente separado.',
            'Los procesos de Linux solo pueden tener un hilo.',
            'Linux no tiene procesos, solo hilos.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Cuál es la definición de un proceso según la Diapositiva 22?',
        'options' => [
            'Un programa compilado listo para su uso.',
            'Una instancia de un programa en ejecución.',
            'Un archivo de datos almacenado en disco.',
            'Un componente de hardware del sistema.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => 'En el modelo simple de dos estados de los procesos, ¿cuáles son esos dos estados?',
        'options' => [
            'Activo y Pasivo.',
            'En Línea y Fuera de Línea.',
            'Ejecutando y No Ejecutando.',
            'Cargando y Descargando.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Cuál es la estructura de datos fundamental que el sistema operativo mantiene para cada proceso, conteniendo información sobre su estado actual y ubicación en memoria?',
        'options' => [
            'La Tabla de Ficheros.',
            'El Registro de Eventos.',
            'El Bloque de Control de Programa (BCP).',
            'La Pila de Usuario.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => 'En el modelo de cinco estados de los procesos, el estado "Listo/Suspendido" indica que un proceso está:',
        'options' => [
            'Esperando un evento de E/S.',
            'En ejecución activa en el procesador.',
            'Listo para ejecutar, pero ha sido transferido a disco para liberar memoria principal.',
            'Completado y esperando ser terminado.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Qué proceso implica mover imágenes de procesos entre la memoria principal y el disco para gestionar el grado de multiprogramación?',
        'options' => [
            'Paginación.',
            'Segmentación.',
            'Swapping (Intercambio).',
            'Compilación.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Qué tipo de información NO se incluye explícitamente en las categorías de información del Bloque de Control de Proceso (BCP) según la fuente?',
        'options' => [
            'Identificación del proceso (PID).',
            'Información de estado del procesador (registros, PC, PSW).',
            'El código fuente original del programa.',
            'Información de control del proceso (datos de planificación, gestión de memoria, recursos).'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Qué componentes forman la "imagen" de un proceso en memoria, según la fuente?',
        'options' => [
            'Solamente el código ejecutable.',
            'El Bloque de Control de Proceso (BCP), una pila de usuario, un espacio de direcciones privado y cualquier espacio de direcciones compartido.',
            'Únicamente los datos de entrada y salida.',
            'Solo los registros del procesador.',
            'Los drivers de los dispositivos de hardware.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ],
    [
        'question' => '¿Qué tipo de tabla utiliza el sistema operativo para rastrear la asignación de memoria principal y virtual?',
        'options' => [
            'Tablas de E/S.',
            'Tablas de ficheros.',
            'Tablas de memoria.',
            'Tablas de procesos.'
        ],
        'correct_index' => 2 // Corresponde a la opción 'c'
    ],
    [
        'question' => '¿Qué es fundamental para que el sistema operativo pueda seguir la pista, gestionar y coordinar los procesos activos, y se utiliza para referenciar procesos en las distintas tablas y para la comunicación entre procesos (IPC)?',
        'options' => [
            'El nombre del usuario que ejecuta el proceso.',
            'El identificador numérico único asignado a cada proceso.',
            'El tamaño del proceso en disco.',
            'La prioridad del proceso en un momento dado.'
        ],
        'correct_index' => 1 // Corresponde a la opción 'b'
    ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario de Sistemas Operativos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 30px;
        }
        .question-block {
            background-color: #e9f5ff;
            border: 1px solid #cceeff;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 25px;
            position: relative; /* Para el posicionamiento del feedback */
        }
        .question-text {
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .options label {
            display: block;
            margin-bottom: 8px;
            cursor: pointer;
            padding: 5px;
            border-radius: 3px;
        }
        .options label:hover {
            background-color: #d9edf7;
        }
        .check-button {
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            transition: background-color 0.2s;
        }
        .check-button:hover {
            background-color: #0056b3;
        }
        .feedback {
            margin-top: 10px;
            font-weight: bold;
            padding: 8px;
            border-radius: 5px;
            display: inline-block; /* Para que se ajuste al contenido */
            margin-left: 10px;
        }
        .feedback.correct {
            color: #28a745;
            background-color: #d4edda;
        }
        .feedback.incorrect {
            color: #dc3545;
            background-color: #f8d7da;
        }
        .check-button[disabled] {
            background-color: #cccccc;
            cursor: not-allowed;
        }
        input[type="radio"]:checked + span {
            background-color: #cceeff; /* Resalta la opción seleccionada */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cuestionario de Sistemas Operativos</h1>
        <p>Selecciona una opción para cada pregunta y haz clic en "Verificar" para ver si es correcta.</p>

        <?php foreach ($quiz as $q_index => $question_data): ?>
            <div class="question-block" id="q_<?php echo $q_index; ?>" data-correct-index="<?php echo $question_data['correct_index']; ?>">
                <p class="question-text"><?php echo ($q_index + 1) . '. ' . htmlspecialchars($question_data['question']); ?></p>
                <div class="options">
                    <?php foreach ($question_data['options'] as $o_index => $option_text): ?>
                        <label>
                            <input type="radio" name="q_<?php echo $q_index; ?>" value="<?php echo $o_index; ?>">
                            <span><?php echo htmlspecialchars($option_text); ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="check-button">Verificar</button>
                <span class="feedback"></span>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Selecciona todos los botones de verificar
            const checkButtons = document.querySelectorAll('.check-button');

            checkButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const questionBlock = this.closest('.question-block'); // Encuentra el contenedor de la pregunta
                    const correctIndex = parseInt(questionBlock.dataset.correctIndex); // Obtiene el índice correcto de los datos del elemento
                    const feedbackSpan = questionBlock.querySelector('.feedback'); // Encuentra el span para el feedback
                    const radioButtons = questionBlock.querySelectorAll('input[type="radio"]'); // Encuentra todos los radios de esta pregunta

                    let selectedOption = null;
                    radioButtons.forEach(radio => {
                        if (radio.checked) {
                            selectedOption = parseInt(radio.value); // Obtiene el valor (índice) de la opción seleccionada
                        }
                        radio.disabled = true; // Deshabilita todos los radios para evitar cambios
                    });

                    this.disabled = true; // Deshabilita el botón de verificar

                    if (selectedOption === null) {
                        feedbackSpan.textContent = 'Por favor, selecciona una opción.';
                        feedbackSpan.className = 'feedback incorrect';
                    } else if (selectedOption === correctIndex) {
                        feedbackSpan.textContent = '¡Correcto!';
                        feedbackSpan.className = 'feedback correct';
                    } else {
                        // Muestra la respuesta incorrecta y la correcta
                        const correctAnswerText = questionBlock.querySelector(`input[value="${correctIndex}"] + span`).textContent;
                        feedbackSpan.textContent = 'Incorrecto. La respuesta correcta es: ' + correctAnswerText;
                        feedbackSpan.className = 'feedback incorrect';
                    }
                });
            });
        });
    </script>
</body>
</html>