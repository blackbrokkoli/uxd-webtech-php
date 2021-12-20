<!doctype html>
<html lang="en">
<head>
    <title>Webtech | Settings</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="./styles/main.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
</head>

<body>

    <img class='header-img' src="./images/user.png" alt="User Icon" width="100" height="100">
    <header>
        <h1>Profile Settings</h1>
    </header>
    <main>
        <form>
            <fieldset>
                <legend>Base Data</legend>

                <div class="label-input-wrapper">

                    <label for="firstName">First Name</label>

                    <input type="text" id="firstName" name="firstname">
                </div>
                <div class="label-input-wrapper">


                    <label for="lastName">Last Name</label>

                    <input type="text" id="lastName" name="lastname">
                </div>

                <div class="label-input-wrapper">

                    <label for="drink">Coffee or Tea?</label>
                    <select name="drink" id="drink">
                        <option value="coffee">Coffee</option>
                        <option value="tea">Tea</option>
                        <option selected value="neitherNor">Neither nor</option>
                    </select>

                </div>
            </fieldset>
            <fieldset>
                <legend>Tell Something About You</legend>
                <textarea name="comment" width="30" height="20">Leave a comment here</textarea>
            </fieldset>
            <fieldset>
                <legend>Prefered Chat Layout</legend>
                <div>
                    <input type="radio" name="oneline" id="oneline-true" value="true">
                    <label for="oneline-true">Username and message in one line</label>
                    
                </div>

                <div>
                    <input type="radio" name="oneline" id="oneline-false" value="false">
                    <label for="oneline-false">Username and message in separated lines</label>
                    
                </div>

            </fieldset>
            <a class="button" href="friends.html">Cancel</a>
            <input class="button button-primary" type="submit" value="Save">
        </form>
    </main>
</body>

</html>