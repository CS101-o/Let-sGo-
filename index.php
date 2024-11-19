<?php
// Optional: Start a PHP session or include shared resources
// session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description here">
    <title>My PHP Landing Page</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS -->
</head>
<body>
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Welcome to My Web App</h1>
            <p>Your one-stop solution for [describe service/product].</p>
            <a href="#features" class="cta-button">Learn More</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <h2>Features</h2>
            <div class="feature-item">
                <h3>Feature 1</h3>
                <p>Short description of Feature 1.</p>
            </div>
            <div class="feature-item">
                <h3>Feature 2</h3>
                <p>Short description of Feature 2.</p>
            </div>
            <div class="feature-item">
                <h3>Feature 3</h3>
                <p>Short description of Feature 3.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form action="contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 My Web App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
