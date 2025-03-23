<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style_admin_layout.css">
    <link rel="shortcut icon" href="/img/logo-sena.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <img src="/img/logo-sennova.png" alt="logoImg">
                    <span class="logo-text">SENNOVA</span>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="/proyecto/view"><i class="fas fa-users"></i><span class="span">Proyectos</span></a></li>
                        <li><a href="/eventos/view"><i class="fas fa-user"></i><span class="span">Eventos</span></a></li>
                        <li><a href="/aprendices/view"><i class="fas fa-id-badge"></i><span class="span">Aprendices</span></a></li>
                        <li><a href="/asesoria/view"><i class="fas fa-font"></i><span class="span">Asesorías</span></a></li>
                        <li><a href="/tipoAsesoria/view"><i class="fas fa-tag"></i><span class="span">Tipos de Asesoría</span></a></li>
                        <li><a href="/personalTecnico/view"><i class="fas fa-person"></i><span class="span">Personal Técnico</span></a></li>
                        <li><a href="/reunion/view"><i class="fas fa-handshake"></i><span class="span">Reunión</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle"><i class="fas fa-bars"></i></button>
                    <h1> <?php echo $title ?> </h1>
                    <div class="search-container">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="header-icons">
                        <a href="#" class="icon-link"><i class="fas fa-user-circle"></i></a>
                        <a href="#" class="icon-link"><i class="fas fa-bell"></i></a>
                        <a href="#" class="icon-link" id="theme-toggle"><i class="fas fa-moon"></i></a>
                    </div>
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>
            </div>
        </main>
    </div>

    <!-- Script para cambiar entre tema oscuro y claro -->
    <script>
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-moon')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }

            
        });
        const menuToggle = document.querySelector('.menu-toggle');
        const sidebar = document.querySelector('.sidebar');
        
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-hidden');
        });
    </script>
</body>

</html>