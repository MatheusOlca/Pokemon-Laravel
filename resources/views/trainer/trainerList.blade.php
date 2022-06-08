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
                                    <a class="nav-link active text-dark" href="">Trainers</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link text-dark" href="/create">Registry</a>
                              </li>
                        </ul>
                  </div>
                  <div class="card-body row p-3">
                        <div>
                              <div class="row p-2 mb-3">
                                    <div class="col-sm-10">
                                          <input id="searchBar" type="text" class="form-control" value="{{ $search }}">
                                    </div>
                                    <button class="btn btn-dark col-sm-2" onclick="document.location = `/trainer/${document.getElementById('searchBar').value}`">Search</button>
                              </div>
                              <table class="table table-hover">
                                    <thead>
                                          <tr class="text-center">
                                                <th class="border-end col-sm-1" scope="col">#</th>
                                                <th class="border-end" scope="col">Name</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col" class="col-sm-1">Profile</th>
                                          </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                          <?php
                                                foreach($trainers as $trainer){
                                                      echo "<tr>
                                                            <th class='border-end' scope='row'>$trainer->id</th>
                                                            <th class='border-end'>$trainer->name</th>
                                                            <th class='border-end'>$trainer->balance</th>
                                                            <th>
                                                                  <button class='btn btn-dark' onclick='document.location = \"profile/$trainer->id\"'>View</button>
                                                            </th>
                                                      </tr>";
                                                }
                                          ?>
                                    </tbody>
                              </table>
                        </div>
                  </div>
                  <div class="card-footer"></div>
            </div>
      </div>
</body>
</html>