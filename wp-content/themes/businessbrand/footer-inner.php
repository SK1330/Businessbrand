<?php

/**
 * The template for displaying the footer.
 *
 * @package businessbrand
 */
?>

<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-2 d-flex align-items-center">
                    <a class="text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/business_brand.png" alt="business_brand_logo" />
                    </a>
                </div>

                <div class="col-md-6 d-flex align-items-center footer-text">
                    <p>
                        A good brand is the essence of who you are as a business, what
                        you stand for, and what you offer your customers. Business Brand
                        works with you to nurture it and grow it over time while
                        maintaining consistency, authenticity, and creativity in all
                        branding efforts.
                    </p>
                </div>

                <div class="col-md-4 contact">
                    <button type="button" class="btn our-work-button">
                        Our Work
                    </button>
                    <button type="button" id="openModal" class="btn contact-us-button">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 copyright-text">
                    Copyright &copy;
                    <?php echo date('Y'); ?>
                    by <a href="<?php echo esc_url(home_url('/')); ?>">Businessbrand</a>
                </div>

                <div class="col-md-4">
                    <ul class="d-flex footer_social">
                        <li>
                            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 newsletter_block">
                    <p>Our Newsletter</p>
                    <?php echo do_shortcode('[newsletter_form form="1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
// Include template-contact.php
get_template_part('template-contact');
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/video.min.js"></script>

<script>
document.getElementById('openModal').addEventListener('click', function() {
  document.getElementById('contactFormSlideIn').classList.add('active');
});

document.getElementById('closeContactForm').addEventListener('click', function() {
  document.getElementById('contactFormSlideIn').classList.remove('active');
});

window.addEventListener('click', function(event) {
  if (event.target == document.getElementById('contactFormSlideIn')) {
    document.getElementById('contactFormSlideIn').classList.remove('active');
  }
});

document.addEventListener('DOMContentLoaded', function() {
  // Get the form element
  var form = document.querySelector('.wpcf7 form');

  // Add an event listener for the form submission
  form.addEventListener('submit', function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Get the values of the form fields
    var firstName = document.getElementById('your-name').value.trim();
    var lastName = document.getElementById('last-name').value.trim();
    var email = document.getElementById('your-email').value.trim();
    var message = document.getElementById('message').value.trim();

    // Validate the form fields
    if (firstName === '' || lastName === '' || email === '') {
      alert('Please fill in all required fields.');
      return;
    }

    // Validate email format
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
      alert('Please enter a valid email address.');
      return;
    }

    // Prepare the AJAX request
    var formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(response => response.json())
    .then(data => {
      // Display success or error message
      if (data.status === 'mail_sent') {
        alert('The contact form is sent.');
      } else {
        alert('There was an error sending the form. Please try again.');
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('There was an error sending the form. Please try again.');
    });
  });
});
</script>



<script>
    // When the user scrolls the page, execute handleScroll
    window.onscroll = function() {
        handleScroll();
    };

    // Get the header
    var header = document.getElementById("navbar-inner-white");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Variable to store the last scroll position
    var lastScrollTop = 0;

    function handleScroll() {
        // Get the current scroll position
        var currentScrollTop = window.pageYOffset;

        // Check if the user is scrolling up or down
        if (currentScrollTop > lastScrollTop) {
            // Scrolling down
            header.classList.remove("sticky-header");
            header.classList.add("hidden-header");
        } else {
            // Scrolling up
            if (currentScrollTop > sticky) {
                header.classList.add("sticky-header");
                header.classList.remove("hidden-header");
            } else {
                header.classList.remove("sticky-header");
                header.classList.remove("hidden-header");
            }
        }

        // Update the last scroll position
        lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
    }
</script>

</body>

</html>