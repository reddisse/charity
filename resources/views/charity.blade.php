<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Registration</title>
    <style>
        /* Style général pour la page */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
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
            opacity: 0.8; /* Atténuation de la vidéo pour améliorer la lisibilité */
        }

        /* Style du formulaire */
        .form-container {
            position: relative;
            background-color: rgba(255, 255, 255, 0.9); /* Arrière-plan légèrement transparent */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 100px auto;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        input, button, label {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="file"] {
            padding: 0;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="video-bg">
        <video autoplay muted loop>
            <source src="images/video2.mp4" type="video/mp4">
            <!-- Ajoute d'autres formats de vidéos si nécessaire -->
        </video>
    </div>

    <div class="form-container">
        <h1>Charity Registration</h1>
        <form action="submit_charity.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Charity Name" required><br>
            <input type="text" name="serial_number" placeholder="Serial Number" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="phone" placeholder="Phone Number" required><br>

            <label for="license">Upload License Document:</label>
            <input type="file" id="license" name="license" accept="image/*" required><br>

            <button type="submit">Register as Charity</button>
        </form>
    </div>

</body>
</html>
