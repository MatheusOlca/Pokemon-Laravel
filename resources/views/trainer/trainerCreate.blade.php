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
                                    <a class="nav-link text-dark" href="/trainer">Trainers</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link active text-dark" href="">Registry</a>
                              </li>
                        </ul>
                  </div>
                  <div class="card-body row p-3">
                        <div>
                              <form action="/act/trainer/create" method="post">
                                    @csrf
                                    <div class="mb-3">
                                          <label for="formName" class="form-name">Name: </label>
                                          <input type="text" name="formName" id="formName" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                          <label for="formBalance" class="form-name">Balance: </label>
                                          <input type="number" name="formBalance" id="formBalance" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Create</button>
                              </form>
                        </div>
                  </div>
                  <div class="card-footer"></div>
            </div>
      </div>
</body>
</html>