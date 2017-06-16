<!-- ======== @Region: body ======== -->
<body class="page page-login navbar-layout-default">

<!-- @plugin: page loading indicator, delete to remove loader -->
<div class="page-loader" data-toggle="page-loader"></div>

<a href="#content" id="top" class="sr-only">Skip to content</a>

<!-- ======== @Region: #header ======== -->
<div id="header">
    <div data-toggle="sticky">
        <!--Header & Branding region-->
        <div class="header">
            <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .flex-first or/and .flex-last classes to make an element show first or last within .header-inner or .headr-block elements -->
            <div class="header-inner container">
                <!--branding/logo -->
                <div class="header-brand flex-first">
                    <a class="header-brand-text" href="/" title="Home">
                        <h1>
                            <span>Qualimentos Jr.</span>
                        </h1>
                    </a>
                    <div class="header-divider hidden-md-down"></div>
                    <div class="header-slogan hidden-md-down">Consultoria de Eng. de Alimentos</div>
                </div>
                <!-- other header content -->
                <div class="header-block flex-last">

                    <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
                    <a href="#top" class="btn btn-link btn-icon text-white header-btn float-right hidden-lg-up" data-toggle="jpanel-menu" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars" style="color: black"></i> </a>
                </div>

                <div class="navbar navbar-toggleable-md">
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-main collapse">
                        <!--main navigation-->
                        <ul class="nav navbar-nav float-lg-right dropdown-effect-fade">
                            <!-- Home -->
                            <li class="nav-item @yield('home_ative')" >
                                <a href="/" class="nav-link" id="home" data-hover="dropdown">Home</a>
                            </li>

                            <!-- Institucional -->
                            <li class="nav-item dropdown @yield('institucional_ative')">
                                <a href="#" class="nav-link dropdown-toggle" id="pages-drop" data-toggle="dropdown" data-hover="dropdown">Institucional</a>
                                <!-- Menu -->
                                <div class="dropdown-menu">
                                    <a href="/quemsomos" class="dropdown-item">Quem Somos</a>
                                    <a href="/gestao" class="dropdown-item">Gestão</a>
                                    <a href="/mej" class="dropdown-item">MEJ</a>
                                </div>
                            </li>

                            <!-- Portifólio -->
                            <li class="nav-item @yield('portifolio_ative')">
                                <a href="/portifolio" class="nav-link" id="home" data-hover="dropdown">Portifólio</a>
                            </li>

                            <!-- Parceiros -->
                            <li class="nav-item @yield('parceiros_ative')">
                                <a href="/parceiros" class="nav-link" id="home" data-hover="dropdown">Parceiros</a>
                            </li>

                            <!-- Contato -->
                            <li class="nav-item @yield('contato_ative')">
                                <a href="/contato" class="nav-link" id="home" data-hover="dropdown">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
</div>
