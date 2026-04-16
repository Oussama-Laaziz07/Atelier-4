<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('Copilot_20260410_195011.png') no-repeat center center fixed;
            background-size: cover;
            animation: moveBG 30s linear infinite;
        }

        @keyframes moveBG {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-top: 40px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        .card {
            background: rgba(255,255,255,0.9);
            width: 300px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.5);
        }
        .card h2 {
            margin-bottom: 15px;
            color: #3498db;
        }
        .card p {
            color: #555;
            margin-bottom: 20px;
        }
        .card a {
            display: inline-block;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .card a:hover {
            background: #2c3e50;
        }

        .portfolio {
            margin: 60px auto;
            max-width: 700px;
            text-align: center;
            background: rgba(0,0,0,0.7);
            padding: 40px;
            border-radius: 16px;
            color: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.5);
        }
        .portfolio h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .portfolio p {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome To My Portfolio</h1>
    <div class="card-container">
        <div class="card">
            <h2>Atelier 1</h2>
            <p>Découvrez les exercices de la première partie.</p>
            <a href="partie1">Voir l'atelier</a>
        </div>
        <div class="card">
            <h2>Atelier 2</h2>
            <p>La création d'une inscription Web.</p>
            <a href="api/Inscription">Voir l'atelier</a>
        </div>
        <div class="card">
            <h2>Atelier 3</h2>
            <p>L'ajout d'une photo sur le formulaire</p>
            <a href="Inscription">Voir l'atelier</a>
            <a href="https://github.com/Oussama-Laaziz07/Atelier_3.git">Github Repo</a>
        </div>
        <div class="card">
            <h2>Atelier 4</h2>
            <p>Stocker des Données sur un fichier text</p>
            <a href="/Rapport4">Voir Rapport</a>
            <a href="https://github.com/Oussama-Laaziz07/Atelier-4.git">Github Repo</a>
        </div>
    </div>
    <div class="portfolio">
        <h2>Oussama Laaziz</h2>
        <p>Stagiaire de Première année Développement Digital</p>
    </div>
</body>
</html>
