<!-- Navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top no-print"
      data-aos="fade-down"
    >
      <div class="container">
        

        <a class="navbar-brand" href="/">
          <img style="width: 50%" src="/images/logo-new.png" alt="" />
        </a>
        
        
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo e((request()->is('/')) ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('home')); ?>">Home </a>
              
            </li>
            <li class="nav-item <?php echo e((request()->is('/request*')) ? 'active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('request')); ?>">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href=<?php echo e(asset('panduan/Panduan.pdf')); ?>>Panduan</a>
            </li>
            

            <?php if(auth()->guard()->guest()): ?>
              
              <li class="nav-item">
                <a
                  class="btn btn-primary nav-link px-4 text-white"
                  href="<?php echo e(route('login')); ?>"
                  >Sign In</a
                >
              </li>
            <?php endif; ?>
          </ul>

          <?php if(auth()->guard()->check()): ?>
              <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="/images/user-icon.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    <?php echo e(Auth::user()->name); ?>

                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php 
                      $roles = Auth::user()->roles;
                      // dd($roles);
                    ?> 

                    <?php if($roles == 'ADMIN'): ?>
                      <a class="dropdown-item" href="/admin"
                        >Dashboard</a
                      >
                    <div class="dropdown-divider"></div>
                    <?php elseif($roles == 'VP'): ?>
                    <a class="dropdown-item" href="/vp"
                      >Dashboard</a
                    > 
                    <div class="dropdown-divider"></div>
                    <?php endif; ?>

                    
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="dropdown-item">Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                  </div>
                </li>

                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, <?php echo e(Auth::user()->name); ?>

                  </a>
                </li>
             
                <li class="nav-item">
                      <div class="dropdown-divider"></div>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="dropdown-item">Logout</a>
                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                          </form>
                      </div>
                  </li>
              </ul>
          <?php endif; ?>
        </div>
      </div>
    </nav>
<?php /**PATH /var/www/lahan/resources/views/includes/navbar.blade.php ENDPATH**/ ?>