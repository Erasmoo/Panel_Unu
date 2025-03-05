<aside>
    <nav>
        <ul>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li><a href="/admin/dashboard.php">Dashboard</a></li>
                <li><a href="/admin/casos.php">Casos Registrados</a></li>
                <li><a href="/admin/usuarios.php">Usuarios</a></li>
                <li><a href="/admin/reportes.php">Reportes</a></li>
                <li><a href="/admin/configuracion.php">Configuración</a></li>
            <?php else: ?>
                <li><a href="/encargado/dashboard.php">Dashboard</a></li>
                <li><a href="/encargado/mis_casos.php">Mis Casos</a></li>
                <li><a href="/encargado/historial.php">Historial de Casos</a></li>
                <li><a href="/encargado/reportes.php">Reportes</a></li>
            <?php endif; ?>
            <li><a href="/app/controllers/logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
</aside>