@extends('portfolio.templates')

@section('content')
   
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo"><img src="{{ Vite::asset('resources/img/logo portfolio.png') }}" width="200" alt="Portfolio"></div>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h1>Hi, I'm Joselito Pasculado</h1>
        
        <h3>I'm an independent Laravel Developer and Designer from the Philippines.</h3>
        <!--<p>Laravel Developer & Designer</p> -->
</br>
        <a href="#contact" class="btn">Get In Touch</a>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-text">
                <p>I'm a passionate web developer with expertise in creating beautiful and functional websites. With several years of experience in the field, I specialize in modern web technologies and responsive design.</p>
                <p>I love turning complex problems into simple, beautiful, and intuitive designs. When I'm not coding, you'll find me exploring new technologies and working on personal projects.</p>
            </div>
            <div class="about-image">
                <img src="{{ Vite::asset('resources/img/portfolio.jpg') }}" alt="Portfolio">
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2>My Skills</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Frontend Development</h3>
                <p>HTML, CSS, JavaScript, bootstrap, React, Vue.js, responsive design, and modern UI frameworks.</p>
            </div>
            <div class="skill-card">
                <h3>Backend Development</h3>
                <p>MySQL, PostgreSQL, MongoDB, Node.js, Python, databases, API development, and server management.</p>
            </div>
            <div class="skill-card">
                <h3>UI/UX Design</h3>
                <p>User interface design, wireframing, prototyping, and user experience optimization.</p>
            </div>
            <div class="skill-card">
                <h3>Tools & Others</h3>
                <p>Git, GitHub, VS Code, Figma, Adobe XD, and agile methodologies.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>My Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-title">Project 1</div>
                <div class="project-image">
                     <img src="{{ Vite::asset('resources/img/food.png') }}" width="150" alt="Dashboard">
                </div>
                <div class="project-content">
                    <h3>E-Commerce Website</h3>
                    <p>A fully responsive e-commerce platform with cart functionality and payment integration.</p>
                    <a href="/delivery" class="btn">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-title">Project 2</div>
                <div class="project-image">
                     <img src="{{ Vite::asset('resources/img/admin4.png') }}" width="150" alt="Dashboard">
                </div>
               
                <div class="project-content">
                    <h3>Admin Dashboard</h3>
                    <p>An interactive dashboard for tracking personal projects and analytics.</p>
                    <a href="/dashboard" class="btn">View Project</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-title">Project 3</div>
                <div class="project-image">
                    <img src="{{ Vite::asset('resources/img/crud user.png') }}" width="100" alt="Dashboard">
                </div>
                <div class="project-content">
                    <h3>Users CRUD Project</h3>
                    <p>These operations allow a user to create new records, view existing data, modify existing records, and remove data.</p>
                    <a href="/doctors" class="btn">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Get In Touch</h2>
        <div class="contact-form">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

   
