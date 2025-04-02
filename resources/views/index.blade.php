<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    @vite(['resources/css/styles.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/js/script.js']) 
  </head>
  <body>

        <!-- HEADER -->
        <header id="header" class="header fixed-top d-flex align-items-center bg-primary">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
          <button class="toggle-btn" type="button" id="toggleSidebar">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="38" class="d-inline-block align-text-top toggle-img">
            <span class="text-secondary ms-2 mb-1"><strong class="fs-4">iServeComembo</strong></span>
          </button>
        </a>
        <ul class="d-flex align-items-center">
          <!-- Notification Dropdown -->
          <li class="nav-item dropdown dropdown-center">
            <a class="nav-link text-light position-relative" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell-fill"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                4
                <span class="visually-hidden">unread messages</span>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end notification-dropdown text-primary ps-3 bg-secondary" aria-labelledby="notificationDropdown"> Notification
              <li class="dropdown-item">
                <div class="notification-content">
                  <p>You have a new complaint request awaiting your attention. Please review and take action.</p>
                  <small>11:11AM, November 6, 2024</small>
                </div>
              </li>
              <li class="dropdown-item">
                <div class="notification-content">
                  <p>You have a new complaint request awaiting your attention. Please review and take action.</p>
                  <small>11:11AM, November 3, 2024</small>
                </div>
              </li>
            </ul>
          </li>
          
          <!-- Admin Account Dropdown -->
          <li class="nav-item dropdown dropdown-center">
            <a class="nav-link dropdown-toggle text-light d-flex align-items-center" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{ asset('img/person1.png') }}" alt="Admin Avatar" width="30" height="30" class="rounded-circle me-2">
              <span>K. Anderson</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end admin-dropdown bg-secondary" aria-labelledby="adminDropdown">
              <li class="dropdown-header text-center">
                <strong class="text-primary">Kevin Anderson</strong><br>
                <small>Web Designer</small>
              </li>
              <li><a class="dropdown-item fw-normal me-5" href="{{ url('view_admin') }}"><i class="bi bi-person me-2 fs-5"></i> My Profile</a></li>
              <li><a class="dropdown-item fw-normal me-5" href="#"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Sign Out</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </header>
    <!-- HEADER ENDS -->

    <!-- SIDEBAR -->
    <div class="wrapper">
      <aside id="sidebar">
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="/" class="sidebar-link">
              <i class="bi bi-trello fs-4"></i>
              <span class="fs-5 lead text-secondary">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#task" aria-expanded="false" aria-controls="task">
              <i class="bi bi-file-earmark-ruled-fill fs-4"></i>
              <span class="fs-5 lead text-secondary">Services</span>
            </a>
            <ul id="task" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="{{ route('services.document') }}" class="sidebar-link text-secondary ms-3">Document</a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('services.complaint') }}" class="sidebar-link text-secondary ms-3">Complaint</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
              <i class="bi bi-megaphone-fill fs-4"></i>
              <span class="fs-5 lead text-secondary">Publish</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="{{ route('publish.news') }}" class="sidebar-link text-secondary ms-3">News</a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('publish.announcement') }}" class="sidebar-link text-secondary ms-3">Announcements</a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('publish.faqs') }}" class="sidebar-link text-secondary ms-3">FAQs</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('messages') }}" class="sidebar-link">
              <i class="bi bi-chat-left-text-fill fs-4"></i>              
                <span class="fs-5 lead text-secondary">Messages</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="{{ route('feedback') }}" class="sidebar-link">
              <i class="bi bi-chat-quote-fill fs-4"></i>
              <span class="fs-5 lead text-secondary">Feedback</span>
            </a>
          </li>
          
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#acc" aria-expanded="false" aria-controls="acc">
              <i class="bi bi-person-vcard-fill fs-4"></i>
              <span class="fs-5 lead text-secondary">Accounts</span>
            </a>
            <ul id="acc" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="{{ route('accounts.residents') }}" class="sidebar-link text-secondary ms-3">Residents</a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('accounts.admin') }}" class="sidebar-link text-secondary ms-3">Admin</a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!-- SIDEBAR ENDS -->

      <!-- BODY -->
       <!-- CARD -->
      <div class="container pt-4">
        <div class="row mb-4">
          <!-- Registered Users -->
          <div class="col-lg-3 col-md-6 mb-3 mt-4">
              <div class="d-flex align-items-center bg-white rounded-pill shadow p-3 card-hover">
                  <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                      <i class="bi bi-person-fill fs-2"></i>
                  </div>
                  <div class="ms-3">
                      <h5 class="mb-0 text-center">Registered Users</h5>
                      <span class="fs-4 fw-bold text-success ps-5">2431</span>
                  </div>
              </div>
          </div>

          <!-- Pending Document -->
          <div class="col-lg-3 col-md-6 mb-3 mt-4">
              <div class="d-flex align-items-center bg-white rounded-pill shadow p-3 card-hover">
                  <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                      <i class="bi bi-file-earmark-text-fill fs-2"></i>
                  </div>
                  <div class="ms-3">
                      <h5 class="mb-0">Pending Document</h5>
                      <span class="fs-4 fw-bold text-primary ps-5">104</span>
                  </div>
              </div>
          </div>

          <!-- Pending Complaint -->
          <div class="col-lg-3 col-md-6 mb-3 mt-4">
              <div class="d-flex align-items-center bg-white rounded-pill shadow p-3 card-hover">
                  <div class="bg-warning text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                      <i class="bi bi-flag-fill fs-2"></i>
                  </div>
                  <div class="ms-3">
                      <h5 class="mb-0">Pending Complaint</h5>
                      <span class="fs-4 fw-bold text-warning ps-5">25</span>
                  </div>
              </div>
          </div>

          <!-- Feedback & Report -->
          <div class="col-lg-3 col-md-6 mb-3 mt-4">
              <div class="d-flex align-items-center bg-white rounded-pill shadow p-3 card-hover">
                  <div class="bg-danger text-white rounded-circle d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                      <i class="bi bi-blockquote-right fs-2"></i>
                  </div>
                  <div class="ms-3">
                      <h5 class="mb-0">Feedback & Report</h5>
                      <span class="fs-4 fw-bold text-danger ps-5">76</span>
                  </div>
              </div>
          </div>
        </div>
      </div>
        <!-- CARD END -->

        <!-- TABLE DOCU&COMPLAINT-->
        <div class="container">
          <h5 class="mb-3 fw-bold fs-4 text-primary">Recent Document and Complaint Request</h5>
          <div class="table-responsive">
            <table class="table table-hover rounded-4 overflow-hidden shadow">
              <thead class="table-info">
                <tr>
                  <th scope="col" class="text-primary py-4" style="width: 20%;">Category</th>
                  <th scope="col" class="text-primary py-4" style="width: 25%;">Name</th>
                  <th scope="col" class="text-primary py-4" style="width: 40%;">Type of Document/Complaint</th>
                  <th scope="col" class="text-primary py-4" style="width: 15%;">Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-4">Document Request</td>
                  <td class="py-4">Aryan, Sabrina</td>
                  <td class="py-4">Barangay Clearance for Renovation/Extension</td>
                  <td class="py-4">02 / 15 / 25</td>
                </tr>
                <tr>
                  <td class="py-4">Document Request</td>
                  <td class="py-4">Aryan, Sabrina</td>
                  <td class="py-4">Barangay Business Clearance</td>
                  <td class="py-4">02 / 15 / 25</td>
                </tr>
                <tr>
                  <td class="py-4">Complaint Request</td>
                  <td class="py-4">Aryan, Sabrina</td>
                  <td class="py-4">Public Disturbance</td>
                  <td class="py-4">02 / 15 / 25</td>
                </tr>
                <tr>
                  <td class="py-4">Document Request</td>
                  <td class="py-4">Aryan, Sabrina</td>
                  <td class="py-4">Barangay Residence</td>
                  <td class="py-4">02 / 15 / 25</td>
                </tr>
                <tr>
                  <td class="py-4">Document Request</td>
                  <td class="py-4">Aryan, Sabrina</td>
                  <td class="py-4">Barangay Business Clearance</td>
                  <td class="py-4">02 / 15 / 25</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- TABLE END -->

        <!-- TABLE NEWS AND ANNOUNCEMENT WITH ADMIN -->
        <div class="container mt-4">
          <div class="row">
            <!-- News and Announcement Table -->
            <div class="col-lg-8 mb-4">
              <h5 class="mb-3 fw-bold fs-4 text-primary">Recent News and Announcement</h5>
              <div class="table-responsive">
                <table class="table table-hover rounded-4 overflow-hidden shadow">
                  <thead class="table-info">
                    <tr>
                      <th scope="col" class="py-4 text-primary" style="width: 20%;">Category</th>
                      <th scope="col" class="py-4 text-primary" style="width: 65;">Title</th>
                      <th scope="col" class="py-4 text-primary" style="width: 15%;">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-4">News</td>
                      <td class="py-4">BABALA: Babaeng Magnanakaw Nahuli sa CCTV sa Barangay Comembo</td>
                      <td class="py-4">02 / 15 / 25</td>
                    </tr>
                    <tr>
                      <td class="py-4">Announcement</td>
                      <td class="py-4">Libreng Serbisyo para sa mga alagang hayop sa World Rabies Day</td>
                      <td class="py-4">02 / 15 / 25</td>
                    </tr>
                    <tr>
                      <td class="py-4">News</td>
                      <td class="py-4">BABALA: Babaeng Magnanakaw Nahuli sa CCTV sa Barangay Comembo</td>
                      <td class="py-4">02 / 15 / 25</td>
                    </tr>
                    <tr>
                      <td class="py-4">Announcement</td>
                      <td class="py-4">Libreng Serbisyo para sa mga alagang hayop sa World Rabies Day</td>
                      <td class="py-4">02 / 15 / 25</td>
                    </tr>
                    <tr>
                      <td class="py-4">News</td>
                      <td class="py-4">BABALA: Babaeng Magnanakaw Nahuli sa CCTV sa Barangay Comembo</td>
                      <td class="py-4">02 / 15 / 25</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Admin Table -->
            <div class="col-lg-4 mb-4">
              <h5 class="mb-3 fw-bold fs-4 text-primary">Admins</h5>
              <div class="table-responsive">
                <table class="table table-hover overflow-hidden shadow">
                  <thead class="table-info">
                    <tr>
                      <th scope="col" class="text-primary py-4">Name</th>
                      <th scope="col" class="text-primary py-4">Position</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-4">Admin Name1</td>
                      <td class="py-4">Super Admin</td>
                    </tr>
                    <tr>
                      <td class="py-4">Admin Name2</td>
                      <td class="py-4">Admin</td>
                    </tr>
                    <tr>
                      <td class="py-4">Admin Name3</td>
                      <td class="py-4">Admin</td>
                    </tr>
                    <tr>
                      <td class="py-4">Admin Name2</td>
                      <td class="py-4">Admin</td>
                    </tr>
                    <tr>
                      <td class="py-4">Admin Name3</td>
                      <td class="py-4">Admin</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- TABLE END -->


        <!-- BODY END -->
    </div>

  </body>
</html>