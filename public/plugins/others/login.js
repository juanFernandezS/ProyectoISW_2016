$(document).ready(function(){
    $('.modal-footer button').click(function(){
        var button = $(this);

        if ( button.attr("data-dismiss") != "modal" ){
            var inputs = $('form input');
            var title = $('.modal-title');
            var progress = $('.progress');
            var progressBar = $('.progress-bar');
            var rut=document.getElementsByName("rut")[0].value;
            var password=document.getElementsByName("password")[0].value;
            var error_rut = document.getElementsByName("$error_rut").value;
            var error_pass = document.getElementsByName("$error_pass").value;


            inputs.attr("disabled", "disabled");

            button.hide();

            if (error_rut == null && error_pass== null){
                progress.show();

                progressBar.animate({width: "100%"}, 100);

                progress.delay(1000)
                    .fadeOut(600);

                button.text("Close")
                    .removeClass("btn-primary")
                    .addClass("btn-success")
                    .blur()
                    .delay(1600)
                    .fadeIn(function () {
                        title.text("Log in is successful");
                        button.attr("data-dismiss", "modal");
                    });
            }
            else {

            }
        }
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        var inputs = $('form input');
        var title = $('.modal-title');
        var progressBar = $('.progress-bar');
        var button = $('.modal-footer button');

        inputs.removeAttr("disabled");

        title.text("Iniciar");

        progressBar.css({ "width" : "0%" });

        button.removeClass("btn-success")
            .addClass("btn-primary")
            .text("Ok")
            .removeAttr("data-dismiss");

    });
});