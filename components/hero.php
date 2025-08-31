<!-- Hero Section -->
 <style>
     :root {
            --primary: #3b82f6;
            --secondary: #06b6d4;
            --accent: #9333ea;
            --dark: #020617;
            --darker: #0f172a;
        }
        
        body {
            overflow-x: hidden;
            font-family: 'Inter', sans-serif;
        }
        
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 100%);
            position: relative;
            overflow: hidden;
            padding: 4rem 0;
            display: flex;
            align-items: center;
        }
        
        /* Animated gradient background */
        .gradient-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #0f172a, #1e293b, #334155, #0f172a);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            z-index: 0;
            opacity: 0.8;
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Particle effect */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        /* Content styling */
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(90deg, var(--secondary), var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradientShift 3s ease infinite;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Tech logos styling */
        .tech-icon {
            width: 60px;
            height: 60px;
            animation: float 6s ease-in-out infinite;
            filter: drop-shadow(0 0 10px rgba(59, 130, 246, 0.3));
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 16px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .tech-icon:hover {
            transform: scale(1.15) translateY(-5px) rotate(5deg);
            filter: drop-shadow(0 0 15px rgba(59, 130, 246, 0.5));
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(6, 182, 212, 0.2));
            border-color: rgba(59, 130, 246, 0.3);
        }
        
        /* Staggered animation delays */
        .tech-icon:nth-child(1) { animation-delay: 0s; }
        .tech-icon:nth-child(2) { animation-delay: 0.5s; }
        .tech-icon:nth-child(3) { animation-delay: 1s; }
        .tech-icon:nth-child(4) { animation-delay: 1.5s; }
        .tech-icon:nth-child(5) { animation-delay: 2s; }
        .tech-icon:nth-child(6) { animation-delay: 2.5s; }
        .tech-icon:nth-child(7) { animation-delay: 3s; }
        .tech-icon:nth-child(8) { animation-delay: 3.5s; }
        .tech-icon:nth-child(9) { animation-delay: 4s; }
        .tech-icon:nth-child(10) { animation-delay: 4.5s; }
        .tech-icon:nth-child(11) { animation-delay: 5s; }
        .tech-icon:nth-child(12) { animation-delay: 5.5s; }
        .tech-icon:nth-child(13) { animation-delay: 6s; }
        .tech-icon:nth-child(14) { animation-delay: 6.5s; }
        .tech-icon:nth-child(15) { animation-delay: 7s; }
        .tech-icon:nth-child(16) { animation-delay: 7.5s; }
        .tech-icon:nth-child(17) { animation-delay: 8s; }
        .tech-icon:nth-child(18) { animation-delay: 8.5s; }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }
        
        /* Invert for dark logos */
        .invert {
            filter: invert(1) drop-shadow(0 0 8px rgba(255, 255, 255, 0.2));
        }
        
        /* Button styling */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.6);
            background: linear-gradient(135deg, var(--accent), var(--primary));
        }
        
        .btn-outline-light {
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.2);
        }
        
        /* Lead text styling */
        .lead {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .tech-icon {
                width: 50px;
                height: 50px;
            }
            
            .display-3 {
                font-size: 2.5rem;
            }
            
            .lead {
                font-size: 1.1rem;
            }
            
            .btn-lg {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
 </style>
  <!-- Hero Section -->
  <header class="hero-section text-white">
        <!-- Animated gradient background -->
        <div class="gradient-bg"></div>
        
        <!-- Particle effect -->
        <div id="particles-js"></div>
        
        <div class="container text-center hero-content">
            <h1 class="display-3 fw-bold mb-4 text-gradient">
                Building Next-Gen Web Applications
            </h1>
            <p class="lead mb-5 opacity-75">
                Experts in <span class="fw-semibold text-primary">React</span>, <span class="fw-semibold text-primary">Next.js</span>, 
                <span class="fw-semibold text-primary">Node.js</span>, <span class="fw-semibold text-primary">NestJS</span>, 
                <span class="fw-semibold text-primary">MongoDB</span> & <span class="fw-semibold text-primary">SQL</span>.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap mb-5">
                <a href="#services" class="btn btn-primary btn-lg shadow">
                    <i class="fas fa-rocket me-2"></i>Get Started
                </a>
                <a href="#contact" class="btn btn-outline-light btn-lg shadow">
                    <i class="fas fa-comment me-2"></i>Contact Us
                </a>
            </div>

            <div class="tech-logos mt-5 d-flex justify-content-center flex-wrap gap-4">
                <!-- Frontend -->
                <img src="https://cdn.worldvectorlogo.com/logos/react-2.svg" class="tech-icon" alt="React" />
                <img src="https://cdn.worldvectorlogo.com/logos/next-js.svg" class="tech-icon invert" alt="Next.js" />
                <img src="https://cdn.worldvectorlogo.com/logos/vue-js-1.svg" class="tech-icon" alt="Vue.js" />
                <img src="https://cdn.worldvectorlogo.com/logos/angular-icon-1.svg" class="tech-icon" alt="Angular" />
                
                <!-- Backend -->
                <img src="https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg" class="tech-icon" alt="Node.js" />
                <img src="https://cdn.worldvectorlogo.com/logos/nestjs.svg" class="tech-icon" alt="NestJS" />
                <img src="https://cdn.worldvectorlogo.com/logos/express-109.svg" class="tech-icon invert" alt="Express.js" />
                <img src="https://cdn.worldvectorlogo.com/logos/php-1.svg" class="tech-icon" alt="PHP" />
                <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" class="tech-icon" alt="Laravel" />

                <!-- Databases -->
                <img src="https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg" class="tech-icon" alt="MongoDB" />
                <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg" class="tech-icon invert" alt="MySQL" />
                <img src="https://cdn.worldvectorlogo.com/logos/postgresql.svg" class="tech-icon" alt="PostgreSQL" />
                <img src="https://cdn.worldvectorlogo.com/logos/redis.svg" class="tech-icon" alt="Redis" />

                <!-- CMS / Tools -->
                <img src="https://cdn.worldvectorlogo.com/logos/wordpress-icon.svg" class="tech-icon" alt="WordPress" />
                <img src="https://cdn.worldvectorlogo.com/logos/shopify.svg" class="tech-icon" alt="Shopify" />
                <img src="https://cdn.worldvectorlogo.com/logos/docker.svg" class="tech-icon" alt="Docker" />
                <img src="https://cdn.worldvectorlogo.com/logos/kubernetes.svg" class="tech-icon invert" alt="Kubernetes" />
                <img src="https://cdn.worldvectorlogo.com/logos/aws-2.svg" class="tech-icon" alt="AWS" />
                <img src="https://cdn.worldvectorlogo.com/logos/git-icon.svg" class="tech-icon invert" alt="Git" />
            </div>
        </div>
    </header>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#3b82f6"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 2,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#3b82f6",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "push": {
                            "particles_nb": 4
                        }
                    }
                },
                "retina_detect": true
            });
        });
    </script>
