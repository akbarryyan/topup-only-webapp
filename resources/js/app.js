import "./bootstrap";

// GameTopUp SPA-like functionality
document.addEventListener("DOMContentLoaded", function () {
    // Add smooth transitions and animations
    const body = document.body;
    body.style.opacity = "0";
    body.style.transition = "opacity 0.5s ease-in-out";

    // Fade in the page
    setTimeout(() => {
        body.style.opacity = "1";
    }, 100);

    // Add parallax effect to hero section
    const hero = document.querySelector(".hero-section");
    if (hero) {
        window.addEventListener("scroll", () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            hero.style.transform = `translateY(${rate}px)`;
        });
    }

    // Add hover sound effect (optional)
    const interactiveElements = document.querySelectorAll(
        ".game-card, .nominal-option, .payment-option, button"
    );
    interactiveElements.forEach((element) => {
        element.addEventListener("mouseenter", () => {
            element.style.transform = "scale(1.05)";
        });

        element.addEventListener("mouseleave", () => {
            element.style.transform = "scale(1)";
        });
    });
});

// Add loading states for better UX
function showLoadingState(element, originalText) {
    element.disabled = true;
    element.innerHTML = `
        <i class="fas fa-spinner fa-spin mr-2"></i>
        Processing...
    `;

    return () => {
        element.disabled = false;
        element.innerHTML = originalText;
    };
}

// Export for use in other files
window.showLoadingState = showLoadingState;
