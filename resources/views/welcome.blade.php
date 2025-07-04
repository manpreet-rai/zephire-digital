@extends('layout')

@section('main')
    <!-- Hero -->
    @include('components.header')

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-channel-setup opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-content-planning opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 bg-video-seo opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute inset-0 bg-publishing-scheduling opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0 bg-audience-engagement opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
                <div class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                    <div class="absolute inset-0 bg-monetization-analytics opacity-0 group-focus:opacity-100 group-hover:opacity-100 transition-opacity duration-500 ease-in-out rounded-2xl"></div>

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
    <section class="py-20 bg-white transition-colors duration-700 ease-in-out">
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
                <!-- Tile 1: Grow Your Audience Worldwide -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 group-hover:from-gray-100 group-hover:to-white rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-globe-americas text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">🌍 Grow Your Audience Worldwide</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">These providers are aware of the subtleties of material that appeal to viewers around the world. They use techniques that cut across language boundaries to make sure a global audience can view and enjoy your content.</p>
                </div>

                <!-- Tile 2: Build Your Email List -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-600 group-hover:from-green-100 group-hover:to-teal-100 rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-envelope text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">📧 Build Your Email List on YouTube</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">YouTube channel management services play a crucial role in helping you build your email list. This includes crafting strong CTAs, offering incentives like newsletters or exclusive content.</p>
                </div>

                <!-- Tile 3: Your Audience Will Promote You -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-600 group-hover:from-red-100 group-hover:to-pink-100 rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-heart text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">❤ Your Audience Will Promote You</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">Your YouTube audience can become your biggest brand advocates. With the right strategy, you can convert viewers into loyal customers and promoters.</p>
                </div>

                <!-- Tile 4: Take Advantage of YouTube's Traffic -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-600 group-hover:from-yellow-100 group-hover:to-orange-100 rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-traffic-light text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">🌐 Take Advantage of YouTube's Traffic</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">YouTube has billions of active users. With the right management strategies, you can tap into this massive pool of viewers, expanding your reach beyond traditional marketing channels.</p>
                </div>

                <!-- Tile 5: Get Found on YouTube -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-indigo-600 group-hover:from-purple-100 group-hover:to-indigo-100 rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-search-plus text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">🔍 Get Found on YouTube</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">Millions of videos are uploaded every day. YouTube channel managers ensure your content stands out through SEO best practices—using relevant keywords, tags, and engaging thumbnails.</p>
                </div>

                <!-- Tile 6: Your Content Stays Alive Forever -->
                <div class="group bg-gray-50 hover:bg-gray-700 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-700 ease-in-out transform hover:scale-105" data-aos="fade-up" data-aos-delay="600">
                    <div class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-600 group-hover:from-pink-100 group-hover:to-red-100 rounded-lg flex items-center justify-center mb-4 transition-all duration-700 ease-in-out">
                        <i class="fas fa-infinity text-white group-hover:text-gray-900 text-xl transition-colors duration-700 ease-in-out"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 group-hover:text-white mb-3 transition-colors duration-700 ease-in-out">🧬 Your Content Stays Alive Forever</h3>
                    <p class="text-gray-600 group-hover:text-gray-300 transition-colors duration-700 ease-in-out">YouTube content has a long shelf life. With the right SEO and content strategies, your videos can continue to attract views and generate leads long after they are published.</p>
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
    <section id="final_cta" class="py-20 bg-gradient-to-r from-blue-600 to-purple-700 relative overflow-hidden">
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

    <style>
        /* Custom background image for channel setup */
        .bg-channel-setup {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23667eea;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%23764ba2;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad1)"/><circle cx="80" cy="60" r="25" fill="%23667eea" opacity="0.1"/><rect x="120" y="45" width="200" height="8" rx="4" fill="%23764ba2" opacity="0.1"/><rect x="120" y="65" width="150" height="6" rx="3" fill="%23667eea" opacity="0.08"/><circle cx="80" cy="140" r="20" fill="%23764ba2" opacity="0.1"/><rect x="120" y="128" width="180" height="6" rx="3" fill="%23667eea" opacity="0.1"/><rect x="120" y="145" width="120" height="5" rx="2" fill="%23764ba2" opacity="0.08"/><path d="M50 200 Q80 180 110 200 T170 200" stroke="%23667eea" stroke-width="2" fill="none" opacity="0.1"/><rect x="250" y="180" width="60" height="40" rx="8" fill="%23764ba2" opacity="0.08"/></svg>');
        }

        .bg-content-planning {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%2310b981;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%2306b6d4;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad2)"/><rect x="60" y="40" width="280" height="20" rx="10" fill="%2310b981" opacity="0.1"/><rect x="80" y="80" width="240" height="15" rx="7" fill="%2306b6d4" opacity="0.08"/><rect x="80" y="110" width="200" height="15" rx="7" fill="%2310b981" opacity="0.1"/><rect x="80" y="140" width="260" height="15" rx="7" fill="%2306b6d4" opacity="0.09"/><circle cx="320" cy="90" r="8" fill="%2310b981" opacity="0.12"/><circle cx="320" cy="120" r="8" fill="%2306b6d4" opacity="0.12"/><circle cx="320" cy="150" r="8" fill="%2310b981" opacity="0.12"/></svg>');
        }

        .bg-video-seo {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad3" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23ef4444;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%23ec4899;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad3)"/><circle cx="200" cy="150" r="60" fill="none" stroke="%23ef4444" stroke-width="3" opacity="0.1"/><circle cx="200" cy="150" r="40" fill="none" stroke="%23ec4899" stroke-width="2" opacity="0.12"/><circle cx="200" cy="150" r="20" fill="%23ef4444" opacity="0.08"/><rect x="140" y="60" width="120" height="80" rx="8" fill="none" stroke="%23ec4899" stroke-width="2" opacity="0.1"/><path d="M180 100 L220 120 L180 140 Z" fill="%23ef4444" opacity="0.12"/></svg>');
        }

        .bg-publishing-scheduling {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad4" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23f59e0b;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%23ea580c;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad4)"/><rect x="60" y="40" width="280" height="200" rx="12" fill="none" stroke="%23f59e0b" stroke-width="2" opacity="0.1"/><rect x="60" y="40" width="280" height="40" rx="12" fill="%23f59e0b" opacity="0.08"/><circle cx="90" cy="60" r="5" fill="%23ea580c" opacity="0.12"/><circle cx="110" cy="60" r="5" fill="%23ea580c" opacity="0.12"/><circle cx="130" cy="60" r="5" fill="%23ea580c" opacity="0.12"/><rect x="80" y="100" width="30" height="30" rx="4" fill="%23f59e0b" opacity="0.1"/><rect x="120" y="100" width="30" height="30" rx="4" fill="%23ea580c" opacity="0.08"/><rect x="160" y="100" width="30" height="30" rx="4" fill="%23f59e0b" opacity="0.1"/><rect x="200" y="100" width="30" height="30" rx="4" fill="%23ea580c" opacity="0.12"/><rect x="80" y="140" width="30" height="30" rx="4" fill="%23ea580c" opacity="0.09"/><rect x="120" y="140" width="30" height="30" rx="4" fill="%23f59e0b" opacity="0.1"/><circle cx="300" cy="180" r="15" fill="none" stroke="%23f59e0b" stroke-width="2" opacity="0.1"/><path d="M300 170 L300 180 L308 188" stroke="%23ea580c" stroke-width="2" fill="none" opacity="0.12"/></svg>');
        }

        .bg-audience-engagement {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad5" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%238b5cf6;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%236366f1;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad5)"/><circle cx="120" cy="80" r="20" fill="%238b5cf6" opacity="0.1"/><circle cx="180" cy="80" r="20" fill="%236366f1" opacity="0.08"/><circle cx="240" cy="80" r="20" fill="%238b5cf6" opacity="0.1"/><circle cx="280" cy="80" r="20" fill="%236366f1" opacity="0.09"/><path d="M120 100 Q150 120 180 100" stroke="%238b5cf6" stroke-width="2" fill="none" opacity="0.1"/><path d="M180 100 Q210 120 240 100" stroke="%236366f1" stroke-width="2" fill="none" opacity="0.1"/><path d="M240 100 Q260 120 280 100" stroke="%238b5cf6" stroke-width="2" fill="none" opacity="0.1"/><circle cx="200" cy="150" r="30" fill="none" stroke="%238b5cf6" stroke-width="2" opacity="0.1"/><circle cx="200" cy="150" r="15" fill="%236366f1" opacity="0.08"/><path d="M50 200 L100 180 L150 190 L200 170 L250 185 L300 175 L350 180" stroke="%238b5cf6" stroke-width="3" fill="none" opacity="0.1"/><circle cx="100" cy="180" r="4" fill="%236366f1" opacity="0.12"/><circle cx="200" cy="170" r="4" fill="%238b5cf6" opacity="0.12"/><circle cx="300" cy="175" r="4" fill="%236366f1" opacity="0.12"/><rect x="320" y="60" width="15" height="40" rx="2" fill="%238b5cf6" opacity="0.08"/><rect x="340" y="50" width="15" height="50" rx="2" fill="%236366f1" opacity="0.1"/><rect x="360" y="70" width="15" height="30" rx="2" fill="%238b5cf6" opacity="0.09"/></svg>');
        }

        .bg-monetization-analytics {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><defs><linearGradient id="grad6" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%2310b981;stop-opacity:0.1" /><stop offset="100%" style="stop-color:%2306b6d4;stop-opacity:0.05" /></linearGradient></defs><rect width="400" height="300" fill="url(%23grad6)"/><circle cx="80" cy="80" r="25" fill="none" stroke="%2310b981" stroke-width="3" opacity="0.1"/><path d="M65 80 L95 80 M80 65 L80 95" stroke="%2310b981" stroke-width="2" opacity="0.12"/><rect x="140" y="60" width="120" height="80" rx="8" fill="none" stroke="%2306b6d4" stroke-width="2" opacity="0.1"/><path d="M160 100 L180 85 L200 95 L220 75 L240 85" stroke="%2310b981" stroke-width="3" fill="none" opacity="0.12"/><circle cx="180" cy="85" r="3" fill="%2306b6d4" opacity="0.12"/><circle cx="200" cy="95" r="3" fill="%2310b981" opacity="0.12"/><circle cx="220" cy="75" r="3" fill="%2306b6d4" opacity="0.12"/><rect x="300" y="60" width="60" height="80" rx="6" fill="%2310b981" opacity="0.08"/><rect x="310" y="90" width="40" height="8" rx="4" fill="%2306b6d4" opacity="0.1"/><rect x="310" y="105" width="30" height="6" rx="3" fill="%2310b981" opacity="0.1"/><rect x="310" y="118" width="35" height="6" rx="3" fill="%2306b6d4" opacity="0.09"/><circle cx="120" cy="180" r="8" fill="%2310b981" opacity="0.1"/><circle cx="120" cy="180" r="4" fill="%2306b6d4" opacity="0.12"/><rect x="140" y="175" width="8" height="10" rx="1" fill="%2310b981" opacity="0.1"/><rect x="155" y="170" width="8" height="15" rx="1" fill="%2306b6d4" opacity="0.1"/><rect x="170" y="165" width="8" height="20" rx="1" fill="%2310b981" opacity="0.12"/><rect x="185" y="172" width="8" height="13" rx="1" fill="%2306b6d4" opacity="0.1"/><path d="M250 160 Q280 140 310 160 Q340 180 370 160" stroke="%2310b981" stroke-width="2" fill="none" opacity="0.1"/><circle cx="310" cy="160" r="6" fill="%2306b6d4" opacity="0.1"/><rect x="50" y="220" width="40" height="25" rx="4" fill="%2310b981" opacity="0.08"/><rect x="60" y="230" width="20" height="5" rx="2" fill="%2306b6d4" opacity="0.12"/></svg>');
        }
    </style>

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

        VANTA.DOTS({
            el: "#workflow",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            backgroundColor: 0xffffff,
            size: 3.50,
            showLines: false
        })

        VANTA.TOPOLOGY({
            el: "#final_cta",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
    </script>
@endsection
