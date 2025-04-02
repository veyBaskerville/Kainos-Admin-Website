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

      <div class="container-fluid mt-5">
        <div class="row">
          <!-- Fixed Profile Section -->
          <div class="col-md-4">
            <aside class="position-fixed" style="width: 20%; height: 100vh; margin-left: -12px; border-right: 5px solid #ccc; overflow-y: auto;">
              <div class="h-100 p-4 bg-secondary-subtle">
                <div class="text-center">
                  <img src="{{ asset('img/person1.png') }}" alt="Resident Avatar" class="rounded-circle mb-3 mt-2" width="100" height="100">
                  <h5 class="card-title mb-3">@sabrinaryan</h5>
                  <p class="text-danger">Not Verified</p>
                  <button class="btn btn-primary">Verify Account</button>
                </div>
                <div class="position-absolute" style="left: 51%; transform: translateX(-50%); bottom:15%;">
                  <a href="{{ route('accounts.residents') }}" class="btn btn-secondary" style="width: 125px;">Back</a>
                </div>
              </div>
            </aside>
          </div>

          <!-- Scrollable Information Section -->
          <div class="col-md-8 my-4" style="margin-left: 23%; max-height: 100vh; overflow-y: auto; overflow-x: auto;">
            <div>
              <div>
                <!-- Personal Information Table -->
                <table id="personal-information" class="table table-borderless shadow-none">
                  <tbody>
                    <tr>
                      <th colspan="2" class="text-primary fw-bold fs-3 my-5 border-bottom">Personal Information</th>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Last Name</th>
                      <td style="width: 80%;">Aryan</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">First Name</th>
                      <td style="width: 80%;">Sabrina</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Middle Name</th>
                      <td style="width: 80%;"></td>
                    </tr>
                    
                  </tbody>
                </table>

                <!-- Contact Information Table -->
                <table id="contact-information" class="table table-borderless shadow-none">
                  <tbody>
                    <tr>
                      <th colspan="2" class="text-primary fw-bold fs-3 my-5 border-bottom">Contact Information</th>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Email</th>
                      <td style="width: 80%;">sabrinaaryan@gmail.com</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Contact Number</th>
                      <td style="width: 80%;">09123456789</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Address</th>
                      <td style="width: 80%;">Sampaloc Street, Barangay Comembo, Taguig City, Metro Manila</td>
                    </tr>
                  </tbody>
                </table>

                <!-- Additional Information Table -->
                <table id="additional-information" class="table table-borderless shadow-none">
                  <tbody>
                      <th colspan="2" class="text-primary fw-bold fs-3 my-5 border-bottom">Additional Information</th>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Birthdate</th>
                      <td style="width: 80%;">08/20/1995</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Age</th>
                      <td style="width: 80%;">29</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Gender</th>
                      <td style="width: 80%;">Female</td>
                    </tr>
                    <tr>
                    <tr>
                      <th style="width: 20%;">Civil Status</th>
                      <td style="width: 80%;">Single</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Religion</th>
                      <td style="width: 80%;">Catholic</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Years of Residency</th>
                      <td style="width: 80%;">10 Years</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Voter</th>
                      <td style="width: 80%;">Yes</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Working</th>
                      <td style="width: 80%;">Yes</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Student</th>
                      <td style="width: 80%;">No</td>
                    </tr>
                    <tr>
                      <th style="width: 20%;">Resident Status</th>
                      <td style="width: 80%;">Own</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BODY END -->


    </div>

  </body>
</html>