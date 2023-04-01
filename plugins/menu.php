<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">
                <div class="text-center"> 
                    <img width="92" class="rounded-circle" src="<?php echo IMGURL."/Logo_BPN-KemenATR_(2017).png" ;?>" alt="">
                </div>
            </div>

            <div class="sb-sidenav-menu-heading">&nbsp;&nbsp;&nbsp;Home</div>
            <a class="nav-link active" href="?page=depan">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-home"></i>
                </div>
                <font style="font-size: 14px;"> Dashboard </font>
            </a>

            <!-- start berkas -->
            <?php if (in_array($_SESSION['level'], $akses_administrator_1)) { ?>
            <div class="sb-sidenav-menu-heading">&nbsp;&nbsp;&nbsp;Loket</div>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_administrator)) { ?>
            <a class="nav-link" href="?page=tabel_berkas">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book"></i></div>
                <font style="font-size: 14px;">Berkas Layanan</font>
            </a>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pimpinan)){?>
            <a class="nav-link" href="?page=tabel_berkas_pimpinan">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book"></i></div>
               <font style="font-size: 14px;"> Berkas Layanan </font>
            </a>
        <?php } ?>
            <!-- end berkas -->
            
            <!-- disposisi -->
            <?php if (in_array($_SESSION['level'], $akses_all)) { ?>
            <div class="sb-sidenav-menu-heading">&nbsp;&nbsp;&nbsp;Disposisi</div>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pimpinan_3)) { ?>
            <a class="nav-link" href="?page=tabel_disposisi">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-random"></i></div>
                <font style="font-size: 14px;"> Disposisi Berkas </font>
            </a>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pimpinan_4)) { ?>
            <a class="nav-link" href="?page=tabel_disposisi_pimpinan">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-random"></i></div>
                <font style="font-size: 14px;"> Disposisi Berkas </font>
            </a>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pnsnonpns_1)) { ?>
            <a class="nav-link" href="?page=tabel_disposisi_bawahan">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-random"></i></div>
                <font style="font-size: 14px;"> Disposisi Berkas </font>
            </a>
        <?php } ?>
            <!-- end disposisi -->

            <!-- start resume -->
            <?php if (in_array($_SESSION['level'], $akses_pimpinan_1)) { ?>
            <div class="sb-sidenav-menu-heading">&nbsp;&nbsp;&nbsp;Resume KKP</div>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pimpinan_2)) { ?>
            <a class="nav-link" href="?page=tabel_resume_kkp">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bookmark"></i></div>
                <font style="font-size: 14px;"> Resume KKP </font>
            </a>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_pimpinan)){?>
            <a class="nav-link" href="?page=tabel_resume_kkp_pimpinan">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-bookmark"></i></div>
                <font style="font-size: 14px;"> Resume KKP </font>
            </a>
        <?php } ?>
            <!-- end resume -->

            <!-- start User managemenet -->
            <div class="sb-sidenav-menu-heading">&nbsp;&nbsp;&nbsp;Management User</div>
            <?php if (in_array($_SESSION['level'], $akses_admin)) { ?>
            <a class="nav-link" href="?page=tabel_user">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user"></i></div>
                <font style="font-size: 14px;"> User Management</font>
            </a>
        <?php } ?>
            <?php if (in_array($_SESSION['level'], $akses_all)) { ?>
            <a class="nav-link" href="?page=tabel_user_one">
                <div class="sb-nav-link-icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user"></i></div>
                <font style="font-size: 14px;"> User Management </font>
            </a>
        <?php } ?>
        <div class="sb-sidenav-menu-heading"></div>
            <!-- end user mnaagement -->
        </div>
    </div>
</nav>