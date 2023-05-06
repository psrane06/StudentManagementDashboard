<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-name" content="mono" />

    <title>E-Studies</title>

    {{-- GOOGLE FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('theme/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    {{-- PLUGINS CSS STYLE --}}
    <link href="{{ asset('theme/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <link href="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />

    <link href="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />

    <link href="{{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link href="{{ asset('theme/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />

    {{-- MONO CSS --}}
    <link id="main-css-href" rel="stylesheet"
        href=" {{ asset('theme/plugins/material/css/materialdesignicons.min.css') }}" />
    <link id="main-css-href" rel="stylesheet" href=" {{ asset('theme/css/style.css') }}" />

    {{-- FAVICON --}}
    <link href="{{ asset('theme/images/favicon.png') }}" rel="shortcut icon" />

    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    {{-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif] --}}
    <script src="{{ asset('theme/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div id="toaster"></div>

    {{-- WRAPPER --}}
    <div class="wrapper">

        {{-- side bar --}}
        @include('theme.Layout.sidebar')

        @include('theme.Layout.navigation')
        {{-- PAGE WRAPPER --}}
        {{-- CONTENT WRAPPER --}}

        <div class="content-wrapper">
            <div class="content">
                {{-- Top Statistics --}}
                {{-- <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-default card-mini">
                                    <div class="card-header">
                                        <h2>$18,699</h2>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="sub-title">
                                            <span class="mr-1">Sales of this year</span> |
                                            <span class="mx-1">45%</span>
                                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div>
                                                <div id="spline-area-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-default card-mini">
                                    <div class="card-header">
                                        <h2>$14,500</h2>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="sub-title">
                                            <span class="mr-1">Expense of this year</span> |
                                            <span class="mx-1">50%</span>
                                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div>
                                                <div id="spline-area-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-default card-mini">
                                    <div class="card-header">
                                        <h2>$4199</h2>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="sub-title">
                                            <span class="mr-1">Profit of this year</span> |
                                            <span class="mx-1">20%</span>
                                            <i class="mdi mdi-arrow-down-bold text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div>
                                                <div id="spline-area-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-default card-mini">
                                    <div class="card-header">
                                        <h2>$20,199</h2>
                                        <div class="dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                        <div class="sub-title">
                                            <span class="mr-1">Revenue of this year</span> |
                                            <span class="mx-1">35%</span>
                                            <i class="mdi mdi-arrow-up-bold text-success"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-wrapper">
                                            <div>
                                                <div id="spline-area-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                {{-- Table Product --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-header">
                                <h2>Products Inventory</h2>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Yearly Chart
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="productsTable" class="table table-hover table-product" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Courses Name</th>
                                            <th>Category</th>
                                            <th>Instructor</th>
                                            <th>Description</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="py-0"></td>
                                            <td>
                                                <img src="{{ asset('theme/images/products/products-xs-01.jpg') }}" alt="Product Image">
                                                Angular
                                            </td>
                                            <td>Frontend Development</td>
                                            <td>
                                                <img src="{{ asset('theme/images/products/products-xs-01.jpg') }}" alt="Product Image">
                                                Brad Traversy
                                            </td>
                                            <td class="description-cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam natus laudantium necessitatibus maiores sapiente voluptatem quibusdam reprehenderit eum, incidunt itaque, architecto et? Consectetur adipisci repellendus fuga placeat numquam inventore ea?</td>
                                            <td>
                                                <div id="tbl-chart-01"></div>
                                            </td>
                                            <td><a href="#" class="badge badge-pill badge-outline-success">Ongoing</a></td>
                                            <td><a href="/continue">Continue</a></td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-02.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Toddler Shoes, Gucci Watch</td>
                                            <td>24542</td>
                                            <td>18</td>
                                            <td>7</td>
                                            <td>5</td>
                                            <td>
                                                <div id="tbl-chart-02"></div>
                                            </td>
                                            <td>1</td>
                                            <td>14</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-03.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Hat Black Suits</td>
                                            <td>24543</td>
                                            <td>20</td>
                                            <td>3</td>
                                            <td>7</td>
                                            <td>
                                                <div id="tbl-chart-03"></div>
                                            </td>
                                            <td>6</td>
                                            <td>26</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-04.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Backpack Gents</td>
                                            <td>24544</td>
                                            <td>37</td>
                                            <td>8</td>
                                            <td>3</td>
                                            <td>
                                                <div id="tbl-chart-04"></div>
                                            </td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-05.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Speed 500 Ignite</td>
                                            <td>24545</td>
                                            <td>8</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>
                                                <div id="tbl-chart-05"></div>
                                            </td>
                                            <td>8</td>
                                            <td>42</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-06.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Olay</td>
                                            <td>24546</td>
                                            <td>19</td>
                                            <td>6</td>
                                            <td>6</td>
                                            <td>
                                                <div id="tbl-chart-06"></div>
                                            </td>
                                            <td>79</td>
                                            <td>12</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-07.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Ledger Nano X</td>
                                            <td>24547</td>
                                            <td>61</td>
                                            <td>46</td>
                                            <td>18</td>
                                            <td>
                                                <div id="tbl-chart-07"></div>
                                            </td>
                                            <td>76</td>
                                            <td>36</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-08.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Surface Laptop 2</td>
                                            <td>24548</td>
                                            <td>33</td>
                                            <td>56</td>
                                            <td>89</td>
                                            <td>
                                                <div id="tbl-chart-08"></div>
                                            </td>
                                            <td>38</td>
                                            <td>5</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-09.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>TIGI Bed Head Superstar Queen</td>
                                            <td>24549</td>
                                            <td>3</td>
                                            <td>9</td>
                                            <td>15</td>
                                            <td>
                                                <div id="tbl-chart-09"></div>
                                            </td>
                                            <td>6</td>
                                            <td>46</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-10.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Wattbike Atom</td>
                                            <td>24550</td>
                                            <td>61</td>
                                            <td>56</td>
                                            <td>68</td>
                                            <td>
                                                <div id="tbl-chart-10"></div>
                                            </td>
                                            <td>3</td>
                                            <td>19</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-11.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Smart Watch</td>
                                            <td>24551</td>
                                            <td>19</td>
                                            <td>76</td>
                                            <td>38</td>
                                            <td>
                                                <div id="tbl-chart-11"></div>
                                            </td>
                                            <td>3</td>
                                            <td>17</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-12.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Magic Bullet Blender</td>
                                            <td>24552</td>
                                            <td>12</td>
                                            <td>30</td>
                                            <td>14</td>
                                            <td>
                                                <div id="tbl-chart-12"></div>
                                            </td>
                                            <td>26</td>
                                            <td>9</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-13.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Kanana rucksack</td>
                                            <td>24553</td>
                                            <td>14</td>
                                            <td>65</td>
                                            <td>39</td>
                                            <td>
                                                <div id="tbl-chart-13"></div>
                                            </td>
                                            <td>9</td>
                                            <td>55</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-14.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Copic Opaque White</td>
                                            <td>24554</td>
                                            <td>43</td>
                                            <td>29</td>
                                            <td>75</td>
                                            <td>
                                                <div id="tbl-chart-14"></div>
                                            </td>
                                            <td>7</td>
                                            <td>15</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="py-0">
                                                <img src="{{ asset('theme/images/products/products-xs-15.jpg') }}" alt="Product Image">
                                            </td>
                                            <td>Headphones</td>
                                            <td>24555</td>
                                            <td>17</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>
                                                <div id="tbl-chart-15"></div>
                                            </td>
                                            <td>6</td>
                                            <td>98</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another
                                                            action</a>
                                                        <a class="dropdown-item" href="#">Something else
                                                            here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- Stock Modal --}}
                <div class="modal fade modal-stock" id="modal-stock" aria-labelledby="modal-stock"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <form action="#">
                            <div class="modal-content">
                                <div class="modal-header align-items-center p3 p-md-5">
                                    <h2 class="modal-title" id="exampleModalGridTitle">Add Stock</h2>
                                    <div>
                                        <button type="button" class="btn btn-light btn-pill mr-1 mr-md-2"
                                            data-dismiss="modal">
                                            cancel </button>
                                        <button type="submit" class="btn btn-primary  btn-pill"
                                            data-dismiss="modal">
                                            save </button>
                                    </div>

                                </div>
                                <div class="modal-body p3 p-md-5">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h3 class="h5 mb-5">Product Information</h3>
                                            <div class="form-group mb-5">
                                                <label for="new-product">Product Title</label>
                                                <input type="text" class="form-control" id="new-product"
                                                    placeholder="Add Product">
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="col">
                                                    <label for="price">Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">$</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="price"
                                                            placeholder="Price" aria-label="Price"
                                                            aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="sale-price">Sale Price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">$</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="sale-price"
                                                            placeholder="Sale Price" aria-label="SalePrice"
                                                            aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-type mb-3 ">
                                                <label class="d-block" for="sale-price">Product Type <i
                                                        class="mdi mdi-help-circle-outline"></i> </label>
                                                <div>

                                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                        <input type="radio" id="customRadio1" name="customRadio"
                                                            class="custom-control-input" checked="checked">
                                                        <label class="custom-control-label"
                                                            for="customRadio1">Physical
                                                            Good</label>
                                                    </div>

                                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Digital
                                                            Good</label>
                                                    </div>

                                                    <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
                                                        <input type="radio" id="customRadio3" name="customRadio"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="customRadio3">Service</label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="editor">
                                                <label class="d-block" for="sale-price">Description <i
                                                        class="mdi mdi-help-circle-outline"></i></label>
                                                <div id="standalone">
                                                    <div id="toolbar">
                                                        <span class="ql-formats">
                                                            <select class="ql-font"></select>
                                                            <select class="ql-size"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <select class="ql-color"></select>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-blockquote"></button>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-list" value="ordered"></button>
                                                            <button class="ql-list" value="bullet"></button>
                                                            <button class="ql-indent" value="-1"></button>
                                                            <button class="ql-indent" value="+1"></button>
                                                        </span>
                                                        <span class="ql-formats">
                                                            <button class="ql-direction" value="rtl"></button>
                                                            <select class="ql-align"></select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="editor"></div>

                                                <div class="custom-control custom-checkbox d-inline-block mt-2">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Hide
                                                        product from published site</label>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    placeholder="please imgae here">
                                                <span class="upload-image">Click here to <span
                                                        class="text-primary">add
                                                        product
                                                        image.</span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('theme.Layout.footer')

    </div>
    </div>

    {{-- Card Offcanvas --}}
    <div class="card card-offcanvas" id="contact-off">
        <div class="card-header">
            <h2>Contacts</h2>
            <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
        </div>
        <div class="card-body">

            <div class="mb-4">
                <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
                    placeholder="Search contacts...">
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-01.jpg') }}" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span class="discribe">Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-02.jpg') }}" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Walter Reuter</span>
                        <span>Developer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-03.jpg') }}" alt="User Image">
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Larissa Gebhardt</span>
                        <span>Cyber Punk</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-04.jpg') }}" alt="User Image">
                    </a>

                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Albrecht Straub</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-05.jpg') }}" alt="User Image">
                        <span class="active bg-danger"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Leopold Ebert</span>
                        <span>Fashion Designer</span>
                    </a>
                </div>
            </div>

            <div class="media media-sm">
                <div class="media-sm-wrapper">
                    <a href="user-profile.html">
                        <img src="{{ asset('theme/images/user/user-sm-06.jpg') }}" alt="User Image">
                        <span class="active bg-primary"></span>
                    </a>
                </div>
                <div class="media-body">
                    <a href="user-profile.html">
                        <span class="title">Selena Wagner</span>
                        <span>Photographer</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

    <script src="{{ asset('theme/plugins/apexcharts/apexcharts.js') }}"></script>

    <script src="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>

    <script src="{{ asset('theme/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });
    </script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script src="{{ asset('theme/plugins/toaster/toastr.min.js') }}"></script>

    <script src="{{ asset('theme/js/mono.js') }}"></script>
    <script src="{{ asset('theme/js/chart.js') }}"></script>
    <script src="{{ asset('theme/js/map.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>

</body>

</html>
