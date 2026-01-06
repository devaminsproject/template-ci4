<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= isset($title) ? $title : 'Limitless - Responsive Web Application Kit by Eugene Kopyov'; ?></title>

    <!-- Global stylesheets -->
    <link href="<?= base_url('assets/bo/fonts/inter/inter.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/icons/phosphor/styles.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/css/ltr/all.min.css'); ?>" id="stylesheet" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/bo/css/icons/icomoon/styles.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url('assets/bo/demo/demo_configurator.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/main/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/main/bootstrap.bundle.min.js'); ?>"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <!-- PAGES -->
    <script src="<?= base_url('assets/bo/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/streamgraph.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/sparklines.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/lines.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/areas.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/donuts.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/bars.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/progress.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/heatmaps.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/pies.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/charts/pages/dashboard/bullets.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/demo_pages/navigation_horizontal_mega.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/sidebar_components.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/demo/pages/navbar_components.js'); ?>"></script>


    <!-- VENDOR -->
    <script src="<?= base_url('assets/bo/js/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/selects/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/selects/bootstrap_multiselect.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/forms/inputs/dual_listbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/datepicker.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/dragula.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/media/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/trees/fancytree_all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/sliders/nouislider.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/color/spectrum.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/moment/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/pickers/daterangepicker.js'); ?>"></script>

    <script src="<?= base_url('assets/bo/js/vendor/visualization/d3/d3.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/visualization/d3/d3_tooltip.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/plugins/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/vendor/ui/prism.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bo/js/plugins/ui/slinky.min.js'); ?>"></script>
    <!-- /theme JS files -->

</head>

<body>

    <?php if ((isset($multipleNavbar) ? $multipleNavbar : 1) == 0) { ?>

        <div class="<?= isset($navbar) ? $navbar : 'navbar-static'; ?>">
            <!-- Main navbar -->
            <div class="navbar navbar-dark navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="d-flex d-lg-none me-2">
                        <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                            <i class="ph-list"></i>
                        </button>
                    </div>

                    <div class="navbar-brand flex-1 flex-lg-0">
                        <a href="index.html" class="d-inline-flex align-items-center">
                            <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="" />
                            <img src="<?= base_url('assets/bo/images/logo_text_light.svg'); ?>" class="d-none d-sm-inline-block h-16px ms-3" alt="" />
                        </a>
                    </div>

                    <ul class="nav flex-row">
                        <li class="nav-item d-lg-none">
                            <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                                <i class="ph-magnifying-glass"></i>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
                                <i class="ph-squares-four"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0">
                                <div class="d-flex align-items-center border-bottom p-3">
                                    <h6 class="mb-0">Browse apps</h6>
                                    <a href="#" class="ms-auto">
                                        View all
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>

                                <div class="row row-cols-1 row-cols-sm-2 g-0">
                                    <div class="col">
                                        <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3">
                                            <div>
                                                <img src="<?= base_url('assets/bo/images/demo/logos/1.svg'); ?>" class="h-40px mb-2" alt="" />
                                                <div class="fw-semibold my-1">Customer data platform</div>
                                                <div class="text-muted">Unify customer data from multiple sources</div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-bottom p-3">
                                            <div>
                                                <img src="<?= base_url('assets/bo/images/demo/logos/2.svg'); ?>" class="h-40px mb-2" alt="" />
                                                <div class="fw-semibold my-1">Data catalog</div>
                                                <div class="text-muted">Discover, inventory, and organize data assets</div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3">
                                            <div>
                                                <img src="<?= base_url('assets/bo/images/demo/logos/3.svg'); ?>" class="h-40px mb-2" alt="" />
                                                <div class="fw-semibold my-1">Data governance</div>
                                                <div class="text-muted">The collaboration hub and data marketplace</div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="col">
                                        <button type="button" class="dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3">
                                            <div>
                                                <img src="<?= base_url('assets/bo/images/demo/logos/4.svg'); ?>" class="h-40px mb-2" alt="" />
                                                <div class="fw-semibold my-1">Data privacy</div>
                                                <div class="text-muted">Automated provisioning of non-production datasets</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ph-chats"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                            </a>

                            <div class="dropdown-menu wmin-lg-400 p-0">
                                <div class="d-flex align-items-center p-3">
                                    <h6 class="mb-0">Messages</h6>
                                    <div class="ms-auto">
                                        <a href="#" class="text-body">
                                            <i class="ph-plus-circle"></i>
                                        </a>
                                        <a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
                                            <i class="ph-magnifying-glass"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="search_messages">
                                    <div class="px-3 mb-2">
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" class="form-control" placeholder="Search messages" />
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-magnifying-glass"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-menu-scrollable pb-2">
                                    <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                        <div class="status-indicator-container me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face10.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                            <span class="status-indicator bg-warning"></span>
                                        </div>

                                        <div class="flex-1">
                                            <span class="fw-semibold">James Alexander</span>
                                            <span class="text-muted float-end fs-sm">04:58</span>
                                            <div class="text-muted">who knows, maybe that would be the best thing for me...</div>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                        <div class="status-indicator-container me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                            <span class="status-indicator bg-success"></span>
                                        </div>

                                        <div class="flex-1">
                                            <span class="fw-semibold">Margo Baker</span>
                                            <span class="text-muted float-end fs-sm">12:16</span>
                                            <div class="text-muted">That was something he was unable to do because...</div>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                        <div class="status-indicator-container me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                            <span class="status-indicator bg-success"></span>
                                        </div>
                                        <div class="flex-1">
                                            <span class="fw-semibold">Jeremy Victorino</span>
                                            <span class="text-muted float-end fs-sm">22:48</span>
                                            <div class="text-muted">But that would be extremely strained and suspicious...</div>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                        <div class="status-indicator-container me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face4.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                            <span class="status-indicator bg-grey"></span>
                                        </div>
                                        <div class="flex-1">
                                            <span class="fw-semibold">Beatrix Diaz</span>
                                            <span class="text-muted float-end fs-sm">Tue</span>
                                            <div class="text-muted">What a strenuous career it is that I've chosen...</div>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                        <div class="status-indicator-container me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face25.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                            <span class="status-indicator bg-danger"></span>
                                        </div>
                                        <div class="flex-1">
                                            <span class="fw-semibold">Richard Vango</span>
                                            <span class="text-muted float-end fs-sm">Mon</span>
                                            <div class="text-muted">Other travelling salesmen live a life of luxury...</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="d-flex border-top py-2 px-3">
                                    <a href="#" class="text-body">
                                        <i class="ph-checks me-1"></i>
                                        Dismiss all
                                    </a>
                                    <a href="#" class="text-body ms-auto">
                                        View all
                                        <i class="ph-arrow-circle-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
                        <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                            <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                                <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search" data-bs-toggle="dropdown" />
                                <div class="form-control-feedback-icon">
                                    <i class="ph-magnifying-glass"></i>
                                </div>
                                <div class="dropdown-menu w-100" data-color-theme="light">
                                    <button type="button" class="dropdown-item">
                                        <div class="text-center w-32px me-3">
                                            <i class="ph-magnifying-glass"></i>
                                        </div>
                                        <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                                    </button>

                                    <div class="dropdown-divider"></div>

                                    <div class="dropdown-menu-scrollable-lg">
                                        <div class="dropdown-header">
                                            Contacts
                                            <a href="#" class="float-end">
                                                See all
                                                <i class="ph-arrow-circle-right ms-1"></i>
                                            </a>
                                        </div>

                                        <div class="dropdown-item cursor-pointer">
                                            <div class="me-3">
                                                <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                            </div>

                                            <div class="d-flex flex-column flex-grow-1">
                                                <div class="fw-semibold">Christ<mark>in</mark>e Johnson</div>
                                                <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                            </div>

                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body ms-2">
                                                    <i class="ph-user-circle"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="dropdown-item cursor-pointer">
                                            <div class="me-3">
                                                <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                            </div>

                                            <div class="d-flex flex-column flex-grow-1">
                                                <div class="fw-semibold">Cl<mark>in</mark>ton Sparks</div>
                                                <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                            </div>

                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body ms-2">
                                                    <i class="ph-user-circle"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <div class="dropdown-header">
                                            Clients
                                            <a href="#" class="float-end">
                                                See all
                                                <i class="ph-arrow-circle-right ms-1"></i>
                                            </a>
                                        </div>

                                        <div class="dropdown-item cursor-pointer">
                                            <div class="me-3">
                                                <img src="<?= base_url('assets/bo/images/brands/adobe.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                            </div>

                                            <div class="d-flex flex-column flex-grow-1">
                                                <div class="fw-semibold">Adobe <mark>In</mark>c.</div>
                                                <span class="fs-sm text-muted">Enterprise license</span>
                                            </div>

                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body ms-2">
                                                    <i class="ph-briefcase"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="dropdown-item cursor-pointer">
                                            <div class="me-3">
                                                <img src="<?= base_url('assets/bo/images/brands/holiday-inn.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                            </div>

                                            <div class="d-flex flex-column flex-grow-1">
                                                <div class="fw-semibold">Holiday-<mark>In</mark>n</div>
                                                <span class="fs-sm text-muted">On-premise license</span>
                                            </div>

                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body ms-2">
                                                    <i class="ph-briefcase"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="dropdown-item cursor-pointer">
                                            <div class="me-3">
                                                <img src="<?= base_url('assets/bo/images/brands/ing.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                            </div>

                                            <div class="d-flex flex-column flex-grow-1">
                                                <div class="fw-semibold"><mark>IN</mark>G Group</div>
                                                <span class="fs-sm text-muted">Perpetual license</span>
                                            </div>

                                            <div class="d-inline-flex">
                                                <a href="#" class="text-body ms-2">
                                                    <i class="ph-briefcase"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <i class="ph-faders-horizontal"></i>
                                </a>

                                <div class="dropdown-menu w-100 p-3">
                                    <div class="d-flex align-items-center mb-3">
                                        <h6 class="mb-0">Search options</h6>
                                        <a href="#" class="text-body rounded-pill ms-auto">
                                            <i class="ph-clock-counter-clockwise"></i>
                                        </a>
                                    </div>

                                    <div class="mb-3">
                                        <label class="d-block form-label">Category</label>
                                        <label class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" checked />
                                            <span class="form-check-label">Invoices</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Files</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" />
                                            <span class="form-check-label">Users</span>
                                        </label>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Addition</label>
                                        <div class="input-group">
                                            <select class="form-select w-auto flex-grow-0">
                                                <option value="1" selected>has</option>
                                                <option value="2">has not</option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="Enter the word(s)" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <div class="input-group">
                                            <select class="form-select w-auto flex-grow-0">
                                                <option value="1" selected>is</option>
                                                <option value="2">is not</option>
                                            </select>
                                            <select class="form-select">
                                                <option value="1" selected>Active</option>
                                                <option value="2">Inactive</option>
                                                <option value="3">New</option>
                                                <option value="4">Expired</option>
                                                <option value="5">Pending</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <button type="button" class="btn btn-light">Reset</button>

                                        <div class="ms-auto">
                                            <button type="button" class="btn btn-light">Cancel</button>
                                            <button type="button" class="btn btn-primary ms-2">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                        <li class="nav-item ms-lg-2">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                                <i class="ph-bell"></i>
                                <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                            </a>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                            <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                                <div class="status-indicator-container">
                                    <img src="<?= base_url('assets/bo/images/demo/users/face11.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                    <span class="status-indicator bg-success"></span>
                                </div>
                                <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-user-circle me-2"></i>
                                    My profile
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-currency-circle-dollar me-2"></i>
                                    My subscription
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shopping-cart me-2"></i>
                                    My orders
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-envelope-open me-2"></i>
                                    My inbox
                                    <span class="badge bg-primary rounded-pill ms-auto">26</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    Account settings
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-sign-out me-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /main navbar -->

            <!-- Alternative navbar -->
            <div class="navbar navbar-sm border-bottom">
                <div class="container-fluid">
                    <ul class="nav align-items-center">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-branch"></i>
                                    <span class="d-none d-md-inline-block ms-2">Branches</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-merge"></i>
                                    <span class="d-none d-md-inline-block ms-2">Merges</span>
                                    <span class="badge bg-yellow text-black rounded-pill ms-1 ms-md-2">5</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ms-1">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-pull-request"></i>
                                    <span class="d-none d-md-inline-block ms-2">Pull Requests</span>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav align-items-center">
                        <li class="nav-item">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded">
                                <div class="d-flex align-items-center mx-md-1">
                                    <i class="ph-git-fork"></i>
                                    <span class="d-none d-md-inline-block ms-2">Repositories</span>
                                    <span class="badge bg-yellow text-black rounded-pill ms-1 ms-md-2">28</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /alternative navbar -->

        </div>

    <?php } else { ?>

        <!-- Main navbar -->
        <div class="navbar navbar-dark navbar-expand-lg <?= isset($navbar) ? $navbar : 'navbar-static'; ?>">
            <div class="container-fluid">
                <div class="d-flex d-lg-none me-2">
                    <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                        <i class="ph-list"></i>
                    </button>
                </div>

                <div class="navbar-brand flex-1 flex-lg-0">
                    <a href="index.html" class="d-inline-flex align-items-center">
                        <img src="<?= base_url('assets/bo/images/logo_icon.svg'); ?>" alt="" />
                        <img src="<?= base_url('assets/bo/images/logo_text_light.svg'); ?>" class="d-none d-sm-inline-block h-16px ms-3" alt="" />
                    </a>
                </div>

                <ul class="nav flex-row">
                    <li class="nav-item d-lg-none">
                        <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                            <i class="ph-magnifying-glass"></i>
                        </a>
                    </li>

                    <li class="nav-item nav-item-dropdown-lg dropdown">
                        <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
                            <i class="ph-squares-four"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0">
                            <div class="d-flex align-items-center border-bottom p-3">
                                <h6 class="mb-0">Browse apps</h6>
                                <a href="#" class="ms-auto">
                                    View all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="row row-cols-1 row-cols-sm-2 g-0">
                                <div class="col">
                                    <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3">
                                        <div>
                                            <img src="<?= base_url('assets/bo/images/demo/logos/1.svg'); ?>" class="h-40px mb-2" alt="" />
                                            <div class="fw-semibold my-1">Customer data platform</div>
                                            <div class="text-muted">Unify customer data from multiple sources</div>
                                        </div>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-bottom p-3">
                                        <div>
                                            <img src="<?= base_url('assets/bo/images/demo/logos/2.svg'); ?>" class="h-40px mb-2" alt="" />
                                            <div class="fw-semibold my-1">Data catalog</div>
                                            <div class="text-muted">Discover, inventory, and organize data assets</div>
                                        </div>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3">
                                        <div>
                                            <img src="<?= base_url('assets/bo/images/demo/logos/3.svg'); ?>" class="h-40px mb-2" alt="" />
                                            <div class="fw-semibold my-1">Data governance</div>
                                            <div class="text-muted">The collaboration hub and data marketplace</div>
                                        </div>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3">
                                        <div>
                                            <img src="<?= base_url('assets/bo/images/demo/logos/4.svg'); ?>" class="h-40px mb-2" alt="" />
                                            <div class="fw-semibold my-1">Data privacy</div>
                                            <div class="text-muted">Automated provisioning of non-production datasets</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                        <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <i class="ph-chats"></i>
                            <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">8</span>
                        </a>

                        <div class="dropdown-menu wmin-lg-400 p-0">
                            <div class="d-flex align-items-center p-3">
                                <h6 class="mb-0">Messages</h6>
                                <div class="ms-auto">
                                    <a href="#" class="text-body">
                                        <i class="ph-plus-circle"></i>
                                    </a>
                                    <a href="#search_messages" class="collapsed text-body ms-2" data-bs-toggle="collapse">
                                        <i class="ph-magnifying-glass"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="collapse" id="search_messages">
                                <div class="px-3 mb-2">
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="Search messages" />
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-magnifying-glass"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-menu-scrollable pb-2">
                                <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                    <div class="status-indicator-container me-3">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face10.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                        <span class="status-indicator bg-warning"></span>
                                    </div>

                                    <div class="flex-1">
                                        <span class="fw-semibold">James Alexander</span>
                                        <span class="text-muted float-end fs-sm">04:58</span>
                                        <div class="text-muted">who knows, maybe that would be the best thing for me...</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                    <div class="status-indicator-container me-3">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                        <span class="status-indicator bg-success"></span>
                                    </div>

                                    <div class="flex-1">
                                        <span class="fw-semibold">Margo Baker</span>
                                        <span class="text-muted float-end fs-sm">12:16</span>
                                        <div class="text-muted">That was something he was unable to do because...</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                    <div class="status-indicator-container me-3">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                        <span class="status-indicator bg-success"></span>
                                    </div>
                                    <div class="flex-1">
                                        <span class="fw-semibold">Jeremy Victorino</span>
                                        <span class="text-muted float-end fs-sm">22:48</span>
                                        <div class="text-muted">But that would be extremely strained and suspicious...</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                    <div class="status-indicator-container me-3">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face4.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                        <span class="status-indicator bg-grey"></span>
                                    </div>
                                    <div class="flex-1">
                                        <span class="fw-semibold">Beatrix Diaz</span>
                                        <span class="text-muted float-end fs-sm">Tue</span>
                                        <div class="text-muted">What a strenuous career it is that I've chosen...</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item align-items-start text-wrap py-2">
                                    <div class="status-indicator-container me-3">
                                        <img src="<?= base_url('assets/bo/images/demo/users/face25.jpg'); ?>" class="w-40px h-40px rounded-pill" alt="" />
                                        <span class="status-indicator bg-danger"></span>
                                    </div>
                                    <div class="flex-1">
                                        <span class="fw-semibold">Richard Vango</span>
                                        <span class="text-muted float-end fs-sm">Mon</span>
                                        <div class="text-muted">Other travelling salesmen live a life of luxury...</div>
                                    </div>
                                </a>
                            </div>

                            <div class="d-flex border-top py-2 px-3">
                                <a href="#" class="text-body">
                                    <i class="ph-checks me-1"></i>
                                    Dismiss all
                                </a>
                                <a href="#" class="text-body ms-auto">
                                    View all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
                    <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                        <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                            <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search" data-bs-toggle="dropdown" />
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                            <div class="dropdown-menu w-100" data-color-theme="light">
                                <button type="button" class="dropdown-item">
                                    <div class="text-center w-32px me-3">
                                        <i class="ph-magnifying-glass"></i>
                                    </div>
                                    <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                                </button>

                                <div class="dropdown-divider"></div>

                                <div class="dropdown-menu-scrollable-lg">
                                    <div class="dropdown-header">
                                        Contacts
                                        <a href="#" class="float-end">
                                            See all
                                            <i class="ph-arrow-circle-right ms-1"></i>
                                        </a>
                                    </div>

                                    <div class="dropdown-item cursor-pointer">
                                        <div class="me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="fw-semibold">Christ<mark>in</mark>e Johnson</div>
                                            <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                        </div>

                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-user-circle"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-item cursor-pointer">
                                        <div class="me-3">
                                            <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="fw-semibold">Cl<mark>in</mark>ton Sparks</div>
                                            <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                        </div>

                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-user-circle"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider"></div>

                                    <div class="dropdown-header">
                                        Clients
                                        <a href="#" class="float-end">
                                            See all
                                            <i class="ph-arrow-circle-right ms-1"></i>
                                        </a>
                                    </div>

                                    <div class="dropdown-item cursor-pointer">
                                        <div class="me-3">
                                            <img src="<?= base_url('assets/bo/images/brands/adobe.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="fw-semibold">Adobe <mark>In</mark>c.</div>
                                            <span class="fs-sm text-muted">Enterprise license</span>
                                        </div>

                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-briefcase"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-item cursor-pointer">
                                        <div class="me-3">
                                            <img src="<?= base_url('assets/bo/images/brands/holiday-inn.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="fw-semibold">Holiday-<mark>In</mark>n</div>
                                            <span class="fs-sm text-muted">On-premise license</span>
                                        </div>

                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-briefcase"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dropdown-item cursor-pointer">
                                        <div class="me-3">
                                            <img src="<?= base_url('assets/bo/images/brands/ing.svg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1">
                                            <div class="fw-semibold"><mark>IN</mark>G Group</div>
                                            <span class="fs-sm text-muted">Perpetual license</span>
                                        </div>

                                        <div class="d-inline-flex">
                                            <a href="#" class="text-body ms-2">
                                                <i class="ph-briefcase"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="ph-faders-horizontal"></i>
                            </a>

                            <div class="dropdown-menu w-100 p-3">
                                <div class="d-flex align-items-center mb-3">
                                    <h6 class="mb-0">Search options</h6>
                                    <a href="#" class="text-body rounded-pill ms-auto">
                                        <i class="ph-clock-counter-clockwise"></i>
                                    </a>
                                </div>

                                <div class="mb-3">
                                    <label class="d-block form-label">Category</label>
                                    <label class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" checked />
                                        <span class="form-check-label">Invoices</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">Files</span>
                                    </label>
                                    <label class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" />
                                        <span class="form-check-label">Users</span>
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Addition</label>
                                    <div class="input-group">
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>has</option>
                                            <option value="2">has not</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Enter the word(s)" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <div class="input-group">
                                        <select class="form-select w-auto flex-grow-0">
                                            <option value="1" selected>is</option>
                                            <option value="2">is not</option>
                                        </select>
                                        <select class="form-select">
                                            <option value="1" selected>Active</option>
                                            <option value="2">Inactive</option>
                                            <option value="3">New</option>
                                            <option value="4">Expired</option>
                                            <option value="5">Pending</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <button type="button" class="btn btn-light">Reset</button>

                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-light">Cancel</button>
                                        <button type="button" class="btn btn-primary ms-2">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="nav flex-row justify-content-end order-1 order-lg-2">
                    <li class="nav-item ms-lg-2">
                        <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                            <i class="ph-bell"></i>
                            <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                        </a>
                    </li>

                    <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                        <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                            <div class="status-indicator-container">
                                <img src="<?= base_url('assets/bo/images/demo/users/face11.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                                <span class="status-indicator bg-success"></span>
                            </div>
                            <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <i class="ph-user-circle me-2"></i>
                                My profile
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-currency-circle-dollar me-2"></i>
                                My subscription
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-shopping-cart me-2"></i>
                                My orders
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-envelope-open me-2"></i>
                                My inbox
                                <span class="badge bg-primary rounded-pill ms-auto">26</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="ph-gear me-2"></i>
                                Account settings
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="ph-sign-out me-2"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->

        <!-- Breadcrumbs -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="#" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active"><?= isset($title) ? $title : ''; ?></span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                    <div class="d-lg-flex mb-2 mb-lg-0">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2" data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /breadcrumbs -->
    <?php } ?>

    <!-- Page header -->
    <div class="page-header <?= ((isset($multipleNavbar) ? $multipleNavbar : 1) == 0) ? 'mt-5' : ''; ?>">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">Home - <span class="fw-normal"><?= isset($title) ? $title : ''; ?></span></h4>

                <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>

            <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
                <div class="d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3">
                    <div class="dropdown w-100 w-sm-auto">
                        <a href="#" class="d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2" data-bs-toggle="dropdown" data-bs-display="static">
                            <img src="<?= base_url('assets/bo/images/brands/tesla.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                            <div class="me-auto me-lg-1">
                                <div class="fs-sm text-muted mb-1">Customer</div>
                                <div class="fw-semibold">Tesla Motors Inc</div>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0">
                            <div class="d-flex align-items-center p-3">
                                <h6 class="fw-semibold mb-0">Customers</h6>
                                <a href="#" class="ms-auto">
                                    View all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>
                            <a href="#" class="dropdown-item active py-2">
                                <img src="<?= base_url('assets/bo/images/brands/tesla.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Tesla Motors Inc</div>
                                    <div class="fs-sm text-muted">42 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/debijenkorf.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">De Bijenkorf</div>
                                    <div class="fs-sm text-muted">49 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/klm.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Royal Dutch Airlines</div>
                                    <div class="fs-sm text-muted">18 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/shell.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">Royal Dutch Shell</div>
                                    <div class="fs-sm text-muted">54 users</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item py-2">
                                <img src="<?= base_url('assets/bo/images/brands/bp.svg'); ?>" class="w-32px h-32px me-2" alt="" />
                                <div>
                                    <div class="fw-semibold">BP plc</div>
                                    <div class="fs-sm text-muted">23 users</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="vr d-none d-sm-block flex-shrink-0 my-2 mx-3"></div>

                    <div class="d-inline-flex mt-3 mt-sm-0">
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face24.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-warning"></span>
                        </a>
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face1.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-success"></span>
                        </a>
                        <a href="#" class="status-indicator-container ms-1">
                            <img src="<?= base_url('assets/bo/images/demo/users/face3.jpg'); ?>" class="w-32px h-32px rounded-pill" alt="" />
                            <span class="status-indicator bg-danger"></span>
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3">
                            <i class="ph-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Page content -->
    <div class="page-content pt-0">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main sidebar-expand-lg align-self-start <?= isset($sidebar) ? $sidebar : ''; ?>">
            <!-- Sidebar content -->
            <div class="sidebar-content">
                <!-- Sidebar header -->
                <div class="sidebar-section">
                    <div class="sidebar-section-body d-flex justify-content-center">
                        <h5 class="sidebar-resize-hide flex-grow-1 my-auto">Navigation</h5>

                        <div>
                            <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                                <i class="ph-arrows-left-right"></i>
                            </button>

                            <button type="button" class="btn btn-light btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                                <i class="ph-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /sidebar header -->

                <!-- Main navigation -->
                <div class="sidebar-section">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                        <li class="nav-item-header pt-0">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>" class="nav-link <?= isset($active_dashboard) ? $active_dashboard : ''; ?>">
                                <i class="ph-house"></i>
                                <span>
                                    Dashboard
                                    <span class="d-block fw-normal text-body opacity-50">No pending orders</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-swatches"></i>
                                <span>Themes</span>
                            </a>
                            <ul class="nav-group-sub collapse" data-submenu-title="Themes">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
                                <li class="nav-item">
                                    <a href="../../../LTR/material/full/index.html" class="nav-link disabled">Material <span class="opacity-75 fs-sm ms-auto">Coming soon</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="opacity-75 fs-sm ms-auto">Coming soon</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">
                                <i class="ph-note-blank"></i>
                                <span>Starter kit</span>
                            </a>
                            <ul class="nav-group-sub collapse" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_navbar'); ?>" class="nav-link <?= isset($active_fixedNavbar) ? $active_fixedNavbar : ''; ?>">Fixed navbar</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Hideable navbar</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/noHeader_navbar'); ?>" class="nav-link <?= isset($active_noHeaderNavbar) ? $active_noHeaderNavbar : ''; ?>">No header</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/noFooter_navbar'); ?>" class="nav-link <?= isset($active_noFooterNavbar) ? $active_noFooterNavbar : ''; ?>">No footer</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_footer'); ?>" class="nav-link <?= isset($active_fixedFooter) ? $active_fixedFooter : ''; ?>">Fixed footer</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/2sidebar_1side'); ?>" class="nav-link <?= isset($active_2sidebar1side) ? $active_2sidebar1side : ''; ?>">2 sidebars on 1 side</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/2sidebar_2side'); ?>" class="nav-link <?= isset($active_2sidebar2side) ? $active_2sidebar2side : ''; ?>">2 sidebars on 2 sides</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/3sidebar'); ?>" class="nav-link <?= isset($active_3sidebar) ? $active_3sidebar : ''; ?>">3 sidebars</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/boxed_page'); ?>" class="nav-link <?= isset($active_boxedPage) ? $active_boxedPage : ''; ?>">Boxed page</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/boxed_content'); ?>" class="nav-link <?= isset($active_boxedContent) ? $active_boxedContent : ''; ?>">Boxed content</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= base_url('other_changelog'); ?>" class="nav-link">
                                <i class="ph-list-numbers"></i>
                                <span>Changelog</span>
                                <span class="badge bg-primary align-self-center rounded-pill ms-auto">4.0</span>
                            </a>
                        </li> -->

                        <!-- Layout -->
                        <li class="nav-item-header">
                            <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Layout</div>
                            <i class="ph-dots-three sidebar-resize-show"></i>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_layout) ? $open_layout : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-layout"></i>
                                <span>Page layouts</span>
                            </a>

                            <ul class="nav-group-sub collapse <?= isset($show_layout) ? $show_layout : ''; ?>" data-submenu-title="Page layouts">
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_navbar'); ?>" class="nav-link <?= isset($active_fixedNavbar) ? $active_fixedNavbar : ''; ?>">Fixed navbar</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/hideable_navbar'); ?>" class="nav-link <?= isset($active_hideableNavbar) ? $active_hideableNavbar : ''; ?>">Hideable navbar</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/noHeader_navbar'); ?>" class="nav-link <?= isset($active_noHeaderNavbar) ? $active_noHeaderNavbar : ''; ?>">No header</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/noFooter_navbar'); ?>" class="nav-link <?= isset($active_noFooterNavbar) ? $active_noFooterNavbar : ''; ?>">No footer</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/fixed_footer'); ?>" class="nav-link <?= isset($active_fixedFooter) ? $active_fixedFooter : ''; ?>">Fixed footer</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/2sidebar_1side'); ?>" class="nav-link <?= isset($active_2sidebar1side) ? $active_2sidebar1side : ''; ?>">2 sidebars on 1 side</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/2sidebar_2side'); ?>" class="nav-link <?= isset($active_2sidebar2side) ? $active_2sidebar2side : ''; ?>">2 sidebars on 2 sides</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/3sidebar'); ?>" class="nav-link <?= isset($active_3sidebar) ? $active_3sidebar : ''; ?>">3 sidebars</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('layout/boxed_page'); ?>" class="nav-link <?= isset($active_boxedPage) ? $active_boxedPage : ''; ?>">Boxed page</a></li>
                                <li class="nav-item"><a href="<?= base_url('layout/boxed_content'); ?>" class="nav-link <?= isset($active_boxedContent) ? $active_boxedContent : ''; ?>">Boxed content</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_sidebar) ? $open_sidebar : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-columns"></i>
                                <span>Sidebars</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_sidebar) ? $show_sidebar : ''; ?>" data-submenu-title="Sidebars">
                                <li class="nav-item nav-item-submenu <?= isset($open_sidebar_secondMain) ? $open_sidebar_secondMain : ''; ?>">
                                    <a href="#" class="nav-link">Main sidebar</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_sidebar_secondMain) ? $show_sidebar_secondMain : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_resizable'); ?>" class="nav-link <?= isset($active_sidebarDefaultResizable) ? $active_sidebarDefaultResizable : ''; ?>">Resizable</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_resized'); ?>" class="nav-link <?= isset($active_sidebarDefaultResized) ? $active_sidebarDefaultResized : ''; ?>">Resized</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_hideable'); ?>" class="nav-link <?= isset($active_sidebarDefaultHideable) ? $active_sidebarDefaultHideable : ''; ?>">Hideable</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_hidden'); ?>" class="nav-link <?= isset($active_sidebarDefaultHidden) ? $active_sidebarDefaultHidden : ''; ?>">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_stretched'); ?>" class="nav-link <?= isset($active_sidebarDefaultStretched) ? $active_sidebarDefaultStretched : ''; ?>">Stretched</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_default_color_dark'); ?>" class="nav-link <?= isset($active_sidebarDefaultColorDark) ? $active_sidebarDefaultColorDark : ''; ?>">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?= isset($open_sidebar_secondSec) ? $open_sidebar_secondSec : ''; ?>">
                                    <a href="#" class="nav-link">Secondary sidebar</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_sidebar_secondSec) ? $show_sidebar_secondSec : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_secondary_hideable'); ?>" class="nav-link <?= isset($active_sidebarSecondaryHideable) ? $active_sidebarSecondaryHideable : ''; ?>">Hideable</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_secondary_hidden'); ?>" class="nav-link <?= isset($active_sidebarSecondaryHidden) ? $active_sidebarSecondaryHidden : ''; ?>">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_secondary_stretched'); ?>" class="nav-link <?= isset($active_sidebarSecondaryStretched) ? $active_sidebarSecondaryStretched : ''; ?>">Stretched</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_secondary_color_dark'); ?>" class="nav-link <?= isset($active_sidebarSecondaryColorDark) ? $active_sidebarSecondaryColorDark : ''; ?>">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?= isset($open_sidebar_secondRight) ? $open_sidebar_secondRight : ''; ?>">
                                    <a href="#" class="nav-link">Right sidebar</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_sidebar_secondRight) ? $show_sidebar_secondRight : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_right_hideable'); ?>" class="nav-link <?= isset($active_sidebarRightHideable) ? $active_sidebarRightHideable : ''; ?>">Hideable</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_right_hidden'); ?>" class="nav-link <?= isset($active_sidebarRightHidden) ? $active_sidebarRightHidden : ''; ?>">Hidden</a></li>
                                        <li class="nav-item-divider"></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_right_stretched'); ?>" class="nav-link <?= isset($active_sidebarRightStretched) ? $active_sidebarRightStretched : ''; ?>">Stretched</a></li>
                                        <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_right_color_dark'); ?>" class="nav-link <?= isset($active_sidebarRightColorDark) ? $active_sidebarRightColorDark : ''; ?>">Dark color</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('sidebar/sidebar_components'); ?>" class="nav-link <?= isset($active_sidebarComponents) ? $active_sidebarComponents : ''; ?>">Sidebar components</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_navbar) ? $open_navbar : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-rows"></i>
                                <span>Navbars</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_navbar) ? $show_navbar : ''; ?>" data-submenu-title="Navbars">
                                <li class="nav-item nav-item-submenu <?= isset($open_navbar_secondSingle) ? $open_navbar_secondSingle : ''; ?>">
                                    <a href="#" class="nav-link">Single navbar</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_navbar_secondSingle) ? $show_navbar_secondSingle : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_single_top_static'); ?>" class="nav-link <?= isset($active_navbarSingleTopStatic) ? $active_navbarSingleTopStatic : ''; ?>">Top static</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_single_top_fixed'); ?>" class="nav-link <?= isset($active_navbarSingleTopFixed) ? $active_navbarSingleTopFixed : ''; ?>">Top fixed</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_single_bottom_static'); ?>" class="nav-link <?= isset($active_navbarSingleBottomStatic) ? $active_navbarSingleBottomStatic : ''; ?>">Bottom static</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_single_bottom_fixed'); ?>" class="nav-link <?= isset($active_navbarSingleBottomFixed) ? $active_navbarSingleBottomFixed : ''; ?>">Bottom fixed</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?= isset($open_navbar_secondMultiple) ? $open_navbar_secondMultiple : ''; ?>">
                                    <a href="#" class="nav-link">Multiple navbars</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_navbar_secondMultiple) ? $show_navbar_secondMultiple : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_top_static'); ?>" class="nav-link <?= isset($active_navbarMultipleTopStatic) ? $active_navbarMultipleTopStatic : ''; ?>">Top static</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_top_fixed'); ?>" class="nav-link <?= isset($active_navbarMultipleTopFixed) ? $active_navbarMultipleTopFixed : ''; ?>">Top fixed</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_bottom_static'); ?>" class="nav-link <?= isset($active_navbarMultipleBottomStatic) ? $active_navbarMultipleBottomStatic : ''; ?>">Bottom static</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_bottom_fixed'); ?>" class="nav-link <?= isset($active_navbarMultipleBottomFixed) ? $active_navbarMultipleBottomFixed : ''; ?>">Bottom fixed</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_top_bottom_fixed'); ?>" class="nav-link <?= isset($active_navbarMultipleTopBottomFixed) ? $active_navbarMultipleTopBottomFixed : ''; ?>">Top and bottom fixed</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_multiple_secondary_sticky'); ?>" class="nav-link <?= isset($active_navbarMultipleSecondarySticky) ? $active_navbarMultipleSecondarySticky : ''; ?>">Secondary sticky</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu <?= isset($open_navbar_secondContent) ? $open_navbar_secondContent : ''; ?>">
                                    <a href="#" class="nav-link">Content navbar</a>
                                    <ul class="nav-group-sub collapse <?= isset($show_navbar_secondContent) ? $show_navbar_secondContent : ''; ?>">
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_component_single'); ?>" class="nav-link <?= isset($active_navbarComponentSingle) ? $active_navbarComponentSingle : ''; ?>">Single navbar</a></li>
                                        <li class="nav-item"><a href="<?= base_url('navbar/navbar_component_multiple'); ?>" class="nav-link <?= isset($active_navbarComponentMultiple) ? $active_navbarComponentMultiple : ''; ?>">Multiple navbars</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="<?= base_url('navbar/navbar_colors'); ?>" class="nav-link <?= isset($active_navbarColors) ? $active_navbarColors : ''; ?>">Color options</a></li>
                                <li class="nav-item"><a href="<?= base_url('navbar/navbar_sizes'); ?>" class="nav-link <?= isset($active_navbarSizes) ? $active_navbarSizes : ''; ?>">Sizing options</a></li>
                                <li class="nav-item"><a href="<?= base_url('navbar/navbar_components'); ?>" class="nav-link <?= isset($active_navbarComponents) ? $active_navbarComponents : ''; ?>">Navbar components</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_navigation_vertikal) ? $open_navigation_vertikal : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-arrow-fat-lines-down"></i>
                                <span>Vertical navigation</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_navigation_vertikal) ? $show_navigation_vertikal : ''; ?>" data-submenu-title="Vertical navigation">
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_styles'); ?>" class="nav-link <?= isset($active_navigationVerticalStyles) ? $active_navigationVerticalStyles : ''; ?>">Navigation styles</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_collapsible'); ?>" class="nav-link <?= isset($active_navigationVerticalCollapsible) ? $active_navigationVerticalCollapsible : ''; ?>">Collapsible menu</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_accordion'); ?>" class="nav-link <?= isset($active_navigationVerticalAccordion) ? $active_navigationVerticalAccordion : ''; ?>">Accordion menu</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_bordered'); ?>" class="nav-link <?= isset($active_navigationVerticalBordered) ? $active_navigationVerticalBordered : ''; ?>">Bordered navigation</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_right_icons'); ?>" class="nav-link <?= isset($active_navigationVerticalRightIcons) ? $active_navigationVerticalRightIcons : ''; ?>">Right icons</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_badges'); ?>" class="nav-link <?= isset($active_navigationVerticalBadges) ? $active_navigationVerticalBadges : ''; ?>">Badges</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_vertical_disabled'); ?>" class="nav-link <?= isset($active_navigationVerticalDisabled) ? $active_navigationVerticalDisabled : ''; ?>">Disabled items</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu <?= isset($open_navigation_horizontal) ? $open_navigation_horizontal : ''; ?>">
                            <a href="#" class="nav-link">
                                <i class="ph-arrow-fat-lines-right"></i>
                                <span>Horizontal navigation</span>
                            </a>
                            <ul class="nav-group-sub collapse <?= isset($show_navigation_horizontal) ? $show_navigation_horizontal : ''; ?>" data-submenu-title="Horizontal navigation">
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_horizontal_styles'); ?>" class="nav-link <?= isset($active_navigationHorizontalStyles) ? $active_navigationHorizontalStyles : ''; ?>">Navigation styles</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_horizontal_elements'); ?>" class="nav-link <?= isset($active_navigationHorizontalElements) ? $active_navigationHorizontalElements : ''; ?>">Navigation elements</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_horizontal_tabs'); ?>" class="nav-link <?= isset($active_navigationHorizontalTabs) ? $active_navigationHorizontalTabs : ''; ?>">Tabbed navigation</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_horizontal_disabled'); ?>" class="nav-link <?= isset($active_navigationHorizontalDisabled) ? $active_navigationHorizontalDisabled : ''; ?>">Disabled navigation links</a></li>
                                <li class="nav-item"><a href="<?= base_url('navigation/navigation_horizontal_mega'); ?>" class="nav-link <?= isset($active_navigationHorizontalMega) ? $active_navigationHorizontalMega : ''; ?>">Horizontal mega menu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="ph-arrow-elbow-down-right"></i> <span>Menu levels</span></a>
                            <ul class="nav-group-sub collapse" data-submenu-title="Menu levels">
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Second level with child</a>
                                    <ul class="nav-group-sub collapse">
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Third level with child</a>
                                            <ul class="nav-group-sub collapse">
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                            </ul>
                        </li>
                        <!-- /layout -->
                    </ul>
                </div>
                <!-- /main navigation -->
            </div>
            <!-- /sidebar content -->
        </div>
        <!-- /main sidebar -->