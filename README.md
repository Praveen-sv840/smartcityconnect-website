<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SmartCity Connect - Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #f4f6f8;
      color: #333;
    }

    header {
      background-color: #0077cc;
      color: white;
      padding: 1em 2em;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      font-size: 1.8em;
    }

    .user-welcome {
      font-size: 1.1em;
    }

    nav {
      background-color: #fff;
      padding: 1em;
      display: flex;
      gap: 1em;
      flex-wrap: wrap;
      justify-content: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    nav a {
      text-decoration: none;
      color: #0077cc;
      font-weight: bold;
      padding: 0.5em 1em;
      border-radius: 6px;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #e6f0fa;
    }

    .widgets {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1em;
      padding: 2em;
    }

    .widget {
      background-color: #ffffff;
      padding: 1em;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .widget h2 {
      font-size: 1.2em;
      margin-bottom: 0.5em;
    }

    .alerts, .news-feed {
      padding: 2em;
    }

    .alert, .news-item {
      background: #fff3cd;
      border-left: 5px solid #ffc107;
      padding: 1em;
      margin-bottom: 1em;
      border-radius: 6px;
    }

    footer {
      background-color: #0077cc;
      color: white;
      text-align: center;
      padding: 1em;
      margin-top: 2em;
    }
  </style>
</head>
<body>

  <header>
    <h1>SmartCity Connect</h1>
    <div class="user-welcome" id="welcomeMessage">Welcome, Guest!</div>
  </header>

  <nav>
    <a href="home.html">🏠 Home</a>
    <a href="report.html">🛠️ Report Issue</a>
    <a href="complaints.html">📋 Track Complaints</a>
    <a href="services.html">📄 E-Governance</a>
    <a href="opendata.html">📊 Open Data</a>
    <a href="aichatbot.html">🤖 AI Assistant</a>
    <a href="setting.html">⚙️ Settings</a>
  </nav>

  <section class="widgets">
    <div class="widget" id="weatherWidget">
      <h2>Weather</h2>
      <p>Loading weather...</p>
    </div>
    <div class="widget">
      <h2>Traffic</h2>
      <p>Moderate traffic in your area</p>
    </div>
    <div class="widget">
      <h2>Garbage Pickup</h2>
      <p>Next scheduled pickup: Tomorrow 8 AM</p>
    </div>
  </section>

  <section class="alerts">
    <h2>🚨 Emergency Alerts</h2>
    <div class="alert">Power outage in Sector 12 - expected restoration by 6 PM.</div>
  </section>

  <section class="news-feed">
    <h2>📰 City News & Events</h2>
    <div class="news-item">Smart Road construction starts next week in Zone B.</div>
    <div class="news-item">Free health checkup camp this Sunday at Community Hall 3.</div>
  </section>

  <footer>
    &copy; 2025 SmartCity Connect. All rights reserved.
  </footer>

  <script>
    // Simulated user name
    const userName = "Sony";
    document.getElementById("welcomeMessage").innerText = `Welcome, ${userName}!`;

    // Simulated weather widget (placeholder logic)
    const weatherWidget = document.getElementById("weatherWidget");
    setTimeout(() => {
      weatherWidget.innerHTML = `
        <h2>Weather</h2>
        <p>🌤️ 28°C, Clear Skies</p>
      `;
    }, 1000);
  </script>

</body>
</html>
