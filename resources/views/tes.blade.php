<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Dashboard - Toko Kue</title>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #FF85A2;
            --primary-light: #FFD2DD;
            --primary-dark: #E5698B;
            --secondary: #7879F1;
            --secondary-light: #A5A6F6;
            --accent: #FFB74D;
            --success: #4BD4A6;
            --info: #64B5F6;
            --warning: #FFB74D;
            --danger: #FF7285;
            --dark: #404258;
            --light: #F8F9FA;
            --white: #FFFFFF;
            --gray-100: #F8F9FA;
            --gray-200: #E9ECEF;
            --gray-300: #DEE2E6;
            --gray-400: #CED4DA;
            --gray-500: #ADB5BD;
            --gray-600: #6C757D;
            --gray-700: #495057;
            --gray-800: #343A40;
            --gray-900: #212529;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --navbar-height: 70px;
            --footer-height: 60px;
            --card-border-radius: 16px;
            --btn-border-radius: 10px;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body {
            background-color: #F3F6FD;
            color: var(--gray-800);
            font-size: 15px;
            transition: all var(--transition-speed) ease;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-100);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gray-400);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--gray-500);
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background-color: var(--white);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            overflow-y: auto;
            overflow-x: hidden;
            transition: all var(--transition-speed) ease;
            z-index: 1000;
            padding: 20px;
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar.collapsed .logo-text,
        .sidebar.collapsed .menu-label,
        .sidebar.collapsed .sidebar-menu a span,
        .sidebar.collapsed .user-info,
        .sidebar.collapsed .user-menu {
            display: none;
        }

        .sidebar.collapsed .logo-icon {
            margin: 0 auto;
        }

        .sidebar.collapsed .sidebar-menu a {
            justify-content: center;
            padding: 12px 0;
        }

        .sidebar.collapsed .sidebar-menu i {
            margin-right: 0;
            font-size: 20px;
        }

        .sidebar.collapsed .sidebar-footer {
            left: 10px;
            right: 10px;
        }

        .sidebar.collapsed .user-card {
            justify-content: center;
            padding: 10px;
        }

        .sidebar.collapsed .user-avatar {
            width: 40px;
            height: 40px;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            padding: 10px 0 30px;
            position: relative;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transition: all var(--transition-speed) ease;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            transition: opacity var(--transition-speed) ease;
        }

        .logo-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            color: var(--dark);
            margin-bottom: -2px;
        }

        .logo-subtitle {
            font-size: 12px;
            color: var(--gray-500);
        }

        .sidebar-divider {
            margin: 10px 0;
            border: none;
            height: 1px;
            background-color: var(--gray-200);
        }

        .menu-label {
            color: var(--gray-500);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
            margin-bottom: 10px;
            padding-left: 10px;
            transition: opacity var(--transition-speed) ease;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: var(--btn-border-radius);
            color: var(--gray-700);
            text-decoration: none;
            transition: all var(--transition-speed) ease;
            font-weight: 500;
        }

        .sidebar-menu a:hover {
            background-color: var(--gray-100);
            color: var(--primary);
        }

        .sidebar-menu a.active {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-light) 100%);
            color: var(--primary-dark);
        }

        .sidebar-menu i {
            margin-right: 10px;
            width: 22px;
            text-align: center;
            font-size: 18px;
            transition: all var(--transition-speed) ease;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            transition: all var(--transition-speed) ease;
        }

        .user-card {
            background: linear-gradient(135deg, var(--gray-100) 0%, #FFFFFF 100%);
            border-radius: var(--card-border-radius);
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.03);
            transition: all var(--transition-speed) ease;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background-color: var(--primary-light);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 20px;
            font-weight: 700;
            transition: all var(--transition-speed) ease;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            flex: 1;
            transition: opacity var(--transition-speed) ease;
        }

        .user-name {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 2px;
        }

        .user-role {
            color: var(--gray-500);
            font-size: 12px;
        }

        .user-menu {
            color: var(--gray-500);
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed) ease;
        }

        .user-menu:hover {
            background-color: var(--gray-200);
            color: var(--gray-700);
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            height: var(--navbar-height);
            background-color: var(--white);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 25px;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.02);
        }

        .sidebar.collapsed ~ .navbar {
            left: var(--sidebar-collapsed-width);
        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .toggle-sidebar {
            background: none;
            border: none;
            font-size: 22px;
            color: var(--gray-700);
            cursor: pointer;
            margin-right: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            transition: all var(--transition-speed) ease;
        }

        .toggle-sidebar:hover {
            background-color: var(--gray-100);
        }

        .page-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 24px;
            color: var(--gray-800);
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .nav-item {
            position: relative;
            cursor: pointer;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed) ease;
            color: var(--gray-600);
        }

        .nav-item:hover {
            background-color: var(--gray-100);
            color: var(--gray-700);
        }

        .nav-item i {
            font-size: 18px;
        }

        .badge {
            position: absolute;
            top: -2px;
            right: -2px;
            min-width: 18px;
            height: 18px;
            border-radius: 9px;
            background-color: var(--primary);
            color: white;
            font-size: 10px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 5px;
        }

        .search-box {
            position: relative;
            margin-left: 20px;
        }

        .search-box input {
            width: 300px;
            padding: 10px 15px;
            padding-left: 40px;
            border-radius: 12px;
            border: 1px solid var(--gray-200);
            background-color: var(--gray-100);
            color: var(--gray-700);
            font-size: 14px;
            transition: all var(--transition-speed) ease;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary-light);
            background-color: var(--white);
            box-shadow: 0 0 0 4px var(--primary-light);
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-500);
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 25px;
            padding-top: calc(var(--navbar-height) + 25px);
            min-height: 100vh;
            transition: all var(--transition-speed) ease;
        }

        .sidebar.collapsed ~ .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--gray-200);
        }

        .page-header-content {
            display: flex;
            flex-direction: column;
        }

        .page-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 28px;
            color: var(--gray-800);
            margin-bottom: 5px;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-item a {
            color: var(--gray-600);
            text-decoration: none;
            transition: color 0.2s;
        }

        .breadcrumb-item a:hover {
            color: var(--primary);
        }

        .breadcrumb-item.active {
            color: var(--primary);
            font-weight: 600;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: '/';
            padding: 0 8px;
            color: var(--gray-500);
        }

        .page-header-actions {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: var(--btn-border-radius);
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            box-shadow: 0 3px 10px rgba(231, 76, 132, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 132, 0.4);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--gray-300);
            color: var(--gray-700);
        }

        .btn-outline:hover {
            background-color: var(--gray-100);
            border-color: var(--gray-400);
        }

        /* Cards & Elements */
        .section-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            font-size: 20px;
            color: var(--gray-800);
            margin-bottom: 20px;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .stat-card {
            background-color: var(--white);
            border-radius: var(--card-border-radius);
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            position: relative;
            overflow: hidden;
            transition: all var(--transition-speed) ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        .stat-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 50px;
            height: 50px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            opacity: 0.9;
        }

        .stat-card.sales .stat-icon {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .stat-card.orders .stat-icon {
            background-color: rgba(120, 121, 241, 0.15);
            color: var(--secondary);
        }

        .stat-card.customers .stat-icon {
            background-color: rgba(255, 183, 77, 0.15);
            color: var(--accent);
        }

        .stat-card.products .stat-icon {
            background-color: rgba(75, 212, 166, 0.15);
            color: var(--success);
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--gray-800);
        }

        .stat-label {
            color: var(--gray-500);
            font-weight: 500;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .stat-growth {
            display: flex;
            align-items: center;
            margin-left: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        .stat-growth.positive {
            color: var(--success);
        }

        .stat-growth.negative {
            color: var(--danger);
        }

        .stat-growth i {
            font-size: 10px;
            margin-right: 3px;
        }

        .row {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .col-8 {
            flex: 8;
        }

        .col-4 {
            flex: 4;
        }

        .card {
            background-color: var(--white);
            border-radius: var(--card-border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            overflow: hidden;
            margin-bottom: 25px;
        }

        .card-header {
            padding: 20px 25px;
            border-bottom: 1px solid var(--gray-100);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            font-size: 18px;
            color: var(--gray-800);
        }

        .card-link {
            color: var(--primary);
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all var(--transition-speed) ease;
        }

        .card-link:hover {
            color: var(--primary-dark);
        }

        .card-body {
            padding: 25px;
        }

        /* Table Styles */
        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            text-align: left;
            padding: 15px 10px;
            color: var(--gray-600);
            font-weight: 600;
            font-size: 14px;
            border-bottom: 2px solid var(--gray-100);
        }

        .table td {
            padding: 15px 10px;
            border-bottom: 1px solid var(--gray-100);
            color: var(--gray-700);
            font-size: 14px;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .table tr:hover td {
            background-color: var(--gray-50);
        }

        .order-number {
            font-weight: 600;
            color: var(--gray-800);
        }

        .customer-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .customer-avatar {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            background-color: var(--gray-200);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
            font-weight: 600;
            font-size: 14px;
            overflow: hidden;
        }

        .customer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .customer-name {
            font-weight: 600;
        }

        .order-date {
            color: var(--gray-500);
        }

        .order-status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            text-align: center;
        }

        .order-status.completed {
            background-color: rgba(75, 212, 166, 0.15);
            color: var(--success);
        }

        .order-status.pending {
            background-color: rgba(255, 183, 77, 0.15);
            color: var(--accent);
        }

        .order-status.cancelled {
            background-color: rgba(255, 114, 133, 0.15);
            color: var(--danger);
        }

        .order-status.processing {
            background-color: rgba(100, 181, 246, 0.15);
            color: var(--info);
        }

        .order-total {
            font-weight: 600;
            color: var(--gray-800);
        }

        .order-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-action {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
            background-color: var(--gray-100);
            border: none;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
        }

        .btn-action:hover {
            background-color: var(--gray-200);
            color: var(--gray-800);
        }

        /* Product List */
        .product-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .product-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .product-image {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background-color: var(--gray-100);
            overflow: hidden;
            margin-right: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 3px;
        }

        .product-category {
            color: var(--gray-500);
            font-size: 13px;
            margin-bottom: 5px;
        }

        .product-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 15px;
        }

        .product-sales {
            color: var(--gray-600);
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 8px;
            background-color: var(--gray-100);
            font-size: 13px;
        }

        /* Charts */
        .chart-container {
            width: 100%;
            height: 250px;
        }

        /* Calendar Widget */
        .calendar {
            width: 100%;
        }

        .calendar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .calendar-title {
            font-weight: 600;
            color: var(--gray-800);
        }

        .calendar-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .calendar-btn {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray-600);
            background-color: var(--gray-100);
            border: none;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
        }

        .calendar-btn:hover {
            background-color: var(--gray-200);
            color: var(--gray-800);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 8px;
        }

        .calendar-weekday {
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            color: var(--gray-500);
            padding: 5px 0;
        }

        .calendar-day {
            text-align: center;
            padding: 8px 0;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            color: var(--gray-700);
            cursor: pointer;
            transition: all var(--transition-speed) ease;
        }

        .calendar-day:hover {
            background-color: var(--gray-100);
        }

        .calendar-day.today {
            background-color: var(--primary-light);
            color: var(--primary);
            font-weight: 700;
        }

        .calendar-day.has-event {
            position: relative;
        }

        .calendar-day.has-event::after {
            content: '';
            position: absolute;
            bottom: 3px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: var(--primary);
        }

        .calendar-day.other-month {
            color: var(--gray-400);
        }

        /* Upcoming Events */
        .event-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .event-item {
            background-color: var(--gray-100);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all var(--transition-speed) ease;
        }

        .event-item:hover {
            background-color: var(--gray-200);
        }

        .event-date {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background-color: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
        }

        .event-day {
            font-weight: 700;
            color: var(--gray-800);
            font-size: 16px;
            line-height: 1;
        }

        .event-month {
            font-size: 10px;
            color: var(--gray-500);
            text-transform: uppercase;
            font-weight: 600;
        }

        .event-details {
            flex: 1;
        }

        .event-title {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 3px;
        }

        .event-time {
            color: var(--gray-500);
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .event-time i {
            font-size: 10px;
        }

        /* Footer */
        .footer {
            position: relative;
            margin-left: var(--sidebar-width);
            padding: 20px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--gray-500);
            border-top: 1px solid var(--gray-200);
            transition: all var(--transition-speed) ease;
        }

        .sidebar.collapsed ~ .footer {
            margin-left: var(--sidebar-collapsed-width);
        }

        .footer-text {
            font-size: 14px;
        }

        .footer-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-links a {
            color: var(--gray-500);
            text-decoration: none;
            font-size: 14px;
            transition: all var(--transition-speed) ease;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        /* Welcome Banner */
        .welcome-banner {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: var(--card-border-radius);
            padding: 25px;
            margin-bottom: 25px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(231, 76, 132, 0.3);
        }

        .welcome-banner::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .welcome-banner::after {
            content: '';
            position: absolute;
            bottom: -80px;
            right: -30px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .welcome-content {
            position: relative;
            z-index: 1;
            max-width: 70%;
        }

        .welcome-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .welcome-text {
            font-size: 15px;
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .welcome-icon {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 100px;
            opacity: 0.2;
            z-index: 0;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .row {
                flex-direction: column;
            }

            .search-box input {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width);
                z-index: 1100;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar.collapsed {
                width: var(--sidebar-width);
                transform: translateX(-100%);
            }

            .sidebar.collapsed.active {
                transform: translateX(0);
            }

            .toggle-sidebar {
                display: flex;
            }

            .search-box {
                display: none;
            }

            .navbar {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .footer {
                margin-left: 0;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .page-header-actions {
                width: 100%;
                justify-content: flex-end;
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }

            .main-content {
                padding: 15px;
                padding-top: calc(var(--navbar-height) + 15px);
            }

            .card-header, .card-body {
                padding: 15px;
            }

            .page-header-actions {
                flex-direction: column;
                gap: 10px;
            }

            .btn {
                width: 100%;
            }
        }

        /* Dark mode toggle */
        .dark-mode-toggle {
            width: 42px;
            height: 22px;
            background-color: var(--gray-300);
            border-radius: 11px;
            position: relative;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
        }

        .dark-mode-toggle.active {
            background-color: var(--primary);
        }

        .toggle-slider {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: white;
            transition: all var(--transition-speed) ease;
        }

        .dark-mode-toggle.active .toggle-slider {
            transform: translateX(20px);
        }

        /* Overlay for mobile */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            opacity: 0;
            visibility: hidden;
            transition: all var(--transition-speed) ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        @media (min-width: 769px) {
            .sidebar-overlay {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-title">Sweet Cake</span>
                    <span class="logo-subtitle">Bakery Dashboard</span>
                </div>
            </a>
        </div>

        <hr class="sidebar-divider">

        <span class="menu-label">Menu Utama</span>
        <ul class="sidebar-menu">
            <li><a href="#" class="active"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> <span>Pesanan</span></a></li>
            <li><a href="#"><i class="fas fa-birthday-cake"></i> <span>Produk</span></a></li>
            <li><a href="#"><i class="fas fa-users"></i> <span>Pelanggan</span></a></li>
        </ul>

        <span class="menu-label">Lainnya</span>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="fas fa-chart-pie"></i> <span>Laporan</span></a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> <span>Reservasi</span></a></li>
            <li><a href="#"><i class="fas fa-bell"></i> <span>Notifikasi</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i> <span>Pengaturan</span></a></li>
        </ul>

        <div class="sidebar-footer">
            <div class="user-card">
                <div class="user-avatar">
                    <img src="/api/placeholder/45/45" alt="Admin">
                </div>
                <div class="user-info">
                    <div class="user-name">Sarah Johnson</div>
                    <div class="user-role">Admin</div>
                </div>
                <div class="user-menu">
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
        </div>
    </aside>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-left">
            <button class="toggle-sidebar" id="toggleSidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="page-title">Dashboard</h1>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari produk, pesanan, pelanggan...">
            </div>
        </div>
        <div class="navbar-right">
            <div class="nav-item">
                <i class="fas fa-bell"></i>
                <span class="badge">5</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-envelope"></i>
                <span class="badge">3</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-th-large"></i>
            </div>
            <div class="dark-mode-toggle">
                <div class="toggle-slider"></div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Selamat Datang, Sarah!</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
            <div class="page-header-actions">
                <button class="btn btn-outline">
                    <i class="fas fa-download"></i> Export Laporan
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Pesanan
                </button>
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <div class="welcome-content">
                <h2 class="welcome-title">Sweet Cake Bakery Dashboard</h2>
                <p class="welcome-text">Pantau kinerja toko kue Anda dengan mudah. Lihat statistik penjualan, kelola pesanan, dan pantau produk terlaris.</p>
                <button class="btn btn-outline" style="background: rgba(255,255,255,0.15); color: white; border-color: rgba(255,255,255,0.3);">
                    <i class="fas fa-chart-line"></i> Lihat Analitik
                </button>
            </div>
            <div class="welcome-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
        </div>

        <!-- Stats Section -->
        <section class="stats-container">
            <div class="stat-card sales">
                <div class="stat-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="stat-value">Rp 8,75 Jt</div>
                <div class="stat-label">
                    Total Penjualan
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 12.5%
                    </div>
                </div>
            </div>

            <div class="stat-card orders">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="stat-value">248</div>
                <div class="stat-label">
                    Total Pesanan
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 8.7%
                    </div>
                </div>
            </div>

            <div class="stat-card customers">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value">104</div>
                <div class="stat-label">
                    Pelanggan Aktif
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 5.3%
                    </div>
                </div>
            </div>

            <div class="stat-card products">
                <div class="stat-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="stat-value">56</div>
                <div class="stat-label">
                    Produk
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 3.2%
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Orders & Top Products -->
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pesanan Terbaru</h3>
                        <a href="#" class="card-link">Lihat Semua <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Pelanggan</th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="order-number">#TK-2025-098</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Ani">
                                                </div>
                                                <span class="customer-name">Ani Wijaya</span>
                                            </div>
                                        </td>
                                        <td class="order-date">05 Mei 2025</td>
                                        <td class="order-total">Rp 450.000</td>
                                        <td><span class="order-status completed">Selesai</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-097</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">BH</div>
                                                <span class="customer-name">Budi Hartono</span>
                                            </div>
                                        </td>
                                        <td class="order-date">05 Mei 2025</td>
                                        <td class="order-total">Rp 785.000</td>
                                        <td><span class="order-status processing">Diproses</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-096</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Citra">
                                                </div>
                                                <span class="customer-name">Citra Lestari</span>
                                            </div>
                                        </td>
                                        <td class="order-date">04 Mei 2025</td>
                                        <td class="order-total">Rp 320.000</td>
                                        <td><span class="order-status completed">Selesai</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-095</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">DK</div>
                                                <span class="customer-name">Doni Kusuma</span>
                                            </div>
                                        </td>
                                        <td class="order-date">04 Mei 2025</td>
                                        <td class="order-total">Rp 125.000</td>
                                        <td><span class="order-status cancelled">Dibatalkan</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-094</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Endang">
                                                </div>
                                                <span class="customer-name">Endang Puspita</span>
                                            </div>
                                        </td>
                                        <td class="order-date">03 Mei 2025</td>
                                        <td class="order-total">Rp 520.000</td>
                                        <td><span class="order-status pending">Menunggu</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk Terlaris</h3>
                        <a href="#" class="card-link">Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="product-list">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Red Velvet">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Red Velvet Cake</div>
                                    <div class="product-category">Kue Ulang Tahun</div>
                                    <div class="product-price">Rp 350.000</div>
                                </div>
                                <div class="product-sales">268 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Brownies">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Fudge Brownies</div>
                                    <div class="product-category">Kue Kering</div>
                                    <div class="product-price">Rp 75.000</div>
                                </div>
                                <div class="product-sales">215 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Cheese Tart">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Cheese Tart</div>
                                    <div class="product-category">Pastry</div>
                                    <div class="product-price">Rp 120.000</div>
                                </div>
                                <div class="product-sales">194 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Macarons">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Macarons Set</div>
                                    <div class="product-category">Kue Kering</div>
                                    <div class="product-price">Rp 180.000</div>
                                </div>
                                <div class="product-sales">178 terjual</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal & Acara</h3>
                    </div>
                    <div class="card-body">
                        <div class="calendar">
                            <div class="calendar-header">
                                <div class="calendar-title">Mei 2025</div>
                                <div class="calendar-actions">
                                    <button class="calendar-btn"><i class="fas fa-chevron-left"></i></button>
                                    <button class="calendar-btn"><i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="calendar-grid">
                                <div class="calendar-weekday">Min</div>
                                <div class="calendar-weekday">Sen</div>
                                <div class="calendar-weekday">Sel</div>
                                <div class="calendar-weekday">Rab</div>
                                <div class="calendar-weekday">Kam</div>
                                <div class="calendar-weekday">Jum</div>
                                <div class="calendar-weekday">Sab</div>

                                <div class="calendar-day other-month">28</div>
                                <div class="calendar-day other-month">29</div>
                                <div class="calendar-day other-month">30</div>
                                <div class="calendar-day">1</div>
                                <div class="calendar-day">2</div>
                                <div class="calendar-day has-event">3</div>
                                <div class="calendar-day has-event">4</div>

                                <div class="calendar-day today">5</div>
                                <div class="calendar-day has-event">6</div>
                                <div class="calendar-day">7</div>
                                <div class="calendar-day">8</div>
                                <div class="calendar-day">9</div>
                                <div class="calendar-day has-event">10</div>
                                <div class="calendar-day">11</div>

                                <div class="calendar-day">12</div>
                                <div class="calendar-day">13</div>
                                <div class="calendar-day">14</div>
                                <div class="calendar-day has-event">15</div>
                                <div class="calendar-day">16</div>
                                <div class="calendar-day">17</div>
                                <div class="calendar-day">18</div>

                                <div class="calendar-day">19</div>
                                <div class="calendar-day has-event">20</div>
                                <div class="calendar-day">21</div>
                                <div class="calendar-day">22</div>
                                <div class="calendar-day">23</div>
                                <div class="calendar-day">24</div>
                                <div class="calendar-day">25</div>

                                <div class="calendar-day">26</div>
                                <div class="calendar-day">27</div>
                                <div class="calendar-day">28</div>
                                <div class="calendar-day">29</div>
                                <div class="calendar-day">30</div>
                                <div class="calendar-day">31</div>
                                <div class="calendar-day other-month">1</div>
                            </div>
                        </div>

                        <h4 style="margin: 20px 0 15px; font-weight: 600; color: var(--gray-700);">Acara Mendatang</h4>
                        <div class="event-list">
                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">6</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Workshop Cake Decoration</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 14:00 - 16:00</div>
                                </div>
                            </div>

                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">10</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Pameran Kue Artisan</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 10:00 - 18:00</div>
                                </div>
                            </div>

                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">15</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Peluncuran Menu Baru</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 19:00 - 21:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-text">
            &copy; 2025 Sweet Cake Bakery. Semua Hak Dilindungi.
        </div>
        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
            <a href="#">Bantuan</a>
        </div>
    </footer>

    <script>
        // Toggle Sidebar
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggleSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');

            // Pada desktop, toggle antara collapsed dan expanded
            if (window.innerWidth > 768) {
                sidebar.classList.toggle('collapsed');
            }
        });

        // Tutup sidebar saat overlay diklik (mobile)
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
        });

        // Dark Mode Toggle
        document.querySelector('.dark-mode-toggle').addEventListener('click', function() {
            this.classList.toggle('active');
            // Implement dark mode logic here
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                // Desktop - pastikan sidebar visible
                sidebar.classList.remove('active');
                sidebarOverlay.classList.remove('active');
            } else {
                // Mobile - pastikan sidebar hidden kecuali jika aktif
                if (!sidebar.classList.contains('active')) {
                    sidebar.classList.remove('collapsed');
                }
            }
        });
    </script>
</body>
</html>
