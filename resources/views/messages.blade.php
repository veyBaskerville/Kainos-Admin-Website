<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MESSAGES-COMEMBO</title>
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

    <div class="container-fluid p-0">
        <div class="chat-container d-flex ">
            <!-- Left Sidebar - Conversation List -->
            <div class="conversation-list col-md-3 bg-light borderend p-3 ">
                <!-- Search Bar -->
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search text-secondary"></i></span>
                        <input type="text" class="form-control" placeholder="Search conversations...">
                    </div>
                </div>

                <!-- Conversations -->
                <div class="overflow-auto conversation-items">
                    <div class="conversation-item d-flex align-items-center p-2">
                        <img src="https://ui-avatars.com/api/?name=Pedro+Martinez" class="user-avatar me-2" alt="Pedro">
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Pedro Martinez</h6>
                            <p class="text-muted small mb-0">Hello! I need assistance regarding my...</p>
                        </div>
                    </div>
                    <div class="conversation-item d-flex align-items-center p-2">
                        <img src="https://ui-avatars.com/api/?name=Juan+Dela+Cruz" class="user-avatar me-2" alt="Juan">
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Juan Dela Cruz</h6>
                            <p class="text-muted small mb-0">Good afternoon! How can I renew my b...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Chat Area -->
            <div class="col-md-9 d-flex flex-column">
                <!-- Chat Header -->
                <div class="p-3 border-bottom d-flex align-items-center bg-white">
                    <img src="https://ui-avatars.com/api/?name=Maria+Santos" class="user-avatar me-2" alt="Maria">
                    <div>
                        <h6 class="mb-0">Maria Santos</h6>
                        <p class="text-success small mb-0">Online</p>
                    </div>
                </div>

                <!-- Chat Messages -->
                <div class="flex-grow-1 overflow-auto p-3 chat-messages bg-light">
                    <div class="d-flex align-items-start mb-3">
                        <img src="https://ui-avatars.com/api/?name=Maria+Santos" class="user-avatar me-2" alt="Maria">
                        <div class="message-bubble user-message">
                            <p>Hello, gusto ko sana ng konting tulong ng barangay ID. Ano po ang mga kailangan requirements?</p>
                            <p class="text-muted small mb-0">11:15 AM</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-end mb-3">
                        <div class="message-bubble admin-message">
                            <p>Magandang umaga, Maria! Ang pagkuha ng barangay ID ay ginagawa na online sa pamamagitan ng aming mobile app...</p>
                            <p class="text-muted small mb-0">11:18 AM</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <img src="https://ui-avatars.com/api/?name=Maria+Santos" class="user-avatar me-2" alt="Maria">
                        <div class="message-bubble user-message">
                            <p>Ah, naintindihan ko. Paano ko malalaman kung approved na ang request ko?</p>
                            <p class="text-muted small mb-0">11:19 AM</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-end mb-3">
                        <div class="message-bubble admin-message">
                            <p>Kapag inaprubahan na po ang request mo makakatanggap ka ng confirmation message sa app.</p>
                            <p class="text-muted small mb-0">11:20 AM</p>
                        </div>
                    </div>
                </div>

                <!-- Message Input -->
                <div class="p-3 border-top bg-white">
                    <form class="d-flex">
                        <input type="text" class="form-control me-2 rounded-pill" placeholder="Type your message...">
                        <button type="submit" class="btn btn-primary rounded-circle">
                            <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

      <!-- BODY END -->


    </div>

  </body>
</html>