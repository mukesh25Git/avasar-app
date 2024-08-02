 
          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
              
            </ul>
          </nav>

          <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link" style="text-decoration:none;">
              <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Avasar App</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 
                  <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  
                  </li>
                  <li class="nav-item">
                    <a href="{{route('incomeList')}}" class="nav-link {{ Route::is('incomeList') ? 'active' : '' }} {{ Route::is('addIncome') ? 'active' : '' }} {{ Route::is('editIncome') ? 'active' : '' }}">
                      <i class="fa-solid fa-coins"></i> 
                      <p> Income </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('expenseList')}}" class="nav-link {{ Route::is('expenseList') ? 'active' : '' }} {{ Route::is('addExpense') ? 'active' : '' }} {{ Route::is('editExpense') ? 'active' : '' }}">
                      <p><i class="fa-solid fa-credit-card custom-icon"></i> Expense</p>
                    
                    </a>
                  </li>

                  <li class="nav-item menu-open">
                    <a href="{{route('summaryDashboard')}}" class="nav-link {{ Route::is('summaryDashboard') ? 'active' : '' }}">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Summary Dashboard
                      </p>
                    </a>
                  
                  </li>

                  <li class="nav-item">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                         <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }} 
                    </x-dropdown-link>
                </form>
              </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
