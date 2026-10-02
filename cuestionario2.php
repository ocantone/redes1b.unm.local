<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF="8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario Interactivo de Sistemas Operativos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f7f6;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
        }
        .question-container {
            background-color: #ecf0f1;
            border: 1px solid #ced4da;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        .question-container h3 {
            margin-top: 0;
            color: #34495e;
            font-size: 1.2em;
            line-height: 1.4;
        }
        .options label {
            display: block;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 1em;
            line-height: 1.5;
            padding: 5px 0;
            transition: background-color 0.2s ease;
        }
        .options label:hover {
            background-color: #e0e6e7;
            border-radius: 4px;
        }
        .options input[type="radio"] {
            margin-right: 10px;
            transform: scale(1.1);
        }
        .buttons {
            margin-top: 15px;
            text-align: right; /* Alinea los botones a la derecha */
        }
        .verify-btn, .reset-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-left: 10px; /* Espacio entre botones */
        }
        .verify-btn {
            background-color: #3498db;
            color: white;
        }
        .verify-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
        .verify-btn:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }
        .reset-btn {
            background-color: #e74c3c;
            color: white;
            display: none; /* Hidden by default */
        }
        .reset-btn:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        .feedback {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            text-align: left;
            min-height: 20px;
        }
        .explanation {
            margin-top: 10px;
            padding: 10px;
            background-color: #fdf6e3;
            border: 1px solid #f1c40f;
            border-radius: 5px;
            font-size: 0.95em;
            color: #5a5a5a;
            display: none;
        }
        .score-board {
            text-align: center;
            font-size: 1.3em;
            font-weight: bold;
            margin-bottom: 30px;
            padding: 15px;
            background-color: #27ae60;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        .score-board span {
            color: #f1c40f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cuestionario: Fundamentos y Procesos de Sistemas Operativos</h1>
        <div class="score-board">
            Respuestas Correctas: <span id="correct-answers-count">0</span> / <span id="total-questions"></span>
        </div>

        <?php
        // Definición del array de preguntas
        $quiz = [
            // Capítulo 1: Introducción a los Computadores
            [
                'question' => '¿Por qué es fundamental tener conocimientos del hardware subyacente antes de estudiar los sistemas operativos?',
                'options' => [
                    'a) Porque los sistemas operativos solo se ejecutan en hardware específico.',
                    'b) Porque el sistema operativo explota los recursos de hardware del procesador para proporcionar servicios a los usuarios.',
                    'c) Porque el hardware es más complejo que el software.',
                    'd) Porque el diseño de sistemas operativos no ha cambiado en años.'
                ],
                'correct' => 1,
                'explanation' => 'El conocimiento del hardware subyacente es crucial porque el sistema operativo está diseñado para explotar los recursos del procesador y proporcionar servicios a los usuarios, gestionando eficientemente el hardware subyacente.'
            ],
            [
                'question' => '¿Cuál de los siguientes no es un elemento básico del computador cuya comprensión es clave para el diseño de los sistemas operativos, según la fuente?',
                'options' => [
                    'a) Registros del procesador',
                    'b) Jerarquía de memoria',
                    'c) Técnicas de comunicación de E/S',
                    'd) Software de aplicación',
                    'e) Interrupciones'
                ],
                'correct' => 3, // "Software de aplicación" no es un elemento *básico* del computador clave para el diseño del SO.
                'explanation' => 'Los registros del procesador, la jerarquía de memoria, las técnicas de comunicación de E/S y las interrupciones son elementos de hardware fundamentales para el diseño de sistemas operativos. El software de aplicación, aunque se ejecuta sobre el SO, no es un elemento *básico* del hardware subyacente cuya comprensión sea clave para el *diseño* del SO en sí.'
            ],
            [
                'question' => '¿Qué almacena el Contador de Programa (PC) dentro de los registros del procesador?',
                'options' => [
                    'a) La dirección base de un segmento de memoria.',
                    'b) El puntero a una rutina de tratamiento de interrupción.',
                    'c) La dirección de la siguiente instrucción a leer.',
                    'd) El estado actual de la operación de E/S.'
                ],
                'correct' => 2,
                'explanation' => 'El Contador de Programa (PC) almacena la dirección de la siguiente instrucción que el procesador debe leer, lo que es fundamental para el flujo de ejecución del programa.'
            ],
            [
                'question' => '¿Cuáles son las dos fases principales del ciclo de instrucción de un procesador?',
                'options' => [
                    'a) Inicio y Parada.',
                    'b) Compilación y Enlace.',
                    'c) Búsqueda y Ejecución.',
                    'd) Carga y Descarga.'
                ],
                'correct' => 2,
                'explanation' => 'El ciclo de instrucción de un procesador consta de dos fases principales: la fase de búsqueda (fetch) de la instrucción y la fase de ejecución de esa instrucción.'
            ],
            [
                'question' => '¿Cuál es el propósito principal de las interrupciones en el contexto de la eficiencia del procesador?',
                'options' => [
                    'a) Detener la ejecución del programa permanentemente.',
                    'b) Permitir que el procesador realice otras tareas mientras espera que se complete una operación de E/S lenta.',
                    'c) Recargar el sistema operativo en caso de error.',
                    'd) Sincronizar la hora del sistema.'
                ],
                'correct' => 1,
                'explanation' => 'Las interrupciones permiten que el procesador no se quede inactivo mientras espera por operaciones de E/S lentas. En su lugar, puede cambiar a otra tarea, mejorando la eficiencia general del sistema.'
            ],
            [
                'question' => '¿Cuál es el principal beneficio de las interrupciones para el procesador?',
                'options' => [
                    'a) Reducen la necesidad de memoria principal.',
                    'b) Aumentan significativamente la eficiencia del procesador al solapar la ejecución de instrucciones de usuario con las operaciones de E/S.',
                    'c) Simplifican el diseño del hardware.',
                    'd) Protegen la seguridad de los datos.'
                ],
                'correct' => 1,
                'explanation' => 'El principal beneficio es que las interrupciones aumentan la eficiencia del procesador al permitirle superponer la ejecución de instrucciones de usuario con operaciones de E/S que de otro modo lo harían esperar.'
            ],
            [
                'question' => 'En la jerarquía de memoria, ¿cómo se complementan las memorias más rápidas y caras?',
                'options' => [
                    'a) Con memorias más lentas, baratas y grandes.',
                    'b) Con memorias del mismo tipo, pero en mayor cantidad.',
                    'c) Con memorias virtuales que no tienen coste físico.',
                    'd) Con dispositivos de entrada/salida directamente conectados.'
                ],
                'correct' => 0,
                'explanation' => 'La jerarquía de memoria funciona al complementar las memorias pequeñas, rápidas y caras (como los registros y la caché) con memorias más grandes, lentas y baratas (como la RAM y el disco), creando un sistema de memoria efectivo.'
            ],
            [
                'question' => '¿Cuál es la clave del éxito de la jerarquía de memoria, según la fuente?',
                'options' => [
                    'a) El uso exclusivo de registros del procesador.',
                    'b) La eliminación de la memoria principal.',
                    'c) La disminución de la frecuencia de acceso a los niveles inferiores.',
                    'd) La igualdad de velocidad entre todos los niveles de memoria.'
                ],
                'correct' => 2,
                'explanation' => 'La clave del éxito de la jerarquía de memoria reside en el Principio de Proximidad, que permite que la mayoría de los accesos se realicen a los niveles superiores y más rápidos de la jerarquía, reduciendo la necesidad de acceder a los niveles inferiores y más lentos.'
            ],
            [
                'question' => 'El Principio de Proximidad se divide en dos tipos. ¿Cuáles son?',
                'options' => [
                    'a) Proximidad de CPU y Proximidad de GPU.',
                    'b) Proximidad de Red y Proximidad de Disco.',
                    'c) Proximidad espacial y Proximidad temporal.',
                    'd) Proximidad lógica y Proximidad física.'
                ],
                'correct' => 2,
                'explanation' => 'El Principio de Proximidad, fundamental para la eficiencia de la jerarquía de memoria, se divide en proximidad espacial (tendencia a acceder a elementos cercanos a los que se han accedido recientemente) y proximidad temporal (tendencia a acceder a los mismos elementos repetidamente en poco tiempo).'
            ],
            [
                'question' => 'Si el tiempo medio de acceso a un sistema de memoria caché es TS = T1 + (1 – A) * T2, ¿qué representa \'A\' en esta fórmula?',
                'options' => [
                    'a) El tiempo de acceso a la memoria principal.',
                    'b) La capacidad total de la memoria caché.',
                    'c) La tasa de aciertos (Hit Rate).',
                    'd) El número de fallos de caché.',
                    'e) La latencia del disco.'
                ],
                'correct' => 2,
                'explanation' => 'En la fórmula del tiempo medio de acceso a la caché, \'A\' representa la tasa de aciertos (Hit Rate), que es la proporción de veces que los datos solicitados se encuentran en la caché.'
            ],
            // Capítulo 2: Introducción a los Sistemas Operativos
            [
                'question' => '¿Cuál de las siguientes afirmaciones describe mejor un objetivo fundamental al estudiar los sistemas operativos contemporáneos?',
                'options' => [
                    'a) Detallar exclusivamente el hardware de computadores.',
                    'b) Presentar de la manera más clara y completa posible la naturaleza y características de los sistemas operativos actuales.',
                    'c) Solo cubrir los sistemas operativos antiguos y su evolución',
                    'd) Enseñar programación de aplicaciones y entornos de aplicación.'
                ],
                'correct' => 1,
                'explanation' => 'El propósito principal del libro de su estudio es proporcionar una comprensión clara y completa de los sistemas operativos modernos, cubriendo su naturaleza y características fundamentales.'
            ],
            [
                'question' => '¿Cuáles son los tres objetivos de diseño clave de un sistema operativo mencionados en la presentación?',
                'options' => [
                    'a) Velocidad, tamaño y costo.',
                    'b) Conveniencia, eficiencia y capacidad de evolución.',
                    'c) Portabilidad, seguridad y privacidad.',
                    'd) Conectividad, interactividad y estabilidad.'
                ],
                'correct' => 1,
                'explanation' => 'Los tres objetivos principales en el diseño de un sistema operativo son la conveniencia para el usuario, la eficiencia en el uso de los recursos del sistema y la capacidad de evolución para adaptarse a nuevas tecnologías y requisitos.'
            ],
            [
                'question' => '¿Cuál de las siguientes es una función principal del sistema operativo?',
                'options' => [
                    'a) Diseñar nuevos componentes de hardware.',
                    'b) Escribir el código para programas de usuario.',
                    'c) Gestionar recursos y facilitar la ejecución de programas.',
                    'd) Reparar fallos de hardware automáticamente.'
                ],
                'correct' => 2,
                'explanation' => 'La función esencial de un sistema operativo es gestionar los recursos de hardware y software del computador, facilitando que los programas de usuario puedan ejecutarse de manera eficiente y ordenada.'
            ],
            [
                'question' => '¿Cuál fue un avance clave en la evolución de los sistemas operativos que permite a la CPU estar siempre ocupada ejecutando otro programa mientras uno espera por E/S?',
                'options' => [
                    'a) La automatización manual.',
                    'b) La multiprogramación.',
                    'c) La computación en la nube.',
                    'd) Los sistemas de un solo usuario.'
                ],
                'correct' => 1,
                'explanation' => 'La multiprogramación fue un avance crucial que permitió a la CPU ejecutar otro programa cuando uno estaba esperando una operación de E/S, maximizando así la utilización del procesador.'
            ],
            [
                'question' => 'La memoria virtual permite a los programas direccionar la memoria desde un punto de vista:',
                'options' => [
                    'a) Físico, sin importar la cantidad de memoria lógica disponible.',
                    'b) Lógico, sin importar la cantidad de memoria física disponible.',
                    'c) Directo, sin necesidad de direcciones.',
                    'd) Temporal, solo para operaciones a corto plazo.'
                ],
                'correct' => 1,
                'explanation' => 'La memoria virtual proporciona una abstracción lógica de la memoria, permitiendo que los programas direccionen un espacio de memoria mucho mayor del que está físicamente disponible en la RAM.'
            ],
            [
                'question' => 'En el funcionamiento de la memoria virtual, ¿en qué se dividen los procesos para su gestión?',
                'options' => [
                    'a) En archivos ejecutables.',
                    'b) En bloques de tamaño fijo llamados páginas.',
                    'c) En secciones contiguas de memoria principal.',
                    'd) En segmentos de código variable.'
                ],
                'correct' => 1,
                'explanation' => 'En los sistemas de memoria virtual paginada, los procesos se dividen en bloques de tamaño fijo llamados páginas para su gestión y asignación en la memoria física.'
            ],
            [
                'question' => '¿Cuál es el principal beneficio de la memoria virtual?',
                'options' => [
                    'a) Permite el acceso directo a cualquier dispositivo de E/S.',
                    'b) Permite que muchos procesos compartan una cantidad relativamente pequeña de memoria principal.',
                    'c) Elimina la necesidad de almacenamiento secundario.',
                    'd) Acelera la velocidad del procesador en sí mismo.'
                ],
                'correct' => 1,
                'explanation' => 'El principal beneficio de la memoria virtual es que permite la ejecución de programas cuyo tamaño es mayor que la memoria física disponible, y facilita la multiprogramación al permitir que muchos procesos compartan eficientemente la RAM limitada.'
            ],
            [
                'question' => 'En la estructura jerárquica del sistema operativo, ¿qué hace el Nivel 9 (Sistema de Ficheros)?',
                'options' => [
                    'a) Gestiona la comunicación y mensajes entre procesos.',
                    'b) Trata con la estructura lógica de los ficheros y operaciones de usuario.',
                    'c) Interacciona con dispositivos externos como impresoras.',
                    'd) Proporciona la interfaz al usuario.'
                ],
                'correct' => 1,
                'explanation' => 'El Nivel 9 del sistema operativo, el Sistema de Ficheros, se encarga de la gestión lógica de los archivos y directorios, así como de las operaciones que los usuarios realizan sobre ellos.'
            ],
            [
                'question' => '¿Cómo se conoce a menudo la interfaz del sistema operativo al usuario?',
                'options' => [
                    'a) El Núcleo (Kernel).',
                    'b) El Gestor de Memoria.',
                    'c) El "Caparazón" (Shell).',
                    'd) El Controlador de Dispositivos.'
                ],
                'correct' => 2,
                'explanation' => 'La interfaz de usuario del sistema operativo es comúnmente conocida como el "Caparazón" o Shell, a través del cual los usuarios interactúan con el sistema mediante comandos o una interfaz gráfica.'
            ],
            [
                'question' => 'Según la fuente, ¿qué característica de los sistemas operativos Windows XP y Windows Server 2003 se destaca en relación con su diseño?',
                'options' => [
                    'a) Están basados exclusivamente en el lenguaje ensamblador.',
                    'b) Incorporan pocos de los últimos desarrollos en tecnología de sistemas operativos.',
                    'c) Están estrechamente basados en principios de diseño orientado a objetos.',
                    'd) Son sistemas de un solo usuario y de una sola tarea.'
                ],
                'correct' => 2,
                'explanation' => 'Los sistemas operativos modernos como Windows XP y Windows Server 2003 están diseñados siguiendo principios orientados a objetos, lo que facilita su modularidad, mantenimiento y evolución.'
            ],
            [
                'question' => '¿Qué característica distintiva de Linux 2.6 se menciona en el contexto de procesos e hilos?',
                'options' => [
                    'a) Linux no soporta hilos.',
                    'b) No hay una distinción formal entre proceso e hilo; múltiples hilos pueden agruparse de tal forma que un único proceso contenga múltiples hilos.',
                    'c) Cada hilo es un proceso completamente separado.',
                    'd) Los procesos de Linux solo pueden tener un hilo.',
                    'e) Linux no tiene procesos, solo hilos.'
                ],
                'correct' => 1,
                'explanation' => 'En Linux 2.6 y versiones posteriores, no existe una distinción estricta entre procesos e hilos en el nivel del kernel; los hilos son vistos como procesos ligeros que comparten recursos del mismo proceso.'
            ],
            // Capítulo 3: Descripción y Control de Procesos
            [
                'question' => '¿Cuál es la definición de un proceso según la Diapositiva 22?',
                'options' => [
                    'a) Un programa compilado listo para su uso.',
                    'b) Una instancia de un programa en ejecución.',
                    'c) Un archivo de datos almacenado en disco.',
                    'd) Un componente de hardware del sistema.'
                ],
                'correct' => 1,
                'explanation' => 'Un proceso se define como una instancia de un programa en ejecución, incluyendo su código, datos y estado de ejecución.'
            ],
            [
                'question' => 'En el modelo simple de dos estados de los procesos, ¿cuáles son esos dos estados?',
                'options' => [
                    'a) Activo y Pasivo.',
                    'b) En Línea y Fuera de Línea.',
                    'c) Ejecutando y No Ejecutando.',
                    'd) Cargando y Descargando.'
                ],
                'correct' => 2,
                'explanation' => 'El modelo más simple de estados de un proceso incluye "Ejecutando" (cuando el procesador está ejecutando instrucciones del proceso) y "No Ejecutando" (cuando el proceso está listo o esperando y no está en el procesador). Aunque en la práctica hay más estados, estos dos son la base.'
            ],
            [
                'question' => '¿Cuál es la estructura de datos fundamental que el sistema operativo mantiene para cada proceso, conteniendo información sobre su estado actual y ubicación en memoria?',
                'options' => [
                    'a) La Tabla de Ficheros.',
                    'b) El Registro de Eventos.',
                    'c) El Bloque de Control de Programa (BCP).',
                    'd) La Pila de Usuario.'
                ],
                'correct' => 2,
                'explanation' => 'El Bloque de Control de Proceso (BCP) es la estructura de datos central que el sistema operativo utiliza para almacenar toda la información relevante sobre un proceso, incluyendo su estado, ID, punteros y registros.'
            ],
            [
                'question' => 'En el modelo de cinco estados de los procesos, el estado "Listo/Suspendido" indica que un proceso está:',
                'options' => [
                    'a) Esperando un evento de E/S.',
                    'b) En ejecución activa en el procesador.',
                    'c) Listo para ejecutar, pero ha sido transferido a disco para liberar memoria principal.',
                    'd) Completado y esperando ser terminado.'
                ],
                'correct' => 2,
                'explanation' => 'El estado "Listo/Suspendido" en un modelo de cinco estados significa que el proceso está listo para ser ejecutado pero ha sido movido de la memoria principal al disco (suspendido) para liberar recursos de memoria.'
            ],
            [
                'question' => '¿Qué proceso implica mover imágenes de procesos entre la memoria principal y el disco para gestionar el grado de multiprogramación?',
                'options' => [
                    'a) Paginación.',
                    'b) Segmentación.',
                    'c) Swapping (Intercambio).',
                    'd) Compilación.'
                ],
                'correct' => 2,
                'explanation' => 'El swapping o intercambio es el proceso de mover un proceso completo o partes de él entre la memoria principal y el disco para ajustar el grado de multiprogramación del sistema.'
            ],
            [
                'question' => '¿Qué tipo de información NO se incluye explícitamente en las categorías de información del Bloque de Control de Proceso (BCP) según la fuente?',
                'options' => [
                    'a) Identificación del proceso (PID).',
                    'b) Información de estado del procesador (registros, PC, PSW).',
                    'c) El código fuente original del programa.',
                    'd) Información de control del proceso (datos de planificación, gestión de memoria, recursos).'
                ],
                'correct' => 2,
                'explanation' => 'El BCP contiene información esencial para la gestión del proceso, como su ID, estado del procesador y datos de control. El código fuente original del programa no se almacena en el BCP.'
            ],
            [
                'question' => '¿Qué componentes forman la "imagen" de un proceso en memoria, según la fuente?',
                'options' => [
                    'a) Solamente el código ejecutable.',
                    'b) El Bloque de Control de Proceso (BCP), una pila de usuario, un espacio de direcciones privado y cualquier espacio de direcciones compartido.',
                    'c) Únicamente los datos de entrada y salida.',
                    'd) Solo los registros del procesador.',
                    'e) Los drivers de los dispositivos de hardware.'
                ],
                'correct' => 1,
                'explanation' => 'La imagen de un proceso en memoria incluye el Bloque de Control de Proceso (BCP), su pila de usuario, un espacio de direcciones privado para el código y datos, y cualquier espacio de direcciones compartido con otros procesos.'
            ],
            [
                'question' => '¿Qué tipo de tabla utiliza el sistema operativo para rastrear la asignación de memoria principal y virtual?',
                'options' => [
                    'a) Tablas de E/S.',
                    'b) Tablas de ficheros.',
                    'c) Tablas de memoria.',
                    'd) Tablas de procesos.'
                ],
                'correct' => 2,
                'explanation' => 'El sistema operativo utiliza tablas de memoria para mantener un registro de la asignación de la memoria principal (RAM) y la memoria virtual a los diferentes procesos del sistema.'
            ],
            [
                'question' => '¿Qué es fundamental para que el sistema operativo pueda seguir la pista, gestionar y coordinar los procesos activos, y se utiliza para referenciar procesos en las distintas tablas y para la comunicación entre procesos (IPC)?',
                'options' => [
                    'a) El nombre del usuario que ejecuta el proceso.',
                    'b) El identificador numérico único asignado a cada proceso.',
                    'c) El tamaño del proceso en disco.',
                    'd) La prioridad del proceso en un momento dado.'
                ],
                'correct' => 1,
                'explanation' => 'El identificador numérico único asignado a cada proceso (PID) es fundamental para que el sistema operativo pueda rastrearlo, gestionarlo, coordinarlo y facilitar la comunicación entre procesos.'
            ]
        ];

        // Sección PHP para generar las preguntas dinámicamente
        foreach ($quiz as $index => $question) {
            echo '<div class="question-container" id="question-' . $index . '">';
            echo '<h3>' . ($index + 1) . '. ' . htmlspecialchars($question['question']) . '</h3>';
            echo '<div class="options">';
            foreach ($question['options'] as $optIndex => $option) {
                echo '<label>';
                echo '<input type="radio" name="q' . $index . '" value="' . $optIndex . '" data-q-index="' . $index . '">';
                echo htmlspecialchars($option);
                echo '</label><br>';
            }
            echo '</div>';
            echo '<div class="buttons">';
            echo '<button class="verify-btn" data-question-index="' . $index . '">Verificar</button>';
            echo '<button class="reset-btn" data-question-index="' . $index . '">Reestablecer</button>';
            echo '</div>';
            echo '<div class="feedback" id="feedback-' . $index . '"></div>';
            echo '<div class="explanation" id="explanation-' . $index . '"></div>';
            echo '</div>';
        }
        ?>
    </div>

    <script>
        // Transfiere el array de preguntas de PHP a JavaScript
        // Se añade 'isAnsweredCorrectly' para llevar un registro del contador.
        const quizData = <?php echo json_encode($quiz); ?>.map(q => ({ ...q, isAnsweredCorrectly: false }));
        let correctAnswersCount = 0;
        const totalQuestions = quizData.length;
        const correctAnswersSpan = document.getElementById('correct-answers-count');
        const totalQuestionsSpan = document.getElementById('total-questions');

        // Inicializa el contador total de preguntas
        totalQuestionsSpan.textContent = totalQuestions;

        // Función para actualizar el contador de respuestas correctas
        function updateCounter() {
            correctAnswersSpan.textContent = correctAnswersCount;
        }

        updateCounter(); // Llama para inicializar el display del contador

        // Añade el event listener a todos los botones 'Verificar'
        document.querySelectorAll('.verify-btn').forEach(button => {
            button.addEventListener('click', function() {
                const questionIndex = parseInt(this.dataset.questionIndex);
                const selectedOption = document.querySelector(`input[name="q${questionIndex}"]:checked`);
                const feedbackDiv = document.getElementById(`feedback-${questionIndex}`);
                const explanationDiv = document.getElementById(`explanation-${questionIndex}`);
                const optionsDiv = document.querySelector(`#question-${questionIndex} .options`);
                const resetButton = document.querySelector(`.reset-btn[data-question-index="${questionIndex}"]`);

                // Limpiar cualquier mensaje previo de "por favor selecciona"
                feedbackDiv.innerHTML = '';

                if (!selectedOption) {
                    feedbackDiv.innerHTML = '<span style="color: orange;">Por favor, selecciona una opción antes de verificar.</span>';
                    return;
                }

                const chosenAnswerIndex = parseInt(selectedOption.value);
                const correctAnswerIndex = quizData[questionIndex].correct;
                const explanationText = quizData[questionIndex].explanation || 'No hay explicación disponible para esta pregunta.';

                // Deshabilitar todos los botones de radio para esta pregunta
                optionsDiv.querySelectorAll('input[type="radio"]').forEach(radio => {
                    radio.disabled = true;
                });

                // Ocultar el botón "Verificar"
                this.style.display = 'none';

                if (chosenAnswerIndex === correctAnswerIndex) {
                    feedbackDiv.innerHTML = '<span style="color: green;">¡Respuesta Correcta!</span>';
                    explanationDiv.style.display = 'none'; // Ocultar explicación si es correcta
                    selectedOption.closest('label').style.fontWeight = 'bold'; // Resaltar la selección correcta

                    // Solo incrementar si es la primera vez que se responde correctamente
                    if (!quizData[questionIndex].isAnsweredCorrectly) {
                        correctAnswersCount++;
                        quizData[questionIndex].isAnsweredCorrectly = true;
                    }
                    updateCounter();

                    // No se necesita el botón "Reestablecer" si la respuesta es correcta.
                    // Podríamos cambiar el texto del botón de verificación o dejarlo oculto.
                    // En este caso, lo ocultamos y deshabilitamos para que no se pueda modificar.
                    this.disabled = true;
                    resetButton.style.display = 'none'; // Asegura que el botón de reestablecer esté oculto
                } else {
                    feedbackDiv.innerHTML = '<span style="color: red;">Respuesta Incorrecta.</span>';
                    explanationDiv.innerHTML = explanationText;
                    explanationDiv.style.display = 'block';

                    // Mostrar el botón "Reestablecer"
                    resetButton.style.display = 'inline-block';
                    resetButton.textContent = 'Reestablecer'; // Asegura que el texto sea 'Reestablecer'

                    // Marcar la opción correcta
                    const correctOptionLabel = document.querySelector(`input[name="q${questionIndex}"][value="${correctAnswerIndex}"]`).closest('label');
                    correctOptionLabel.style.fontWeight = 'bold';
                    correctOptionLabel.style.color = 'green';
                    correctOptionLabel.style.backgroundColor = '#e6ffe6'; // Un color de fondo suave para destacar
                    correctOptionLabel.style.padding = '5px';
                    correctOptionLabel.style.borderRadius = '4px';

                    // Resaltar la opción seleccionada incorrecta
                    selectedOption.closest('label').style.color = 'red';
                    selectedOption.closest('label').style.fontWeight = 'bold';
                }
            });
        });

        // Añade el event listener a todos los botones 'Reestablecer'
        document.querySelectorAll('.reset-btn').forEach(button => {
            button.addEventListener('click', function() {
                const questionIndex = parseInt(this.dataset.questionIndex);
                const feedbackDiv = document.getElementById(`feedback-${questionIndex}`);
                const explanationDiv = document.getElementById(`explanation-${questionIndex}`);
                const optionsDiv = document.querySelector(`#question-${questionIndex} .options`);
                const verifyButton = document.querySelector(`.verify-btn[data-question-index="${questionIndex}"]`);

                // Limpiar feedback y explicación
                feedbackDiv.innerHTML = '';
                explanationDiv.style.display = 'none';

                // Habilitar todos los botones de radio para esta pregunta y quitar resaltados
                optionsDiv.querySelectorAll('input[type="radio"]').forEach(radio => {
                    radio.disabled = false;
                    radio.checked = false; // Deseleccionar
                    radio.closest('label').style.fontWeight = 'normal';
                    radio.closest('label').style.color = 'inherit';
                    radio.closest('label').style.backgroundColor = 'transparent'; // Quitar color de fondo
                });

                // Ocultar el botón "Reestablecer" y mostrar "Verificar"
                this.style.display = 'none';
                verifyButton.style.display = 'inline-block';
                verifyButton.textContent = 'Verificar'; // Restablecer texto
                verifyButton.disabled = false;
            });
        });
    </script>
</body>
</html>