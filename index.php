<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORDS</title>
</head>
<body>
    <form action="AsterisksCensor.php" method="get">
        <label>Paragraph:</label>
        <textarea name="paragraph" cols="30" rows="10"></textarea>

        <label>Badword:</label>
        <input type="text" name="badWord">
        
        <button type="submit">Censor this word!</button>
    </form>
</body>
</html>