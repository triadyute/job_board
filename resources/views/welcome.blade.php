<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Job Board</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Job Board</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Companies</a>
              </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h4 class="mt-5">Find Jobs</h4>
      <hr>
      <div class="row">
        
        <div class="col-md-6">
          <div class="form-group">
            <label for="">What jobs do i qualify for?</label>
            <form method = "POST"action="{{route('search')}}">
              @csrf
            <select multiple name="requirements[]" id="" class="form-control mb-2">
              <option value=""delected disabled>Select requirement</option>
              <option value="apartment">Apartment</option>
              <option value="flat">Flat</option>
              <option value="house">House</option>
              <option value="storage place">Storage place</option>
              <option value="property insurance">Property Insurance</option>
              <option value="2 door car">2 Door Car</option>
              <option value="3 door car">3 Door Car</option>
              <option value="4 door car">4 Door Car</option>
              <option value="5 door car">5 Door Car</option>
              <option value="driver's licence">Driver's licence</option>
              <option value="car insurance">Car Insurance</option>
              <option value="scooter">Scooter</option>
              <option value="bike">Bike</option>
              <option value="motorcycle">Motorcycle</option>
              <option value="motorcycle insurance">Motorcycle insurance</option>
              <option value="massage qualification certificate">Massage qualification certificate</option>
              <option value="liability insurance">Liability insurance</option>
              <option value="social security number">Social Security Number</option>
              <option value="work permit">Work permit</option>
              <option value="garage">Garage</option>
              <option value="paypal account">PayPal account</option>
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
          </div>
        </div>

      </div>
      <h4 class="mt-5">Jobs List</h4>
      <hr>
      @if (count($jobs) != 0)
      @foreach ($jobs as $job)
      <h5>{{$job->job_title}}</h5>
      <p><strong>Posted by:</strong> {{$job->company->name}} about {{\Carbon\Carbon::parse($job->created_at)->diffForHumans()}}</p>
      <p>{{$job->job_description}}</p>
      @endforeach
      @endif
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>
