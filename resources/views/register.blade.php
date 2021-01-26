<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
    </div>

    <form action="{{ action('AuthController@store') }}">
        <p>First name:</p>
        <input type="text" name="first_name">

        <p>Last name:</p>
        <input type="text" name="last_name">

        <p>Gender:</p>
        <input type="radio" name="gender" value="male">Male
        <br>
        <input type="radio" name="gender" value="female">Female
        <br>
        <input type="radio" name="gender" value="other">Other

        <p>Nationally:</p>
        <select>
            <option value="indonesian" selected>Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
            <option value="singapore">Singapore</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" name="language" value="bahasa_indonesia">Bahasa Indonesia
        <br>
        <input type="checkbox" name="language" value="english">English
        <br>
        <input type="checkbox" name="language" value="other">Other

        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>