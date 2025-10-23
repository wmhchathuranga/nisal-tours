document.addEventListener('DOMContentLoaded', function () {
    const transitionDuration = 500;
    const showFormButtons = document.querySelectorAll('#show-form-btn');
    const hideFormButtons = document.querySelectorAll('#hide-form-btn');

    showFormButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            showAboutBlock(index + 1);
        });
    });

    hideFormButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            hideFormBlock(index + 1);
        });
    });

    function showAboutBlock(index) {
        const aboutBlock = document.getElementById(`about-block-${index}`);
        const formBlock = document.getElementById(`form-block-${index}`);

        aboutBlock.classList.remove('block-active');
        aboutBlock.classList.add('block-collapsed');
        formBlock.classList.remove('d-none');

        setTimeout(() => {
            aboutBlock.classList.add('d-none');
            formBlock.classList.remove('block-collapsed');
            formBlock.classList.add('block-active');
        }, transitionDuration);
    }

    function hideFormBlock(index) {
        const aboutBlock = document.getElementById(`about-block-${index}`);
        const formBlock = document.getElementById(`form-block-${index}`);

        formBlock.classList.remove('block-active');
        formBlock.classList.add('block-collapsed');
        aboutBlock.classList.remove('d-none');

        setTimeout(() => {
            formBlock.classList.add('d-none');
            aboutBlock.classList.remove('block-collapsed');
            aboutBlock.classList.add('block-active');
        }, transitionDuration);
    }
});

// Change 'DOMContentLoaded' to 'load' to ensure all images and resources are loaded
window.addEventListener('load', () => { 

    document.querySelectorAll('.vehicle-selector').forEach(selector => {
        
        const scroller = selector.querySelector('#vehicle-scroller');
        const scrollLeftBtn = selector.querySelector('#scroll-left-btn');
        const scrollRightBtn = selector.querySelector('#scroll-right-btn');

        // Find the width of a single card plus its margin/gap
        const firstCard = scroller.querySelector('.vehicle-card-label');
        if (!firstCard) return;
    
        const cardGap = 20;
        let cardWidth;
        let scrollAmount;
    
        /**
         * Recalculates card dimensions and updates button disabled states.
         */
        const updateButtonStates = () => {
            // Recalculate dimensions for accurate scrolling
            cardWidth = firstCard.offsetWidth;
            scrollAmount = cardWidth + cardGap;
    
            // Calculate the maximum scroll amount (Total content width - Visible area)
            // This value is now much more reliable because the 'load' event fired.
            const maxScroll = scroller.scrollWidth - scroller.clientWidth;
            const currentScroll = scroller.scrollLeft;
            
            // Determine if scrolling is actually necessary (maxScroll > a small tolerance)
            const canScroll = maxScroll > 1; 
    
            if (canScroll) {
                // Case 1: Scrolling IS possible (maxScroll is correctly calculated)
                
                // Left button is disabled only when at the start
                // scrollLeftBtn.disabled = currentScroll <= 1;
    
                // Right button is disabled only when at the end
                // scrollRightBtn.disabled = currentScroll >= maxScroll - 1; 
            } else {
                // Case 2: Content fits entirely (or maxScroll is 0)
                
                // Both buttons must be disabled
                // scrollLeftBtn.disabled = true;
                // scrollRightBtn.disabled = true;
            }
        };
    
        /**
         * Scroll event listener to continuously update button states.
         */
        scroller.addEventListener('scroll', updateButtonStates);
    
        // Scroll Left Handler
        scrollLeftBtn.addEventListener('click', () => {
            cardWidth = firstCard.offsetWidth;
            scrollAmount = cardWidth + cardGap;
            
            scroller.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
    
        // Scroll Right Handler
        scrollRightBtn.addEventListener('click', () => {
            cardWidth = firstCard.offsetWidth;
            scrollAmount = cardWidth + cardGap;
            
            scroller.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
    
        // Initial check on load (Fires immediately after 'load' event)
        updateButtonStates();
    
        // Re-check on window resize for responsiveness
        window.addEventListener('resize', updateButtonStates);
    });

});