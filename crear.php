<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <script src="assets/core/jquery.min.js"></script>
    <script src="assets/jquery.autocomplete.min.js"></script>
</head>
<style>
    .autocomplete-suggestions {
        border: 1px solid #999;
        background: #FFF;
        overflow: auto;
    }

    .autocomplete-suggestion {
        padding: 2px 5px;
        white-space: nowrap;
        overflow: hidden;
    }

    .autocomplete-selected {
        background: #F0F0F0;
    }

    .autocomplete-suggestions strong {
        font-weight: normal;
        color: #3399FF;
    }

    .autocomplete-group {
        padding: 2px 5px;
    }

    .autocomplete-group strong {
        display: block;
        border-bottom: 1px solid #000;
    }
</style>

<body>
    <div>
        <h1>Insertar</h1>
        <form action="guardar.php" method="POST">
            <div>
                <label for="ad">Nombre</label>
                <input type="text" name="nombre[one]" id="ad">
                <input type="text" name="nombre[two]" id="ad">
                <input type="text" name="nombre[three]" id="ad">
            </div>
            <div>
                <label for="">Paterno</label>
                <input type="text" name="paterno">
            </div>
            <div>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="fecha_nac">
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>

        </form>
    </div>
    <script>
        $('#ad').autocomplete({
            lookup: function(query, done) {
                // Do Ajax call or lookup locally, when done,
                // call the callback and pass your results:
                var result = {
                    suggestions: [{
                            "value": "United Arab Emirates",
                            "data": "AE"
                        },
                        {
                            "value": "United Kingdom",
                            "data": "UK"
                        },
                        {
                            "value": "United States",
                            "data": "US"
                        }, {
                            "value": "Reeven",
                            "data": "Ere"
                        }, {
                            "value": "Aulias",
                            "data": "As"
                        }
                    ]
                };

                done(result);
            },
            onSelect: function(suggestion) {
                $('#ad').val(suggestion.data);
                // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });
    </script>
</body>

</html>