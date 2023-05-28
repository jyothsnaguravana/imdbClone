<?php
  session_start();
  // if(!isset($_SESSION['mail'])){
  //   header('location:./login.php');
  // }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>IMDB</title>
  </head>
  <body style="background-color: black;">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
       <a class="navbar-brand" href="#">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/IMDB_Logo_2016.svg/2560px-IMDB_Logo_2016.svg.png" alt=""  height="26">
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><b>Menu</b></a>
          </li>
        </ul>
        <?php
        if(isset($_SESSION['mail'])){
          echo '
        <form class="d-flex w-50">
          <input class="form-control me-2 w-100" type="search" placeholder="Search" id="movie" aria-label="Search">
          <button class="btn btn-outline-light me-3" type="submit" id="search">Search</button>
        </form> ';
        }
        ?>
        <span class="me-3" style="border:1px solid white; height:30px;"></span>
        <i class="bi bi-bookmark-plus-fill text-white"></i>
        <ul class="navbar-nav ">
            <li class="nav-item me-4">
            <a class="nav-link active" aria-current="page" href="#"><b>WatchList</b></a>
          </li>
          <?php 
          if(!isset($_SESSION['mail'])){
            echo ' <li class="nav-item me-4">
             <a class="nav-link active" aria-current="page" href="./login.php"><b>Sign In</b></a>
             </li>';
          }
          else{
            echo ' <li class="nav-item me-4">
             <a class="nav-link active" aria-current="page" href="./logout.php"><b>Log out</b></a>
             </li>';
          }
          ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            En
          </a>
          <ul class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item font-weight-bold text-white" href="#">Fully Supported</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item font-weight-bold text-white" href="#">English ( United States )</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item font-weight-bold text-white" href="#">Partially Supported</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item font-weight-bold text-white" href="#">Francais ( Canada )</a></li>
            <li><a class="dropdown-item font-weight-bold text-white" href="#">Francais ( France )</a></li>
            <li><a class="dropdown-item font-weight-bold text-white" href="#">Hindi</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Navbar End -->

  
    <div class="container">
        <div class="row my-5">
            <!-- Carousel Start -->
            <div class="col-lg-8 col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://cdn.theplaylist.net/wp-content/uploads/2022/02/14170647/Screen-Shot-2022-02-15-at-4.40.43-PM.jpg" style="height:82vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p> -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202210/Kantara_1_1200x768.jpeg?VersionId=cg8qm90nqeCXkGwEzydAKHyIh7KNrmCW" style="height:82vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p> -->
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="https://i.ytimg.com/vi/a6VVrAZUnsc/maxresdefault.jpg" style="height:82vh;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p> -->
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
             <!-- Carousel End -->
            </div>
            <div class="col-lg-4 col-md-12">
            <p class="h3 text-warning">Up next</p>
                <div class="card mb-3 bg-dark" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://m.media-amazon.com/images/M/MV5BYjM0YTFmN2EtYTQ0Ny00NmU2LTk5NmQtODhjYzhkOTVjZDA5XkEyXkFqcGdeQXVyOTI3MzI4MzA@._V1_QL75_UY414_CR26,0,280,414_.jpg" class="img-fluid rounded-start" alt="..." width="100">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="card-title text-white"><i class="bi bi-play-circle"></i><span class='h6 text-muted px-2'>02:30</span><br><br>'Ram Setu'</h6>
                        <p class="card-text"><small class="text-muted">Watch Later</small></p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card mb-3 bg-dark" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 col-sm-4">
                    <img src="https://m.media-amazon.com/images/M/MV5BNDYwOWUyMDItZTlkZi00YzYxLThlMmMtMzM5Yzk2NjVkZDliXkEyXkFqcGdeQXVyNjMwMzc3MjE@._V1_QL75_UX280_CR0,0,280,414_.jpg" class="img-fluid rounded-start" alt="..." width="100">
                    </div>
                    <div class="col-md-8 col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title text-white"><i class="bi bi-play-circle"></i><span class='h6 text-muted px-2'>02:30</span><br><br>'Halloween Time'</h5>
                        <p class="card-text"><small class="text-muted">Don't hide your eyes from these picks</small></p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card mb-3 bg-dark" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://m.media-amazon.com/images/M/MV5BMjFlOTAwNDYtZmY1Mi00Y2Q1LTgxNGYtOWUyZmQzYTRmYTE1XkEyXkFqcGdeQXVyNTYxMDgzODI@._V1_QL75_UY414_CR26,0,280,414_.jpg" class="img-fluid rounded-start" alt="..." width="100">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-white"><i class="bi bi-play-circle"></i><span class='h6 text-muted px-2'>02:30</span><br><br>'Drishyma2'</h5>
                        <p class="card-text"><small class="text-muted">Watch Later</small></p>
                    </div>
                    </div>
                </div>
                </div>
                <br>
                <p class="h4 text-white">Browse Trailers <i class="bi bi-caret-right-fill px-2"></i></p>
            </div>
         
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-lg-6 col-md-12">
            I need to appear up
        </div> -->
        <div class="col-sm-4" id="output" style="display:flex;justify-content:center;width:auto;flex-wrap:wrap; margin: left 10px;">
       
        </div>
    </div>
    <script>
      let search = document.getElementById("search");
      let movie = document.getElementById("movie");
      let output = document.getElementById("output");
      
        // console.log(movie);
      
      search.addEventListener("click",(e)=>{
        e.preventDefault();
        let moviename = movie.value;
        const options = {
	      method: 'GET',
	      headers: {
		   'X-RapidAPI-Key': '4e5292f5a0msha5276f4c14e496ap16cefdjsn3fe33da99621',
		   'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
	      }
       };
        fetch(`https://imdb8.p.rapidapi.com/auto-complete?q=${moviename}`, options)

	     .then(response => response.json())
	     .then(response => {
        let movies = response.d;
        let card = "";
        for(let i=0 ; i < movies.length ; i++){
          let movie = movies[i];
          let src = movie.i.imageUrl;
          let type = movie.l;
          let sd = movie.s;
          let rank = movie.rank;

        card = card + `<div class="card mb-3" style="max-width: 540px;margin-right :2rem;">
                   <div class="row g-0">
                  <div class="col-md-4">
                  <img src="${src}" class="img-fluid rounded-start" alt="...">
                  </div>
                 <div class="col-md-8">
                         <div class="card-body">
                            <h5 class="card-title">${type}</h5>
                            <p class="card-text">${sd}</p>
                             <p class="card-text"><small class="text-muted">${rank}</small></p>
                        </div>
                   </div>
                 </div>
               </div>`;
        output.innerHTML = card;
         
        }
              })
      
	     .catch(err => console.error(err));
        })
      // console.log(search);
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>