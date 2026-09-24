<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elevate & Accolade | Corporate Event & Award Ceremony Production</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Config for Custom Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            900: '#0B0F19',
                            800: '#111827',
                            700: '#1F2937',
                        },
                        gold: {
                            DEFAULT: '#D4AF37',
                            light: '#E6CA65',
                            dark: '#AA8C2C',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom scrollbar and glassmorphism helpers */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0B0F19;
        }
        ::-webkit-scrollbar-thumb {
            background: #1F2937;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #D4AF37;
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(212, 175, 55, 0.15);
        }
        .gold-glow {
            box-shadow: 0 0 25px rgba(212, 175, 55, 0.2);
        }
    </style>
</head>
<body class="bg-navy-900 text-gray-100 font-sans antialiased selection:bg-gold selection:text-navy-900">

    <!-- Navigation Bar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-navy-900/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold to-gold-dark flex items-center justify-center text-navy-900 font-bold text-xl shadow-lg group-hover:scale-105 transition-transform">
                    E&A
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-bold tracking-wider text-white uppercase">Elevate <span class="text-gold">&</span> Accolade</span>
                    <span class="text-[10px] tracking-widest text-gray-400 uppercase">Events & Award Production</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#services" class="text-sm font-medium text-gray-300 hover:text-gold transition-colors">Services</a>
                <a href="#portfolio" class="text-sm font-medium text-gray-300 hover:text-gold transition-colors">Portfolio</a>
                <a href="#awards-production" class="text-sm font-medium text-gray-300 hover:text-gold transition-colors">Award Production</a>
                <a href="#testimonials" class="text-sm font-medium text-gray-300 hover:text-gold transition-colors">Testimonials</a>
                <a href="#estimator" class="text-sm font-medium text-gray-300 hover:text-gold transition-colors">Cost Estimator</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#contact" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-gold to-gold-dark text-navy-900 font-semibold text-sm hover:opacity-95 transition-all shadow-md hover:gold-glow">
                    Book Consultation
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-300 hover:text-gold focus:outline-none p-2">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Modal / Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-navy-800 border-b border-gray-700 px-4 pt-2 pb-6 space-y-3">
            <a href="#services" class="block py-2 text-base font-medium text-gray-300 hover:text-gold">Services</a>
            <a href="#portfolio" class="block py-2 text-base font-medium text-gray-300 hover:text-gold">Portfolio</a>
            <a href="#awards-production" class="block py-2 text-base font-medium text-gray-300 hover:text-gold">Award Production</a>
            <a href="#testimonials" class="block py-2 text-base font-medium text-gray-300 hover:text-gold">Testimonials</a>
            <a href="#estimator" class="block py-2 text-base font-medium text-gray-300 hover:text-gold">Cost Estimator</a>
            <a href="#contact" class="block w-full text-center mt-2 py-3 rounded-full bg-gold text-navy-900 font-semibold text-sm">Book Consultation</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Animated Background Glows -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gold/10 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-900/20 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center relative z-10">
            <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full bg-navy-800 border border-gold/30 text-gold text-xs font-semibold tracking-wider uppercase mb-6 shadow-inner">
                <i class="fa-solid fa-award"></i>
                <span>Premier Corporate & Awards Production Agency</span>
            </div>
            
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-tight max-w-5xl mx-auto mb-8">
                Crafting Iconic <span class="bg-gradient-to-r from-gold via-gold-light to-gold-dark bg-clip-text text-transparent">Corporate Events</span> & Prestigious Galas
            </h1>
            
            <p class="text-lg sm:text-xl text-gray-400 max-w-3xl mx-auto mb-10 leading-relaxed">
                We transform corporate gatherings into breathtaking milestones. From high-stakes executive retreats to world-class red-carpet award ceremonies, we engineer perfection.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
                <a href="#estimator" class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-gold to-gold-dark text-navy-900 font-bold text-base hover:opacity-95 transition-all shadow-xl hover:gold-glow flex items-center justify-center space-x-3">
                    <span>Plan Your Event</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#portfolio" class="w-full sm:w-auto px-8 py-4 rounded-full bg-navy-800/80 hover:bg-navy-700 text-white font-semibold text-base border border-gray-700 hover:border-gold/50 transition-all flex items-center justify-center space-x-3">
                    <span>Explore Services & Work</span>
                </a>
            </div>

            <!-- Trusted Client Badge List -->
            <div class="mt-20 pt-10 border-t border-gray-800/80">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-6">Trusted by Fortune 500 Leaders & Global Enterprises</p>
                <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                    <div class="flex items-center space-x-2 text-lg font-bold tracking-wider text-gray-300">
                        <i class="fa-solid fa-cube text-gold"></i><span>APEX CORP</span>
                    </div>
                    <div class="flex items-center space-x-2 text-lg font-bold tracking-wider text-gray-300">
                        <i class="fa-solid fa-shield-halved text-gold"></i><span>VANGUARD GLOBAL</span>
                    </div>
                    <div class="flex items-center space-x-2 text-lg font-bold tracking-wider text-gray-300">
                        <i class="fa-solid fa-gem text-gold"></i><span>AURA HOLDINGS</span>
                    </div>
                    <div class="flex items-center space-x-2 text-lg font-bold tracking-wider text-gray-300">
                        <i class="fa-solid fa-bolt text-gold"></i><span>VERTEX TECH</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-navy-800/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold text-xs font-bold tracking-widest uppercase mb-3 block">What We Do</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight mb-4">Comprehensive Corporate Productions</h2>
                <p class="text-gray-400 text-base">End-to-end event engineering designed to elevate your brand prestige and engage high-level stakeholders.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-champagne-glasses"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Annual Galas & Dinners</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Exquisite themed annual banquets with custom dining curation, bespoke lighting design, and stellar guest management.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Inquire Now</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Award Ceremonies</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Red-carpet experiences, bespoke trophy design, theatrical stagecraft, and seamless live broadcast production.
                    </p>
                    <a href="#awards-production" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Learn More</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Executive Retreats</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        High-end board meetings, leadership summits, and VIP incentive getaways crafted in ultra-exclusive luxury destinations.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Inquire Now</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Hybrid & Virtual Events</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Broadcast-grade studio production, interactive virtual event platforms, and seamless engagement for global audiences.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Inquire Now</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Product Launches</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Immersive brand unveilings, press reveal shows, and experiential activations designed to captivate media and consumers.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Inquire Now</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="glass-card rounded-2xl p-8 hover:border-gold/50 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-gold/10 border border-gold/30 flex items-center justify-center text-gold text-2xl mb-6 group-hover:bg-gold group-hover:text-navy-900 transition-all">
                        <i class="fa-solid fa-chess-queen"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Full-Service Logistics</h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        Comprehensive VIP concierge, venue sourcing, security protocols, stage management, and professional audio-visuals.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-xs font-bold text-gold uppercase tracking-wider group-hover:underline">
                        <span>Inquire Now</span>
                        <i class="fa-solid fa-chevron-right ml-2 text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Award Ceremony Production Showcase -->
    <section id="awards-production" class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-gold text-xs font-bold tracking-widest uppercase mb-3 block">Specialist Expertise</span>
                    <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight mb-6">The Art of Award Ceremony Production</h2>
                    <p class="text-gray-300 text-base leading-relaxed mb-8">
                        Honoring achievement requires absolute precision and grandeur. We engineer award ceremonies that celebrate excellence with dramatic lighting, flawless run-of-shows, and unforgettable red-carpet moments.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold flex-shrink-0 mt-1">
                                <i class="fa-solid fa-medal"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Bespoke Trophy & Award Design</h4>
                                <p class="text-gray-400 text-sm">Custom crystal, metal, and sustainable material awards crafted to mirror your corporate prestige.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold flex-shrink-0 mt-1">
                                <i class="fa-solid fa-film"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Theatrical Stage & AV Engineering</h4>
                                <p class="text-gray-400 text-sm">Cinematic projection mapping, dynamic lighting cues, pristine concert-grade audio, and multi-camera live streaming.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-gold/10 border border-gold/30 flex items-center justify-center text-gold flex-shrink-0 mt-1">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white mb-1">Red Carpet & VIP Protocol</h4>
                                <p class="text-gray-400 text-sm">Paparazzi photo walls, celebrity or executive host management, security detail, and VIP green room coordination.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual Grid -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="rounded-2xl overflow-hidden border border-gray-800 h-64 bg-navy-800 relative group">
                            <img src="https://placehold.co/600x400/111827/D4AF37?text=Gala+Stage+Production" alt="Gala Stage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Stage+Production'">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/90 via-transparent to-transparent flex items-end p-4">
                                <span class="text-xs font-semibold text-gold tracking-wide uppercase">Grand Stage & Lighting</span>
                            </div>
                        </div>
                        <div class="rounded-2xl overflow-hidden border border-gray-800 h-44 bg-navy-800 relative group">
                            <img src="https://placehold.co/600x400/111827/D4AF37?text=Trophy+Unveiling" alt="Trophy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Trophy'">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/90 via-transparent to-transparent flex items-end p-4">
                                <span class="text-xs font-semibold text-gold tracking-wide uppercase">Bespoke Trophies</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="rounded-2xl overflow-hidden border border-gray-800 h-44 bg-navy-800 relative group">
                            <img src="https://placehold.co/600x400/111827/D4AF37?text=Red+Carpet" alt="Red Carpet" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Red+Carpet'">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/90 via-transparent to-transparent flex items-end p-4">
                                <span class="text-xs font-semibold text-gold tracking-wide uppercase">Red Carpet Entry</span>
                            </div>
                        </div>
                        <div class="rounded-2xl overflow-hidden border border-gray-800 h-64 bg-navy-800 relative group">
                            <img src="https://placehold.co/600x400/111827/D4AF37?text=Executive+Banquet" alt="Banquet" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Banquet'">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/90 via-transparent to-transparent flex items-end p-4">
                                <span class="text-xs font-semibold text-gold tracking-wide uppercase">Executive Banquets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Portfolio Showcase -->
    <section id="portfolio" class="py-24 bg-navy-800/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-gold text-xs font-bold tracking-widest uppercase mb-3 block">Our Track Record</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight mb-4">Past Productions & Masterpieces</h2>
                <p class="text-gray-400 text-base">Explore select moments from our award galas, executive conferences, and grand brand unveilings.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                <button onclick="filterPortfolio('all')" class="portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-gold text-navy-900 transition-all shadow-md" data-filter="all">All Events</button>
                <button onclick="filterPortfolio('galas')" class="portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-navy-800 text-gray-300 hover:bg-navy-700 hover:text-white transition-all border border-gray-700" data-filter="galas">Award Galas</button>
                <button onclick="filterPortfolio('conferences')" class="portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-navy-800 text-gray-300 hover:bg-navy-700 hover:text-white transition-all border border-gray-700" data-filter="conferences">Conferences</button>
                <button onclick="filterPortfolio('launches')" class="portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-navy-800 text-gray-300 hover:bg-navy-700 hover:text-white transition-all border border-gray-700" data-filter="launches">Product Launches</button>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="galas" onclick="openModal('Global Innovation Awards 2025', 'A landmark 1,200-guest award gala held in New York. Features bespoke crystal trophies, custom stage design with live projection mapping, and a star-studded red carpet.', 'https://placehold.co/800x600/111827/D4AF37?text=Global+Innovation+Awards', '1,200 Attendees • New York City • Full Production')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=Global+Innovation+Awards" alt="Global Innovation Awards" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Award+Gala'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Award Gala</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">New York • 1,200 Guests</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Global Innovation Awards 2025</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">A landmark gala featuring bespoke crystal trophies and immersive projection mapping.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="conferences" onclick="openModal('Apex Leadership Summit', 'An exclusive 3-day executive retreat and strategy conference in Geneva. Complete with keynote arena setup, VIP networking lounges, and simultaneous translation systems.', 'https://placehold.co/800x600/111827/D4AF37?text=Apex+Leadership+Summit', '450 Executives • Geneva • Hybrid Summit')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=Apex+Leadership+Summit" alt="Apex Leadership Summit" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Conference'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Conference</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">Geneva • 450 Executives</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Apex Leadership Summit</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">An exclusive 3-day executive retreat and strategy conference with VIP lounges.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="launches" onclick="openModal('Vanguard EV Vehicle Reveal', 'An electric vehicle launch event featuring laser light choreography, high-impact keynote staging, and immersive test-drive activations for press and investors.', 'https://placehold.co/800x600/111827/D4AF37?text=Vanguard+EV+Reveal', '800 Media & Investors • Los Angeles • Brand Activation')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=Vanguard+EV+Reveal" alt="Vanguard EV Reveal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Product+Launch'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Product Launch</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">Los Angeles • 800 Guests</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Vanguard EV Vehicle Reveal</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">An electric vehicle launch featuring laser light choreography and keynote staging.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="galas" onclick="openModal('Crown Energy Annual Gala', 'An elite corporate banquet honoring top energy sector pioneers with custom gold-plated trophies and a private symphony orchestra performance.', 'https://placehold.co/800x600/111827/D4AF37?text=Crown+Energy+Gala', '600 VIPs • London • Gala Dinner')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=Crown+Energy+Gala" alt="Crown Energy Gala" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Award+Gala'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Award Gala</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">London • 600 VIPs</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Crown Energy Annual Gala</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">Elite corporate banquet honoring energy pioneers with gold-plated trophies.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="conferences" onclick="openModal('Global FinTech Forum', 'A high-profile financial technology conference hosting international speakers, interactive roundtable workshops, and VIP networking receptions.', 'https://placehold.co/800x600/111827/D4AF37?text=FinTech+Forum', '1,000 Delegates • Singapore • Conference')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=FinTech+Forum" alt="FinTech Forum" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Conference'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Conference</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">Singapore • 1,000 Delegates</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Global FinTech Forum</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">Financial technology conference hosting international speakers and workshops.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="portfolio-item glass-card rounded-2xl overflow-hidden group cursor-pointer border border-gray-800 hover:border-gold/50 transition-all duration-300" data-category="launches" onclick="openModal('Aura Luxury Watch Showcase', 'An exclusive press unveiling for a Swiss horology brand featuring immersive sensory installations, private champagne tastings, and celebrity guests.', 'https://placehold.co/800x600/111827/D4AF37?text=Aura+Watch+Showcase', '250 Media & Collectors • Paris • Brand Launch')">
                    <div class="h-64 overflow-hidden relative">
                        <img src="https://placehold.co/600x400/111827/D4AF37?text=Aura+Watch+Showcase" alt="Aura Watch Showcase" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/600x400/111827/D4AF37?text=Product+Launch'">
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-navy-900/80 backdrop-blur border border-gold/30 text-gold text-[10px] font-bold uppercase">Product Launch</div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-gold font-semibold uppercase tracking-wider">Paris • 250 Collectors</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">Aura Luxury Watch Showcase</h3>
                        <p class="text-gray-400 text-sm line-clamp-2">Press unveiling for a Swiss horology brand with sensory installations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Portfolio Details -->
    <div id="portfolio-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-navy-900/80 backdrop-blur-md hidden">
        <div class="glass-card max-w-2xl w-full rounded-2xl overflow-hidden border border-gold/30 shadow-2xl relative animate-in fade-in zoom-in duration-300">
            <button onclick="closeModal()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-navy-800 text-gray-300 hover:text-white hover:bg-gold/20 flex items-center justify-center transition-all z-10">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
            <div class="h-72 overflow-hidden relative">
                <img id="modal-img" src="" alt="Portfolio Item" class="w-full h-full object-cover" onerror="this.src='https://placehold.co/800x600/111827/D4AF37?text=Event+Detail'">
            </div>
            <div class="p-8">
                <span id="modal-tag" class="text-xs font-semibold text-gold uppercase tracking-wider"></span>
                <h3 id="modal-title" class="text-2xl font-bold text-white mt-1 mb-3"></h3>
                <p id="modal-desc" class="text-gray-300 text-sm leading-relaxed mb-6"></p>
                <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                    <span class="text-xs text-gray-400">Looking to orchestrate a similar event?</span>
                    <a href="#estimator" onclick="closeModal()" class="px-5 py-2 rounded-full bg-gold text-navy-900 font-semibold text-xs uppercase tracking-wider hover:opacity-90">Get Custom Estimate</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Interactive Event Cost Estimator / Booking Form -->
    <section id="estimator" class="py-24 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-gold text-xs font-bold tracking-widest uppercase mb-3 block">Interactive Calculator</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight mb-4">Event Cost Estimator & Inquiry</h2>
                <p class="text-gray-400 text-base">Configure your upcoming corporate event or award ceremony to receive an instant ballpark estimate and priority booking consultation.</p>
            </div>

            <div class="glass-card rounded-3xl p-6 sm:p-10 border border-gold/30 shadow-2xl">
                <form id="estimator-form" onsubmit="handleFormSubmit(event)" class="space-y-8">
                    <!-- Step 1: Event Type -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-200 mb-3">1. Select Event Type</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <label class="cursor-pointer">
                                <input type="radio" name="event_type" value="gala" class="peer hidden" checked onchange="calculateEstimate()">
                                <div class="p-4 rounded-xl bg-navy-800/80 border border-gray-700 peer-checked:border-gold peer-checked:bg-gold/10 transition-all text-center">
                                    <i class="fa-solid fa-trophy text-gold text-xl mb-2"></i>
                                    <span class="block text-sm font-semibold text-white">Award Gala</span>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="event_type" value="summit" class="peer hidden" onchange="calculateEstimate()">
                                <div class="p-4 rounded-xl bg-navy-800/80 border border-gray-700 peer-checked:border-gold peer-checked:bg-gold/10 transition-all text-center">
                                    <i class="fa-solid fa-briefcase text-gold text-xl mb-2"></i>
                                    <span class="block text-sm font-semibold text-white">Executive Summit</span>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="event_type" value="launch" class="peer hidden" onchange="calculateEstimate()">
                                <div class="p-4 rounded-xl bg-navy-800/80 border border-gray-700 peer-checked:border-gold peer-checked:bg-gold/10 transition-all text-center">
                                    <i class="fa-solid fa-rocket text-gold text-xl mb-2"></i>
                                    <span class="block text-sm font-semibold text-white">Product Launch</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Step 2: Guest Count Slider -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="text-sm font-semibold text-gray-200">2. Expected Guest Count</label>
                            <span id="guest-count-display" class="text-gold font-bold text-base">300 Guests</span>
                        </div>
                        <input type="range" id="guest-slider" min="50" max="2000" step="50" value="300" oninput="updateGuestCount(this.value)" class="w-full accent-gold bg-navy-800 h-2 rounded-lg cursor-pointer">
                    </div>

                    <!-- Step 3: Add-on Services -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-200 mb-3">3. Required Production Services</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="flex items-center space-x-3 p-3 rounded-xl bg-navy-800/60 border border-gray-700 cursor-pointer hover:border-gold/50">
                                <input type="checkbox" name="services" value="trophies" checked onchange="calculateEstimate()" class="accent-gold w-4 h-4 rounded">
                                <span class="text-sm text-gray-300">Bespoke Trophies & Awards</span>
                            </label>
                            <label class="flex items-center space-x-3 p-3 rounded-xl bg-navy-800/60 border border-gray-700 cursor-pointer hover:border-gold/50">
                                <input type="checkbox" name="services" value="av" checked onchange="calculateEstimate()" class="accent-gold w-4 h-4 rounded">
                                <span class="text-sm text-gray-300">Advanced AV & Stage Production</span>
                            </label>
                            <label class="flex items-center space-x-3 p-3 rounded-xl bg-navy-800/60 border border-gray-700 cursor-pointer hover:border-gold/50">
                                <input type="checkbox" name="services" value="redcarpet" checked onchange="calculateEstimate()" class="accent-gold w-4 h-4 rounded">
                                <span class="text-sm text-gray-300">Red Carpet & VIP Concierge</span>
                            </label>
                            <label class="flex items-center space-x-3 p-3 rounded-xl bg-navy-800/60 border border-gray-700 cursor-pointer hover:border-gold/50">
                                <input type="checkbox" name="services" value="hybrid" onchange="calculateEstimate()" class="accent-gold w-4 h-4 rounded">
                                <span class="text-sm text-gray-300">Hybrid Virtual Broadcasting</span>
                            </label>
                        </div>
                    </div>

                    <!-- Ballpark Estimate Box -->
                    <div class="p-6 rounded-2xl bg-gradient-to-r from-navy-900 to-navy-800 border border-gold/40 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div>
                            <span class="text-xs uppercase tracking-widest text-gray-400 block mb-1">Estimated Investment Range</span>
                            <div id="estimate-output" class="text-2xl sm:text-3xl font-extrabold text-gold">$45,000 - $75,000</div>
                        </div>
                        <span class="text-xs text-gray-400 max-w-xs text-center sm:text-right">*Ballpark estimate only. Final proposal depends on venue, duration, and custom requirements.</span>
                    </div>

                    <!-- Step 4: Contact Information -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-gray-800">
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-2">Your Name</label>
                            <input type="text" required placeholder="Eleanor Vance" class="w-full px-4 py-3 rounded-xl bg-navy-800 border border-gray-700 text-white focus:border-gold focus:outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-2">Corporate Email</label>
                            <input type="email" required placeholder="eleanor@apexcorp.com" class="w-full px-4 py-3 rounded-xl bg-navy-800 border border-gray-700 text-white focus:border-gold focus:outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-2">Company / Organization</label>
                            <input type="text" placeholder="Apex Corporation" class="w-full px-4 py-3 rounded-xl bg-navy-800 border border-gray-700 text-white focus:border-gold focus:outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-gray-400 mb-2">Estimated Date</label>
                            <input type="date" class="w-full px-4 py-3 rounded-xl bg-navy-800 border border-gray-700 text-white focus:border-gold focus:outline-none transition-all">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-gold to-gold-dark text-navy-900 font-bold text-base hover:opacity-95 transition-all shadow-xl hover:gold-glow flex items-center justify-center space-x-2">
                        <span>Submit Booking Inquiry & Request Detailed Proposal</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-navy-800/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-gold text-xs font-bold tracking-widest uppercase mb-3 block">Client Testimonials</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight mb-4">Praise From Industry Leaders</h2>
                <p class="text-gray-400 text-base">Hear what C-suite executives and event directors say about partnering with Elevate & Accolade.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="glass-card rounded-2xl p-8 border border-gray-800 flex flex-col justify-between">
                    <div>
                        <div class="flex text-gold text-sm space-x-1 mb-6">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic">
                            "Elevate & Accolade produced our annual global awards gala with breathtaking precision. From the custom crystal trophies to the flawless live broadcast, every detail was world-class."
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 pt-4 border-t border-gray-800">
                        <div class="w-12 h-12 rounded-full bg-gold/20 border border-gold/40 flex items-center justify-center text-gold font-bold">
                            JS
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">Jonathan Sterling</h4>
                            <p class="text-xs text-gray-400">Chief Marketing Officer, Vanguard Global</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="glass-card rounded-2xl p-8 border border-gray-800 flex flex-col justify-between">
                    <div>
                        <div class="flex text-gold text-sm space-x-1 mb-6">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic">
                            "Their team engineered our executive retreat in Geneva with absolute discretion and luxury. Our board members were thoroughly impressed by the seamless logistics and venue curation."
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 pt-4 border-t border-gray-800">
                        <div class="w-12 h-12 rounded-full bg-gold/20 border border-gold/40 flex items-center justify-center text-gold font-bold">
                            MC
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">Margaret Chen</h4>
                            <p class="text-xs text-gray-400">VP of Corporate Affairs, Apex Corp</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass-card rounded-2xl p-8 border border-gray-800 flex flex-col justify-between">
                    <div>
                        <div class="flex text-gold text-sm space-x-1 mb-6">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-300 text-sm leading-relaxed mb-6 italic">
                            "When it comes to award ceremonies, nobody matches the theatrical stagecraft of Elevate & Accolade. They turned our corporate milestone into an unforgettable night."
                        </p>
                    </div>
                    <div class="flex items-center space-x-4 pt-4 border-t border-gray-800">
                        <div class="w-12 h-12 rounded-full bg-gold/20 border border-gold/40 flex items-center justify-center text-gold font-bold">
                            DR
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-white">David Reynolds</h4>
                            <p class="text-xs text-gray-400">Managing Director, Aura Holdings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Contact Section -->
    <footer id="contact" class="bg-navy-900 border-t border-gray-800 pt-20 pb-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Col 1 -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold to-gold-dark flex items-center justify-center text-navy-900 font-bold text-xl">
                            E&A
                        </div>
                        <span class="text-lg font-bold tracking-wider text-white uppercase">Elevate <span class="text-gold">&</span> Accolade</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        The gold standard in corporate event management, executive retreats, and world-class award ceremony production.
                    </p>
                    <div class="flex space-x-4 text-gray-400">
                        <a href="#" class="w-10 h-10 rounded-lg bg-navy-800 hover:bg-gold hover:text-navy-900 flex items-center justify-center transition-all"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-navy-800 hover:bg-gold hover:text-navy-900 flex items-center justify-center transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded-lg bg-navy-800 hover:bg-gold hover:text-navy-900 flex items-center justify-center transition-all"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">Headquarters</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start space-x-3">
                            <i class="fa-solid fa-location-dot text-gold mt-1"></i>
                            <span>One Grand Avenue, Suite 4500<br>New York, NY 10022</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-phone text-gold"></i>
                            <span>+1 (800) 555-ELEVATE</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fa-solid fa-envelope text-gold"></i>
                            <span>concierge@elevateaccolade.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">Quick Links</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#services" class="hover:text-gold transition-colors">Corporate Events</a></li>
                        <li><a href="#awards-production" class="hover:text-gold transition-colors">Award Ceremony Production</a></li>
                        <li><a href="#portfolio" class="hover:text-gold transition-colors">Past Portfolios</a></li>
                        <li><a href="#estimator" class="hover:text-gold transition-colors">Cost Estimator</a></li>
                        <li><a href="#testimonials" class="hover:text-gold transition-colors">Client Praise</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div>
                    <h4 class="text-white font-bold text-sm tracking-wider uppercase mb-6">Executive Newsletter</h4>
                    <p class="text-gray-400 text-sm mb-4">Subscribe to our quarterly journal on corporate event trends and leadership insights.</p>
                    <form onsubmit="handleNewsletter(event)" class="space-y-3">
                        <input type="email" required placeholder="Enter corporate email" class="w-full px-4 py-2.5 rounded-xl bg-navy-800 border border-gray-700 text-white text-sm focus:border-gold focus:outline-none transition-all">
                        <button type="submit" class="w-full py-2.5 rounded-xl bg-gold text-navy-900 font-semibold text-xs uppercase tracking-wider hover:opacity-90 transition-all">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t border-gray-800 flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500">
                <p>&copy; 2026 Elevate & Accolade Productions Inc. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 sm:mt-0">
                    <a href="#" class="hover:text-gold transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-gold transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-gold transition-colors">Security Protocol</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom Success Message Notification Box (No alert()) -->
    <div id="notification-box" class="fixed bottom-6 right-6 z-50 transform translate-y-32 opacity-0 transition-all duration-300">
        <div class="glass-card px-6 py-4 rounded-2xl border border-gold shadow-2xl flex items-center space-x-4">
            <div class="w-10 h-10 rounded-full bg-gold/20 flex items-center justify-center text-gold text-lg">
                <i class="fa-solid fa-check"></i>
            </div>
            <div>
                <h4 id="notif-title" class="text-white font-bold text-sm">Inquiry Received</h4>
                <p id="notif-desc" class="text-gray-300 text-xs">Our concierge will contact you within 2 business hours.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript Interactions -->
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Portfolio Filtering
        function filterPortfolio(category) {
            const buttons = document.querySelectorAll('.portfolio-btn');
            buttons.forEach(btn => {
                if(btn.getAttribute('data-filter') === category) {
                    btn.className = "portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-gold text-navy-900 transition-all shadow-md";
                } else {
                    btn.className = "portfolio-btn px-6 py-2.5 rounded-full text-xs font-semibold tracking-wider uppercase bg-navy-800 text-gray-300 hover:bg-navy-700 hover:text-white transition-all border border-gray-700";
                }
            });

            const items = document.querySelectorAll('.portfolio-item');
            items.forEach(item => {
                if(category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Modal Handler
        function openModal(title, desc, imgUrl, tag) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-desc').innerText = desc;
            document.getElementById('modal-img').src = imgUrl;
            document.getElementById('modal-tag').innerText = tag;
            document.getElementById('portfolio-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('portfolio-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal on click outside
        window.addEventListener('click', (e) => {
            const modal = document.getElementById('portfolio-modal');
            if (e.target === modal) {
                closeModal();
            }
        });

        // Cost Estimator logic
        function updateGuestCount(val) {
            document.getElementById('guest-count-display').innerText = val + ' Guests';
            calculateEstimate();
        }

        function calculateEstimate() {
            const guestCount = parseInt(document.getElementById('guest-slider').value);
            const eventType = document.querySelector('input[name="event_type"]:checked').value;
            
            let baseRate = 30000;
            if(eventType === 'summit') baseRate = 35000;
            if(eventType === 'launch') baseRate = 40000;

            const guestMultiplier = guestCount * 65;
            
            // Count checked checkboxes
            const checkedServices = document.querySelectorAll('input[name="services"]:checked').length;
            const serviceBonus = checkedServices * 7500;

            let lowEstimate = baseRate + guestMultiplier + serviceBonus;
            let highEstimate = lowEstimate * 1.5;

            // Format as currency
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                maximumFractionDigits: 0
            });

            document.getElementById('estimate-output').innerText = formatter.format(lowEstimate) + ' - ' + formatter.format(highEstimate);
        }

        // Form Submission handler (replaces alert() with custom notification)
        function handleFormSubmit(e) {
            e.preventDefault();
            showNotification('Booking Inquiry Received!', 'Our senior executive producer will reach out within 2 hours with your custom proposal.');
            e.target.reset();
            updateGuestCount(300);
            document.getElementById('guest-slider').value = 300;
            calculateEstimate();
        }

        function handleNewsletter(e) {
            e.preventDefault();
            showNotification('Successfully Subscribed', 'You have been added to our elite executive journal mailing list.');
            e.target.reset();
        }

        function showNotification(title, desc) {
            const box = document.getElementById('notification-box');
            document.getElementById('notif-title').innerText = title;
            document.getElementById('notif-desc').innerText = desc;
            
            box.classList.remove('translate-y-32', 'opacity-0');
            box.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                box.classList.remove('translate-y-0', 'opacity-100');
                box.classList.add('translate-y-32', 'opacity-0');
            }, 4500);
        }

        // Run initial calculation on load
        window.onload = function() {
            calculateEstimate();
        }
    </script>
</body>
</html>