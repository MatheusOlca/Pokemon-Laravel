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
                                    <a class="nav-link text-dark" href="/trainer/profile">Profile</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-dark" href="">Pokemon's</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/trainer/pokedex">Pokedex</a>
                              </li>
                        </ul>
                  </div>
                  <div class="card-body row">
                        <div class="col col-sm-4">
                        </div>
                        <div class="col col-sm-8">
                              <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                          <h4 class="nav-link active">...</h4>
                                    </li>
                              </ul>
                              <div class="border border-top-0 p-3">
                                    
                              </div>
                        </div>
                  </div>
                  <div class="card-footer">
                        
                  </div>
            </div>
      </div>
</body>
</html>