export const portfolio = {
    name: 'Your Name',
    role: 'Full-stack Web Developer',
    location: 'Surigao del Norte, PH',
    pitch: 'I build reliable, user-focused web systems with Laravel, Vue, and Tailwind. I enjoy modernizing legacy apps and shipping clean, maintainable code.',
    cta: {
        resumeLabel: 'Download Resume',
        resumeUrl: '/resume.pdf',
        contactLabel: 'Let\'s Talk',
        contactUrl: '#contact',
    },
    highlights: [
        { label: 'Laravel + Vue', value: 'Modern SPA builds' },
        { label: 'Migration', value: 'Legacy to modern stack' },
        { label: 'Systems', value: 'Gov + acad solutions' },
    ],
    about: {
        title: 'About Me',
        body: [
            'I completed my OJT at Surigao del Norte State University ICT Office as a web developer. I worked on migrating a legacy system from Laravel Blade and Bootstrap to Vue.js and Tailwind CSS, while updating outdated backend logic.',
            'I care about clarity, speed, and maintainability. My goal is to build systems that feel intuitive for users and easy for teams to evolve.',
        ],
    },
    skills: {
        title: 'Skills',
        groups: [
            {
                label: 'Frontend',
                items: ['Vue.js', 'Tailwind CSS', 'HTML5', 'CSS3', 'JavaScript'],
            },
            {
                label: 'Backend',
                items: ['Laravel', 'PHP', 'REST APIs', 'MySQL'],
            },
            {
                label: 'Tools',
                items: ['Git', 'Vite', 'Figma (basic)', 'Postman'],
            },
        ],
    },
    experience: {
        title: 'Experience',
        items: [
            {
                role: 'Web Developer (OJT)',
                org: 'Surigao del Norte State University ICT Office',
                date: 'YYYY – YYYY',
                summary: [
                    'Migrated a legacy Laravel Blade + Bootstrap interface to a Vue.js + Tailwind SPA.',
                    'Refactored outdated backend logic and fixed non-working modules.',
                    'Collaborated with ICT staff to align UI with institutional workflows.',
                ],
            },
        ],
    },
    projects: {
        title: 'Projects',
        items: [
            {
                name: 'SNSU ICT Office Legacy Migration',
                type: 'OJT Project',
                date: 'YYYY',
                stack: ['Laravel', 'Vue.js', 'Tailwind CSS'],
                summary: 'Converted a legacy Blade + Bootstrap system to a modern Vue + Tailwind interface, while updating backend code for compatibility.',
                bullets: ['UI modernization', 'Component-based SPA', 'Backend cleanup'],
            },
            {
                name: 'E-Baryo Library System',
                type: 'Capstone Project',
                date: 'YYYY',
                stack: ['Laravel', 'MySQL', 'Tailwind CSS'],
                summary: 'A community-focused library system for cataloging, borrowing, and reporting.',
                bullets: ['Role-based access', 'Inventory management', 'Borrowing workflows'],
            },
            {
                name: 'Barangay Management System',
                type: 'Personal Project',
                date: 'YYYY',
                stack: ['Laravel', 'Vue.js', 'MySQL'],
                summary: 'A management platform for barangay records, services, and document requests.',
                bullets: ['Resident profiles', 'Clearance requests', 'Reporting dashboards'],
            },
            {
                name: 'OJT Tracking System + Mobile App',
                type: 'Academic Project',
                date: 'YYYY',
                stack: ['Laravel', 'API', 'Mobile App'],
                summary: 'Tracks student OJT progress with mobile check-ins and supervisor approvals.',
                bullets: ['Mobile logging', 'Supervisor validation', 'Progress analytics'],
            },
        ],
    },
    contact: {
        title: 'Contact',
        email: 'your.email@example.com',
        links: [
            { label: 'GitHub', url: 'https://github.com/your-username' },
            { label: 'LinkedIn', url: 'https://linkedin.com/in/your-username' },
            { label: 'Portfolio', url: 'https://your-portfolio.com' },
        ],
    },
};