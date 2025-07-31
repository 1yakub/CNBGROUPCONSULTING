<?php
/**
 * Template for Tax Filing Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div>
                        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
                            🏆 IRS Certified Tax Experts
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Professional Tax Filing & Preparation Services
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Maximize your deductions, minimize your taxes, and ensure IRS compliance with our certified tax professionals. Business and personal tax services available.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#services" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get Tax Help Now
                        </a>
                        <a href="#calculator" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            Tax Savings Calculator
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📊</div>
                            <div class="font-bold text-lg">$2,500</div>
                            <div class="text-blue-200 text-sm">Avg. Tax Savings</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">48 Hours</div>
                            <div class="text-blue-200 text-sm">Average Turnaround</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">100%</div>
                            <div class="text-blue-200 text-sm">Accuracy Guarantee</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Free Tax Consultation</h3>
                        <p class="text-gray-600">Speak with a certified tax professional</p>
                    </div>
                    
                    <form id="tax-consultation-form" class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tax Situation</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select your situation</option>
                                <option value="personal">Personal Tax Return</option>
                                <option value="business">Business Tax Return</option>
                                <option value="both">Both Personal & Business</option>
                                <option value="amendment">Tax Amendment/Correction</option>
                                <option value="planning">Tax Planning</option>
                                <option value="audit">IRS Audit Support</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Estimated Annual Income</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="">Select income range</option>
                                <option value="under-50k">Under $50,000</option>
                                <option value="50k-100k">$50,000 - $100,000</option>
                                <option value="100k-250k">$100,000 - $250,000</option>
                                <option value="250k-500k">$250,000 - $500,000</option>
                                <option value="over-500k">Over $500,000</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Schedule Free Consultation
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            Secure consultation • No obligation • IRS certified professionals
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Comprehensive Tax Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">From personal returns to complex business tax planning - we handle it all</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Personal Tax Preparation -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">👤</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Personal Tax Preparation</h3>
                    <p class="text-gray-600 mb-6">Complete personal tax return preparation with maximum deduction optimization.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Form 1040 preparation</li>
                        <li>• Itemized & standard deductions</li>
                        <li>• Investment income reporting</li>
                        <li>• State tax returns included</li>
                        <li>• E-filing with IRS</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $149</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>

                <!-- Business Tax Preparation -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">MOST POPULAR</span>
                    </div>
                    <div class="text-4xl mb-6">🏢</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Business Tax Preparation</h3>
                    <p class="text-gray-600 mb-6">Professional business tax preparation for LLCs, Corporations, and Partnerships.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Form 1120/1120S/1065 preparation</li>
                        <li>• Quarterly estimated payments</li>
                        <li>• Multi-state tax compliance</li>
                        <li>• Business deduction optimization</li>
                        <li>• Tax planning consultation</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $399</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>

                <!-- Tax Planning & Strategy -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📈</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tax Planning & Strategy</h3>
                    <p class="text-gray-600 mb-6">Proactive tax planning to minimize your tax burden throughout the year.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Annual tax strategy review</li>
                        <li>• Quarterly planning sessions</li>
                        <li>• Retirement tax optimization</li>
                        <li>• Business structure consulting</li>
                        <li>• Investment tax strategies</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $299</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>

                <!-- Tax Amendment & Corrections -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🔧</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tax Amendments & Corrections</h3>
                    <p class="text-gray-600 mb-6">Fix errors on previously filed returns and claim missed deductions.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Form 1040X amendments</li>
                        <li>• Missing income reporting</li>
                        <li>• Unclaimed deduction recovery</li>
                        <li>• Multi-year corrections</li>
                        <li>• IRS correspondence handling</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $199</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>

                <!-- IRS Audit Support -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">IRS Audit Support</h3>
                    <p class="text-gray-600 mb-6">Professional representation and support during IRS audits and investigations.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Audit notice review</li>
                        <li>• Document preparation</li>
                        <li>• IRS representation</li>
                        <li>• Negotiation support</li>
                        <li>• Resolution assistance</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $499</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>

                <!-- Bookkeeping & Payroll -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Bookkeeping & Payroll</h3>
                    <p class="text-gray-600 mb-6">Monthly bookkeeping and payroll services to keep your finances organized.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Monthly financial statements</li>
                        <li>• Transaction categorization</li>
                        <li>• Payroll processing</li>
                        <li>• Quarterly tax reports</li>
                        <li>• Year-end tax preparation</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg mb-4">$299/month</div>
                    <a href="#contact" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tax Savings Calculator -->
    <section id="calculator" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tax Savings Calculator</h2>
                <p class="text-xl text-gray-600">See how much you could save with professional tax preparation</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Enter Your Information</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Annual Income</label>
                                <input type="number" id="annual-income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="75000">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Filing Status</label>
                                <select id="filing-status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                    <option value="single">Single</option>
                                    <option value="married-joint">Married Filing Jointly</option>
                                    <option value="married-separate">Married Filing Separately</option>
                                    <option value="head-household">Head of Household</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Business Owner?</label>
                                <select id="business-owner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Homeowner?</label>
                                <select id="homeowner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                            
                            <button onclick="calculateSavings()" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                                Calculate My Savings
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Your Potential Savings</h3>
                        
                        <div id="calculator-results" class="hidden">
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                    <span class="text-gray-600">DIY Tax Software:</span>
                                    <span class="font-semibold" id="diy-refund">$0</span>
                                </div>
                                <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                    <span class="text-gray-600">Professional Preparation:</span>
                                    <span class="font-semibold text-cnb-primary" id="pro-refund">$0</span>
                                </div>
                                <div class="flex justify-between items-center py-3 bg-cnb-secondary rounded-lg px-4">
                                    <span class="font-bold text-gray-900">Additional Savings:</span>
                                    <span class="font-bold text-2xl text-gray-900" id="additional-savings">$0</span>
                                </div>
                            </div>
                            
                            <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                                <p class="text-sm text-gray-700">
                                    <strong>Note:</strong> This is an estimate based on average savings. Actual results may vary. Schedule a consultation for a personalized tax review.
                                </p>
                            </div>
                            
                            <div class="mt-6">
                                <a href="#contact" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition text-center block">
                                    Schedule My Consultation
                                </a>
                            </div>
                        </div>
                        
                        <div id="calculator-placeholder" class="text-center py-12">
                            <div class="text-6xl mb-4">📊</div>
                            <p class="text-gray-500">Enter your information to see potential tax savings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Tax Services -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose CNB Tax Services?</h2>
                <p class="text-xl text-gray-600">The advantages that maximize your tax savings and peace of mind</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🎓</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">IRS Certified Professionals</h3>
                    <p class="text-gray-600">Our team includes CPAs, Enrolled Agents, and tax attorneys with advanced certifications and years of experience.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">💰</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Maximum Deductions</h3>
                    <p class="text-gray-600">We find every legal deduction and credit you're entitled to, often saving clients 2-3x more than DIY software.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Audit Protection</h3>
                    <p class="text-gray-600">Free audit support and representation for all clients. We stand behind every return we prepare.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fast Turnaround</h3>
                    <p class="text-gray-600">Most returns completed within 48 hours. Rush processing available for urgent filings.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">📞</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Year-Round Support</h3>
                    <p class="text-gray-600">Direct access to your tax professional year-round for questions, planning, and support.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Secure & Confidential</h3>
                    <p class="text-gray-600">Bank-level encryption and strict confidentiality protocols protect your sensitive financial information.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Maximize Your Tax Savings?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Schedule your free consultation with an IRS certified tax professional today. No obligation, just expert advice.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:tax@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: tax@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🎓</div>
                    <div class="font-semibold text-sm">IRS Certified</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Max Deductions</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Audit Protection</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold text-sm">48hr Turnaround</div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function calculateSavings() {
    const income = parseFloat(document.getElementById('annual-income').value) || 0;
    const filingStatus = document.getElementById('filing-status').value;
    const businessOwner = document.getElementById('business-owner').value === 'yes';
    const homeowner = document.getElementById('homeowner').value === 'yes';
    
    if (income <= 0) {
        alert('Please enter a valid annual income amount.');
        return;
    }
    
    // Simplified calculation for demonstration
    let diyRefund = income * 0.12; // Basic standard deduction estimate
    let proRefund = diyRefund;
    
    // Add potential savings for professional preparation
    if (businessOwner) proRefund += income * 0.05; // Business deductions
    if (homeowner) proRefund += 2500; // Mortgage interest, property tax
    if (income > 75000) proRefund += 1500; // Complex return optimization
    if (filingStatus === 'married-joint') proRefund += 1000; // Joint filing optimizations
    
    const additionalSavings = proRefund - diyRefund;
    
    // Update display
    document.getElementById('diy-refund').textContent = '$' + Math.round(diyRefund).toLocaleString();
    document.getElementById('pro-refund').textContent = '$' + Math.round(proRefund).toLocaleString();
    document.getElementById('additional-savings').textContent = '$' + Math.round(additionalSavings).toLocaleString();
    
    document.getElementById('calculator-placeholder').classList.add('hidden');
    document.getElementById('calculator-results').classList.remove('hidden');
}

// Form handling
document.getElementById('tax-consultation-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our tax expert will contact you within 2 hours to schedule your consultation.');
});
</script>

<?php get_footer(); ?>