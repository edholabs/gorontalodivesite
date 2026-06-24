# Gorontalo Dive Site (Web GIS)

Welcome to the **Gorontalo Dive Site** repository! This is a comprehensive Web Geographic Information System (Web GIS) application built to showcase and map the magnificent underwater dive spots across Gorontalo, Indonesia.

## 🌊 About The Application
The Gorontalo Dive Site application serves as an interactive guide for divers and tourists. It allows users to explore dive sites geographically, read detailed information about marine life, check visibility and location details, and read the latest news regarding Gorontalo tourism.

Recently overhauled with a **Modern Premium UI**, the application features a glassmorphism navigation bar, responsive dive cards, and an interactive map powered by Google Maps API.

## ✨ Features
- **Interactive Dive Map**: Explore all dive sites on a dynamic map with custom markers, info windows, and Google Maps directions integration.
- **Premium User Interface**: A modern, sleek, and responsive design utilizing custom CSS and Bootstrap, featuring smooth hover effects and shadow styling.
- **Dive Site Catalog**: Detailed pages for each dive site including location, visibility, and descriptions.
- **Information & News Portal**: Read the latest updates and articles about diving in Gorontalo.
- **Admin Dashboard Panel**: A dedicated, secure backend (`/tempatpanel`) for administrators to manage dive sites, news, regions (kota), and user comments.
- **Extensionless URLs**: Configured to use clean, pretty URLs (e.g., `/peta` instead of `/peta.php`) via `.htaccess` and a custom local `router.php`.

## 🛠️ Technology Stack
- **Frontend**: HTML5, CSS3 (Premium Custom Styles), JavaScript, jQuery, Bootstrap.
- **Backend**: PHP (Native).
- **Database**: MySQL.
- **Maps API**: Google Maps JavaScript API (with Places library).

## 📂 Project Structure
```text
gorontalodivesite/
├── assets/             # Global assets
├── css/ & css2/        # Stylesheets (Bootstrap, Premium UI, Galeri)
├── fonts/              # Custom web fonts (FontAwesome)
├── img/                # Application images and icons
├── js/ & js3/          # JavaScript libraries and custom scripts
├── tempatpanel/        # Admin Panel Dashboard (Backend)
│   ├── index.php       # Admin Dashboard Home
│   ├── login.php       # Admin Authentication
│   └── ...             # CRUD files for Dive Sites, News, Comments
├── u1364648_gtlo.sql   # Database dump / structure
├── router.php          # Custom router for PHP built-in server
├── .htaccess           # Apache rewrite rules for clean URLs
├── index.php           # Landing Page
├── peta.php            # Interactive Maps Page
├── data.php            # Dive Sites Catalog
├── berita.php          # News & Information Page
├── kontak.php          # Contact Us Page
├── detail.php          # Dive Site Detail Page
└── header.php & footer.php # Reusable UI components
```

## 🚀 How to Run Locally

### Using XAMPP / Apache
1. Clone this repository into your `htdocs` directory.
2. Import the `u1364648_gtlo.sql` file into your local MySQL database (e.g., via phpMyAdmin).
3. Ensure your Apache server is running and `mod_rewrite` is enabled.
4. Access the application at `http://localhost/gorontalodivesite/home`.

### Using PHP Built-in Server
1. Open your terminal in the project root directory.
2. Run the following command to start the server with the custom router:
   ```bash
   php -S localhost:8000 router.php
   ```
3. Open your browser and navigate to `http://localhost:8000/home`.

## 🔒 Admin Access
To access the backend dashboard to manage content:
- **URL**: `/tempatpanel`
- **Username**: `divesite`
- **Password**: `divesite123`

---
*Developed & Designed for Gorontalo Tourism - WonderFull Indonesia*
