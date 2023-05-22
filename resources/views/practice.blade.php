<!DOCTYPE html>
<html>
<head>
    <title>Submit Practice Form</title>
</head>
<body>
<h1>Форма о прохождении практики</h1>
<form method="POST" action="{{ route('submit-practice') }}">
    @csrf
    <label for="name">ФИО:</label>
    <input type="text" name="name" id="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
    <label for="practice_area">Место практики:</label>
    <select name="practice_area" id="practice_area" required>
        <option disabled value="" selected></option>
        <option value="GazStroyProm">АО "Газстройпром"</option>
        <option value="iTechArt">iTechArt</option>
        <option value="Modsen">Modsen</option>
    </select><br><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    button[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

</style>
