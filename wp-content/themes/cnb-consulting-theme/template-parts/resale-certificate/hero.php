<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div>
                    <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
                        💰 Tax Savings Experts
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Get Your US Resale Certificate - Buy Tax-Free
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                        Professional resale certificate service. Purchase inventory and business supplies tax-free with proper sales tax exemption certificates.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                        Get Certificate - $79
                    </a>
                    <a href="#benefits" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                        See Savings
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">💰</div>
                        <div class="font-bold text-lg">Tax-Free</div>
                        <div class="text-blue-200 text-sm">Purchases</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">📋</div>
                        <div class="font-bold text-lg">Legal</div>
                        <div class="text-blue-200 text-sm">Compliance</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">⚡</div>
                        <div class="font-bold text-lg">Same Day</div>
                        <div class="text-blue-200 text-sm">Processing</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold mb-2">Resale Certificate Application</h3>
                    <p class="text-gray-600">Free consultation • Tax savings calculator</p>
                </div>
                
                <form id="resale-application-form" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Legal business name" required>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Owner, Manager, etc." required>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Primary State for Certificate</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            <option value="">Select state</option>
                            <option value="CA">California</option>
                            <option value="TX">Texas</option>
                            <option value="FL">Florida</option>
                            <option value="NY">New York</option>
                            <option value="IL">Illinois</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="OH">Ohio</option>
                            <option value="GA">Georgia</option>
                            <option value="NC">North Carolina</option>
                            <option value="MI">Michigan</option>
                            <!-- Add more states as needed -->
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Business Type</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            <option value="">Select business type</option>
                            <option value="retail">Retail Store</option>
                            <option value="wholesale">Wholesale Distribution</option>
                            <option value="ecommerce">E-commerce/Online</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="services">Service Business</option>
                            <option value="restaurant">Restaurant/Food Service</option>
                            <option value="other">Other Business Type</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Purchase Volume</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            <option value="">Estimate monthly purchases</option>
                            <option value="under-5k">Under $5,000</option>
                            <option value="5k-15k">$5,000 - $15,000</option>
                            <option value="15k-50k">$15,000 - $50,000</option>
                            <option value="50k-100k">$50,000 - $100,000</option>
                            <option value="over-100k">Over $100,000</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                        Calculate My Tax Savings
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center">
                        ✅ Free consultation • 💰 Tax savings estimate • 📋 Legal compliance
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>