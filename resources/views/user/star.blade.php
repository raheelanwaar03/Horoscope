<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscope</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: yellow;
        }

        .container {
            margin-top: 50px;
        }

        .horoscope {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .zodiac-image {
            max-width: 100px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
                <a href="#" data-toggle="modal" data-target="#{{ $horoscope->sign }}">
                    <center>
                    <div class="col-md-6 m-3 offset-md-3 horoscope">
                        <div class="p-3 card">
                            <div class="card-body">
                                <div class="card-img">
                                <img src="{{ asset('image/' . $horoscope->image) }}" alt="Libra" height="250px" width="250px" class="img-fluid zodiac-image">
                                </div>
                                <div class="text-center">
                                    {{ $horoscope->sign }}
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                </a>
                <div class="modal fade" id="{{ $horoscope->sign }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">
                                    <img src="{{ asset('image/'.$horoscope->today_image) }}" height="150px" width="150px" alt="today Image" class="img-fluid my-3">
                                    {{ $horoscope->sign }}
                                </h4>
                            </div>
                            <div class="modal-body">
                                <h2>Today Horoscope:</h2>
                                {{ $horoscope->description }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (you can include them from a CDN) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
