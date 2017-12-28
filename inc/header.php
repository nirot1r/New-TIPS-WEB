<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <title><?= $title ?> / T!PS</title>
        <style>
            .margin-top {
                margin-top: 20px;
            }
            .container {
                margin-top: 20px;
                margin-bottom: 20px;
            }
                nav .container {
                    margin-top: 0px;
                    margin-bottom: 0px;
                }
            .nirot1r-card {
                /*border: 1px solid #111;*/
                    border-radius: 10px;
                margin: 10px 0px ; padding: 10px;
                text-align: center;
            }
                .nirot1r-icon {
                    font-size: 5em;
                }
                .nirot1r-content-min {
                    font-size: 2.0em;
                        font-weight: bold;
                }
                .nirot1r-content {
                    font-size: 2.5em;
                        font-weight: bold;
                }
                .nirot1r-title {
                    font-size: 1em;
                }
            .nirot1r-table {
                width: 100%;
                font-size: 1.5em;
            }
                .nirot1r-table tr {
                    border-bottom: 1px solid #ddd;
                }
                .nirot1r-table .nirot1r-table-icon {
                    width: 10%;
                    text-align: center;
                }
                .nirot1r-table .nirot1r-table-header {
                    padding: 5px;
                    width: 30%;
                    font-weight: bold;
                }
                .nirot1r-table .nirot1r-table-data {
                    padding: 5px;
                    width: 60%;
                }
        </style>
        <script src="/js/jquery.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="https://use.fontawesome.com/ddf32e2788.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>