$(document).ready(function() {
    //darken the navbar on scroll
    $(window).on('scroll', function() {
        if($(window).scrollTop()) {
            $('nav').addClass('darken');
        } else {
            $('nav').removeClass('darken');
        }
    });

    $("#about").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ 
            scrollTop: '+=555px' 
        }, 600);
    });

    $("#home_header").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ 
            scrollTop: 0 
        }, 600);
    });

    $("#home_footer").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ 
            scrollTop: 0 
        }, 600);
    });

    $("#login").click(function(event) {
        event.preventDefault();
        document.getElementById('modal-wrapper').style.display='block';
    });

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("open_login");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    // The button takes the user to the top of the page because of href="#"
    // This is why preventDefault(); is used
    btn.onclick = function(e) {
        e.preventDefault();
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});