<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="script.js" ></script>
</head>
    <body class="p-4">
        <form class="border rounded p-4">
            <h1 class="mb-2">Book Finder:</h1>
            <div class="row align-items-end">
                <div class="col-sm-4 mb-3">
                    <label for="book_name" class="form-label">Title</label>
                    <input id="searchBox" name="book_name" type="text" class="form-control" placeholder="Search Book">
                </div>
                <div class="col-sm-4 mb-3">
                    <label for="author_name" class="form-label">Author</label>
                    <input id="author_name" name="author_name" type="text" class="form-control" placeholder="Search Author">
                </div>
                <div class="col-sm-4 ">
                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                </div>
            </div>
        </form>
        <div id="resultContainer"></div>
    </body>
</html>