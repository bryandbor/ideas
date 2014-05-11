$(document).ready(function(){
    var xmlHttp;
    if (window.ActiveXObject) xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
    else xmlHttp = new XMLHttpRequest;
    if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4) {
        var user = 'admin';
        var pass = 'pass';
        var params = 'user='+user+'&pass='+pass;
        xmlHttp.open('POST', 'visitors.php', true);
        xmlHttp.setRequestHeader('Content-length', params.length);
        xmlHttp.onreadystatechange = function(){
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                var data = JSON.parse(xmlHttp.responseText);
                for (var obj in data) {
                    $('#content').append('<tr>');
                    $('#content').append('  <td>'+data[obj].ip+'</td>');
                    $('#content').append('  <td>'+data[obj].first_visit+'</td>');
                    $('#content').append('  <td>'+data[obj].latest_visit+'</td>');
                    $('#content').append('</tr>');
                }
            } else if (xmlHttp.readyState == 4 && xmlHttp.status != 200) {
                alert('There was an error downloading the visitors list.');
            }
        };
        xmlHttp.send(params);
    }
});