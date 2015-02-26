// JavaScript Document
//$(document).ready(function() {
//            var cambio = false;
//            $('.nav li a').each(function(index) {
//                if (this.href.trim() == window.location) {
//                    $(this).parent().addClass("active");
//                    cambio = true;
//                }
//            });
//            if (!cambio) {
//                $('.nav li:first').addClass("active");
//            }
//});

$(document).ready(function() {
            var cambio = false;
            $('#menu-escritorio li a').each(function(index) {
                if (this.href.trim() == window.location) {
                    $(this).parent().addClass("active");
                    cambio = true;
                }
            });
            if (!cambio) {
                $('#menu-escritorio li:first').addClass("active");
            }
});


