
        document.querySelectorAll('.add-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.textContent = 'Added ✓';
                this.style.background = '#4caf50';
                setTimeout(() => {
                    this.textContent = 'Add to Cart';
                    this.style.background = '#ff6b6b';
                }, 1500);
            });
        });

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
    