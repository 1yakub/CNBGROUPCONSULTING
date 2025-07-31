<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Professional Header -->
    <header class="bg-white shadow-sm border-b border-gray-100">
      <div class="container-custom">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center space-x-4">
            <h1 class="text-2xl font-bold text-gray-900">
              <a href="<?php echo home_url(); ?>" class="hover:text-blue-600 no-underline">
                CNB Group Consulting
              </a>
            </h1>
          </div>
          
          <nav class="hidden md:flex space-x-8">
            <a href="#services" class="text-gray-600 hover:text-gray-900 font-medium">Services</a>
            <a href="#about" class="text-gray-600 hover:text-gray-900 font-medium">About</a>
            <a href="#contact" class="text-gray-600 hover:text-gray-900 font-medium">Contact</a>
          </nav>
          
          <div class="hidden md:block">
            <a href="#contact" class="btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white section-padding">
      <div class="container-custom">
        <div class="max-w-3xl">
          <h1 class="text-5xl lg:text-6xl font-bold mb-6">
            Professional Business Consulting Solutions
          </h1>
          <p class="text-xl lg:text-2xl text-blue-100 mb-8 leading-relaxed">
            Transform your business with expert consulting, strategic planning, and innovative solutions tailored to your success.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#contact" class="btn-primary bg-white text-blue-600 hover:bg-gray-100">
              Schedule Consultation
            </a>
            <a href="#services" class="btn-secondary bg-blue-700 text-white border-blue-500 hover:bg-blue-600">
              Our Services
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding bg-white">
      <div class="container-custom">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Comprehensive consulting solutions to drive your business forward
          </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="card">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Strategic Planning</h3>
            <p class="text-gray-600">Develop comprehensive strategies to achieve your business objectives and drive sustainable growth.</p>
          </div>
          
          <div class="card">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Performance Optimization</h3>
            <p class="text-gray-600">Analyze and optimize your operations for maximum efficiency and profitability.</p>
          </div>
          
          <div class="card">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">Team Development</h3>
            <p class="text-gray-600">Build high-performing teams through leadership development and organizational culture transformation.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Posts (if any) -->
    <?php if (have_posts()) : ?>
    <section class="section-padding bg-gray-50">
      <div class="container-custom">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest Insights</h2>
          <p class="text-xl text-gray-600">Stay informed with our latest thoughts and industry insights</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="card">
              <?php if (has_post_thumbnail()) : ?>
                <div class="mb-4 rounded-lg overflow-hidden">
                  <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                </div>
              <?php endif; ?>
              
              <div class="text-sm text-gray-500 mb-2">
                <?php echo get_the_date(); ?>
              </div>
              
              <h3 class="text-xl font-semibold text-gray-900 mb-3">
                <a href="<?php the_permalink(); ?>" class="hover:text-blue-600">
                  <?php the_title(); ?>
                </a>
              </h3>
              
              <div class="text-gray-600 mb-4">
                <?php the_excerpt(); ?>
              </div>
              
              <a href="<?php the_permalink(); ?>" class="text-blue-600 font-medium hover:text-blue-700">
                Read More →
              </a>
            </article>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section id="contact" class="section-padding bg-blue-600 text-white">
      <div class="container-custom text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Transform Your Business?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
          Let's discuss how our consulting expertise can help you achieve your goals and drive sustainable growth.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="mailto:info@cnbgroupconsulting.com" class="btn-primary bg-white text-blue-600 hover:bg-gray-100">
            Get In Touch
          </a>
          <a href="tel:+1234567890" class="btn-secondary bg-blue-700 text-white border-blue-500 hover:bg-blue-500">
            Call Us Today
          </a>
        </div>
      </div>
    </section>

    <!-- Professional Footer -->
    <footer class="bg-gray-900 text-white section-padding">
      <div class="container-custom">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
          <div>
            <h3 class="text-xl font-bold mb-4">CNB Group Consulting</h3>
            <p class="text-gray-400">
              Professional business consulting solutions for sustainable growth and success.
            </p>
          </div>
          
          <div>
            <h4 class="font-semibold mb-4">Services</h4>
            <ul class="space-y-2 text-gray-400">
              <li><a href="#" class="hover:text-white">Strategic Planning</a></li>
              <li><a href="#" class="hover:text-white">Performance Optimization</a></li>
              <li><a href="#" class="hover:text-white">Team Development</a></li>
            </ul>
          </div>
          
          <div>
            <h4 class="font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-gray-400">
              <li><a href="#" class="hover:text-white">About Us</a></li>
              <li><a href="#" class="hover:text-white">Our Team</a></li>
              <li><a href="#" class="hover:text-white">Careers</a></li>
            </ul>
          </div>
          
          <div>
            <h4 class="font-semibold mb-4">Contact</h4>
            <ul class="space-y-2 text-gray-400">
              <li>info@cnbgroupconsulting.com</li>
              <li>+1 (234) 567-8900</li>
              <li>123 Business Ave, Suite 100</li>
            </ul>
          </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
          <p>&copy; <?php echo date('Y'); ?> CNB Group Consulting. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
