function validName (name) {
    if (name.length < 3) {
        return false;
    }
    return true;
}

function validEmail (email) {
    if (email.length < 6) {
        return false;
    }
    if (email.indexOf('.') == -1) {
        return false;
    }
    if (email.indexOf('@') < 2) {
        return false;
    }
    if ((email.length - email.lastIndexOf('.')) < 3) {
        return false;
    }
    if (email.indexOf('@') > email.lastIndexOf('.')) {
        return false;
    }
    return true;
}

function validMessage (message) {
    if (message.length < 5) {
        return false;
    }
    return true;
}

$(document).ready(function(){
    $('body').fadeIn('slow');
    
    
    $('#contact-name').keyup(function() {
        var name = $('#contact-name').val();
        var email = $('#contact-email').val();
        var message = $('#contact-message').val();
        if (name == '') {
            //name is empty
            $('#formNameGroup').removeClass('has-success').removeClass('has-warning').addClass('has-error');
            $('#formNameGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $('#contactSubmit').addClass('disabled');
        } else if (!validName(name)) {
            //name is not empty but is invalid
            $('#formNameGroup').removeClass('has-success').removeClass('has-error').addClass('has-warning');
            $('#formNameGlyph').removeClass('glyphicon-ok').removeClass('glyphicon-remove').addClass('glyphicon-warning-sign');
            $('#contactSubmit').addClass('disabled');
        } else {
            //name is valid
            $('#formNameGroup').removeClass('has-warning').removeClass('has-error').addClass('has-success');
            $('#formNameGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            //check other fields to activate submit button
            if (validEmail(email) && validMessage(message)) {
                $('#contactSubmit').removeClass('disabled');
            } else {
                $('#contactSubmit').addClass('disabled');
            }
        }
    });
    
    $('#contact-email').keyup(function() {
        var name = $('#contact-name').val();
        var email = $('#contact-email').val();
        var message = $('#contact-message').val();
        if (email == '') {
            //name is empty
            $('#formEmailGroup').removeClass('has-success').removeClass('has-warning').addClass('has-error');
            $('#formEmailGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $('#contactSubmit').addClass('disabled');
        } else if (!validEmail(email)) {
            //name is not empty but is invalid
            $('#formEmailGroup').removeClass('has-success').removeClass('has-error').addClass('has-warning');
            $('#formEmailGlyph').removeClass('glyphicon-ok').removeClass('glyphicon-remove').addClass('glyphicon-warning-sign');
            $('#contactSubmit').addClass('disabled');
        } else {
            //name is valid
            $('#formEmailGroup').removeClass('has-warning').removeClass('has-error').addClass('has-success');
            $('#formEmailGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            //check other fields to activate submit button
            if (validName(name) && validMessage(message)) {
                $('#contactSubmit').removeClass('disabled');
            } else {
                $('#contactSubmit').addClass('disabled');
            }
        }
    });
    
    $('#contact-message').keyup(function() {
		var name = $('#contact-name').val();
        var email = $('#contact-email').val();
        var message = $('#contact-message').val();
        if (message == '') {
            //name is empty
            $('#formMessageGroup').removeClass('has-success').removeClass('has-warning').addClass('has-error');
            $('#formMessageGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            $('#contactSubmit').addClass('disabled');
        } else if (!validMessage(message)) {
            //name is not empty but is invalid
            $('#formMessageGroup').removeClass('has-success').removeClass('has-error').addClass('has-warning');
            $('#formMessageGlyph').removeClass('glyphicon-ok').removeClass('glyphicon-remove').addClass('glyphicon-warning-sign');
            $('#contactSubmit').addClass('disabled');
        } else {
            //name is valid
            $('#formMessageGroup').removeClass('has-warning').removeClass('has-error').addClass('has-success');
            $('#formMessageGlyph').removeClass('glyphicon-warning-sign').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            //check other fields to activate submit button
            if (validEmail(email) && validName(name)) {
                $('#contactSubmit').removeClass('disabled');
            } else {
                $('#contactSubmit').addClass('disabled');
            }
        }
    });
    
    $('#contactForm').submit(function() {
        alert
        var uName = $('#contact-name').val();
        var uEmail = $('#contact-email').val();
        var uMessage = $('#contact-message').val();
        //Send email to webmaster
    });
    
});

$(".hoverable").mousemove( function(e) {
    var top = e.clientY - 200 ;
    var left = e.clientX - 650;
    var scrolled = $(window).scrollTop();
    if ($(window).width() > 750) {
        $('#hoverDiv').css('top', top + scrolled).css('left', left).fadeIn('fast').html($(this).attr('hovertext'));
    }
}).mouseout(function() {
    $('#hoverDiv').fadeOut('fast');
});
