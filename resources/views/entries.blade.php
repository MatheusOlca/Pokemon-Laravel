<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h5>Pokedex</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Type 1</td>
                            <td>Type 2</td>
                            <td>Editar</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($entry as $element){
                                echo 
                                "<tr>
                                    <td>$element->icon</td>
                                    <td>$element->name</td>
                                    <td>$element->type_one</td>
                                    <td>$element->type_two</td>
                                    <td class='text-center'>
                                    <button class='btn btn-dark' onclick='document.location=\"/editar/{$element->id}\"'>Editar</button></td>
                                </tr>";
                          }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</body>
</html>