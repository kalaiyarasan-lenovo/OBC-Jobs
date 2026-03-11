<?php
session_start();
include("config/config_db.php");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $number = $conn->real_escape_string($_POST['number']);

    $sql = "INSERT INTO contacts (name, email, number) VALUES ('$name', '$email', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="icon" type="image/png" href="obc_logo-1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZNHVQZ3ZYH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZNHVQZ3ZYH');
</script>
    
    <style>
        .image-container {
            position: relative;
            text-align: center;
            color: white;
        }

        .image-container img {
            width: 100%;
            height: 85vh;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 60px;
            font-weight: normal;
            font-family: 'Times New Roman', Times, serif;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40px;
            font-family: monospace;
            color: azure;
            font-style: normal;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-item {
            font-weight: bold;
        }

        .join-us-box i {
            margin-left: 5px;
            font-size: 40px;
            font-weight: bolder;
            color: #25D366;
        }

        .join-us-box i:hover {
            color: white;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-img-center {
            justify-content: center;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card-img-center {
            background: none;
            border: none;
        }

        .image-item h6 {
            color: black;
            margin-top: 5px;
        }
        .nav-item.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: 200px;
    z-index: 1000;
}

.dropdown-item {
    padding: 10px 20px;
    text-decoration: none;
    color: #000;
    display: block;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}
.join-us-box i {
            margin-left: 5px;
            font-size: 40px;
            font-weight:bolder;
            color: #25D366; /* WhatsApp green color */
        }
        .join-us-box i:hover {
            margin-left: 5px;
            font-size: 40px;
            font-weight:bolder;
            color: white; /* WhatsApp green color */
        }

    </style>
</head>
<body>
<!-- Navbar with Logo -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://obcrights.org/">
            <img src="obclogo.jpg" width="80" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        
        <!--<h3 class="navbar-center font-weight-bold">Private Job Portals</h3>-->
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="about">
                        <a class="dropdown-item" href="https://obcrights.org/about-sfrbc/">Story</a>
                        <a class="dropdown-item" href="https://obcrights.org/vision/">Vision</a>
                        <a class="dropdown-item" href="https://obcrights.org/our-team/">Team</a>
                        <a class="dropdown-item" href="https://obcrights.org/what-we-do/">What We Do</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://jobs.obcrights.org/Blogs/">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privatejobportal">Private Job Portals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="save_contact">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link join-us-box" href="https://chat.whatsapp.com/Dj6ZIz2VicOHKHaDyvbSxi" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

<div class="image-container">
    <img src="images/Jobs.png" alt="Bank">
</div>

<div class="container px-4">
    <!-- First Row: Naukri and LinkedIn -->
    <div class="row gx-5 mb-4 d-flex align-items-stretch">
        <div class="col-md-6 mb-4 mb-md-0 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/Naukri.png" alt="Naukri.com" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Naukri.com</h5>
                    <p class="card-text">Naukri is an India-based job portal used by both freshers and experienced candidates for applying to jobs.</p>
                    <ul class="text-left pl-4">
                        <li>Naukri is available for candidates in web and mobile application form.</li>
                        <li>It's a free application.</li>
                    </ul>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://www.naukri.com/" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/linkedin.jpeg" alt="LinkedIn" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">LinkedIn</h5>
                    <p class="card-text">LinkedIn is a professional networking platform that also offers job listings. It allows you to create a professional profile and connect with recruiters and professionals in your field.</p>
                    <ul class="text-left pl-4">
                        <li>Used by Entrepreneurs, Job seekers, Influencers, Companies, Freelancers, etc.</li>
                    </ul>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://www.linkedin.com/feed/" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row: Indeed, Glassdoor, and Monster -->
    <div class="row gx-5 mb-4 d-flex align-items-stretch">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/indeed.png" alt="Indeed" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Indeed</h5>
                    <p class="card-text">Indeed is a global job search platform that allows job seekers to search for jobs, post resumes, and research companies.</p>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://in.indeed.com/?r=us" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/glassdoor.png" alt="Glassdoor" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Glassdoor</h5>
                    <p class="card-text">Glassdoor is a job search and review site that also provides company reviews, CEO approval ratings, salary reports, interview reviews, and more.</p>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://www.glassdoor.co.in/Community/index.htm" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/monster.png" alt="Monster" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Monster</h5>
                    <p class="card-text">Monster is a global online employment solution for people seeking jobs and the employers who need great people.</p>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://www.foundit.in/" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Third Row: Superset and Other Platforms -->
    <div class="row gx-5 mb-4 d-flex align-items-stretch">
        <div class="col-md-6 mb-4 mb-md-0 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/superset.png" alt="Superset" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Superset</h5>
                    <p class="card-text">Superset is an advanced job portal platform designed to streamline campus recruitment processes. It connects students, universities, and employers on a single platform, enabling seamless application management, interview scheduling, and job matching. Superset simplifies the recruitment workflow, making it more efficient and accessible for both job seekers and recruiters.</p>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://www.joinsuperset.com/" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 d-flex">
            <div class="p-3 border bg-light w-100 d-flex flex-column text-center">
                <div class="mb-3 d-flex justify-content-center align-items-center" style="min-height: 230px;">
                    <img class="img-fluid" src="images/other_platforms.png" alt="Other Platforms" style="max-height: 230px; max-width: 100%; object-fit: contain;">
                </div>
                <div class="card-body d-flex flex-column text-left px-0">
                    <h5 class="card-title text-center">Other Platforms</h5>
                    <ul class="text-left pl-4">
                        <li>Shine.com</li>
                        <li>Freshersworld</li>
                        <li>Timesjobs</li>
                        <li>Simple Google Search</li>
                        <li>Companies career portal</li>
                        <li>Simplyhired</li>
                    </ul>
                    <div class="button-container mt-auto pt-3 text-center">
                        <a href="https://factohr.com/job-portals-in-india/" class="btn btn-primary px-4">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">Copyright © 2026 [obcrights]</span><br>
        <span class="text-muted">Powered by jobs.obcrights</span>
    </div>
</footer>
</body>
</html>
