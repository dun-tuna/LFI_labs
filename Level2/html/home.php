<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body { font-family: Arial; margin: 40px; background: #f0f0f0; }
        .container { background: white; padding: 20px; border-radius: 5px; }
        a { margin: 10px; text-decoration: none; color: #0066cc; }
    </style>
</head>
<body>
    <div class="container">
        <h1> Home Page</h1>
        <p>Welcome to the LFI Lab Level 2!</p>
        <p>This page is vulnerable to Local File Inclusion.</p>
        <hr>
        <a href="?page=about">About</a>
        <a href="?page=contact">Contact</a>
    </div>
</body>
</html>