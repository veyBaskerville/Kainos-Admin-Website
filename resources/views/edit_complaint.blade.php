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
      <div class="container mt-5">
        <div class="card border-0">
          <div class="card border-0">
            <h5 class="my-3 fs-1 fw-bold text-primary">EDIT DOCUMENT REQUEST</h5>
          </div>
          <div>
            <!-- Requester Information Table -->
            <table class="table table-borderless shadow-none">
              <tbody>
                <tr>
                  <th colspan="2" class="text-primary fw-bold fs-3 my-5 border-bottom">Requester Information</th>
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
                <tr>
                  <th style="width: 20%;">Birthdate</th>
                  <td style="width: 80%;">06/20/1995</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Years of Residency</th>
                  <td style="width: 80%;">10 Years</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Contact Number</th>
                  <td style="width: 80%;">09123456789</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Address</th>
                  <td style="width: 80%;">Sampaloc Street, Barangay Comembo, Taguig City, Metro Manila</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Civil Status</th>
                  <td style="width: 80%;">Single</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Local Employment</th>
                  <td style="width: 80%;">IT</td>
                </tr>
              </tbody>
            </table>

            <!-- Complaint Information Table -->
            <table class="table table-borderless shadow-none">
              <tbody>
                <tr>
                  <th colspan="2" class="text-primary fw-bold fs-3 my-5 pt-3 border-bottom">Complaint Information</th>
                </tr>
                <tr>
                  <th style="width: 20%;">Type of Complaint</th>
                  <td style="width: 80%;">Public Disturbance</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Type of Disturbance</th>
                  <td style="width: 80%;">Noise</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Location</th>
                  <td style="width: 80%;">123 Main St., Barangay Comembo, Taguig City</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Date and Time</th>
                  <td style="width: 80%;">10/10/2024 at 11:11pm</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Description</th>
                  <td style="width: 80%;">Ang aking kapitbahay ay gumagamit ng videoke kahit 12am ng hatinggabi, nagsasanhi ng malakas na ingay at hindi makatulog ang aking pamilya.</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Frequency</th>
                  <td style="width: 80%;">Recurring</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Sentiment</th>
                  <td style="width: 80%;">
                    <span class="badge bg-success me-2 fs-6">Positive</span>
                    <span class="badge bg-danger me-2 fs-6">Negative</span>
                    <span class="badge bg-secondary fs-6">Neutral</span>
                  </td>
                </tr>
                <tr>
                  <th style="width: 20%;">Priority Level</th>
                  <td style="width: 80%;">Medium</td>
                </tr>
                <tr>
                  <th style="width: 20%;">Status</th>
                  <td style="width: 80%;">
                    <select class="form-select" style="width: 30%;">
                    <option value="1">Phase 1: To be Reviewed</option>
                    <option value="2">Phase 2: Additional Requirements</option>
                    <option value="3">Phase 3: Complaint Investigation</option>
                    <option value="4">Phase 4: Action Taken/Resolution</option>
                    <option value="5">Phase 5: Final Status and Feedback</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th style="width: 20%;">Status Explanation</th>
                  <td style="width: 80%;">
                    <textarea class="form-control" rows="5" placeholder="Enter status explanation here...">Ang inyong reklamo ay kasalukuyang iniimbestigahan ng aming opisyal o kinauukulan.
Maaaring tawagan o bisitahin kayo para sa karagdagang detalye o kumpirmasyon ng impormasyon.
Hintayin ang abiso tungkol sa resulta ng imbestigasyon at mga susunod na hakbang.</textarea>
                  </td>
                </tr>
                <tr>
                  <th style="width: 20%;">Valid ID Attachment</th>
                  <td style="width: 80%;">
                    <div class="d-flex">
                      <div class="border p-3 text-center me-2" style="width: 25%;">
                        <i class="bi bi-file-earmark-image fs-1"></i>
                        <p>Valid ID Attachment</p>
                      </div>
                      <div class="border p-3 text-center me-2" style="width: 25%;">
                        <i class="bi bi-file-earmark-image fs-1"></i>
                        <p>Evidence #1</p>
                      </div>
                      <div class="border p-3 text-center" style="width: 25%;">
                        <i class="bi bi-file-earmark-image fs-1"></i>
                        <p>Evidence #2</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="text-center my-5">
              <a href="{{ route('services.complaint') }}" class="btn btn-secondary me-2" style="width: 15%;">Cancel</a>
              <button class="btn btn-primary" style="width: 15%;">Save</button>
            </div>
          </div>
        </div>
      </div>
      <!-- BODY END -->


    </div>

  </body>
</html>