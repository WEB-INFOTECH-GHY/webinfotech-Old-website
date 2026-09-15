
const stats = document.querySelectorAll('.stat-number');
const statsSection = document.querySelector('.stats-section');

const animateStats = () => {
    stats.forEach(stat => {
        const target = parseInt(stat.innerText);
        const increment = target / 50;
        let current = 0;

        const updateCount = () => {
            current += increment;
            if (current < target) {
                if (target > 100) {
                    stat.innerText = Math.ceil(current) + '+';
                } else if (target === 98) {
                    stat.innerText = Math.ceil(current) + '%';
                } else {
                    stat.innerText = Math.ceil(current);
                }
                setTimeout(updateCount, 30);
            } else {
                if (target > 100) {
                    stat.innerText = target + '+';
                } else if (target === 98) {
                    stat.innerText = target + '%';
                } else {
                    stat.innerText = target;
                }
            }
        };

        updateCount();
    });
};

// Intersection Observer to trigger animation when stats section is visible
const observerOptions = {
    threshold: 0.5
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateStats();
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

if (statsSection) {
    observer.observe(statsSection);
}

// Add click events to all CTA buttons
// document.getElementById('featuresCtaBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to signup form...');
//     window.location.href = 'https://formspree.io/f/mzzngoyw';
// });

// document.getElementById('learnMoreBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to more information...');
//     window.location.href = 'https://formspree.io/f/mzzngoyw';
// });

// document.getElementById('statsCtaBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to portfolio...');
//     window.location.href = 'https://formspree.io/f/mzzngoyw';
// });

// document.getElementById('testimonialsCtaBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to client stories...');
//     window.location.href = 'https://formspree.io/f/mzzngoyw';
// });

// document.getElementById('startNowBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to signup form...');
//     window.location.href = 'signup.html';
// });

// document.getElementById('contactBtn').addEventListener('click', function (e) {
//     e.preventDefault();
//     alert('Redirecting to contact page...');
//     window.location.href = 'https://formspree.io/f/mzzngoyw';
// });