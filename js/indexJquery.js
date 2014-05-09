$(".hoverable").mousemove( function(e) {
    
    var top = e.clientY - 250;
    var left = e.clientX - 520;
    
    $('#hoverDiv').css('top', top).css('left', left).fadeIn('fast').html($(this).attr('hovertext'));

}).mouseout(function() {
    $('#hoverDiv').fadeOut('fast');
});