
@extends('portfolio.deliveries')

@section('content')

<body>
    <header>
        <nav>
            <div class="logo">🍔 QuickBite</div>
            <ul class="nav-links">
                <li><a href="/home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <h1>Delicious Food Delivered Fast</h1>
        <p>Order from your favorite restaurants and get it delivered to your door</p>
        <div class="search-bar">
            <input type="text" placeholder="Enter your address...">
            <button class="btn btn-primary">Find Food</button>
        </div>
    </section>

    <div class="container">
        <h2 class="section-title">Popular Categories</h2>
        <div class="categories">
            <div class="category-card">
                <div class="category-icon">🍕</div>
                <h3>Pizza</h3>
            </div>
            <div class="category-card">
                <div class="category-icon">🍔</div>
                <h3>Burgers</h3>
            </div>
            <div class="category-card">
                <div class="category-icon">🍜</div>
                <h3>Asian</h3>
            </div>
            <div class="category-card">
                <div class="category-icon">🥗</div>
                <h3>Healthy</h3>
            </div>
            <div class="category-card">
                <div class="category-icon">🍰</div>
                <h3>Desserts</h3>
            </div>
        </div>

        <h2 class="section-title" id="menu">Featured Dishes</h2>
        <div class="food-grid">
            <div class="food-card">
                <div class="food-image">🍕</div>
                <div class="food-info">
                    <h3 class="food-title">Margherita Pizza</h3>
                    <p class="food-desc">Classic Italian pizza with fresh mozzarella and basil</p>
                    <div class="food-footer">
                        <span class="price">$12.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image">🍔</div>
                <div class="food-info">
                    <h3 class="food-title">Classic Burger</h3>
                    <p class="food-desc">Juicy beef patty with lettuce, tomato, and special sauce</p>
                    <div class="food-footer">
                        <span class="price">$9.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image">🍜</div>
                <div class="food-info">
                    <h3 class="food-title">Ramen Bowl</h3>
                    <p class="food-desc">Savory broth with noodles, egg with lettuce, and tender pork</p>
                    <div class="food-footer">
                        <span class="price">$14.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image">🥗</div>
                <div class="food-info">
                    <h3 class="food-title">Caesar Salad</h3>
                    <p class="food-desc">Fresh romaine with parmesan and crispy</p>
                    <div class="food-footer">
                        <span class="price">$8.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image">🍣</div>
                <div class="food-info">
                    <h3 class="food-title">Sushi Platter</h3>
                    <p class="food-desc">Assorted fresh sushi with wasabi and ginger</p>
                    <div class="food-footer">
                        <span class="price">$18.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="food-card">
                <div class="food-image">🍰</div>
                <div class="food-info">
                    <h3 class="food-title">Chocolate Cake</h3>
                    <p class="food-desc">Rich chocolate cake with creamy frosting</p>
                    <div class="food-footer">
                        <span class="price">$6.99</span>
                        <button class="add-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features" id="about">
        <h2 class="section-title">Why Choose QuickBite?</h2>
        <div class="features-grid">
            <div class="feature">
                <div class="feature-icon">🚀</div>
                <h3>Fast Delivery</h3>
                <p>Get your food delivered in 30 minutes or less</p>
            </div>
            <div class="feature">
                <div class="feature-icon">⭐</div>
                <h3>Quality Food</h3>
                <p>Only the best restaurants and freshest ingredients</p>
            </div>
            <div class="feature">
                <div class="feature-icon">💳</div>
                <h3>Easy Payment</h3>
                <p>Multiple payment options for your convenience</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📱</div>
                <h3>Track Orders</h3>
                <p>Real-time tracking of your order from kitchen to door</p>
            </div>
        </div>
    </section>

    

   
</body>
</html>
