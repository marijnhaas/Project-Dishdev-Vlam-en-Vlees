
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vlam en Vlees is een gezellig restaurant met heerlijk eten.">
    <meta name="keywords" content="Vlees, Restaurant, Vleesrestaurant">
    <meta name="author" content="Marijn Haasnoot">
    <title>Reservering</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/hamburger.js"></script>
</head>
<body>
    <?php include 'Header/header.php'; ?>
    <section class="resContainer">
    <section class="reserveren">
        <h2>Maak een reservering</h2>
        <form method="POST" action="">
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="telefoon">Telefoon:</label>
            <input type="tel" id="telefoon" name="telefoon" required>
            
            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" required>
            
            <label for="tijd">Tijd:</label>
            <input type="time" id="tijd" name="tijd" required>
            
            <label for="personen">Aantal personen:</label>
            <select id="personen" name="personen" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5+</option>
            </select>
            
            <button type="submit" class="submitknop">Reserveren</button>
        </form>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST['naam']);
    $email = htmlspecialchars($_POST['email']);
    $telefoon = htmlspecialchars($_POST['telefoon']);
    $datum = htmlspecialchars($_POST['datum']);
    $tijd = htmlspecialchars($_POST['tijd']);
    $personen = htmlspecialchars($_POST['personen']);
    
    echo "<h2>Reserveringsdetails</h2>";
    echo "<p>Naam: $naam</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefoon: $telefoon</p>";
    echo "<p>Datum: $datum</p>";
    echo "<p>Tijd: $tijd</p>";
    echo "<p>Aantal personen: $personen</p>";
}
?>

</section>
</section>
    <?php include 'Footer/footer.php'; ?>
</body>
</html>
