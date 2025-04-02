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
        <h1 class="text-center mt-4 mb-5 display-4 fw-bolder text-primary">News</h1>
        <div class="">
          <div>
            <div class="d-flex justify-content-end mb-3">
              <button class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#addNewsModal">Add News</button>
            </div>
            <div class="table-responsive">
              <table class="table table-hover rounded-4 overflow-hidden shadow">
                <thead class="table-info">
                  <tr>
                    <th scope="col" class="text-primary py-4" style="width: 60%;">News Title</th>
                    <th scope="col" class="text-primary py-4" style="width: 25%;">Date</th>
                    <th scope="col" class="text-primary py-4" style="width: 15%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-4">BABALA: Babaeng Magnanakaw Nahuli sa CCTV sa Barangay Comembo</td>
                    <td class="py-4">09 / 10 / 2024</td>
                    <td class="py-4">
                      <a href="{{ route('edit_news') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-4">Important Announcement: Barangay Cleanup Drive</td>
                    <td class="py-4">08 / 15 / 2024</td>
                    <td class="py-4">
                      <a href="{{ route('edit_news') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-4">Community Meeting Scheduled for Next Week</td>
                    <td class="py-4">07 / 20 / 2024</td>
                    <td class="py-4">
                      <a href="{{ route('edit_news') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-4">BABALA: Babaeng Magnanakaw Nahuli sa CCTV sa Barangay Comembo</td>
                    <td class="py-4">09 / 10 / 2024</td>
                    <td class="py-4">
                      <a href="{{ route('edit_news') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-4">Important Announcement: Barangay Cleanup Drive</td>
                    <td class="py-4">08 / 15 / 2024</td>
                    <td class="py-4">
                      <a href="{{ route('edit_news') }}" class="btn btn-primary btn-sm px-3 me-2">Edit</a>
                      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Add News Modal -->
      <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-md-down modal-lg modal-xl">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h5 class="modal-title fw-bold fs-1 text-primary text-center" id="addNewsModalLabel">Create News</h5>
              <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="newsTitle" class="form-label fw-bold fs-5">News Title:</label>
                  <input type="text" class="form-control" id="newsTitle" placeholder="Enter news title">
                </div>
                <div class="mb-3">
                  <label for="newsDescription" class="form-label fw-bold fs-5">Description:</label>
                  <textarea class="form-control" id="newsDescription" rows="8" placeholder="Enter description"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="newsDate" class="form-label fw-bold fs-5">News Date:</label>
                    <input type="date" class="form-control" id="newsDate">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="pictureAttachment" class="form-label fw-bold fs-5">Picture Attachment:</label>
                    <input type="file" class="form-control" id="pictureAttachment">
                    <div class="mt-3">
                      <img id="picturePreview" src="#" alt="Preview" style="display: none; width: 75px; height: 75px; object-fit: cover;">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" style="width: 15%;" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" style="width: 15%;">Save</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Add News Modal End -->

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
              <button type="button" class="btn btn-primary text-light" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Delete Confirmation Modal End -->

      <script>
        document.getElementById('pictureAttachment').addEventListener('change', function(event) {
          const file = event.target.files[0];
          const preview = document.getElementById('picturePreview');
          if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
              preview.src = e.target.result;
              preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
          } else {
            preview.style.display = 'none';
          }
        });
      </script>
      <!-- BODY END -->


    </div>

  </body>
</html>