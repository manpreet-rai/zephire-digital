@extends('layout')

@section('main')
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div id="particleCanvas" class="particle-bg"></div>
    <div class="content-layer max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    YouTube Channel Management Services
                </h1>
                <p class="text-xl md:text-2xl text-white/90 mb-4 font-medium">
                    Grow Faster. Rank Higher. Monetize Smarter.
                </p>
                <p class="text-lg text-white/80 mb-8 max-w-2xl">
                    At Zephire Digital, we provide end-to-end YouTube Channel Management solutions designed for creators, businesses, and brands who are serious about scaling their presence and revenue on the world's second-largest search engine.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="glow-button bg-white text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        Schedule a Free Consultation
                    </button>
                    <button class="glass-effect text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/20 transition-all duration-300">
                        <i class="fas fa-play mr-2"></i>
                        Watch Demo
                    </button>
                </div>
                <div class="flex items-center justify-center lg:justify-start mt-8 space-x-8">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">2B+</div>
                        <div class="text-sm text-white/80">Monthly Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">500+</div>
                        <div class="text-sm text-white/80">Channels Managed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-white">10M+</div>
                        <div class="text-sm text-white/80">Views Generated</div>
                    </div>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="floating-animation">
                    <div class="glass-effect rounded-2xl p-8 max-w-md mx-auto">
                        <div class="bg-red-600 w-full h-48 rounded-lg mb-4 flex items-center justify-center">
                            <i class="fab fa-youtube text-white text-6xl"></i>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-white/90">Monthly Views</span>
                                <span class="text-green-400 font-semibold">+847%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-white/90">Subscribers</span>
                                <span class="text-green-400 font-semibold">+312%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-white/90">Revenue</span>
                                <span class="text-green-400 font-semibold">+623%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why YouTube Matters -->
<section class="py-20 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Why YouTube Channel Management Matters
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                YouTube is more than a platform—it's a global content engine with over 2 billion users consuming video every month. If you're not leveraging YouTube strategically, you're missing opportunities to build trust, grow influence, and generate revenue.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-globe text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Global Reach</h3>
                <p class="text-gray-600 ">Access billions of viewers worldwide and expand your brand's international presence.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Revenue Generation</h3>
                <p class="text-gray-600 ">Multiple monetization streams including ads, memberships, and brand partnerships.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-search text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">SEO Benefits</h3>
                <p class="text-gray-600 ">Improve your search rankings and get discovered by your target audience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-gray-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                What's Included in Our Channel Management Services
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our comprehensive suite of services ensures your channel is consistent, searchable, and performance-driven.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-palette text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Channel Setup & Branding</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Custom channel branding: logo, banner, watermark</li>
                    <li>• SEO-optimized About section and playlists</li>
                    <li>• Channel layout configuration and design</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-calendar-alt text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Strategic Content Planning</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Weekly/monthly content calendars</li>
                    <li>• Trend and topic research</li>
                    <li>• Script outlines and format suggestions</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-search text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Video SEO & Optimization</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Title, description, and keyword optimization</li>
                    <li>• Hashtag and category tagging</li>
                    <li>• Click-optimized thumbnail design</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-upload text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Publishing & Scheduling</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Video uploads and scheduling</li>
                    <li>• Community tab management</li>
                    <li>• Comment moderation and response</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-users text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Audience Engagement</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• Subscriber growth strategy</li>
                    <li>• Watch time optimization tactics</li>
                    <li>• Community building techniques</li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-dollar-sign text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Monetization & Analytics</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>• YouTube Partner Program setup</li>
                    <li>• Performance analytics and reporting</li>
                    <li>• Strategy optimization</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section class="py-20 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Who Is This Service For?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our YouTube management services are designed for ambitious creators and businesses ready to scale.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-video text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Content Creators & YouTubers</h3>
                <p class="text-gray-600 ">Take your channel to the next level with professional management.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-graduation-cap text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Coaches & Educators</h3>
                <p class="text-gray-600 ">Reach more students and build your online education empire.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Businesses & Brands</h3>
                <p class="text-gray-600 ">Leverage YouTube for lead generation and brand awareness.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-star text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Influencers & Public Figures</h3>
                <p class="text-gray-600 ">Build your personal brand and expand your influence.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-music text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Musicians & Artists</h3>
                <p class="text-gray-600 ">Grow your fan base and monetize your creative content.</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Startups & Entrepreneurs</h3>
                <p class="text-gray-600 ">Scale your business with strategic video marketing.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gray-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Plans & Pricing
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose the perfect plan for your YouTube growth journey. All plans include our core management services.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Bronze Plan -->
            <div class="pricing-card bg-white p-8 rounded-2xl shadow-lg relative" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bronze-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Bronze</h3>
                    <p class="text-gray-600 mb-4">For Beginners</p>
                    <div class="text-4xl font-bold text-gray-900 mb-1">$899</div>
                    <p class="text-gray-600 mb-6">/month</p>
                    <div class="space-y-4 text-left">
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">4 Videos/Month</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">SEO Optimization</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Channel Setup</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Publishing & Scheduling</span>
                        </div>
                    </div>
                    <button class="w-full mt-8 bg-gradient-to-r from-orange-500 to-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-yellow-700 transition-all duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Silver Plan -->
            <div class="pricing-card bg-white p-8 rounded-2xl shadow-lg relative" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-gray-400 to-gray-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Silver</h3>
                    <p class="text-gray-600 mb-4">For Growing Creators</p>
                    <div class="text-4xl font-bold text-gray-900 mb-1">$1,299</div>
                    <p class="text-gray-600 mb-6">/month</p>
                    <div class="space-y-4 text-left">
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">8 Videos/Month</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Content Strategy</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Publishing & Analytics</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Thumbnail Design</span>
                        </div>
                    </div>
                    <button class="w-full mt-8 bg-gradient-to-r from-gray-400 to-gray-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-gray-500 hover:to-gray-700 transition-all duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Gold Plan -->
            <div class="pricing-card bg-white p-8 rounded-2xl shadow-lg relative border-2 border-yellow-500" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                    <span class="bg-yellow-500 text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-crown text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Gold</h3>
                    <p class="text-gray-600 mb-4">For Brands & Monetization</p>
                    <div class="text-4xl font-bold text-gray-900 mb-1">$1,999</div>
                    <p class="text-gray-600 mb-6">/month</p>
                    <div class="space-y-4 text-left">
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">12+ Videos/Month</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Full-service Growth</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Monetization Support</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Brand Partnerships</span>
                        </div>
                    </div>
                    <button class="w-full mt-8 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-yellow-600 hover:to-yellow-700 transition-all duration-300">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Custom Plan -->
            <div class="pricing-card bg-white p-8 rounded-2xl shadow-lg relative" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-cog text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Custom</h3>
                    <p class="text-gray-600 mb-4">For Enterprises</p>
                    <div class="text-4xl font-bold text-gray-900 mb-1">Custom</div>
                    <p class="text-gray-600 mb-6">Quote</p>
                    <div class="space-y-4 text-left">
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Tailored Videos</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Custom Scope</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Multi-channel</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-3"></i>
                            <span class="text-gray-600 ">Scale & Strategy</span>
                        </div>
                    </div>
                    <button class="w-full mt-8 bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:from-purple-600 hover:to-indigo-700 transition-all duration-300">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-20 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Advantages of Investing in YouTube Channel Management Services
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                As a business, you have to constantly come up with creative strategies to reach as many customers as you can while staying within your means.
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-globe-americas text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">🌍 Grow Your Audience Worldwide</h3>
                <p class="text-gray-600 ">These providers are aware of the subtleties of material that appeal to viewers around the world. They use techniques that cut across language boundaries to make sure a global audience can view and enjoy your content.</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-envelope text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">📧 Build Your Email List on YouTube</h3>
                <p class="text-gray-600 ">YouTube channel management services play a crucial role in helping you build your email list. This includes crafting strong CTAs, offering incentives like newsletters or exclusive content.</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-heart text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">❤ Your Audience Will Promote You</h3>
                <p class="text-gray-600 ">Your YouTube audience can become your biggest brand advocates. With the right strategy, you can convert viewers into loyal customers and promoters.</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-traffic-light text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">🌐 Take Advantage of YouTube's Traffic</h3>
                <p class="text-gray-600 ">YouTube has billions of active users. With the right management strategies, you can tap into this massive pool of viewers, expanding your reach beyond traditional marketing channels.</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-search-plus text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">🔍 Get Found on YouTube</h3>
                <p class="text-gray-600 ">Millions of videos are uploaded every day. YouTube channel managers ensure your content stands out through SEO best practices—using relevant keywords, tags, and engaging thumbnails.</p>
            </div>
            <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="600">
                <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-600 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-infinity text-white text-xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">🧬 Your Content Stays Alive Forever</h3>
                <p class="text-gray-600 ">YouTube content has a long shelf life. With the right SEO and content strategies, your videos can continue to attract views and generate leads long after they are published.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Zephire -->
<section class="py-20 bg-gray-50 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Why Choose Zephire Digital as Your YouTube Growth Partner?
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                At Zephire Digital, we don't just manage YouTube channels — we build strategic growth systems around them.
            </p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8" data-aos="fade-right">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-bullseye text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">🎯 Full-Spectrum Expertise</h3>
                        <p class="text-gray-600 ">From SEO and metadata optimization to publishing, thumbnails, and monetization — we handle every touchpoint.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-chart-bar text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">📊 Data-Driven Growth</h3>
                        <p class="text-gray-600 ">We don't guess. We track KPIs like impressions, watch time, CTR, and RPM, iterating every month to boost performance.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-lightbulb text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">💡 Creative Excellence</h3>
                        <p class="text-gray-600 ">Beautifully branded thumbnails, banners, scripts, and audience hooks — crafted to resonate with your niche.</p>
                    </div>
                </div>
            </div>
            <div class="space-y-8" data-aos="fade-left">
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-puzzle-piece text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">🧩 Solutions for Every Stage</h3>
                        <p class="text-gray-600 ">Whether you're just starting or scaling into a multi-channel brand, we offer flexible plans that fit your goals.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-globe text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">🌍 Global Reach with Local Understanding</h3>
                        <p class="text-gray-600 ">We blend international best practices with culturally relevant strategies to connect with your ideal audience.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-handshake text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">🤝 Transparency & Real Partnership</h3>
                        <p class="text-gray-600 ">Monthly reporting, strategy calls, and constant collaboration to ensure you're in the loop and in control.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Workflow Section -->
<section id="workflow" class="py-20 bg-white transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Our Execution Workflow
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A proven process that delivers results from day one.
            </p>
        </div>
        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-8">
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">1</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Initial Strategy Call</h3>
                <p class="text-gray-600 text-sm">& Channel Audit</p>
            </div>
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">2</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Content Calendar</h3>
                <p class="text-gray-600 text-sm">& Roadmap Planning</p>
            </div>
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">3</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Channel Optimization</h3>
                <p class="text-gray-600 text-sm">& Setup</p>
            </div>
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">4</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Weekly Content</h3>
                <p class="text-gray-600 text-sm">Execution & Publishing</p>
            </div>
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">5</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Engagement</h3>
                <p class="text-gray-600 text-sm">& Community Management</p>
            </div>
            <div class="workflow-step text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-xl">6</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Monthly Analytics</h3>
                <p class="text-gray-600 text-sm">Reporting & Adjustments</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-gray-50 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600 ">
                Everything you need to know about our YouTube management services.
            </p>
        </div>
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-between cursor-pointer faq-toggle">
                    <h3 class="text-lg font-semibold text-gray-900 ">Do I need an existing YouTube channel?</h3>
                    <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
                <div class="faq-content mt-4 text-gray-600 ">
                    <p>No. We can launch your channel from scratch or optimize your existing one. Our team handles everything from initial setup to ongoing optimization.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-between cursor-pointer faq-toggle">
                    <h3 class="text-lg font-semibold text-gray-900 ">Do you handle video editing?</h3>
                    <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
                <div class="faq-content mt-4 text-gray-600 hidden">
                    <p>We offer creative guidance, scripting, and thumbnails. Full video editing is available as an add-on service to complement our management packages.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-between cursor-pointer faq-toggle">
                    <h3 class="text-lg font-semibold text-gray-900 ">How soon can I start seeing results?</h3>
                    <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
                <div class="faq-content mt-4 text-gray-600 hidden">
                    <p>Channels often see measurable improvements within 30–60 days depending on niche and consistency. Our data-driven approach ensures steady, sustainable growth.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-center justify-between cursor-pointer faq-toggle">
                    <h3 class="text-lg font-semibold text-gray-900 ">Can you help with YouTube monetization?</h3>
                    <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
                <div class="faq-content mt-4 text-gray-600 hidden">
                    <p>Yes. We help set up AdSense, Super Chat, sponsorships, and affiliate strategies. Our team guides you through the entire monetization process.</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="500">
                <div class="flex items-center justify-between cursor-pointer faq-toggle">
                    <h3 class="text-lg font-semibold text-gray-900 ">Do you manage YouTube Shorts as well?</h3>
                    <i class="fas fa-chevron-down text-gray-400"></i>
                </div>
                <div class="faq-content mt-4 text-gray-600 hidden">
                    <p>Absolutely. Shorts are integrated into all our content strategies as they're crucial for channel growth and discovery in today's YouTube landscape.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-700 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
                Ready to Scale Your YouTube Channel?
            </h2>
            <p class="text-xl text-white/90 mb-8 max-w-3xl mx-auto">
                Let Zephire Digital take over your YouTube strategy, execution, and growth. Whether you're a creator or a business, we'll help you build a powerful video presence that attracts, engages, and converts.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="glow-button bg-white text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    Schedule Your Free Consultation
                </button>
                <button class="glass-effect text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/20 transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i>
                    admin@zephiredigital.com
                </button>
            </div>
            <div class="mt-8 text-white/80">
                <p>🌐 www.zephiredigital.com</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // FAQ toggle
    const faqToggles = document.querySelectorAll('.faq-toggle');
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('i');

            content.classList.toggle('hidden');
            icon.classList.toggle('fa-chevron-down');
            icon.classList.toggle('fa-chevron-up');
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add loading animation
    window.addEventListener('load', () => {
        document.body.classList.add('loaded');
    });
</script>
@endsection
