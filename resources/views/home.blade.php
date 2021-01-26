<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div>
        <h1>SanberBook</h1>
        <h2>Social Media Developer Santai Berkualitas</h2>
        <p>Belajar dan berbagi agar hidup ini semakin santai berkualitas</p>
    </div>

    <div>
        <h2>Benefit Join di SanberBook</h2>
        <ul>
            <li>Mendapat motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer</li>
        </ul>
    </div>

    <div>
        <h2>Cara Bergabung ke SanberBook</h2>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di 
                <a href="{{ action('AuthController@index') }}">Form Sign Up</a>
            </li>
            <li>Selesai!</li>
        </ol>
    </div>
</body>
</html>