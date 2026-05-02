<?php
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PillHour | Presentación de Tesis</title>
  <style>
    :root{--bg:#f3f6fb;--card:#fff;--tx:#1d2a3a;--sub:#4d6076;--pri:#0f62fe;--ok:#0b8f6e;--bd:#dbe5f2}
    *{box-sizing:border-box} body{margin:0;font-family:Segoe UI,Roboto,Arial,sans-serif;background:var(--bg);color:var(--tx);line-height:1.55}
    .hero{background:linear-gradient(135deg,#0f62fe,#4a8dff);color:#fff;padding:54px 18px;text-align:center}
    .hero h1{margin:0 0 10px;font-size:2rem} .hero p{margin:0 auto;max-width:980px;opacity:.95}
    .wrap{max-width:1120px;margin:-22px auto 36px;padding:0 14px}
    .card{background:var(--card);border:1px solid var(--bd);border-radius:14px;padding:20px;margin-bottom:14px;box-shadow:0 6px 14px rgba(15,40,85,.08)}
    h2{margin:0 0 10px;color:#123f84} h3{margin:12px 0 6px;color:#1e4f9b} p{margin:8px 0}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:12px}
    .pill{display:inline-block;margin:0 6px 6px 0;padding:4px 10px;border-radius:999px;background:#e9f2ff;border:1px solid #c4d9ff;color:#184f9e;font-size:.9rem}
    .kpi{font-weight:700;color:var(--ok)} .muted{color:var(--sub)}
    table{width:100%;border-collapse:collapse;margin-top:8px;font-size:.95rem}
    th,td{border:1px solid #d5e0ef;padding:8px;text-align:left} th{background:#eef4ff}
    .ref li{margin-bottom:6px} footer{text-align:center;color:var(--sub);font-size:.9rem;padding:8px 10px 22px}
  </style>
</head>
<body>
  <header class="hero">
    <h1>PillHour: Dispensador Automático Inteligente de Medicamentos</h1>
    <p>Presentación de tesis basada en la investigación y desarrollo de un prototipo IoT (ESP32) + plataforma web para mejorar la adherencia farmacológica en adultos mayores con enfermedades crónicas.</p>
  </header>

  <main class="wrap">
    <section class="card">
      <h2>Resumen (ES)</h2>
      <p>La falta de adherencia a tratamientos farmacológicos en adultos mayores con enfermedades crónicas constituye un problema de salud pública. Para atender esta necesidad, se diseñó, desarrolló e implementó un prototipo inteligente denominado <strong>PillHour</strong>, integrando hardware IoT y una plataforma web con base de datos para monitoreo y gestión del tratamiento.</p>
      <p>La hipótesis planteó que un dispensador automatizado con alertas incrementa significativamente la adherencia terapéutica. El prototipo se construyó con ESP32, servomotores y sensores; además se integró con una plataforma web para horarios y notificaciones de dosis omitidas. Las pruebas funcionales evidenciaron <strong>100% de precisión con dos pastillas por compartimento</strong> e integración exitosa hardware-software.</p>
      <p class="muted"><strong>Palabras clave:</strong> Dispensador, pastillas, IoT, ESP32, adherencia farmacológica, automatización, plataforma web, base de datos, servomotores, medicamentos.</p>
    </section>

    <section class="card">
      <h2>Abstract (EN)</h2>
      <p>Lack of adherence to pharmacological treatments among elderly patients with chronic diseases is a significant public health issue. To address this, an intelligent automatic medication dispenser prototype named <strong>PillHour</strong> was designed, developed, and implemented, integrating IoT-based hardware and a web platform with database support.</p>
      <p>The hypothesis proposed that an automated dispenser with real-time alerts significantly improves adherence. The prototype was built with ESP32, servo motors, and sensors; and integrated with a web platform to configure schedules and send missed-dose notifications. Functional tests showed <strong>100% accuracy with two pills per compartment</strong> and successful hardware-software integration.</p>
      <p class="muted"><strong>Keywords:</strong> Dispenser, pills, IoT, ESP32, pharmacological adherence, automation, web platform, database, servo motors, medication.</p>
    </section>

    <section class="card">
      <h2>I. Objetivo general</h2>
      <p>Diseñar, desarrollar e implementar un prototipo de dispensador automático de medicamentos inteligente, integrando hardware IoT y software web con base de datos, para mejorar la adherencia farmacológica mediante dispensación controlada y sistema de alertas.</p>
      <h3>II. Objetivos específicos</h3>
      <ol>
        <li>Construir el prototipo con ESP32, servomotores y sensores para liberar dosis en horarios predefinidos y verificar su retiro.</li>
        <li>Desarrollar la plataforma web para configuración de horarios y notificaciones push ante dosis omitidas.</li>
        <li>Integrar módulos hardware + web con comunicación estable y segura para sincronización de datos y alertas.</li>
      </ol>
    </section>

    <section class="card">
      <h2>III. Introducción</h2>
      <p>El proyecto aborda la adherencia a tratamientos en personas con enfermedades crónicas, especialmente adultos mayores con dificultades para recordar la toma oportuna de medicación. La propuesta integra electrónica IoT y plataforma web para programación, monitoreo y seguimiento.</p>
      <p>La hipótesis sostiene que la combinación de dispensación programada y alertas en tiempo real reduce olvidos y complicaciones asociadas al incumplimiento terapéutico.</p>

      <h3>IV. Justificación</h3>
      <p>PillHour responde a una necesidad real: los olvidos en medicación generan riesgos evitables y carga para familias y sistemas sanitarios. El sistema mejora la calidad de vida al reducir omisiones, permite monitoreo remoto para cuidadores y demuestra que soluciones IoT accesibles pueden escalarse hacia entornos domiciliarios y clínicos.</p>
    </section>

    <section class="card">
      <h2>V. Marco teórico (síntesis)</h2>
      <div class="grid">
        <div>
          <h3>Antecedentes</h3>
          <ul>
            <li>Automatización en salud para administración controlada de medicación.</li>
            <li>Dispensadores como respuesta a olvidos y errores de horario/dosis.</li>
            <li>IoT con ESP32 para conectividad remota y control en línea.</li>
            <li>Supabase + Render para operación en nube sin dependencia local.</li>
          </ul>
        </div>
        <div>
          <h3>Fundamentos técnicos</h3>
          <ul>
            <li>ESP32 (WiFi/Bluetooth) como controlador central.</li>
            <li>Servomotores para apertura precisa de compuertas.</li>
            <li>Buzzer como alerta sonora de disponibilidad.</li>
            <li>Base de datos SQL para horarios y registros.</li>
            <li>NTP para sincronización exacta de tiempo.</li>
            <li>Plano inclinado para desplazamiento gravitacional de pastillas.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="card">
      <h2>VI. Desarrollo</h2>
      <h3>Metodología</h3>
      <p>Se aplicó una metodología incremental: diseño lógico, prototipado en protoboard, desarrollo web, migración de base de datos a Supabase, construcción de maqueta, calibración de servos e integración total del sistema.</p>
      <h3>Procedimientos clave</h3>
      <ol>
        <li>Diseño de flujo del sistema y lógica de programación.</li>
        <li>Integración electrónica ESP32 + servos + buzzer (+ LCD en fase de ajuste).</li>
        <li>Desarrollo web con roles (admin, cuidador, paciente).</li>
        <li>Construcción mecánica en cartón con plano inclinado.</li>
        <li>Calibración de compuertas y validación funcional.</li>
      </ol>
      <span class="pill">Admin: gestiona usuarios y asignaciones</span>
      <span class="pill">Cuidador: programa y monitorea dosis</span>
      <span class="pill">Paciente: visualiza dispensos</span>
    </section>

    <section class="card">
      <h2>VII. Resultados</h2>
      <p>El sistema mostró funcionamiento estable con <strong>2 pastillas por compartimento</strong>. Al incorporar una tercera pastilla aparecieron casos de dispensación doble por interferencia mecánica y tiempos de actuación de servomotores.</p>
      <table>
        <thead><tr><th>Configuración</th><th>Pruebas</th><th>Dispensación correcta</th><th>Precisión</th></tr></thead>
        <tbody>
          <tr><td>2 pastillas por compartimento</td><td>20</td><td>20</td><td class="kpi">100%</td></tr>
          <tr><td>3 pastillas por compartimento</td><td>20</td><td>14</td><td>70%</td></tr>
          <tr><td>3 compartimentos con 2 pastillas c/u</td><td>15</td><td>15</td><td class="kpi">100%</td></tr>
        </tbody>
      </table>
      <h3>Evaluación de procesos</h3>
      <table>
        <thead><tr><th>Parámetro</th><th>Resultado</th></tr></thead>
        <tbody>
          <tr><td>Conexión WiFi</td><td>Exitosa</td></tr>
          <tr><td>Sincronización NTP</td><td>Correcta</td></tr>
          <tr><td>Consulta Supabase</td><td>Funcional</td></tr>
          <tr><td>Comunicación ESP32 - web</td><td>Estable</td></tr>
        </tbody>
      </table>
    </section>

    <section class="card">
      <h2>VIII. Conclusiones</h2>
      <ul>
        <li>Se cumplió el objetivo general de diseño e integración de un prototipo funcional.</li>
        <li>La dispensación fue estable y precisa con dos pastillas por compartimento.</li>
        <li>La integración ESP32 + Supabase + plataforma web resultó operativa y sincronizada.</li>
        <li>La principal limitación fue la interferencia mecánica con tres pastillas.</li>
        <li>Mejoras futuras: tres compuertas independientes (mañana/tarde/noche), impresión 3D, sensores de retiro, monitoreo en tiempo real y pruebas con usuarios reales.</li>
      </ul>
    </section>

    <section class="card">
      <h2>IX. Referencias (base teórica)</h2>
      <ol class="ref">
        <li>Espressif Systems. <em>ESP32 Series Datasheet</em>, 2023.</li>
        <li>Futaba Corporation. <em>Servo Motor Technical Information</em>, 2020.</li>
        <li>Horowitz, P. &amp; Hill, W. <em>The Art of Electronics</em>, 2015.</li>
        <li>Monk, S. <em>Programming Arduino</em>, 2016.</li>
        <li>Elmasri, R. &amp; Navathe, S. <em>Fundamentals of Database Systems</em>, 2017.</li>
        <li>Duckett, J. <em>PHP and MySQL: Server-Side Web Development</em>, 2022.</li>
        <li>Ashton, K. “That Internet of Things Thing”, RFID Journal, 2009.</li>
        <li>Serway, R. &amp; Jewett, J. <em>Physics for Scientists and Engineers</em>, 2014.</li>
        <li>Mills, D. <em>Computer Network Time Synchronization</em>, 2010.</li>
        <li>Supabase Documentation, 2024. Render Documentation, 2024.</li>
      </ol>
    </section>
  </main>

  <footer>Presentación de tesis · Proyecto PillHour · Dispensador Inteligente de Medicamentos</footer>
</body>
</html>
