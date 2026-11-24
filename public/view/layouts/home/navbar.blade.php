<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Gayatex</title>
    <!-- Menggunakan Google Fonts: Poppins / Plus Jakarta Sans agar mirip dengan gambar -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f8f6;
            /* Warna latar lembut seperti di bawah navbar pada gambar */
        }

        /* Container Utama Navbar */
        .navbar {
            background-color: #ffffff;
            width: 100%;
            border-bottom: 1px solid #eeeeee;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-container {
            max-width: 1280px;
            height: 84px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* 1. Styling Logo */
        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #181c23;
        }

        .logo-icon {
            width: 38px;
            height: 28px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
            line-height: 1;
            color: #181c23;
        }

        .brand-tagline {
            font-size: 6.5px;
            font-weight: 600;
            letter-spacing: 0.4px;
            color: #4b5563;
            margin-top: 3px;
        }

        /* 2. Styling Menu Navigasi */
        .nav-list {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            text-decoration: none;
            color: #181c23;
            font-size: 12.5px;
            font-weight: 600;
            letter-spacing: 0.4px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 10px 0;
            position: relative;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #555555;
        }

        /* Garis bawah hitam untuk menu aktif (HOME) */
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #181c23;
        }

        /* Ikon panah bawah kecil */
        .chevron-icon {
            transition: transform 0.2s ease;
        }

        .dropdown:hover .chevron-icon {
            transform: rotate(180deg);
        }

        /* Menu Dropdown saat di-hover */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 180px;
            background-color: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            list-style: none;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: all 0.2s ease;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu li a {
            display: block;
            padding: 9px 16px;
            text-decoration: none;
            color: #181c23;
            font-size: 12.5px;
            font-weight: 500;
            transition: background-color 0.2s ease;
        }

        .dropdown-menu li a:hover {
            background-color: #f4f5f7;
        }

        /* 3. Styling Tombol Join With Us */
        .btn-join {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: #181c23;
            /* Warna hitam/charcoal gelap */
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            padding: 13px 22px;
            border-radius: 6px;
            transition: background-color 0.2s ease, transform 0.15s ease;
        }

        .btn-join:hover {
            background-color: #2b313d;
        }

        .btn-join svg {
            transition: transform 0.2s ease;
        }

        .btn-join:hover svg {
            transform: translateX(4px);
        }

        /* Responsif sederhana untuk layar kecil/tablet */
        @media (max-width: 1024px) {
            .nav-list {
                gap: 16px;
            }

            .nav-link {
                font-size: 11.5px;
            }
        }

        @media (max-width: 860px) {
            .navbar-menu {
                display: none;
                /* Sembunyikan menu desktop pada layar HP (bisa ditambah tombol hamburger) */
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="navbar-container">

            <a href="#" class="navbar-logo">
                <svg class="logo-icon" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 2L3 15L20 28L37 15L20 2Z" stroke="#181C23" stroke-width="3.5"
                        stroke-linejoin="round" />
                    <path d="M13 15H27M20 9V21" stroke="#181C23" stroke-width="3" stroke-linecap="round" />
                </svg>
                <div class="logo-text">
                    <span class="brand-name">GAYATEX</span>
                    <span class="brand-tagline">TEXTILE & APPAREL MANUFACTURE</span>
                </div>
            </a>

            <nav class="navbar-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            PRODUK
                            <svg class="chevron-icon" width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Seragam Kerja</a></li>
                            <li><a href="#">Kaos & Polo</a></li>
                            <li><a href="#">Jaket & Almamater</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">JENIS BAHAN</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">PORTOFOLIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            INFO
                            <svg class="chevron-icon" width="12" height="12" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Cara Pemesanan</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">SHOP GAYATEX</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ARTIKEL</a>
                    </li>
                </ul>
            </nav>
            <div class="navbar-action">
                <a href="#" class="btn-join">
                    <span>Join With Us</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </header>

</body>

</html>
