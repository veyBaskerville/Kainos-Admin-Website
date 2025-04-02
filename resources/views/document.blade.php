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

      <main class="main-content">
        <div class="container mt-5 pt-5">
            <h1 class="text-center mb-4 display-4 fw-bolder text-primary">DOCUMENT REQUEST</h1>
            <div class="row">
            <div class="col-md-6">
                <div class="card text-center card-hover bg-secondary text-primary h-100">
                <div class="card-body shadow">
                    <h5 class="card-title display-4 fw-bold pt-4">Total No. of Request</h5>
                    <p class="card-text display-2 fw-bolder">1</p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-secondary text-primary h-100 card-hover">
                <div class="card-body shadow ">
                    <h5 class="card-title text-primary fs-3 lead fw-bold">Types of Document</h5>
                    <ul class="list-group list-group-flush m-1">
                    <li class="list-group-item bg-primary bg-opacity-25 text-primary border border-primary m-1 lead">Barangay Residency</li>
                    <li class="list-group-item bg-primary bg-opacity-25 text-primary border border-primary m-1 lead">Barangay Clearance for Renovation/Extension</li>
                    <li class="list-group-item bg-primary bg-opacity-25 text-primary border border-primary m-1 lead">Barangay Business Clearance</li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

            <!-- document table -->
            <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <select class="form-select w-25 border border-primary" aria-label="Filter by status ">
                <option selected>All Request</option>
                <option value="1">Pending</option>
                <option value="2">In Process</option>
                <option value="3">Completed</option>
                <option value="4">Rejected</option>
                </select>
            </div>
            <div class="table-responsive">
                <table class="table table-hover rounded-4 overflow-hidden shadow">
                <thead class="table-info">
                    <tr>
                    <th scope="col" class="text-primary py-4" style="width: 20%;">Name</th>
                    <th scope="col" class="text-primary py-4" style="width: 25%;">Type of Document</th>
                    <th scope="col" class="text-primary py-4" style="width: 15%;">Date</th>
                    <th scope="col" class="text-primary py-4" style="width: 20%;">Status</th>
                    <th scope="col" class="text-primary py-4" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="py-4">Aryan, Sabrina</td>
                    <td class="py-4">Barangay Residence</td>
                    <td class="py-4">02 / 15 / 25</td>
                    <td class="py-4">In Process</td>
                    <td class="py-4">
                        <a href="{{ route('edit_document') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                    </tr>
                    <tr>
                        <td class="py-4">Aryan, Sabrina</td>
                        <td class="py-4">Barangay Residence</td>
                        <td class="py-4">02 / 15 / 25</td>
                        <td class="py-4">In Process</td>
                        <td class="py-4">
                        <a href="{{ route('edit_document') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4">Aryan, Sabrina</td>
                        <td class="py-4">Barangay Residence</td>
                        <td class="py-4">02 / 15 / 25</td>
                        <td class="py-4">In Process</td>
                        <td class="py-4">
                        <a href="{{ route('edit_document') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4">Aryan, Sabrina</td>
                        <td class="py-4">Barangay Residence</td>
                        <td class="py-4">02 / 15 / 25</td>
                        <td class="py-4">In Process</td>
                        <td class="py-4">
                        <a href="{{ route('edit_document') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4">Aryan, Sabrina</td>
                        <td class="py-4">Barangay Residence</td>
                        <td class="py-4">02 / 15 / 25</td>
                        <td class="py-4">In Process</td>
                        <td class="py-4">
                        <a href="{{ route('edit_document') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        </td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
                </table>
            </div>
            </div>
            <!-- document table end -->
        </div>
        </main>
        <!-- BODY END -->

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-light"  data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
        </div>

      <!-- BODY END -->
      

    </div>

  </body>
</html>