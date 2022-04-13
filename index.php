<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Yahoo News To PDF</title>
</head>
<body>
    
    <div class="image">
        <div class="text">
            <h1>Get Yahoo News PDF</h1>
            <div>
                <form method="POST" action="handleYahooRSS.php">
                    <input id="form-input" class="button" type="submit" name="buildPDF" value="Download"/>
                </form>
            </div>
        </div>
    </div> 
    <div id="loading-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 class="modal-text">Your PDF is being built and will be loaded soon.</h3>
            <p class="modal-text">(Click anywhere outside of this modal or on the X to close it.)</p>
        </div>
    </div>   

    <script src="loaderAnimation.js"></script>
</body>
</html>