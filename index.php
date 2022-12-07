<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- swiper card carousal-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <title>iSchool</title>
</head>
<body>

    <!---Start Nanigation bar---->
    <nav class="navbar navbar-expand-sm navbar-dark pl-10 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">iSchool</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav custom-nav pl-10">
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Home</a></li>
           <li class="nav-item custom-nav-item"><a href ="#"class="nav-link">Courese</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment Status</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign Up</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">FeedBack</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
           
        </ul>
        </div>
    </div>
</nav>
    <!---End Nanigation bar---->
    <!--start video background-->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/iSchool.mp4">
            </video>
            <div class="vid-overlay">

            </div>
        </div>
        <div class="vid-contain">
            <h1 class="my-contain">Welcome to iSchool</h1>
            <small class="my-contain">Learn and Implement</small><br>
            <a href="#"class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
               
        </div>
    </div>
    <!--end video background-->
    <!--start text banner-->
    <div class="container-fluid bg-danger txt-banner ">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5> <i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-users mr-3"></i>Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-bangladeshi-taka-sign mr-3"></i>Money Back Guarantee*</h5>
            </div>
        </div>
    </div>
    <!--end text banner-->
    <!--Start Most Popular Course-->
    <div class="container mt-5">
        <h1 class="text-center">Popular Courese</h1>
        <!--Start Most Popular Course 1st card-->
        <div class="row justify-content-center mt-8">
            <div class="col-md-4">
            <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
            </div>
        
        <div class="col-md-4">
        <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card shadow" style="width: ;20rem">
                <img src="image/image/OIP.jpg" class="card-img-top" alt="Guiter">
                <div class="card-body ">
                    <h5 class="card-title">Learn Guiter Easy Way</h5>
                    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing eit </p>
                </div>
                <div class="card-footer">
                    <p class="card-text d-inline">price: <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolter">&#8377 200</span>
                </p>
                <a class="btn btn-primary text-white font-weight-bolter float-right" href="#">Enroll</a>
                </div>
            </div>
        </div>
        </div><br>
        <!--End Most Popular Course ETC-->
        <div class="text-center m-2">
            <a class="btn btn-danger btn-sm" href="#">View All Course</a>
        </div>
    </div>
    <!--End Most Popular Course-->

    <!--Start Contact Us--->
    <div class="container mt-4" id="Contact">
      <h2 class="text-center mb-4">Contact Us</h2>
      <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <input type="text" class="form-control" name="name" placeholder="Enter your name"><br>
                <input type="text" class="form-control" name="subject" placeholder="Enter your subject"><br>
                <input type="email" class="form-control" name="name" placeholder="Enter your Email"><br>
                <textarea name="message" class="form-control" placeholder="How can we help you?" style="height: 150px;"></textarea><br>
                 <input type="submit" value="send" class="btn btn-primary" name="submit"><br><br>
            </form>
        </div>
        <!--End contact us 1st column-->
        <div class="col-md-4 board text-white text-center">
            <h4>iSchool</h4>
            <p>iSchool,Nikunj,
                Dhaka-1212 <br>
                phone:01521308560 <br>
                www.ischool.com
            </p>
        </div> 
      </div>
    </div>
    <!--End Contact Us--->
    <!--Start Student Testimonial-->
    
    <div class="mamun ">
          <div class="slide-container swiper">
          <h2 class="text-center p-4">Student FeedBack</h2>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test01.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test02.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test03.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test04.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test05.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test01.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="image/testomonial/test01.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                          <h2 class="name">David Dell</h2>
                          <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                           <button class="button">View More</button>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!--End Student Testimonial-->
    <!--Start Student Social Palce-->
    <div class="container-fluid bg-danger txt-banner ">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5> <i class="fa-brands fa-facebook mr-3"></i>Facebook</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fa-brands fa-twitter mr-3"></i>Twitter</h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fa-brands fa-whatsapp mr-3"></i>Whatsapp</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa-brands fa-instagram mr-3"></i>Instragram</h5>
            </div>
        </div>
    </div>
     <!--End Student Social Palce-->
     <!--Start about section-->
     <div class="container-fluid p-4" style="background-color: #E9ECEF">
        <div class="container" style="background-color: #E9ECEF">
         <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
            </div>
            <div class="col-sm">
                <h5>Category</h5>
                <a class="text-dark" href="#">Web Development</a><br>
                <a class="text-dark" href="#">Web Desinging</a><br>
                <a class="text-dark" href="#">Android App Devt</a><br>
                <a class="text-dark" href="#">iOS Development </a><br>
                <a class="text-dark" href="#">Data Analysis</a><br>
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>iSchool Pvt Ltd <br> Near Police Camp <br> Khilkhet,Dhaka <br> Ph.01521308560</p>
            </div>
         </div>
        </div>
     </div>
     <!--End about section-->

     <!--Start Footer-->
     <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2022 || Designed By E-Learing</small>
     </footer>
     <!--End Footer-->

     <!--Start Student Regidtration Modal-->
         <!-- Button trigger modal -->
             <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                    <label for="exampleInputEmail1" class="form-label"> <i class="fa-solid fa-user"></i>Name</label>
                    <input type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Name">
                
                    <label for="exampleInputEmail1" class="form-label"> <i class="fa-solid fa-envelope"></i>Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <small>We'll never share your email with anyone else.</small>
        
                
                    <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i>New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                
               
           </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign Up</button>
                <button type="button" class="btn btn-danger">Close</button>
            </div>
            </div>
        </div>
        </div>
<!--End Student Regidtration Modal-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/all.min.js"></script>
<!--swiper Card carosoual js-->
<script src="js/swiper-bundle.min.js"></script>
<!--java script-->
<script src="js/script.js"></script>
</body>
</html>