<!-- index.html -->

<!doctype html>
<html>
<head>
    <title>Look I'm AJAXing!</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"> <!-- load bootstrap via CDN -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
    <script src="magic.js"></script> <!-- load our javascript file -->
</head>
<body>
<div class="col-sm-6 col-sm-offset-3">

    <h1>Processing an AJAX Form</h1>

    <!-- OUR FORM -->
    <form action="process.php" method="POST">

        <!-- NAME -->
        <div id="name-group" class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Henry Pym">
            <!-- errors will go here -->
        </div>

        <!-- EMAIL -->
        <div id="email-group" class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="rudd@avengers.com">
            <!-- errors will go here -->
        </div>

        <!-- SUPERHERO ALIAS -->
        <div id="superhero-group" class="form-group">
            <label for="superheroAlias">Superhero Alias</label>
            <input type="text" class="form-control" name="superheroAlias" placeholder="Ant Man">
            <!-- errors will go here -->
        </div>

        <button type="submit" class="btn btn-success">Submit <span class="fa fa-arrow-right"></span></button>

    </form>

</div>
</body>
</html>
