<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdminDeryko</title>

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <!-- Sidebar -->
<ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">AdminDeryko</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
    </svg>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - produk -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
    </svg>
        <span>Produk</span></a>
</li>

<!-- Nav Item - transaksi -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('transaksi') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
          </svg>
        <span>Transaksi</span></a>
</li>

 <!-- Nav Item - Admin -->
 <li class="nav-item active">
    <a class="nav-link" href="{{ route('admin') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
          </svg>
        <span>Admin</span></a>
</li>

 <!-- Nav Item - Laporan -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
             <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
        </svg>
        <span>Laporan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('laporan_penjualan') }}">Laporan Penjualan</a>
            <a class="collapse-item" href="{{ route('laporan_stokbarang') }}">Laporan Stok Produk</a>
        </div>
    </div>
</li>

</ul>
<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                        <h3><b>Laporan Stok Produk</b></h3>
                    <ul class="navbar-nav ml-auto">
                      
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill m-1" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                            </svg>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Laporan Stok Produk</li>
                         </ol>
                     </nav>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary text-center">Laporan Stok Produk</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                             <button class="btn btn-primary mr-3" type="button">cetak laporan pdf</button>
                        </div>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>kode Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Categori </th>
                                            <th>Jumlah Produk</th>
                                            <th>Expaire</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>$137,500</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>$327,900</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>$205,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>$103,600</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>$90,560</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>$342,000</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>$470,600</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>$313,500</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>$385,750</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>$198,500</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>$725,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>$237,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>$217,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>$345,000</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>$675,000</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td>Doris Wilder</td>
                                            <td>Sales Assistant</td>
                                            <td>Sidney</td>
                                            <td>23</td>
                                            <td>2010/09/20</td>
                                            <td>$85,600</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Developer</td>
                                            <td>Edinburgh</td>
                                            <td>42</td>
                                            <td>2010/12/22</td>
                                            <td>$92,575</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Regional Director</td>
                                            <td>Singapore</td>
                                            <td>28</td>
                                            <td>2010/11/14</td>
                                            <td>$357,650</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Chief Operating Officer (COO)</td>
                                            <td>San Francisco</td>
                                            <td>48</td>
                                            <td>2010/03/11</td>
                                            <td>$850,000</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Regional Marketing</td>
                                            <td>Tokyo</td>
                                            <td>20</td>
                                            <td>2011/08/14</td>
                                            <td>$163,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>Integration Specialist</td>
                                            <td>Sidney</td>
                                            <td>37</td>
                                            <td>2011/06/02</td>
                                            <td>$95,400</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Technical Author</td>
                                            <td>London</td>
                                            <td>27</td>
                                            <td>2011/05/07</td>
                                            <td>$145,000</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Cortez</td>
                                            <td>Team Leader</td>
                                            <td>San Francisco</td>
                                            <td>22</td>
                                            <td>2008/10/26</td>
                                            <td>$235,500</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Post-Sales support</td>
                                            <td>Edinburgh</td>
                                            <td>46</td>
                                            <td>2011/03/09</td>
                                            <td>$324,050</td>
                                        </tr>
                                        <tr>
                                            <td>Unity Butler</td>
                                            <td>Marketing Designer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/12/09</td>
                                            <td>$85,675</td>
                                        </tr>
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008/12/16</td>
                                            <td>$164,500</td>
                                        </tr>
                                        <tr>
                                            <td>Hope Fuentes</td>
                                            <td>Secretary</td>
                                            <td>San Francisco</td>
                                            <td>41</td>
                                            <td>2010/02/12</td>
                                            <td>$109,850</td>
                                        </tr>
                                        <tr>
                                            <td>Vivian Harrell</td>
                                            <td>Financial Controller</td>
                                            <td>San Francisco</td>
                                            <td>62</td>
                                            <td>2009/02/14</td>
                                            <td>$452,500</td>
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>37</td>
                                            <td>2008/12/11</td>
                                            <td>$136,200</td>
                                        </tr>
                                        <tr>
                                            <td>Jackson Bradshaw</td>
                                            <td>Director</td>
                                            <td>New York</td>
                                            <td>65</td>
                                            <td>2008/09/26</td>
                                            <td>$645,750</td>
                                        </tr>
                                        <tr>
                                            <td>Olivia Liang</td>
                                            <td>Support Engineer</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2011/02/03</td>
                                            <td>$234,500</td>
                                        </tr>
                                        <tr>
                                            <td>Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td>Sakura Yamamoto</td>
                                            <td>Support Engineer</td>
                                            <td>Tokyo</td>
                                            <td>37</td>
                                            <td>2009/08/19</td>
                                            <td>$139,575</td>
                                        </tr>
                                        <tr>
                                            <td>Thor Walton</td>
                                            <td>Developer</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2013/08/11</td>
                                            <td>$98,540</td>
                                        </tr>
                                        <tr>
                                            <td>Finn Camacho</td>
                                            <td>Support Engineer</td>
                                            <td>San Francisco</td>
                                            <td>47</td>
                                            <td>2009/07/07</td>
                                            <td>$87,500</td>
                                        </tr>
                                        <tr>
                                            <td>Serge Baldwin</td>
                                            <td>Data Coordinator</td>
                                            <td>Singapore</td>
                                            <td>64</td>
                                            <td>2012/04/09</td>
                                            <td>$138,575</td>
                                        </tr>
                                        <tr>
                                            <td>Zenaida Frank</td>
                                            <td>Software Engineer</td>
                                            <td>New York</td>
                                            <td>63</td>
                                            <td>2010/01/04</td>
                                            <td>$125,250</td>
                                        </tr>
                                        <tr>
                                            <td>Zorita Serrano</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>56</td>
                                            <td>2012/06/01</td>
                                            <td>$115,000</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Acosta</td>
                                            <td>Junior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>43</td>
                                            <td>2013/02/01</td>
                                            <td>$75,650</td>
                                        </tr>
                                        <tr>
                                            <td>Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td>Hermione Butler</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2011/03/21</td>
                                            <td>$356,250</td>
                                        </tr>
                                        <tr>
                                            <td>Lael Greer</td>
                                            <td>Systems Administrator</td>
                                            <td>London</td>
                                            <td>21</td>
                                            <td>2009/02/27</td>
                                            <td>$103,500</td>
                                        </tr>
                                        <tr>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>San Francisco</td>
                                            <td>30</td>
                                            <td>2010/07/14</td>
                                            <td>$86,500</td>
                                        </tr>
                                        <tr>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>Edinburgh</td>
                                            <td>51</td>
                                            <td>2008/11/13</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; AdminDeryko 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

</body>

</html>