<?php
return [
    // Navbar
    'nav.inicio' => 'Home',
    'nav.proyectos' => 'Projects',
    'nav.tecnologias' => 'Technologies',
    'nav.sobre_mi' => 'About',
    'nav.contacto' => 'Contact',
    'nav.download' => 'Download CV',

    // Hero
    'hero.role' => 'Web Developer',
    'hero.subtitle' => ' Continuous learning and passion for technology.',
    'hero.subtitle.color' => '+1 year Developing.',

    // Sobre mi
    'sobre.titulo' => 'About',
    'sobre.titulo.color' => 'Me',
    'sobre.descripcion' => 'Developer passionate about creating effective solutions',
    'sobre.p1.color' => 'More than a year developing',
    'sobre.p1' => ' independently and self-taught, expanding my knowledge through various courses. During this time, I’ve worked on real-world projects for clients and production environments.',
    'sobre.p2' => 'By taking the initiative to build projects on my own and collaborate with clients, I’ve gained the experience to deliver efficient, goal-oriented solutions — always aiming to exceed expectations and guide each client through their vision.',
    'sobre.p3' => 'I genuinely enjoy the development process. Turning an idea into a functional, meaningful project is something I find deeply rewarding.',
    'sobre.soft.skills' => 'Soft Skills',
    'sobre.soft.skill1' => 'Teamwork',
    'sobre.soft.skill2' => 'Problem Solving',
    'sobre.soft.skill3' => 'Time Management',
    'sobre.soft.skill4' => 'Adaptability',
    'sobre.training' => 'Training',

    // Contact
    'contact.title' => 'Let\'s Work',
    'contact.title.color' => 'Together',
    'contact.subtitle' => 'Do you have a project in mind? Let\'s talk!',
    'contact.form.nombre' => 'Name',
    'contact.form.email' => 'Email',
    'contact.form.asunto' => 'Subject',
    'contact.form.mensaje' => 'Message',
    'contact.form.enviar' => 'Send Message',
    'placeholder.nombre' => 'Your Name',
    'placeholder.email' => 'Your Email',
    'placeholder.asunto' => 'What would you like to talk about?',
    'placeholder.mensaje' => 'Tell me about your project...',
    
    // Etiquetas
    'available' => 'Available to work',
    'location.title' => 'Location',
    'location.city' => 'Lomas de Zamroa, Buenos Aires, Argentina',
    'remote' => 'Available for remote projects',
    'socials' => 'Socials',

    // Proyectos
    'proyects.title' => 'Featured',
    'proyects.title.color' => 'projects',
    'proyects.description' => 'Some of my most recent works',
    'proyects.gestior' => 'Economic management platform built for businesses and retailers. Features a cascading role system using Spatie and relational user structures in the database, enabling efficient management of branches, employees, products, expenses, orders, payments, and stock — all from one intuitive dashboard.',
    'proyects.cuantosabe' => 'Web-based game for streaming with an interactive overlay, a control panel for the host, real-time participation from guests and audience, and live communication through WebSockets.',

    // Tecnologias y habilidades
    'skills.title' => 'Skills &',
    'skills.title.color' => 'Technologies',
    'skills.description' => 'Technologies i work with.',
    'skills.working' => 'Work with',
    'skills.learning' => 'Learning',
    'skills.tools' => 'Tools',

    // footer
    'footer.description' => 'Built with Laravel.',

    // modal gestior
    'modal.gestior.title' => 'Gestior',
    'modal.gestior.description' => 'Gestior is a business and financial management platform built to serve both small retailers and large enterprises, streamlining operations through a unified, intuitive control panel.',
    'modal.cuantosabe.title' => 'Cuanto Sabe',
    'modal.actions.source' => 'View Source Code',
    'modal.actions.demo' => 'View Demo',
    'modal.gallery.prev' => 'Previous',
    'modal.gallery.next' => 'Next',
    'modal.gallery.view_image' => 'View image',
    'modal.references' => 'References',
    'modal.labels.email' => 'Email',
    'modal.labels.phone' => 'Phone',
    'modal.labels.instagram' => 'Instagram',
    'modal.cuantosabe.email' => 'Jonathan@villamayor.com.ar',
    'modal.cuantosabe.phone' => '+54 1133490129',
    'modal.cuantosabe.phone_href' => '+54 1133490129',
    'modal.cuantosabe.stream_user' => 'ShaoranMD',
    'modal.cuantosabe.instagram_url' => 'https://instagram.com/shaodub',
    'modal.cuantosabe.name' => 'Jonathan Villamayor',
    'modal.cuantosabe.role' => 'Client for Cuanto Sabe',
    'modal.cuantosabe.references_html' => <<<'HTML'
<p class="leading-relaxed">
  <span class="font-semibold">Jonathan Villamayor</span> — client for “Cuanto Sabe”.<br>
  <span class="text-purple-300">Email:</span> <a href="mailto:Jonathan@villamayor.com.ar" class="underline decoration-purple-500/60 hover:decoration-purple-400">Jonathan@villamayor.com.ar</a>
  <span class="mx-2">•</span>
  <span class="text-purple-300">Phone:</span> <a href="tel:+541133490129" class="underline decoration-purple-500/60 hover:decoration-purple-400">+54 11 3349 0129</a>
</p>
HTML,
        // Descripciones largas del modal (HTML)
    'modal.gestior.description_html' => <<<'HTML'
<p class="mb-4">Gestior is a business and financial management platform built to serve both small retailers and large enterprises, streamlining operations through a unified, intuitive control panel.</p>
<h4 class="text-lg font-semibold mb-2">Key Features: </h4>
<ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
    <li>Branch and employee management with custom permissions</li>
    <li>Product and expense management at both global and branch levels</li>
    <li>Client order creation and management with personalized invoices</li>
    <li>Payment management and account control</li>
    <li>Stock management and detailed history for accounting tracking</li>
    <li>User-friendly panel for managing data without database technical knowledge</li>
</ul>
<h4 class="text-lg font-semibold mb-2">Details & Technologies:</h4>
<ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
    <li>Desarrollado en PHP Laravel 12</li>
    <li>SQL Database</li>
    <li>Livewire interactive components</li>
    <li>Scopes for precise search filtering</li>
    <li>Authentication via Fortify with registration keys generated by the superuser</li>
    <li>Deployed and hosted on AWS</li>
</ul>
HTML,

'modal.cuantosabe.description_html' => <<<'HTML'
<p class="mb-4">Cuanto Sabe is a web-based game built with Laravel, designed to integrate as an interactive overlay for streaming. It enables real-time interaction between the host, guests, and the audience.</p>
<h4 class="text-lg font-semibold mb-2">Key Features:</h4>
<ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
    <li>The host manages the game through a dedicated control panel</li>
    <li>Guests answer live questions using their own interface</li>
    <li>The audience participates through the platform, with real-time score display</li>
    <li>Component communication powered by Laravel WebSockets (Pusher)</li>
    <li>Includes an informational landing page, replay section, and public demo</li>
</ul>
<h4 class="text-lg font-semibold mb-2">Tech Stack & Details:</h4>
<ul class="list-disc list-inside mb-4 space-y-2 text-gray-300">
    <li>Laravel 12 with SQL database</li>
    <li>Overlay and roulette developed in JavaScript</li>
    <li>Deployed on Hostinger (game) and AWS (public page)</li>
</ul>
HTML,


];
