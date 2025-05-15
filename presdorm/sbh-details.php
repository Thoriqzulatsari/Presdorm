<?php
require_once 'config.php';

// Get current year for copyright
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Boarding House - Details | PresDorm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #4a6cf7;
            --secondary-color: #5e7bf9;
            --dark-color: #232946;
            --light-color: #f8f9fa;
            --accent-color: #eebbc3;
            --text-color: #232946;
            --text-light: #b8c1ec;
            --box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #f9fafc;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            padding: 1rem 2rem;
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
        }

        .navbar-toggler {
            border: none;
            outline: none;
        }

        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }

        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            color: var(--dark-color) !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .nav-btn {
            padding: 0.5rem 1.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white !important;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(74, 108, 247, 0.4);
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(74, 108, 247, 0.5);
        }

        /* Hero Section */
        .page-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 120px 0 60px;
            margin-bottom: 60px;
        }

        .page-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .page-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Details Section */
        .details-section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 5px;
            bottom: -15px;
            left: 0;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 5px;
        }

        .detail-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
            border: none;
        }

        .detail-card-header {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px;
            font-weight: 600;
        }

        .detail-card-body {
            padding: 30px;
        }

        .detail-list {
            list-style: none;
            padding-left: 0;
        }

        .detail-item {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .detail-item i {
            color: var(--primary-color);
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .gallery-img {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: var(--box-shadow);
            transition: all 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .gallery-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .price-card {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: var(--box-shadow);
        }

        .price-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .price-amount {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .price-period {
            font-size: 1rem;
            opacity: 0.8;
        }

        .price-feature {
            margin: 15px 0;
        }

        .price-feature i {
            margin-right: 10px;
        }

        .btn-white {
            background-color: white;
            color: var(--primary-color);
            border-radius: 30px;
            padding: 0.8rem 2rem;
            font-weight: 500;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        .features-list {
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .feature-text p {
            color: #666;
            margin-bottom: 0;
        }

        /* Footer */
        .footer {
            padding: 80px 0 30px;
            background-color: var(--dark-color);
            color: white;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-text {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-link {
            display: block;
            color: var(--text-light);
            margin-bottom: 0.8rem;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: white;
            transform: translateX(5px);
            text-decoration: none;
        }

        .footer-social {
            margin-top: 1.5rem;
        }

        .footer-social a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-bottom {
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            color: var(--text-light);
        }

        .cta-section {
            padding: 80px 0;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            margin-top: 80px;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .price-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .price-table th, .price-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .price-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .price-table tr:hover {
            background-color: #f8f9fa;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .page-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
            .gallery-img img {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/President_University_Logo.png" alt="PresDorm Logo" height="60" class="mr-2">
                    <span>PresDorm</span>
                </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#dormitories">Dormitories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#testimonials">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-title">Student Boarding House</h1>
                    <p class="page-subtitle">Traditional dormitory with shared facilities, perfect for students looking for a community experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Details Section -->
    <section class="details-section">
        <div class="container">
            <!-- Photo Gallery -->
            <div class="row mb-5">
                <div class="col-lg-12">
                    <h2 class="section-title">Photo Gallery</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/sbh-room.png" alt="Student Boarding House Room" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/basketball.jpg" alt="Student Boarding House Basketball Court" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/sbh-mushola.jpg" alt="Student Boarding House Mushola" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/sbh-pavilion.jpg" alt="Student Boarding House Pavilion" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/sbh-gate.jpg" alt="Student Boarding House Study Gate" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-img">
                        <img src="images/sbh-canteen.jpg" alt="Student Boarding House Canteen" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="detail-card mb-4">
                        <div class="detail-card-header">
                            <h3>About Student Boarding House</h3>
                        </div>
                        <div class="detail-card-body">
                            <p>The Student Boarding House offers a traditional dormitory experience with a modern twist. Located at the heart of the campus, this dormitory provides students with a vibrant community environment where they can build lifelong friendships and create memorable college experiences.</p>
                            <p>Our Student Boarding House features sharing rooms designed for two students, with comfortable beds, study areas, and ample storage space. The dormitory also includes common areas for socializing, studying, and relaxing.</p>
                            <div class="features-list">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Community Environment</h4>
                                        <p>Connect with other residents and build lasting friendships in our vibrant community.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>Prime Location</h4>
                                        <p>Situated at the heart of the campus, just minutes away from academic buildings and facilities.</p>
                                    </div>
                                </div>
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h4>24/7 Security</h4>
                                        <p>Round-the-clock security personnel and CCTV surveillance for your safety and peace of mind.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="detail-card mb-4">
                        <div class="detail-card-header">
                            <h3>Room Options</h3>
                        </div>
                        <div class="detail-card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Sharing Room</h4>
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 20 sqm</li>
                                        <li class="detail-item"><i class="fas fa-user-friends"></i> <strong>Occupancy:</strong> 2 Students</li>
                                        <li class="detail-item"><i class="fas fa-bed"></i> <strong>Bed Type:</strong> Single Bed</li>
                                        <li class="detail-item"><i class="fas fa-money-bill-wave"></i> <strong>Price:</strong> Rp 1,450,000/month</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4>Single Room</h4>
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-ruler-combined"></i> <strong>Room Size:</strong> 15 sqm</li>
                                        <li class="detail-item"><i class="fas fa-user"></i> <strong>Occupancy:</strong> 1 Student</li>
                                        <li class="detail-item"><i class="fas fa-bed"></i> <strong>Bed Type:</strong> Single Bed</li>
                                        <li class="detail-item"><i class="fas fa-money-bill-wave"></i> <strong>Price:</strong> Rp 1,800,000/month</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="detail-card mb-4">
                        <div class="detail-card-header">
                            <h3>Payment Information</h3>
                        </div>
                        <div class="detail-card-body">
                            <h4>Deposit</h4>
                            <p>A refundable deposit of Rp 1,250,000 is required, to be paid once before moving in. This deposit will be returned after completing your stay of 1 year.</p>
                            
                            <h4 class="mt-4">Payment Schedule</h4>
                            <p>Payment can be made either per semester or for a full year, starting at the beginning of the academic year (August 25).</p>
                            
                            <h4 class="mt-4">Payment Method</h4>
                            <p>Dormitory fees and deposits can be transferred via Bank Mandiri Virtual Account (VA), using your Registration Number and full name as reference, as stated in your Letter of Acceptance (LoA).</p>
                            
                            <p class="mt-4"><strong>Note:</strong> Electricity usage for computers, laptops, printers, room lamps, and study-related equipment is the resident's responsibility.</p>
                        </div>
                    </div>

                    <div class="detail-card">
                        <div class="detail-card-header">
                            <h3>Amenities & Features</h3>
                        </div>
                        <div class="detail-card-body">
                            <h4>Room Facilities</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-bed"></i> Comfortable Single Beds with Spring Mattress</li>
                                        <li class="detail-item"><i class="fas fa-desk"></i> Study Desk for Each Resident</li>
                                        <li class="detail-item"><i class="fas fa-tshirt"></i> Wardrobe/Storage Space</li>
                                        <li class="detail-item"><i class="fas fa-snowflake"></i> Full Air Conditioning</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-wifi"></i> Free High-Speed WiFi</li>
                                        <li class="detail-item"><i class="fas fa-chair"></i> 1 Chair per Student</li>
                                        <li class="detail-item"><i class="fas fa-lightbulb"></i> Good Lighting</li>
                                        <li class="detail-item"><i class="fas fa-plug"></i> Multiple Power Outlets</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <h4 class="mt-4">Shared Facilities</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-bath"></i> Shared Bathroom Facilities</li>
                                        <li class="detail-item"><i class="fas fa-utensils"></i> Shared Kitchen Facilities</li>
                                        <li class="detail-item"><i class="fas fa-tshirt"></i> Laundry Room</li>
                                        <li class="detail-item"><i class="fas fa-book"></i> Study Rooms</li>
                                        <li class="detail-item"><i class="fas fa-users"></i> Discussion Spaces</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="detail-list">
                                        <li class="detail-item"><i class="fas fa-couch"></i> Common Lounge Areas</li>
                                        <li class="detail-item"><i class="fas fa-store"></i> Mini Market Access</li>
                                        <li class="detail-item"><i class="fas fa-utensils"></i> Food Court Access</li>
                                        <li class="detail-item"><i class="fas fa-shield-alt"></i> 24/7 Security with CCTV</li>
                                        <li class="detail-item"><i class="fas fa-bus"></i> Free Shuttle Bus Service</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <h4 class="mt-4">Sports Facilities</h4>
                            <p>Residents have access to various sports facilities including:</p>
                            <ul class="detail-list">
                                <li class="detail-item"><i class="fas fa-swimmer"></i> Swimming Pool</li>
                                <li class="detail-item"><i class="fas fa-table-tennis"></i> Tennis Courts</li>
                                <li class="detail-item"><i class="fas fa-basketball-ball"></i> Basketball Court</li>
                                <li class="detail-item"><i class="fas fa-volleyball-ball"></i> Volleyball Court</li>
                                <li class="detail-item"><i class="fas fa-golf-ball"></i> Golf Course</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="detail-card mb-4">
                        <div class="detail-card-header">
                            <h3>Pricing Information</h3>
                        </div>
                        <div class="detail-card-body">
                            <table class="price-table">
                                <thead>
                                    <tr>
                                        <th>Room Type</th>
                                        <th>Monthly Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sharing Room (2 Person)</td>
                                        <td>Rp 1,450,000</td>
                                    </tr>
                                    <tr>
                                        <td>Single Room (1 Person)</td>
                                        <td>Rp 1,800,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="mt-3"><small>* Prices are subject to change each academic year. The university will make necessary adjustments to the rates.</small></p>
                            <div class="mt-4">
                                <a href="register.php?dorm=1" class="btn btn-primary btn-block">Register Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="detail-card">
                        <div class="detail-card-header">
                            <h3>Location & Contact</h3>
                        </div>
                        <div class="detail-card-body">
                            <ul class="detail-list">
                                <li class="detail-item"><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 123 University Drive, Campus Area</li>
                                <li class="detail-item"><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
                                <li class="detail-item"><i class="fas fa-envelope"></i> <strong>Email:</strong> sbh@presdorm.com</li>
                                <li class="detail-item"><i class="fas fa-clock"></i> <strong>Office Hours:</strong> Monday-Friday, 8am-5pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="cta-title">Ready to Join Our Community?</h2>
                    <p class="cta-text">Register now to secure your spot in our Student Boarding House and experience the PresDorm difference.</p>
                    <a href="register.php?dorm=1" class="btn btn-white cta-btn">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="footer-logo">PresDorm</h3>
                    <p class="footer-text">A modern dormitory management system designed to enhance your campus living experience.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h4 class="footer-title">Quick Links</h4>
                    <a href="index.php#features" class="footer-link">Features</a>
                    <a href="index.php#dormitories" class="footer-link">Dormitories</a>
                    <a href="index.php#testimonials" class="footer-link">Reviews</a>
                    <a href="login.php" class="footer-link">Login</a>
                    <a href="register.php" class="footer-link">Register</a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 class="footer-title">Dormitories</h4>
                    <a href="sbh-details.php" class="footer-link">Student Boarding House</a>
                    <a href="nbh-details.php" class="footer-link">New Beverly Hills</a>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h4 class="footer-title">Contact</h4>
                    <p class="footer-link"><i class="fas fa-map-marker-alt mr-2"></i> 123 University Drive, Campus Area</p>
                    <p class="footer-link"><i class="fas fa-phone mr-2"></i> (123) 456-7890</p>
                    <p class="footer-link"><i class="fas fa-envelope mr-2"></i> info@presdorm.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© <?php echo $current_year; ?> PresDorm. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 2rem';
                navbar.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
            } else {
                navbar.style.padding = '1rem 2rem';
                navbar.style.boxShadow = '0 2px 15px rgba(0,0,0,0.08)';
            }
        });
    </script>
</body>
</html>