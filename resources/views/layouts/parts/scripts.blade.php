<link
    rel="modulepreload"
    href="https://innerbalance.com/build/assets/app-cb15a8b1.js"
/>
<link
    rel="modulepreload"
    href="https://innerbalance.com/build/assets/axios-82afda87.js"
/>
<script
    type="module"
    src="https://innerbalance.com/build/assets/app-cb15a8b1.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
    type="module"
    src="https://innerbalance.com/vendor/owl-carousel/owl-carousel-smooth-modified.js"
    crossorigin="anonymous"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
    type="module"
    src="https://innerbalance.com/vendor/owl-carousel/owl-carousel-smooth-modified.js"
></script>
<script>
    $(document).ready(function() {
        const owl = $('.simple-carousel-1.owl-carousel');
        owl.owlCarousel({
            loop: false,
            margin: 0,
            dots: false,
            autoWidth: true,
            nav: false,
            navText: [
                '<span class="custom-left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="7.293 4.707 14.586 12 7.293 19.293 8.707 20.707 17.414 12 8.707 3.293 7.293 4.707"/></svg></span>',
                '<span class="custom-right-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="7.293 4.707 14.586 12 7.293 19.293 8.707 20.707 17.414 12 8.707 3.293 7.293 4.707"/></svg></span>'
            ],
        });

        if (false) {
            $('.simple-carousel-1 .owl-controls').css('display', 'flex');
        } else {
            $('.simple-carousel-1 .owl-controls').css('display', 'none');
        }

        if (window.innerWidth > 640) {
            const parent = document.getElementsByClassName('simple-carousel-1')[0];
            const child = parent.querySelectorAll('.owl-item')[0].childNodes[0];

            function setFirstItemsMarginLeft() {
                const screenWidth = document.documentElement.clientWidth;
                if (screenWidth > 1440) {
                    const leftMargin = (screenWidth - 1280) / 2;
                    child.style.marginLeft = leftMargin + "px";
                } else {
                    child.style.marginLeft = "80px";
                }
            }

            setFirstItemsMarginLeft();
            //add event listener for window change
            window.addEventListener('resize', function() {
                setFirstItemsMarginLeft();
            });
        }

    });
</script>
<script>
    // Array of text elements
    const texts = document.querySelectorAll('#treatment-text-container span');

    // Initialize the current text index
    let currentTextIndex = 0;

    // Function to hide the current text and show the next one
    function changeText() {
        texts[currentTextIndex].classList.remove('active');
        currentTextIndex = (currentTextIndex + 1) % texts.length;
        texts[currentTextIndex].classList.add('active');
    }

    // Initial text display
    texts[currentTextIndex].classList.add('active');

    // Set an interval to change text every 4 seconds
    const interval = setInterval(changeText, 1500);
</script>
<script>
    $(document).ready(function() {
        const owl = $('.simple-carousel-2.owl-carousel');
        owl.owlCarousel({
            loop: false,
            margin: 0,
            dots: false,
            autoWidth: true,
            nav: true,
            navText: [
                '<span class="custom-left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="7.293 4.707 14.586 12 7.293 19.293 8.707 20.707 17.414 12 8.707 3.293 7.293 4.707"/></svg></span>',
                '<span class="custom-right-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon points="7.293 4.707 14.586 12 7.293 19.293 8.707 20.707 17.414 12 8.707 3.293 7.293 4.707"/></svg></span>'
            ],
        });

        if (true) {
            $('.simple-carousel-2 .owl-controls').css('display', 'flex');
        } else {
            $('.simple-carousel-2 .owl-controls').css('display', 'none');
        }

        if (window.innerWidth > 640) {
            const parent = document.getElementsByClassName('simple-carousel-2')[0];
            const child = parent.querySelectorAll('.owl-item')[0].childNodes[0];

            function setFirstItemsMarginLeft() {
                const screenWidth = document.documentElement.clientWidth;
                if (screenWidth > 1440) {
                    const leftMargin = (screenWidth - 1280) / 2;
                    child.style.marginLeft = leftMargin + "px";
                } else {
                    child.style.marginLeft = "80px";
                }
            }

            setFirstItemsMarginLeft();
            //add event listener for window change
            window.addEventListener('resize', function() {
                setFirstItemsMarginLeft();
            });
        }

    });
</script>

<script>
    const headerOpen = document.getElementById('headerOpen');
    const headerClose = document.getElementById('headerClose');
    const headerMenuDropdown = document.getElementById('headerMenuDropdown');
    const headerLogo = document.getElementById('headerLogo');
    const pageRoot = document.getElementById('pageRoot');

    let openButtonActive = true;
    let closeButtonActive = false;

    headerOpen.addEventListener('click', () => {
        if (openButtonActive) {
            headerOpen.classList.add('opacity-0');
            setTimeout(() => {
                headerOpen.classList.add('hidden');
                closeButtonActive = true;
                headerMenuDropdown.classList.remove('overflow-hidden')
                headerMenuDropdown.classList.add('overflow-scroll')
            }, 200);
            headerClose.classList.remove('hidden');
            headerClose.classList.remove('opacity-0');
            headerMenuDropdown.classList.add('open');
            headerLogo.classList.add('pl-3.5');
            pageRoot.classList.add('overflow-hidden');
            openButtonActive = false;
        }
    });

    headerClose.addEventListener('click', () => {
        if (closeButtonActive) {
            headerClose.classList.add('opacity-0');
            setTimeout(() => {
                headerClose.classList.add('hidden');
                openButtonActive = true;
            }, 200);
            headerOpen.classList.remove('hidden');
            headerOpen.classList.remove('opacity-0');
            headerMenuDropdown.classList.remove('open');
            headerLogo.classList.remove('pl-3.5');
            pageRoot.classList.remove('overflow-hidden');
            headerMenuDropdown.classList.add('overflow-hidden')
            headerMenuDropdown.classList.remove('overflow-scroll')
            closeButtonActive = false;
        }
    });
</script>
<script
    id="ze-snippet"
    src="https://static.zdassets.com/ekr/snippet.js?key=ee42594c-aa95-4277-9606-a4f8c6b3ed7f"
></script>
