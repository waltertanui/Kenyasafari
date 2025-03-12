<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destinations - Kenya Safari</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|poppins:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    
    <!-- Add this to the style section -->
    <style>
        /* Existing styles... */
        
        /* Sidebar styles */
        .page-container {
            display: flex;
            flex-direction: column;
        }
        
        .content-container {
            display: flex;
            flex-direction: column;
        }
        
        .sidebar {
            background-color: #f8f8f8;
            padding: 2rem;
            border-right: 1px solid #eaeaea;
            display: none;
        }
        
        .sidebar-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #333;
        }
        
        .sidebar-section {
            margin-bottom: 2rem;
        }
        
        .sidebar-section h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #555;
        }
        
        .filter-group {
            margin-bottom: 1rem;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #666;
        }
        
        .filter-group select, .filter-group input[type="range"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        
        .checkbox-group {
            margin-bottom: 0.5rem;
        }
        
        .checkbox-group label {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #666;
        }
        
        .checkbox-group input[type="checkbox"] {
            margin-right: 0.5rem;
        }
        
        .price-range {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #666;
            margin-top: 0.5rem;
        }
        
        .filter-button {
            background-color: #E67E22;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        
        .filter-button:hover {
            background-color: #D35400;
        }
        
        .mobile-filter-toggle {
            background-color: #E67E22;
            color: white;
            border: none;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 1rem;
            display: block;
            width: 100%;
            max-width: 200px;
        }
        
        @media (min-width: 992px) {
            .content-container {
                flex-direction: row;
            }
            
            .sidebar {
                width: 280px;
                display: block;
            }
            
            .main-content {
                flex: 1;
            }
            
            .mobile-filter-toggle {
                display: none;
            }
        }
    </style>

    <!-- Modify the body structure to include the sidebar -->
    <body>
        <!-- Navigation remains the same -->
        <nav class="navbar">
            <!-- Navigation content remains unchanged -->
        </nav>
    
        <!-- Hero Section remains the same -->
        <div class="hero-section">
            <!-- Hero content remains unchanged -->
        </div>
    
        <!-- Page Container with Sidebar -->
        <div class="page-container">
            <div class="container">
                <button class="mobile-filter-toggle" onclick="toggleSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd" d="M3.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M3.762 2.558C4.735 1.909 5.348 1.5 6.5 1.5c.653 0 1.139.325 1.495.562l.032.022c.391.26.646.416.973.416.168 0 .356-.042.587-.126a8.89 8.89 0 0 0 .593-.25c.058-.027.117-.053.18-.08.57-.255 1.278-.544 2.14-.544a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5c-.638 0-1.18.231-1.638.478-.396.214-.716.393-.94.493a4.001 4.001 0 0 1-.3.174c-.14.065-.246.107-.335.13-.034.01-.062.016-.078.02l-.05.01-.013.002-.006.001h-.001l-.001-.328a.5.5 0 0 1-.5.328h-.053a.5.5 0 0 1-.432-.245l-.013-.024a5.99 5.99 0 0 1-.255-.52 7.222 7.222 0 0 1-.43-1.295 9.173 9.173 0 0 1-.243-1.285.5.5 0 0 1 .416-.58c1.16-.156 1.87-.727 2.303-1.287.13-.167.264-.33.407-.495.032-.036.063-.073.095-.109l.023-.028.004-.005-.364-.364.364.364c.43-.438.582-1.03.582-1.55a.5.5 0 0 1 .5-.5h.053a.5.5 0 0 1 .432.245l.013.024a5.98 5.98 0 0 1 .255.52 7.22 7.22 0 0 1 .43 1.295 9.168 9.168 0 0 1 .243 1.285.5.5 0 0 1-.416.58c-1.16.156-1.87.727-2.303 1.287-.13.167-.264.33-.407.495a3.12 3.12 0 0 1-.095.109l-.023.028-.004.005.364.364-.364-.364c-.43.438-.582 1.03-.582 1.55a.5.5 0 0 1-.5.5h-.053z"/>
                    </svg>
                    Filter Destinations
                </button>
            </div>
            
            <div class="content-container container">
                <!-- Sidebar -->
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-title">Filter Destinations</div>
                    
                    <div class="sidebar-section">
                        <h3>Destination Type</h3>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="national-park"> National Parks
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="game-reserve"> Game Reserves
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="beach"> Beaches
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="type" value="cultural"> Cultural Sites
                            </label>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Wildlife</h3>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="big-five"> Big Five
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="elephants"> Elephants
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="lions"> Lions
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="giraffes"> Giraffes
                            </label>
                        </div>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="wildlife" value="birds"> Bird Watching
                            </label>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Best Time to Visit</h3>
                        <div class="filter-group">
                            <label for="season">Season</label>
                            <select id="season" name="season">
                                <option value="">Any Season</option>
                                <option value="dry">Dry Season (Jun-Oct)</option>
                                <option value="wet">Wet Season (Nov-May)</option>
                                <option value="migration">Migration Season (Jul-Oct)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="sidebar-section">
                        <h3>Price Range</h3>
                        <div class="filter-group">
                            <input type="range" id="price" name="price" min="0" max="1000" value="500">
                            <div class="price-range">
                                <span>$0</span>
                                <span>$1000+</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="filter-button">Apply Filters</button>
                </div>
                
                <!-- Main Content -->
                <div class="main-content section" style="padding-top: 0;">
                    <div class="grid grid-3">
                        <!-- Destination cards remain unchanged -->
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Footer remains the same -->
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <div class="footer-logo">Kenya Safari</div>
                    <p>Experience the magic of Kenya with our personalized safari tours and adventures.</p>