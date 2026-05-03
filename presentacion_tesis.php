<?php
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PillHour | Defensa de Tesis</title>
  <style>
    :root{--bg:#f3f6fb;--card:#fff;--tx:#1d2a3a;--sub:#4d6076;--pri:#0f62fe;--ok:#0b8f6e;--bd:#dbe5f2}
    *{box-sizing:border-box} body{margin:0;font-family:Segoe UI,Roboto,Arial,sans-serif;background:var(--bg);color:var(--tx);line-height:1.55}
    .hero{background:linear-gradient(135deg,#0f62fe,#4a8dff);color:#fff;padding:54px 18px;text-align:center}
    .hero h1{margin:0 0 10px;font-size:2rem} .hero p{margin:0 auto;max-width:980px;opacity:.95}
    .wrap{max-width:1140px;margin:-22px auto 36px;padding:0 14px}
    .card{background:var(--card);border:1px solid var(--bd);border-radius:14px;padding:20px;margin-bottom:14px;box-shadow:0 6px 14px rgba(15,40,85,.08)}
    h2{margin:0 0 10px;color:#123f84} h3{margin:12px 0 6px;color:#1e4f9b} p{margin:8px 0}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:12px}
    .pill{display:inline-block;margin:0 6px 6px 0;padding:4px 10px;border-radius:999px;background:#e9f2ff;border:1px solid #c4d9ff;color:#184f9e;font-size:.9rem}
    .kpi{font-weight:700;color:var(--ok)} .muted{color:var(--sub)}
    table{width:100%;border-collapse:collapse;margin-top:8px;font-size:.95rem}
    th,td{border:1px solid #d5e0ef;padding:8px;text-align:left} th{background:#eef4ff}
    .image-box{margin-top:10px;padding:10px;border:1px dashed #b7c8e5;border-radius:10px;background:#f8fbff}
    .image-box img{width:100%;height:auto;border-radius:8px;border:1px solid #d3def0;background:#fff}
    .caption{margin-top:8px;font-size:.9rem;color:#4b5f79}
    .speaker-notes li{margin-bottom:6px}
    .ref li{margin-bottom:6px} footer{text-align:center;color:var(--sub);font-size:.9rem;padding:8px 10px 22px}
  </style>
</head>
<body>
  <header class="hero">
    <h1>PillHour: Guion de Defensa de Tesis</h1>
    <p>Presentación orientada a exposición oral: problema, solución, arquitectura IoT + plataforma web, base de datos (BDD), resultados de pruebas y mejoras futuras.</p>
  </header>

  <main class="wrap">
    <section class="card">
      <h2>1) Apertura para la defensa</h2>
      <p>El problema que abordamos es la falta de adherencia farmacológica en adultos mayores con enfermedades crónicas. PillHour propone una solución integral con dispensación automática y monitoreo remoto para reducir olvidos y riesgos clínicos.</p>
      <span class="pill">IoT con ESP32</span><span class="pill">Plataforma Web</span><span class="pill">BDD en Supabase</span><span class="pill">Alertas de dosis omitida</span>
    </section>

    <section class="card">
      <h2>2) Objetivo e hipótesis</h2>
      <p><strong>Objetivo general:</strong> Diseñar, desarrollar e implementar un prototipo inteligente de dispensador automático de medicamentos, integrando hardware y software para mejorar adherencia terapéutica.</p>
      <p><strong>Hipótesis:</strong> Un sistema automatizado con alertas en tiempo real incrementa significativamente la adherencia farmacológica en pacientes de la tercera edad.</p>
    </section>

    <section class="card">
      <h2>3) Arquitectura del sistema y BDD</h2>
      <div class="grid">
        <article>
          <h3>Arquitectura funcional</h3>
          <ul>
            <li>ESP32 consulta horarios desde la nube.</li>
            <li>Servomotores liberan dosis en horas programadas.</li>
            <li>La web administra usuarios, medicamentos y programación.</li>
            <li>Se registran eventos de dispenso y alertas.</li>
          </ul>
        </article>
        <article>
          <h3>Base de datos (Supabase)</h3>
          <ul>
            <li>Tablas para usuarios, roles, medicamentos y programación.</li>
            <li>Historial de eventos con resultado y observaciones.</li>
            <li>Configuración de correos y alertas.</li>
            <li>Relaciones entre paciente, cuidador y dosis programadas.</li>
          </ul>
        </article>
      </div>

      <div class="image-box">
        <img src="assets/img/modelo_bdd_pillhour.svg" alt="Modelo de base de datos del sistema PillHour" />
        <p class="caption"><strong>Figura:</strong> Modelo de BDD de PillHour (usuarios, programación, medicamentos, alertas, historial y relaciones).</p>
      </div>
      <p class="muted">Nota: coloca aquí la imagen del diagrama de base de datos que compartiste, guardándola como <code>assets/img/modelo_bdd_pillhour.svg</code>.</p>
    </section>

    <section class="card">
      <h2>4) Desarrollo del prototipo</h2>
      <ol>
        <li>Diseño de lógica y flujo de dispensación.</li>
        <li>Prototipado electrónico: ESP32, servos, buzzer y sensores.</li>
        <li>Desarrollo web con autenticación y roles (admin, cuidador, paciente).</li>
        <li>Migración de BDD local a Supabase para acceso remoto.</li>
        <li>Integración final hardware + software y calibración.</li>
      </ol>
    </section>

    <section class="card">
      <h2>5) Resultados clave (para sustentar en defensa)</h2>
      <table>
        <thead><tr><th>Configuración</th><th>Pruebas</th><th>Correctas</th><th>Precisión</th></tr></thead>
        <tbody>
          <tr><td>2 pastillas por compartimento</td><td>20</td><td>20</td><td class="kpi">100%</td></tr>
          <tr><td>3 pastillas por compartimento</td><td>20</td><td>14</td><td>70%</td></tr>
          <tr><td>3 compartimentos con 2 pastillas c/u</td><td>15</td><td>15</td><td class="kpi">100%</td></tr>
        </tbody>
      </table>
      <p>El sistema es estable con dos pastillas por compartimento; con tres pastillas aparecen interferencias mecánicas y eventos de doble dispensación.</p>
    </section>

    <section class="card">
      <h2>6) Conclusiones y mejora propuesta</h2>
      <ul>
        <li>Se validó la integración entre ESP32, plataforma web y BDD en la nube.</li>
        <li>Se confirmó viabilidad técnica para monitoreo remoto por cuidadores.</li>
        <li>Mejora propuesta: tres compuertas independientes (mañana/tarde/noche) e impresión 3D para reducir fricción.</li>
      </ul>
    </section>

    <section class="card">
      <h2>7) Guion breve para exponer (3–5 minutos)</h2>
      <ul class="speaker-notes">
        <li><strong>Min 1:</strong> problema real y población objetivo (adultos mayores).</li>
        <li><strong>Min 2:</strong> solución PillHour y arquitectura IoT + web + BDD.</li>
        <li><strong>Min 3:</strong> diagrama de base de datos y flujo de datos.</li>
        <li><strong>Min 4:</strong> resultados de precisión y limitaciones encontradas.</li>
        <li><strong>Min 5:</strong> conclusiones, impacto y trabajo futuro.</li>
      </ul>
    </section>
  </main>

  <footer>Defensa de tesis · Proyecto PillHour · Dispensador Inteligente de Medicamentos</footer>
</body>
</html>
