<!-- filepath: /c:/laragon/www/Kapnayan/resources/views/homepage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSU-Kapnayan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url ('/homepage') }}">
                <img src="{{ asset('images/Kapnayan-logo.png') }}" alt="CSU Logo" class="img-fluid" style="max-width: 50px;">
                KAPNAYAN
            </a>
            <span class="navbar-text">Caraga State University</span>
        </div>
    </nav>

    <!-- Main Section (Buttons) -->
    <div class="container mt-5 text-center">
        <div class="row g-3">
            <!-- Top Row: Profile, Calendar, About Us -->
            @auth
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ route('profile') }}" class="btn">
                        <img src="{{ asset('images/profile.png') }}" alt="Profile">
                        <h5>Profile</h5>
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ route('calendar') }}" class="btn">
                        <img src="{{ asset('images/event.png') }}" alt="Calendar">
                        <h5>Calendar</h5>
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="" class="btn btn-danger">
                        <img src="{{ asset('images/aboutus.png') }}" alt="About Us">
                        <h5>About Us</h5>
                    </a>
                </div>
            @else
                <div class="col-md-3 d-flex justify-content-center">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <img src="{{ asset('images/profile.png') }}" alt="Profile">
                        <h5>Profile</h5>
                        <small class="text-danger">Login to access</small>
                    </button>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <img src="{{ asset('images/event.png') }}" alt="Calendar">
                        <h5>Calendar</h5>
                        <small class="text-danger">Login to access</small>
                    </button>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="" class="btn btn-danger">
                        <img src="{{ asset('images/aboutus.png') }}" alt="About Us">
                        <h5>About Us</h5>
                    </a>
                </div>
            @endauth
        </div>

        <div class="row g-3 mt-3">
            <!-- Bottom Row: Document, Forum, Contact Us -->
            @auth
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ route('document') }}" class="btn btn-danger">
                        <img src="{{ asset('images/document.png') }}" alt="Document">
                        <h5>Document</h5>
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ route('forum') }}" class="btn btn-danger">
                        <img src="{{ asset('images/forum.png') }}" alt="Forum">
                        <h5>Forum</h5>
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="{{ route('contactus') }}" class="btn">
                        <img src="{{ asset('images/contactus.png') }}" alt="Contact Us">
                        <h5>Contact Us</h5>
                    </a>
                </div>
            @else
                <div class="col-md-3 d-flex justify-content-center">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <img src="{{ asset('images/document.png') }}" alt="Document">
                        <h5>Document</h5>
                        <small class="text-danger">Login to access</small>
                    </button>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="" class="btn btn-danger">
                        <img src="{{ asset('images/forum.png') }}" alt="Forum">
                        <h5>Forum</h5>
                    </a>
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <a href="" class="btn">
                        <img src="{{ asset('images/contactus.png') }}" alt="Contact Us">
                        <h5>Contact Us</h5>
                    </a>
                </div>
            @endauth
        </div>
    </div>

    <!-- Announcement Board Section -->
    <div class="container mt-5 text-center">
        <h3>Announcement Board</h3>
        <div class="row mt-4">
            <!-- Video Announcement -->
            <div class="col-md-6">
                <div class="card">
                    <video class="card-img-top" controls style="height: auto;">
                        <source src="{{ asset('images/KAPNAYAN OFFICER.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <!-- Image Slideshow Announcement -->
            <div class="col-md-6">
                <div class="card">
                    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="https://www.facebook.com/photo?fbid=543291068292231&set=a.271948942093113" target="_blank">
                                    <img src="{{ asset('images/TOP3.PNG') }}" class="d-block w-100" alt="Announcement 1">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="https://www.facebook.com/photo?fbid=537515238869814&set=a.271948942093113" target="_blank">
                                    <img src="{{ asset('images/DOST.PNG') }}" class="d-block w-100" alt="Announcement 2">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="https://www.facebook.com/PACSMin/posts/pfbid0iekvEjKVHL2JXmrC6JKhtUtL145op245Xi2psWzUFzFDhrFTqGrY3apgczPTHP9Dl" target="_blank">
                                    <img src="{{ asset('images/PACSMAN.PNG') }}" class="d-block w-100" alt="Announcement 3">
                                </a>
                            </div>
                        </div>
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>You need to <a href="{{ route('login') }}">log in</a> to access this feature.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
