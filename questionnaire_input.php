<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
    <form action="questionnaire_create.php" method="POST">
        <fieldset>
            <legend>FLIGHT DATA</legend>

                <div>NAME:    <input type="text" name="name"></div>
                <div>AIRLINE COMPANY: <input type="text" name="company"></div>
                <div>FLIGHT FROM: <input type="text" name="flightfrom"></div>
                <div>FLIGHT TO:   <input type="text" name="flightto"></div>
                <div>DATE:    <input type="date" name="date"></div>
            </div>
            <div>
                <button>SUBMIT</button>
            </div>
            <a href="questionnaire_read.php">フライトチケット格納庫</a>
        </fieldset>
    </form>

</body>
</html>