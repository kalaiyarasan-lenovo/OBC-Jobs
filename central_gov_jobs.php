<?php
session_start();
include("config/config_db.php");

// Fetch central government jobs from the database
$query = "SELECT * FROM records WHERE type = 'Central Govt Jobs' ORDER BY 
    CASE 
        WHEN to_date >= '$current_date' AND DATEDIFF(to_date, '$current_date') <= 4 THEN 1
        WHEN to_date >= '$current_date' THEN 2
        ELSE 3
    END ASC, 
    to_date ASC";
$result = $conn->query($query);

// Calculate total vacancies for Central Govt Jobs
$totalVacanciesQuery = "SELECT SUM(vacancies) AS total_vacancies FROM records WHERE type = 'Central Govt Jobs'";
$totalVacanciesResult = $conn->query($totalVacanciesQuery);
$totalVacanciesRow = $totalVacanciesResult->fetch_assoc();
$totalVacancies = $totalVacanciesRow['total_vacancies'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Central Government Jobs</title>
    <link rel="icon" type="image/png" href="obc_logo-1.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .btn-red {
            background-color:red;
            border-color:red;
            color: white;
        }
        .btn-red:hover {
            background-color:gold;
            border-color:red;
        }
        .btn-light-gray {
            background-color: lightgray;
            color: black;
            font-weight: bold;
        }
        .btn-light-gray:hover {
            background-color: gray;
            color: white;
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
        .nav-item {
            font-weight: bold;
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
        .clickable-row {
            cursor: pointer;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(function() {
        $('#jobsTable').DataTable({"order": []});

        // Clickable row functionality
        $(document).on('click', '.clickable-row', function(e) {
            if ($(e.target).closest('a, button').length) {
                return;
            }
            window.location = $(this).data("href");
        });
    });

    function deleteRecord(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'delete?id=' + id,
                    type: 'GET',
                    success: function(response) {
                        if(response.status === 'success') {
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire(
                                'Error!',
                                'Error: ' + response.message,
                                'error'
                            );
                        }
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the record.',
                            'error'
                        );
                    }
                });
            }
        });
    }
    </script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://obcrights.org/">
            <img src="obclogo.jpg" width="80" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        
        <h3 class="navbar-center font-weight-bold">Central Jobs</h3>
        
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

    <div class="container">
        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'deleted'): ?>
            <div class="alert alert-success mt-4 text-center">Record deleted successfully!</div>
        <?php endif; ?>
        <!-- Display Total Vacancies -->
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4 text-center">
                <h5 class="btn btn-light-gray btn-block"><b>Total Vacancies: <?php echo htmlspecialchars($totalVacancies); ?></b></h5>
            </div>
        </div>

        <div class="row mt-4">
            <table id="jobsTable" class="table table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Organization</th>
                        <th>Vacancies</th>
                        <th>Job Description</th>
                        <th>Location</th>
                        <th>Job Type</th>
                        <th>Age Limits</th>
                        <th>Last Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='clickable-row' data-href='job_details?id=" . htmlspecialchars($row['id']) . "&org=" . htmlspecialchars($row['name']) . "'>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['vacancies']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['place_of_posting']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['age_limits']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['to_date']) . "</td>";
                        echo "<td>";
                        echo "<a href='job_details?id=" . htmlspecialchars($row['id']) . "&org=" . htmlspecialchars($row['name']) . "' class='btn btn-red btn-sm'>View</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9' class='text-center'>No central government jobs found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright © 2026 [obcrights]</span><br>
            <span class="text-muted">Powered by jobs.obcrights</span>
        </div>
    </footer>
</body>
</html>
