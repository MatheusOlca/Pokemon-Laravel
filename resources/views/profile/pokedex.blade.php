<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Profile</title>
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <script src="{{asset('js/jquery.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>
      <div class="container">
            <br>
            <div class="card h-100">
                  <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/trainer">X</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/profile/{{ $id }}">Profile</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/profile/caught/{{ $id }}">Pokemon's</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-dark" href="">Pokedex</a>
                              </li>
                        </ul>
                  </div>
                  <div class="card-body">
                        <div>
                              <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                          <h4 class="nav-link active">Seen Pokemon</h4>
                                    </li>
                              </ul>
                              <div class="border border-top-0 p-3">
                                    <table class="table table-hover">
                                          <thead>
                                                <tr class="text-center">
                                                      <th class="border-end col-sm-1" scope="col">#</th>
                                                      <th class="border-end col-sm-1" scope="col">Entry</th>
                                                      <th class="border-end" scope="col">Name</th>
                                                      <th class="border-end" scope="col">Seen</th>
                                                      <th scope="col" class="col-sm-1">Caught</th>
                                                </tr>
                                          </thead>
                                          <tbody class="table-group-divider">
                                                <?php
                                                      use PokePHP\PokeApi;

                                                      $api = new PokeApi;
                                                      foreach($pokemons as $pkm){
                                                            $pokemon = json_decode($api->pokemon(strval($pkm->id)));
                                                            $sprite = $pokemon->sprites->front_default;
                                                            echo "<tr>
                                                                  <th class='border-end' scope='row'>
                                                                        <img src='$sprite' width=100 height=100 />
                                                                  </th>
                                                                  <th class='border-end' scope='row'>$pkm->id</th>
                                                                  <th class='border-end'>$pokemon->name</th>
                                                                  <th class='border-end'>$pkm->seen</th>
                                                                  <th>$pkm->caught</th>
                                                            </tr>";
                                                      }
                                                ?>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
                  <div class="card-footer">
                        
                  </div>
            </div>
      </div>
</body>
</html>