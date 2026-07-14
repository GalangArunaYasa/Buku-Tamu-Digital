<!-- Sidebar -->
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
        width: 200px;
        height: 100%;
        background: white;
        border-right: 1px solid #eee;
        padding: 20px;
        transition: left 0.3s ease;
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

    /* Sidebar tersembunyi (state "closed") - berlaku di semua ukuran layar */
    .sidebar.closed {
        left: -240px;
    }

    /* Toggle button - selalu tampil */
    .toggle-btn {
        position: fixed;
        top: 15px;
        left: 15px;
        z-index: 1100;
        background: var(--purple);
        color: white;
        border: none;
        width: 42px;
        height: 42px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        transition: left 0.3s ease;
    }

    /* Saat sidebar terbuka di desktop, geser tombol biar tidak numpuk teks sidebar */
    .toggle-btn.sidebar-open-desktop {
        left: 255px;
    }

    /* Overlay gelap saat sidebar terbuka di mobile */
    .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 999;
    }

    .sidebar-overlay.show {
        display: block;
    }

    /* Content geser mengikuti sidebar */
    .main-content {
        margin-left: 240px;
        padding: 20px;
        transition: margin-left 0.3s ease;
    }

    .main-content.full {
        margin-left: 0;
    }

    /* Responsive: default sidebar tersembunyi di layar kecil */
    @media (max-width: 768px) {
        .sidebar {
            left: -240px;
        }

        .sidebar.show {
            left: 0;
        }

        .toggle-btn.sidebar-open-desktop {
            left: 15px;
            /* jangan geser tombol di mobile, nanti ketutup sidebar */
        }

        .main-content {
            margin-left: 0;
        }
    }
</style>

<!-- Overlay khusus mobile -->
<div id="sidebarOverlay" class="sidebar-overlay" onclick="closeSidebarMobile()"></div>

<div id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <span><i class="bi bi-note"></i></span>
        <h5>Buku Tamu</h5>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Home
            </a>
        </li>
        <li>
            <a href="/formulir" class="{{ request()->is('formulir') ? 'active' : '' }}">
                <i class="bi bi-envelope-paper"></i> Formulir
            </a>
        </li>
        <li>
            <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-table"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">
                <i class="bi bi-info-square"></i> Tentang
            </a>
        </li>

        {{-- <li>
            <a href="/logout" class="text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li> --}}
    </ul>
</div>

<!-- Button toggle (tampil di semua ukuran layar) -->
<button id="toggleBtn" class="btn toggle-btn" onclick="toggleSidebar()">
    <i class="bi bi-list"></i>
</button>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const toggleBtn = document.getElementById('toggleBtn');
    const mainContent = document.querySelector('.main-content');

    function isMobile() {
        return window.innerWidth <= 768;
    }

    function toggleSidebar() {
        if (isMobile()) {
            // Mobile: sidebar melayang di atas konten + overlay
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        } else {
            // Desktop: sidebar mendorong/menyusutkan konten
            sidebar.classList.toggle('closed');
            mainContent && mainContent.classList.toggle('full');
            toggleBtn.classList.toggle('sidebar-open-desktop', !sidebar.classList.contains('closed'));

            // simpan preferensi supaya tetap sama saat halaman di-refresh
            localStorage.setItem('sidebarClosed', sidebar.classList.contains('closed'));
        }
    }

    function closeSidebarMobile() {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    }

    // Terapkan preferensi tersimpan saat halaman dimuat (khusus desktop)
    document.addEventListener('DOMContentLoaded', () => {
        if (!isMobile() && localStorage.getItem('sidebarClosed') === 'true') {
            sidebar.classList.add('closed');
            mainContent && mainContent.classList.add('full');
        } else if (!isMobile()) {
            toggleBtn.classList.add('sidebar-open-desktop');
        }
    });

    // Reset state overlay/show saat resize dari mobile ke desktop atau sebaliknya
    window.addEventListener('resize', () => {
        if (!isMobile()) {
            overlay.classList.remove('show');
            sidebar.classList.remove('show');
        }
    });
</script>