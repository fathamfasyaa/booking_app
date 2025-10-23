 <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar d-md-block" id="sidebar">
                <div class="sidebar-brand">
                    <h5 class="text-white mb-0">
                        <i class="bi bi-calendar-check"></i>
                        Booking App
                    </h5>
                    <small class="text-white-50">Admin Panel</small>
                </div>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar-plus"></i>
                            Bookings
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i>
                            Customers
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-building"></i>
                            Facilities
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-clock-history"></i>
                            Schedule
                        </a>
                    </li>
                    
                    <!-- Divider -->
                    <li class="nav-item mt-3">
                        <small class="text-white-50 px-3">MANAGEMENT</small>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i>
                            Reports
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-gear"></i>
                            Settings
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            <i class="bi bi-person"></i>
                            Profile
                        </a>
                    </li>
                </ul>
                
                <!-- Logout at bottom -->
                <div class="mt-auto p-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-light w-100">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </nav>