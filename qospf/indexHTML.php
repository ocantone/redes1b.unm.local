<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cuestionario OSPF</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 18px;
    line-height: 1.45;
    background: #fafafa;
    color: #111;
  }
  h1 {
    text-align: center;
    margin-bottom: 6px;
  }
  p.lead {
    text-align: center;
    margin-top: 0;
    color: #444;
  }
  .pregunta {
    margin-bottom: 14px;
    padding: 12px;
    border: 1px solid #d0d0d0;
    border-radius: 6px;
    background: #fff;
  }
  .pregunta p {
    margin: 0 0 8px 0;
  }
  label { cursor: pointer; }
  .correcta {
    background-color: #dff0d8; /* verde suave */
  }
  .incorrecta {
    background-color: #f8d7da; /* rojo suave */
  }
  .resultado {
    font-weight: bold;
    margin-top: 8px;
  }
  #resumen {
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
    padding: 12px;
  }
  button {
    display: block;
    margin: 18px auto;
    padding: 10px 18px;
    font-size: 15px;
    border-radius: 6px;
    border: 1px solid #666;
    background: #eee;
    cursor: pointer;
  }
  button:hover { background:#e0e0e0; }
  .small {
    font-size: 13px;
    color: #333;
  }
</style>
</head>
<body>

<h1>Cuestionario sobre OSPF</h1>
<p class="lead">Marca tus respuestas y presiona &quot;Enviar&quot; para corregir.</p>

<form id="quizForm">

  <!-- 1 -->
  <div class="pregunta" id="p1">
    <p>1. Si una red es convergente, &iquest;cu&aacute;l de las siguientes afirmaciones es verdadera acerca de la base de datos de Link-State que tiene cada router de la misma &aacute;rea OSPF?</p>
    <label><input type="radio" name="q1" value="a"> Cada router tiene una base de datos de Link-State que contiene la misma informaci&oacute;n de estado.</label><br>
    <label><input type="radio" name="q1" value="b"> Cada router tiene una base de datos de Link-State diferente seg&uacute;n su posici&oacute;n en la red.</label><br>
    <label><input type="radio" name="q1" value="c"> La base de datos de Link-State se almacena en un router designado y se tiene acceso a ella a trav&eacute;s de cada router del &aacute;rea seg&uacute;n sea necesario.</label><br>
    <label><input type="radio" name="q1" value="d"> La base de datos de Link-State de cada router s&oacute;lo contiene informaci&oacute;n sobre los routers adyacentes y el estado de sus enlaces.</label>
    <div class="resultado"></div>
  </div>

  <!-- 2 -->
  <div class="pregunta" id="p2">
    <p>2. &iquest;Cu&aacute;l es la diferencia principal entre los protocolos de link-state y los protocolos vector distancia con respecto al c&aacute;lculo de la ruta?</p>
    <label><input type="radio" name="q2" value="a"> Los protocolos vector distancia toman rutas existentes de sus vecinos y las expanden. Los protocolos de link-state calculan las rutas completas de manera independiente.</label><br>
    <label><input type="radio" name="q2" value="b"> Los protocolos de link-state calculan y pasan tablas de enrutamiento completas a todos los routers de sus &aacute;reas asociadas, mientras que los protocolos vector distancia no lo hacen.</label><br>
    <label><input type="radio" name="q2" value="c"> Al determinar rutas no v&aacute;lidas, los protocolos de link-state utilizan el horizonte dividido para todos los c&aacute;lculos de rutas. Los protocolos vector distancia utilizan envenenamiento inverso.</label><br>
    <label><input type="radio" name="q2" value="d"> Los protocolos vector distancia requieren m&aacute;s recursos de CPU y RAM para calcular las rutas que los protocolos de link-state.</label>
    <div class="resultado"></div>
  </div>

  <!-- 3 -->
  <div class="pregunta" id="p3">
    <p>3. Consulte la muestra. &iquest;Cu&aacute;l es el prop&oacute;sito del valor 128 que aparece en negrita?</p>
    <label><input type="radio" name="q3" value="a"> Es la m&eacute;trica del costo de OSPF.</label><br>
    <label><input type="radio" name="q3" value="b"> Es la distancia administrativa de OSPF.</label><br>
    <label><input type="radio" name="q3" value="c"> Es el valor asignado por el algoritmo de Dijkstra que designa la distancia en saltos a la red.</label><br>
    <label><input type="radio" name="q3" value="d"> Es el valor asignado a una interfaz que utiliza el algoritmo DUAL para determinar la m&eacute;trica.</label>
    <div class="resultado"></div>
  </div>

  <!-- 4 -->
  <div class="pregunta" id="p4">
    <p>4. &iquest;Qu&eacute; rango de redes se publican en las actualizaciones OSPF por el comando <code>Router1(config-router)# network 192.168.0.0 0.0.15.255 area 0</code>?</p>
    <label><input type="radio" name="q4" value="a"> de 192.168.0.0/24 a 192.168.0.15/24</label><br>
    <label><input type="radio" name="q4" value="b"> de 192.168.0.0/24 a 192.168.15.0/24</label><br>
    <label><input type="radio" name="q4" value="c"> de 192.168.15.0/24 a 192.168.31.0/24</label><br>
    <label><input type="radio" name="q4" value="d"> de 192.168.15.0/24 a 192.168.255.0/24</label><br>
    <label><input type="radio" name="q4" value="e"> de 192.168.16.0/24 a 192.168.255.0/24</label>
    <div class="resultado"></div>
  </div>

  <!-- 5 (multiple) -->
  <div class="pregunta" id="p5">
    <p>5. &iquest;Qu&eacute; funciones est&aacute;n asociadas con entornos de punto a multipunto OSPF Frame Relay? (Elija dos opciones.)</p>
    <label><input type="checkbox" name="q5" value="a"> No se ha elegido un DR.</label><br>
    <label><input type="checkbox" name="q5" value="b"> El valor de prioridad OSPF determina el DR activo en el enlace de Frame Relay.</label><br>
    <label><input type="checkbox" name="q5" value="c"> Los routers vecinos OSPF se definen est&aacute;ticamente.</label><br>
    <label><input type="checkbox" name="q5" value="d"> Los tipos de enlace est&aacute;n identificados como broadcast de accesos m&uacute;ltiples.</label><br>
    <label><input type="checkbox" name="q5" value="e"> El BDR tendr&aacute; un ID de router cuyo valor es mayor que el ID de router de DR.</label>
    <div class="resultado"></div>
  </div>

  <!-- 6 -->
  <div class="pregunta" id="p6">
    <p>6. Consulte la muestra. &iquest;Qu&eacute; comandos configuran el router A para OSPF?</p>
    <label><input type="radio" name="q6" value="a"> router ospf 1 &lt;br&gt; network 192.168.10.0</label><br>
    <label><input type="radio" name="q6" value="b"> router ospf 1 &lt;br&gt; network 192.168.10.64 0.0.0.63 area 0 &lt;br&gt; network 192.168.10.192 0.0.0.3 area 0</label><br>
    <label><input type="radio" name="q6" value="c"> router ospf 1 &lt;br&gt; network 192.168.10.64 255.255.255.192 &lt;br&gt; network 192.168.10.192 255.255.255.252</label><br>
    <label><input type="radio" name="q6" value="d"> router ospf 1 &lt;br&gt; network 192.168.10.0 area 0</label>
    <div class="resultado"></div>
  </div>

  <!-- 7 (multiple) -->
  <div class="pregunta" id="p7">
    <p>7. &iquest;Qu&eacute; dos afirmaciones describen el uso de las elecciones OSPF DR/BDR? (Elija dos opciones).</p>
    <label><input type="checkbox" name="q7" value="a"> Las elecciones siempre son opcionales.</label><br>
    <label><input type="checkbox" name="q7" value="b"> Las elecciones son necesarias en todas las redes WAN.</label><br>
    <label><input type="checkbox" name="q7" value="c"> Las elecciones son necesarias en todas las redes punto a punto.</label><br>
    <label><input type="checkbox" name="q7" value="d"> Las elecciones son necesarias en las redes de acceso m&uacute;ltiple de broadcast.</label><br>
    <label><input type="checkbox" name="q7" value="e"> Con frecuencia las elecciones se requieren en redes NBMA.</label>
    <div class="resultado"></div>
  </div>

  <!-- 8 -->
  <div class="pregunta" id="p8">
    <p>8. &iquest;Qu&eacute; se necesita siempre para los routers OSPF para compartir la informaci&oacute;n de enrutamiento?</p>
    <label><input type="radio" name="q8" value="a"> routers designados</label><br>
    <label><input type="radio" name="q8" value="b"> router designado de respaldo</label><br>
    <label><input type="radio" name="q8" value="c"> adyacencias con los vecinos</label><br>
    <label><input type="radio" name="q8" value="d"> topolog&iacute;a de la red NBMA</label><br>
    <label><input type="radio" name="q8" value="e"> enlaces configurados en la red 224.0.0.0</label>
    <div class="resultado"></div>
  </div>

  <!-- 9 -->
  <div class="pregunta" id="p9">
    <p>9. &iquest;Cu&aacute;l de las siguientes declaraciones es verdadera con respecto a la selecci&oacute;n de DR y BDR de OSPF?</p>
    <label><input type="radio" name="q9" value="a"> Ocurre una nueva selecci&oacute;n de DR y BDR cada vez que se agrega un nuevo vecino OSPF.</label><br>
    <label><input type="radio" name="q9" value="b"> El router con la configuraci&oacute;n OSPF de mayor prioridad gana la selecci&oacute;n para DR.</label><br>
    <label><input type="radio" name="q9" value="c"> El valor de prioridad por defecto para un router conectado a una red de accesos m&uacute;ltiples es 0.</label><br>
    <label><input type="radio" name="q9" value="d"> El router con la direcci&oacute;n MAC m&aacute;s alta se elije como DR cuando se utilizan los valores de prioridad por defecto.</label>
    <div class="resultado"></div>
  </div>

  <!-- 10 -->
  <div class="pregunta" id="p10">
    <p>10. Consulte la muestra. El administrador de red desea que s&oacute;lo se publique la red 172.16.32.0 en el Router1. &iquest;Qu&eacute; comando de red OSPF permite lograrlo?</p>
    <label><input type="radio" name="q10" value="a"> Router2(config-router)# network 172.16.0.0 0.0.0.15 area 0</label><br>
    <label><input type="radio" name="q10" value="b"> Router2(config-router)# network 172.16.0.0 0.0.15.255 area 0</label><br>
    <label><input type="radio" name="q10" value="c"> Router2(config-router)# network 172.16.32.0 0.0.15.255 area 0</label><br>
    <label><input type="radio" name="q10" value="d"> Router2(config-router)# network 172.16.32.0 0.0.255.255 area 0</label>
    <div class="resultado"></div>
  </div>

  <!-- 11 -->
  <div class="pregunta" id="p11">
    <p>11. Consulte la ilustraci&oacute;n. Como parte de una red OSPF, R1 y R2 intentan convertirse en vecinos adyacentes. A pesar de que parece que los dos sistemas se comunican, ninguna de las tablas de enrutamiento incluye rutas OSPF recibidas de su vecino. &iquest;Qu&eacute; podr&iacute;a estar causando esta situaci&oacute;n?</p>
    <label><input type="radio" name="q11" value="a"> R1 y R2 no est&aacute;n en la misma subred.</label><br>
    <label><input type="radio" name="q11" value="b"> Los ID de proceso en cada router no coinciden.</label><br>
    <label><input type="radio" name="q11" value="c"> Los intervalos de tiempo en los routers no coinciden.</label><br>
    <label><input type="radio" name="q11" value="d"> El valor establecido para el tiempo de demora de la transmisi&oacute;n en ambos routers es demasiado bajo.</label>
    <div class="resultado"></div>
  </div>

  <!-- 12 (multiple) -->
  <div class="pregunta" id="p12">
    <p>12. &iquest;Cu&aacute;les son las ventajas de usar un protocolo de enrutamiento de estado de enlace en lugar de uno de vector de distancia? (Elija dos opciones).</p>
    <label><input type="checkbox" name="q12" value="a"> La base de datos de topolog&iacute;a elimina la necesidad de una tabla de enrutamiento.</label><br>
    <label><input type="checkbox" name="q12" value="b"> Se env&iacute;an actualizaciones peri&oacute;dicas frecuentes para minimizar la cantidad de rutas incorrectas en la base de datos topol&oacute;gica.</label><br>
    <label><input type="checkbox" name="q12" value="c"> Los routers tienen conocimiento directo de todos los enlaces en la red y la manera en que se conectan.</label><br>
    <label><input type="checkbox" name="q12" value="d"> Despu&eacute;s de la distribuci&oacute;n inicial de notificaciones de Link-State (LSA), los routers generalmente requieren menos ancho de banda para comunicar cambios en una topolog&iacute;a.</label><br>
    <label><input type="checkbox" name="q12" value="e"> Un protocolo de enrutamiento de estado de enlace requiere menos potencia de procesador del router.</label>
    <div class="resultado"></div>
  </div>

  <!-- 13 -->
  <div class="pregunta" id="p13">
    <p>13. Consulte la ilustraci&oacute;n. Un administrador de red ha implementado OSPF y la red ha convergido. Si todas las interfaces del router est&aacute;n activadas y funcionan, &iquest;qu&eacute; ruta ver&aacute; OSPF como de menor costo al mover tramas de Host3 a Host1?</p>
    <label><input type="radio" name="q13" value="a"> R3 a R4 a R1</label><br>
    <label><input type="radio" name="q13" value="b"> R3 a R1</label><br>
    <label><input type="radio" name="q13" value="c"> R3 a R2 a R1</label><br>
    <label><input type="radio" name="q13" value="d"> R3 a R5 a R2 a R1</label>
    <div class="resultado"></div>
  </div>

  <!-- 14 -->
  <div class="pregunta" id="p14">
    <p>14. Consulte la muestra. &iquest;Cu&aacute;l es el prop&oacute;sito de los comandos de configuraci&oacute;n agregados en el router B?</p>
    <label><input type="radio" name="q14" value="a"> Permiten que el router A forme una adyacencia con el router B.</label><br>
    <label><input type="radio" name="q14" value="b"> Proporcionan una identificaci&oacute;n del router de OSPF estable en el router B.</label><br>
    <label><input type="radio" name="q14" value="c"> Proporcionan un m&eacute;todo para probar el tr&aacute;fico del router.</label><br>
    <label><input type="radio" name="q14" value="d"> Crean una tabla de adyacencia OSPF en el router B.</label>
    <div class="resultado"></div>
  </div>

  <!-- 15 -->
  <div class="pregunta" id="p15">
    <p>15. Consulte la ilustraci&oacute;n. Se introduce el comando <code>ip route 10.16.1.64 255.255.255.252 s0/0/0</code> en el router. &iquest;Por qu&eacute; aparece la red 10.16.1.64/30 en la tabla de enrutamiento adem&aacute;s de la red 10.16.1.64/27?</p>
    <label><input type="radio" name="q15" value="a"> El router ve 10.16.1.64/30 y 10.16.1.64/27 como dos redes diferentes.</label><br>
    <label><input type="radio" name="q15" value="b"> La ruta est&aacute;tica se usa como ruta de respaldo para los paquetes destinados a 10.16.1.64/27.</label><br>
    <label><input type="radio" name="q15" value="c"> La AD para las rutas est&aacute;ticas es menor que la AD de las rutas OSPF.</label><br>
    <label><input type="radio" name="q15" value="d"> La m&eacute;trica de la ruta est&aacute;tica es menor que la m&eacute;trica OSPF para la red 10.16.1.64/27.</label>
    <div class="resultado"></div>
  </div>

  <!-- 16 -->
  <div class="pregunta" id="p16">
    <p>16. Consulte la muestra. RTRC se configur&oacute; recientemente y no est&aacute; enviando las rutas OSPF correctas a RTRB, como se muestra en la tabla de enrutamiento de RTRB. En funci&oacute;n de la configuraci&oacute;n de RTRC, &iquest;cu&aacute;l ser&iacute;a el problema m&aacute;s probable?</p>
    <label><input type="radio" name="q16" value="a"> Las interfaces de RTRC est&aacute;n administrativamente desconectadas.</label><br>
    <label><input type="radio" name="q16" value="b"> El ID de proceso de OSPF para RTRC no coincide con el ID de proceso utilizado en RTRB.</label><br>
    <label><input type="radio" name="q16" value="c"> Las direcciones de las interfaces en RTRC se superponen con otras direcciones de red.</label><br>
    <label><input type="radio" name="q16" value="d"> La configuraci&oacute;n de enrutamiento OSPF de RTRC tiene una sentencia de red incorrecta o faltante.</label>
    <div class="resultado"></div>
  </div>

  <!-- 17 -->
  <div class="pregunta" id="p17">
    <p>17. Consulte la muestra. &iquest;Qu&eacute; sentencia de red configura el router del hogar para permitir que todas las interfaces participen en OSPF?</p>
    <label><input type="radio" name="q17" value="a"> network 10.0.0.0 0.3.255.255 area 0</label><br>
    <label><input type="radio" name="q17" value="b"> network 10.8.0.0 0.0.0.3 area 0</label><br>
    <label><input type="radio" name="q17" value="c"> network 10.8.0.0 0.3.255.255 area 0</label><br>
    <label><input type="radio" name="q17" value="d"> network 10.10.0.0 0.0.0.3 area 0</label><br>
    <label><input type="radio" name="q17" value="e"> network 10.12.0.0 0.3.255.255 area 0</label>
    <div class="resultado"></div>
  </div>

  <!-- 18 -->
  <div class="pregunta" id="p18">
    <p>18. Al compararse con un protocolo de enrutamiento vector distancia, &iquest;cu&aacute;l es el beneficio del enfoque de dise&ntilde;o jer&aacute;rquico que se utiliza en las redes OSPF grandes?</p>
    <label><input type="radio" name="q18" value="a"> Configuraci&oacute;n m&aacute;s simple</label><br>
    <label><input type="radio" name="q18" value="b"> Reducci&oacute;n de los requisitos de procesamiento del router</label><br>
    <label><input type="radio" name="q18" value="c"> Aislamiento de la inestabilidad de la red</label><br>
    <label><input type="radio" name="q18" value="d"> Planificaci&oacute;n de red menos compleja</label>
    <div class="resultado"></div>
  </div>

  <!-- 19 -->
  <div class="pregunta" id="p19">
    <p>19. Consulte la muestra. Al establecer relaciones de adyacencia, &iquest;qu&eacute; direcci&oacute;n IP usar&iacute;a el router A para enviar paquetes de saludo al router B?</p>
    <label><input type="radio" name="q19" value="a"> 10.11.0.1</label><br>
    <label><input type="radio" name="q19" value="b"> 10.11.0.2</label><br>
    <label><input type="radio" name="q19" value="c"> 10.11.0.255</label><br>
    <label><input type="radio" name="q19" value="d"> 224.0.0.5</label><br>
    <label><input type="radio" name="q19" value="e"> 255.255.255.255</label>
    <div class="resultado"></div>
  </div>

  <!-- 20 -->
  <div class="pregunta" id="p20">
    <p>20. Consulte la ilustraci&oacute;n. &iquest;Qu&eacute; router se elegir&aacute; como DR y cu&aacute;l se convertir&aacute; en BDR?</p>
    <label><input type="radio" name="q20" value="a"> R1 ser&aacute; DR y R2 ser&aacute; BDR.</label><br>
    <label><input type="radio" name="q20" value="b"> R1 ser&aacute; DR y R3 ser&aacute; BDR.</label><br>
    <label><input type="radio" name="q20" value="c"> R2 ser&aacute; DR y R1 ser&aacute; BDR.</label><br>
    <label><input type="radio" name="q20" value="d"> R2 ser&aacute; DR y R3 ser&aacute; BDR.</label><br>
    <label><input type="radio" name="q20" value="e"> R3 ser&aacute; DR y R2 ser&aacute; BDR.</label><br>
    <label><input type="radio" name="q20" value="f"> R3 ser&aacute; DR y R1 ser&aacute; BDR.</label>
    <div class="resultado"></div>
  </div>

  <!-- 21 -->
  <div class="pregunta" id="p21">
    <p>21. Consulte la muestra. Los routers A, B y C son parte de la red OSPF existente. El router D se agreg&oacute; a la red. Todos los routers est&aacute;n ejecutando OSPF y tienen las prioridades indicadas aplicadas en la interfaz. &iquest;Cu&aacute;l es el estado de DR/BDR inmediatamente despu&eacute;s de haber agregado el router D a la red existente?</p>
    <label><input type="radio" name="q21" value="a"> Se genera una selecci&oacute;n forzada y el router D gana la selecci&oacute;n de DR.</label><br>
    <label><input type="radio" name="q21" value="b"> DR y BDR no cambian hasta la siguiente selecci&oacute;n.</label><br>
    <label><input type="radio" name="q21" value="c"> Se genera una selecci&oacute;n forzada y el BDR existente pasa a ser el DR.</label><br>
    <label><input type="radio" name="q21" value="d"> El router con ID de router m&aacute;s elevada se convierte en el nuevo BDR.</label>
    <div class="resultado"></div>
  </div>

  <!-- 22 (multiple) -->
  <div class="pregunta" id="p22">
    <p>22. &iquest;Cu&aacute;les son las afirmaciones que describen el funcionamiento de los protocolos de enrutamiento link-state? (Elija dos opciones).</p>
    <label><input type="checkbox" name="q22" value="a"> Todos los routers en la misma &aacute;rea tienen bases de datos de link-state idénticas cuando convergen.</label><br>
    <label><input type="checkbox" name="q22" value="b"> Los loops de enrutamiento se evitan al ejecutar el algoritmo de actualizaci&oacute;n difusa (DUAL).</label><br>
    <label><input type="checkbox" name="q22" value="c"> Los routers de link-state env&iacute;an actualizaciones peri&oacute;dicas frecuentes de la tabla de enrutamiento completa.</label><br>
    <label><input type="checkbox" name="q22" value="d"> Se utiliza el protocolo de transporte confiable (RTP) para el env&iacute;o y la recepci&oacute;n de LSA.</label><br>
    <label><input type="checkbox" name="q22" value="e"> El c&aacute;lculo de la ruta m&aacute;s corta a cada destino se logra mediante el algoritmo SPF.</label>
    <div class="resultado"></div>
  </div>

  <!-- 23 -->
  <div class="pregunta" id="p23">
    <p>23. Consulte la ilustraci&oacute;n. &iquest;Qu&eacute; afirmaci&oacute;n describe la relaci&oacute;n DR/BDR del router HQ?</p>
    <label><input type="radio" name="q23" value="a"> HQ es el DR.</label><br>
    <label><input type="radio" name="q23" value="b"> HQ es el BDR.</label><br>
    <label><input type="radio" name="q23" value="c"> HQ es un DROTHER.</label><br>
    <label><input type="radio" name="q23" value="d"> HQ es miembro de una red NBMA.</label>
    <div class="resultado"></div>
  </div>

  <!-- 24 -->
  <div class="pregunta" id="p24">
    <p>24. Consulte la ilustraci&oacute;n. &iquest;C&oacute;mo se determin&oacute; la entrada de gateway predeterminado OSPF para R2?</p>
    <label><input type="radio" name="q24" value="a"> OSPF inyecta autom&aacute;ticamente las rutas predeterminadas en todas las publicaciones.</label><br>
    <label><input type="radio" name="q24" value="b"> Se define una ruta est&aacute;tica de gateway predeterminada en la configuraci&oacute;n de R2.</label><br>
    <label><input type="radio" name="q24" value="c"> El comando default-information originate se aplica en R1.</label><br>
    <label><input type="radio" name="q24" value="d"> El ISP define el gateway de &uacute;ltimo recurso y lo pasa autom&aacute;ticamente a R1 y R2.</label><br>
    <label><input type="radio" name="q24" value="e"> El comando ip default-gateway se aplica en R2.</label>
    <div class="resultado"></div>
  </div>

  <button type="button" onclick="corregir()">Enviar</button>

</form>

<div id="resumen"></div>

<script>
/* Respuestas correctas (seg&uacute;n la lista que me pasaste)
   - Para respuestas &uacute;nicas: cadena con la letra correcta (ej: "a")
   - Para respuestas m&uacute;ltiples: array con letras correctas (ej: ["b","d"])
*/
const respuestas = {
  q1: "a",
  q2: "a",
  q3: "a",
  q4: "b",
  q5: ["a","c"],
  q6: "b",
  q7: ["d","e"],
  q8: "c",
  q9: "b",
  q10: "c",
  q11: "c",
  q12: ["c","d"],
  q13: "c",
  q14: "b",
  q15: "a",
  q16: "d",
  q17: "c",
  q18: "c",
  q19: "d",
  q20: "b",
  q21: "b",
  q22: ["a","e"],
  q23: "c",
  q24: "c"
};

// utilidad: comparar dos arrays (ignorando orden)
function arraysIguales(a, b) {
  if (!Array.isArray(a) || !Array.isArray(b)) return false;
  if (a.length !== b.length) return false;
  const aa = a.slice().sort();
  const bb = b.slice().sort();
  for (let i = 0; i < aa.length; i++) if (aa[i] !== bb[i]) return false;
  return true;
}

function corregir() {
  const form = document.getElementById("quizForm");
  let correctas = 0;
  let incorrectas = 0;

  // Recorremos todas las claves en 'respuestas'
  for (let clave in respuestas) {
    const divPregunta = document.getElementById(clave.replace("q","p"));
    const resultadoDiv = divPregunta.querySelector(".resultado");
    // limpiar estados anteriores
    divPregunta.classList.remove("correcta", "incorrecta");
    resultadoDiv.textContent = "";

    const valorCorrecto = respuestas[clave];

    if (Array.isArray(valorCorrecto)) {
      // pregunta de multiple (checkbox)
      const checkboxes = form.querySelectorAll('input[name="' + clave + '"]');
      const seleccionadas = [];
      checkboxes.forEach(ch => { if (ch.checked) seleccionadas.push(ch.value); });

      if (seleccionadas.length === 0) {
        resultadoDiv.textContent = "✖ No respondida";
        divPregunta.classList.add("incorrecta");
        incorrectas++;
      } else {
        // comparar conjuntos
        if (arraysIguales(seleccionadas, valorCorrecto)) {
          resultadoDiv.textContent = "✔ Correcto";
          divPregunta.classList.add("correcta");
          correctas++;
        } else {
          resultadoDiv.textContent = "✖ Incorrecto";
          divPregunta.classList.add("incorrecta");
          incorrectas++;
        }
      }

    } else {
      // pregunta de unica (radio)
      const seleccion = form.querySelector('input[name="' + clave + '"]:checked');
      if (!seleccion) {
        resultadoDiv.textContent = "✖ No respondida";
        divPregunta.classList.add("incorrecta");
        incorrectas++;
      } else {
        if (seleccion.value === valorCorrecto) {
          resultadoDiv.textContent = "✔ Correcto";
          divPregunta.classList.add("correcta");
          correctas++;
        } else {
          resultadoDiv.textContent = "✖ Incorrecto";
          divPregunta.classList.add("incorrecta");
          incorrectas++;
        }
      }
    }
  }

  // mostrar resumen
  const resumen = document.getElementById("resumen");
  resumen.innerHTML = "Respuestas correctas: " + correctas + " &nbsp;&nbsp; Incorrectas: " + incorrectas;
  // desplazar hacia el resumen (útil si el formulario es largo)
  resumen.scrollIntoView({behavior: "smooth", block: "center"});
}
</script>

</body>
</html>
