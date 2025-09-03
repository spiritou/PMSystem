<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= APP_URL ?>/Css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>Admin Dashboard</h1>
            <div class="menu-container">
                <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="menu-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </label>
                <nav class="menu-nav">
                    <ul>
                        <li><a href="<?= APP_URL ?>/logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="dashboard-main">
            <section class="stats-and-filters">
                <div class="stat-card">
                    <h2>120</h2>
                    <p>Total Work Hours</p>
                </div>
                <div class="stat-card">
                    <h2>8</h2>
                    <p>Active Sections</p>
                </div>
                <div class="filter-card">
                    <select>
                        <option>Apr 1, 2024 — Apr 22, 2024</option>
                    </select>
                    <select>
                        <option>Asset</option>
                    </select>
                    <select>
                        <option>Section</option>
                    </select>
                </div>
            </section>

            <section class="charts-section">
                <div class="chart-card">
                    <h3>Top 5 Sections</h3>
                    <div class="bar-chart">
                        <div class="bar-item">
                            <span class="label">A</span>
                            <div class="bar" style="width: 90%;"></div>
                        </div>
                        <div class="bar-item">
                            <span class="label">B</span>
                            <div class="bar" style="width: 70%;"></div>
                        </div>
                        <div class="bar-item">
                            <span class="label">C</span>
                            <div class="bar" style="width: 55%;"></div>
                        </div>
                        <div class="bar-item">
                            <span class="label">D</span>
                            <div class="bar" style="width: 40%;"></div>
                        </div>
                        <div class="bar-item">
                            <span class="label">E</span>
                            <div class="bar" style="width: 30%;"></div>
                        </div>
                    </div>
                </div>

                <div class="chart-card">
                    <h3>Work Hours Distribution</h3>
                    <div class="donut-chart">
                        <!-- Donut chart will be created with CSS -->
                    </div>
                </div>
            </section>

            <section class="full-width-chart">
                <div class="chart-card">
                    <h3>Work Hours Over Time</h3>
                    <div class="line-chart-placeholder">
                         <!-- Placeholder for line chart -->
                         <p style="text-align: center; padding: 50px; color: #aaa;">Line chart would be here</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>