<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <h5>GuestApp</h5>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-tags"></i> Home
            </a>
        </li>
        <li>
            <a href="/formulir" class="{{ request()->is('formulir') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Formulir
            </a>
        </li>
        <li>
            <a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">
                <i class="bi bi-database"></i> Tentang
            </a>
        </li>

        <li>
            <a href="/logout" class="text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li>
    </ul>
</div>

<!-- Button toggle (mobile) -->
<button class="btn btn-purple toggle-btn" onclick="toggleSidebar()">
    <i class="bi bi-list"></i>
</button>

<style>
    :root {
        --purple: #7b2cbf;
        --purple-soft: #f3ecff;
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 240px;
        height: 100%;
        background: white;
        border-right: 1px solid #eee;
        padding: 20px;
        transition: 0.3s;
        z-index: 1000;
    }

    .sidebar-header {
        text-align: center;
        margin-bottom: 20px;
        color: var(--purple);
    }

    .sidebar-menu {
        list-style: none;
        padding: 0;
    }

    .sidebar-menu li {
        margin-bottom: 10px;
    }

    .sidebar-menu a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 12px;
        border-radius: 8px;
        text-decoration: none;
        color: #444;
        transition: 0.2s;
    }

    .sidebar-menu a:hover {
        background: var(--purple-soft);
        color: var(--purple);
    }

    .sidebar-menu a.active {
        background: var(--purple);
        color: white;
    }

    /* Toggle button */
    .toggle-btn {
        position: fixed;
        top: 15px;
        left: 15px;
        z-index: 1100;
        display: none;
        background: var(--purple);
        color: white;
    }

    /* Content geser */
    .main-content {
        margin-left: 240px;
        padding: 20px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .sidebar {
            left: -240px;
        }

        .sidebar.show {
            left: 0;
        }

        .toggle-btn {
            display: block;
        }

        .main-content {
            margin-left: 0;
        }
    }
</style>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('show');
    }
</script>
