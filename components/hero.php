<style>
    :root {
        --primary: #6366f1;
        /* Indigo */
        --secondary: #06b6d4;
        /* Cyan */
        --dark: #0f172a;
        /* Navy */
        --green-dark: #064e3b;
        /* Dark green */
        --card-bg: rgba(255, 255, 255, 0.05);
        --card-border: rgba(255, 255, 255, 0.1);
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 6rem 2rem 4rem;
        background: linear-gradient(135deg, var(--primary), var(--green-dark));
        overflow: hidden;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.15);
        pointer-events: none;
    }

    /* Hero Content */
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 1000px;
        margin: auto;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 900;
        line-height: 1.2;
        margin-bottom: 1.5rem;
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .text-gradient {
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-content p {
        font-size: 1.25rem;
        margin: 1.5rem 0 2.5rem;
        color: #e0e7ff;
        text-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Buttons */
    .d-flex {
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 3rem;
    }

    .btn-primary {
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        border: none;
        padding: 0.8rem 2.2rem;
        font-size: 1.15rem;
        font-weight: 700;
        border-radius: 10px;
        transition: all 0.4s ease;
        box-shadow: 0 6px 15px rgba(99, 102, 241, 0.4);
    }

    .btn-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 25px rgba(99, 102, 241, 0.5);
    }

    .btn-outline-light {
        border: 2px solid rgba(255, 255, 255, 0.7);
        color: white;
        padding: 0.8rem 2.2rem;
        font-size: 1.15rem;
        font-weight: 700;
        border-radius: 10px;
        transition: all 0.4s ease;
    }

    .btn-outline-light:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-3px) scale(1.05);
    }

    /* Enhanced Tech Cards */
    .tech-section-title {
        font-size: 1.2rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 2.5rem;
        color: rgba(255, 255, 255, 0.9);
        position: relative;
        display: inline-block;
        font-weight: 600;
        padding-bottom: 0.5rem;
    }

    .tech-section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        border-radius: 3px;
    }

    .tech-icons-container {
        margin-top: 2rem;
    }

    .tech-icons {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
        gap: 1.5rem;
        max-width: 1000px;
        margin: 0 auto;
    }

    .tech-icon {
        padding: 1.2rem 0.8rem;
        background: var(--card-bg);
        border-radius: 12px;
        transition: all 0.4s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border: 1px solid var(--card-border);
        position: relative;
        overflow: hidden;
        cursor: pointer;
        height: 100%;
    }

    .tech-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        opacity: 0.7;
        transition: opacity 0.3s ease;
    }

    .tech-icon:hover::before {
        opacity: 1;
    }

    .tech-icon img {
        width: 50px;
        height: 50px;
        transition: all 0.4s ease;
        object-fit: contain;
        margin-bottom: 0.8rem;
    }

    .tech-icon:hover img {
        transform: scale(1.15);
    }

    .tech-name {
        font-size: 0.85rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.9);
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        line-height: 1.3;
    }

    .tech-icon:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
        background: rgba(255, 255, 255, 0.08);
    }

    /* Pulse animation for cards */
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(99, 102, 241, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(99, 102, 241, 0);
        }
    }

    .tech-icon:nth-child(4n+1) {
        animation: pulse 4s infinite 1s;
    }

    .tech-icon:nth-child(4n+2) {
        animation: pulse 4s infinite 2s;
    }

    .tech-icon:nth-child(4n+3) {
        animation: pulse 4s infinite 3s;
    }

    .tech-icon:nth-child(4n+4) {
        animation: pulse 4s infinite 4s;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .hero-content h1 {
            font-size: 3rem;
        }

        .hero-content p {
            font-size: 1.1rem;
        }

        .tech-icons {
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 1.2rem;
        }

        .tech-icon img {
            width: 45px;
            height: 45px;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 5rem 1.5rem 3rem;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-content p {
            font-size: 1.05rem;
        }

        .d-flex {
            flex-direction: column;
            gap: 1rem;
        }

        .tech-icons {
            grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
            gap: 1rem;
        }

        .tech-icon {
            padding: 1rem 0.5rem;
        }

        .tech-icon img {
            width: 40px;
            height: 40px;
        }

        .tech-name {
            font-size: 0.75rem;
        }

        .tech-section-title {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 2.2rem;
        }

        .tech-icons {
            grid-template-columns: repeat(4, 1fr);
        }
    }
</style>

<section class="hero-section">
    <div class="hero-content">
        <h1>We Build <span class="text-gradient">Scalable Web Applications</span></h1>
        <p>Empowering businesses with <strong>modern frameworks, cloud solutions, and databases</strong> to deliver
            high-performance digital products.</p>

        <div class="d-flex">
            <a href="#get-started" class="btn btn-primary">🚀 Get Started</a>
            <a href="#contact" class="btn btn-outline-light">💬 Contact Us</a>
        </div>

        <!-- Enhanced Tech Icons -->
        <div class="tech-icons-container">
            <div class="tech-section-title">Technologies We Work With</div>
            <div class="tech-icons">
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React">
                    <div class="tech-name">React</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nextjs/nextjs-original.svg"
                        alt="Next.js">
                    <div class="tech-name">Next.js</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js">
                    <div class="tech-name">Vue.js</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg"
                        alt="Angular">
                    <div class="tech-name">Angular</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                        alt="Node.js">
                    <div class="tech-name">Node.js</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nestjs/nestjs-original-wordmark.svg"
                        alt="NestJS">
                    <div class="tech-name">NestJS</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                    <div class="tech-name">PHP</div>
                </div>
                <div class="tech-icon">
                    <img src="https://laravel.com/img/logotype.min.svg" alt="Laravel">
                    <div class="tech-name">Laravel</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg"
                        alt="MongoDB">
                    <div class="tech-name">MongoDB</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL">
                    <div class="tech-name">MySQL</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg"
                        alt="PostgreSQL">
                    <div class="tech-name">PostgreSQL</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/redis/redis-original.svg" alt="Redis">
                    <div class="tech-name">Redis</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg"
                        alt="Docker">
                    <div class="tech-name">Docker</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg"
                        alt="Kubernetes">
                    <div class="tech-name">Kubernetes</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg"
                        alt="AWS">
                    <div class="tech-name">AWS</div>
                </div>
                <div class="tech-icon">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git">
                    <div class="tech-name">Git</div>
                </div>
            </div>
        </div>
    </div>
</section>