
@extends('portfolio.backend')

 @section('content')

<div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <i class="fas fa-cube"></i>
                <span>Admin Panel</span>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-box"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-chart-line"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-file-invoice"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-actions">
                    <div class="notification-icon">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <div class="avatar">JP</div>
                        <span>Logout</span>
                        
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="content">
                <div class="page-header">
                    <h1 class="page-title">Dashboard</h1>
                    <p class="breadcrumb">Home / Dashboard</p>
                </div>

                <!-- Stats Grid -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>2,543</h3>
                            <p>Total Users</p>
                        </div>
                        <div class="stat-icon blue">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>$45,231</h3>
                            <p>Revenue</p>
                        </div>
                        <div class="stat-icon green">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>1,423</h3>
                            <p>Orders</p>
                        </div>
                        <div class="stat-icon purple">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-info">
                            <h3>342</h3>
                            <p>Products</p>
                        </div>
                        <div class="stat-icon orange">
                            <i class="fas fa-box"></i>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="table-title">Recent Orders</h2>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Order
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-001</td>
                                <td>Alice Johnson</td>
                                <td>Premium Package</td>
                                <td>$299.00</td>
                                <td><span class="status active">Completed</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-002</td>
                                <td>Bob Smith</td>
                                <td>Standard Package</td>
                                <td>$149.00</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-003</td>
                                <td>Carol White</td>
                                <td>Enterprise Package</td>
                                <td>$599.00</td>
                                <td><span class="status active">Completed</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-004</td>
                                <td>David Brown</td>
                                <td>Basic Package</td>
                                <td>$99.00</td>
                                <td><span class="status inactive">Cancelled</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-005</td>
                                <td>Emma Davis</td>
                                <td>Premium Package</td>
                                <td>$299.00</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon btn-edit"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon btn-delete"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>