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
                                    <a class="nav-link active text-dark" href="">Profile</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/trainer/caught">Pokemon's</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/trainer/pokedex">Pokedex</a>
                              </li>
                        </ul>
                  </div>
                  <div class="card-body row">
                        <div class="col col-sm-4">
                              <img class="card-image img-fluid rounded border" src="https://pbs.twimg.com/profile_images/1117531148081598464/7cxoRQ0E_400x400.jpg" alt="Trainer Image">
                        </div>
                        <div class="col col-sm-8">
                              <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                          <h4 class="nav-link active">Profile</h4>
                                    </li>
                              </ul>
                              <div class="border border-top-0 p-3">
                                    <div class="input-group mb-3">
                                          <span class="input-group-text bg-white">Name: </span>
                                          <input class="form-control bg-white" type="text" name="trainerName" id="trainerName" readonly value="000">
                                    </div>
                                    <div class="input-group">
                                          <span class="input-group-text bg-white">Balance: </span>
                                          <span class="input-group-text bg-white">$</span>
                                          <input class="form-control bg-white" type="text" name="trainerName" id="trainerName" readonly value="000">
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="card-footer">
                        
                  </div>
            </div>
      </div>
</body>
</html>