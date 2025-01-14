<!-- <div class='progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    <div class='percent' id='percent1'></div>
</div> -->
<input type="hidden" id="progress_width" value="0">
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
   
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

    

        

        <div class="topbar-divider d-none d-sm-block"></div>
        <?php  
        if (count($_SESSION) == 0) {
    
        ?>

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="login.php" >
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">เข้าสู่ระบบ</span>
                    <img class="img-profile rounded-circle" src="lib/Mysite/img/userUnknow.jpg">
                </a>
            </li>



         



        <?php
        } else {

        ?>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["Username"]; ?></span>
                    <img class="img-profile rounded-circle" src="lib/sb-admin-2/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        ออกจากระบบ
                    </a>
                </div>
            </li>



        <?php } ?>
    </ul>

</nav>
<!-- End of Topbar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>  -->
            <div class="modal-body">เลือก "ออกจากระบบ" ด้านล่าง หากคุณพร้อมที่จะสิ้นสุดเซสชันปัจจุบันของคุณ.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">ออกจากระบบ</a>
            </div>
        </div>
    </div>
</div>