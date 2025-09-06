<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
    <a href="index.php" class="b-brand text-primary d-flex align-items-center" style="text-decoration: none;">
      <i class="ti ti-school" style="font-size: 2rem; margin-right: 10px;"></i>
      <h1 style="font-size: 1.5rem; font-weight: bold; margin: 0;"><?php echo $nombre_sistema; ?></h1>
    </a>
    </div>
    <div class="navbar-content">
        <ul class="pc-navbar">
            <li class="pc-item">
                <a href="index.php" class="pc-link">
                <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                <span class="pc-mtext">Inicio</span>
                </a>
            </li>

            <!-- <li class="pc-item pc-caption">
                <label>UI Components</label>
                <i class="ti ti-dashboard"></i>
            </li>
            <li class="pc-item">
                <a href="elements/bc_typography.html" class="pc-link">
                <span class="pc-micon"><i class="ti ti-typography"></i></span>
                <span class="pc-mtext">Typography</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="elements/bc_color.html" class="pc-link">
                <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
                <span class="pc-mtext">Color</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="elements/icon-tabler.html" class="pc-link">
                <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
                <span class="pc-mtext">Icons</span>
                </a>
            </li>

            <li class="pc-item pc-caption">
                <label>Pages</label>
                <i class="ti ti-news"></i>
            </li>
            <li class="pc-item">
                <a href="pages/login.html" class="pc-link">
                <span class="pc-micon"><i class="ti ti-lock"></i></span>
                <span class="pc-mtext">Login</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="pages/register.html" class="pc-link">
                <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
                <span class="pc-mtext">Register</span>
                </a>
            </li> -->

            <li class="pc-item pc-caption">
                <label>Captación</label>
                <i class="ti ti-brand-chrome"></i>
            </li>
            <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-eye"></i></span><span class="pc-mtext">Seguimiento</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="leads.php">Registro de Leads</a></li>
                <li class="pc-item"><a class="pc-link" href="clasificacion_leads.php">Clasificación de Leads</a></li>
                <li class="pc-item"><a class="pc-link" href="asignacion_leads.php">Asignación</a></li>
                <li class="pc-item"><a class="pc-link" href="agenda_leads.php">Agenda</a></li>
                </ul>
            </li>

            <li class="pc-item pc-caption">
                <label>Comunicación Institucional</label>
                <i class="ti ti-brand-chrome"></i>
            </li>
            <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-message"></i>
                    </span><span class="pc-mtext">Comunicación</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="gestion_envios.php">Gestión de Envíos</a></li>
                <li class="pc-item"><a class="pc-link" href="mensajeria.php">Mensajería Programada</a></li>
                <li class="pc-item"><a class="pc-link" href="comunicaciones.php">Registro de Comunicaciones</a></li>
                </ul>
            </li>

            <li class="pc-item pc-caption">
                <label>Padres y Apoderados</label>
                <i class="ti ti-brand-chrome"></i>
            </li>
            <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"><span class="pc-micon"><i class="fas fa-users"></i>
                    </span><span class="pc-mtext">Gestión de Apoderaos</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="apoderados.php">Registro de Apoderados</a></li>
                <li class="pc-item"><a class="pc-link" href="historial_interacciones.php">Historial de Interacciones</a></li>
                <li class="pc-item"><a class="pc-link" href="clasi_seg.php">Clasificación y Segmentación</a></li>
                </ul>
            </li>

            <li class="pc-item pc-caption">
                <label>Configuración</label>
                <i class="ti ti-brand-chrome"></i>
            </li>
            <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-settings"></i></span><span class="pc-mtext">Configuración</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="informacion.php">Información</a></li>
                <li class="pc-item"><a class="pc-link" href="usuarios.php">Usuarios</a></li>
                <li class="pc-item"><a class="pc-link" href="logs.php">Registro de Actividades</a></li>
                <!-- Sub menu dentro de un sub menu -->
                <!-- 
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                        </ul>
                    </li>
                    </ul>
                </li> -->
                </ul>
            </li>
        </ul>
        <div class="card text-center">
        </div>
    </div>
  </div>
</nav>