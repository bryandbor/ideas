$(".hoverable").mousemove( function(e) {
    
    var top = e.clientY + 10;
    var left = e.clientX + 10;
    
    $('#hoverDiv').css('top', top).css('left', left).fadeIn('fast').html($(this).attr('hoverText'));
    
}).mouseout(function() {
    $('#hoverDiv').fadeOut('fast');
});