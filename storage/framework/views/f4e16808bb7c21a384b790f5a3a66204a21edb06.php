<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right wrapper-test" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/logo.svg" alt="" class="my-4" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="<?php echo e(route('admin-dashboard')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin')) ? 'active' : ''); ?> "
              >Dashboard</a
            >

            <a
              href="<?php echo e(route('request.index')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin/request*')) ? 'active' : ''); ?>"
              >Permintaan</a
            >

            <a
              href="<?php echo e(route('user.index')); ?>"
              class="list-group-item list-group-item-action <?php echo e((request()->is('admin/user*')) ? 'active' : ''); ?>"
              >Users</a
            >

            <a
              href="<?php echo e(route('logout')); ?>"
              class="list-group-item list-group-item-action"
              >Sign out</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
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
                    Hi, <?php echo e(Auth::user()->name); ?>

                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="<?php echo e(route('home')); ?>"
                      >Home</a
                    >
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="dropdown-item">Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                  </div>
                </li>
                
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, <?php echo e(Auth::user()->name); ?>

                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="<?php echo e(route('home')); ?>"
                      >Home</a
                    >
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="dropdown-item">Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                  </div>
                </li>
                
              </ul>
            </div>
          </nav>

          

          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <?php echo $__env->yieldPushContent('prepend-scripts'); ?>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <?php echo $__env->yieldPushContent('addon-scripts'); ?>
  </body>
</html>
<?php /**PATH /var/www/lahan/resources/views/layouts/admin.blade.php ENDPATH**/ ?>