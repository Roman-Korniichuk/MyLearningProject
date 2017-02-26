$('.delete').click(function(elem) {
    var idElem = elem.target.id;
    $('#'+idElem).css('display', 'none');
    $(this).css('display', 'none');
    $('span#'+idElem+'.deleted').css('display', 'inline');
    $.post('../admin/del.php', {id: idElem}, function() {
        
    });
});