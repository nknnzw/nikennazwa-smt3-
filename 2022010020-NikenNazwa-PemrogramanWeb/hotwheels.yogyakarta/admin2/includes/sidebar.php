<div id="layoutSidenav_nav">
                
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="view-register.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Registerd Users
                            </a>

                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Detail
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="m_produk.php">Data Produk</a>
                                    <a class="nav-link" href="produksi.php">Data Pemesanan</a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Laporan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePosts" aria-labelledby="Posts" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="laporan_penjualan.php">Laporan Penjualan</a>
                                    <a class="nav-link" href="laporan_omset.php">Laporan Omset</a>
                                    <a class="nav-link" href="laporan_pembatalan.php">Laporan Pembatalan</a>
                                </nav>
                            </div>



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Customers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="m_customer.php">Data Customers</a>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Pemeliharaan</div>
                            
                            <a class="nav-link" href="../DATABASE/backup.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                              Backup Database
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
 </div>