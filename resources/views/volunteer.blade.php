<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration</title>
    <style>
        /* Style général pour la page */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
        }

        /* Conteneur de la vidéo d'arrière-plan */
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .video-bg video {
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            opacity: 0.7; /* Légère atténuation pour la vidéo */
        }

        /* Conteneur du formulaire */
        .form-container {
            position: relative;
            background-color: rgba(255, 255, 255, 0.9); /* Arrière-plan légèrement opaque */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin: 120px auto;
            text-align: center;
        }

        /* Titre */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff9800; /* Couleur vive pour attirer l'attention */
        }

        /* Input et bouton */
        input, button, select {
            margin-top: 15px;
            padding: 12px;
            width: 100%;
            font-size: 1.1rem;
            border-radius: 6px;
            border: none;
            box-sizing: border-box;
        }

        /* Sélecteur d'âge */
        select {
            background-color: #e0f7fa; /* Couleur légère pour contraste */
        }

        /* Style du bouton */
        button {
            background-color: #ff9800;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1.3rem;
            font-weight: bold;
            border-radius: 8px;
        }

        button:hover {
            background-color: #f57c00;
        }

        /* Texte d'erreur */
        .error-message {
            color: red;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>

    <div class="video-bg">
        <video autoplay muted loop>
            <source src="images/video1.mp4" type="video/mp4">
            <!-- Ajoute d'autres formats de vidéos si nécessaire -->
        </video>
    </div>

    <div class="form-container">
        <h1>Volunteer Registration</h1>
        <form id="volunteer-form" action="submit_volunteer.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="phone" placeholder="Phone Number" required><br>

            <!-- Sélection de l'âge -->
            <select name="age" id="age-select" required>
                <option value="">Select Age</option>
                <!-- Générer les options d'âge de 18 à 100 -->
                <script>
                    for (let i = 18; i <= 100; i++) {
                        document.write('<option value="' + i + '">' + i + '</option>');
                    }
                </script>
            </select><br>

            <button type="submit">Register as Volunteer</button>
            <p class="error-message" id="error-message">You must be 18 or older to register.</p>
        </form>
    </div>

    <script>
        // Validation de l'âge
        document.getElementById('volunteer-form').addEventListener('submit', function(event) {
            const age = document.getElementById('age-select').value;
            const errorMessage = document.getElementById('error-message');

            if (age < 18) {
                event.preventDefault(); // Empêche la soumission du formulaire
                errorMessage.style.display = 'block'; // Affiche le message d'erreur
            } else {
                errorMessage.style.display = 'none'; // Cache le message d'erreur si tout va bien
            }
        });
    </script>

</body>
</html>
