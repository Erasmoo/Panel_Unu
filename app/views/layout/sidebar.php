<aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">inventory</span> Panel de Control
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <?php if ($_SESSION['rol'] === 'admin'): ?>
                    <li class="sidebar-list-item"><a href="/admin/dashboard.php"><span class="material-icons-outlined">dashboard</span> Dashboard</a></li>
                    <li class="sidebar-list-item"><a href="/admin/casos.php"><span class="material-icons-outlined">fact_check</span> Casos</a></li>
                    <li class="sidebar-list-item"><a href="/admin/usuarios.php"><span class="material-icons-outlined">people</span> Usuarios</a></li>
                    <li class="sidebar-list-item"><a href="/admin/reportes.php"><span class="material-icons-outlined">poll</span> Reportes</a></li>
                    <li class="sidebar-list-item"><a href="/admin/configuracion.php"><span class="material-icons-outlined">settings</span> Configuración</a></li>
                <?php else: ?>
                    <li class="sidebar-list-item"><a href="/encargado/dashboard.php"><span class="material-icons-outlined">dashboard</span> Dashboard</a></li>
                    <li class="sidebar-list-item"><a href="/encargado/mis_casos.php"><span class="material-icons-outlined">assignment</span> Mis Casos</a></li>
                    <li class="sidebar-list-item"><a href="/encargado/historial.php"><span class="material-icons-outlined">history</span> Historial</a></li>
                    <li class="sidebar-list-item"><a href="/encargado/reportes.php"><span class="material-icons-outlined">poll</span> Reportes</a></li>
                <?php endif; ?>
                <li class="sidebar-list-item"><a href="../controllers/logout.php"><span class="material-icons-outlined">logout</span> Cerrar Sesión</a></li>
            </ul>
        </aside>