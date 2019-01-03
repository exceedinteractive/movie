/*
    Author: Jason Barnes
    Description: Custom JS
    Version: 1.0
    License: GNU General Public License
*/
function editRecord(key)
{
    $.ajax({
        type: "GET",
        url:  'action.php',
        data: 'id=' + key,
        success: function(data){
            var json = JSON.parse(data);
            $('#edit input[name="id"]').val(json.id);
            $('#edit input[name="title"]').val(json.title);
            $('#edit select[name="format"]').val(json.format);
            $('#edit input[name="length"]').val(json.length);
            $('#edit input[name="released"]').val(json.released);
            $('#edit select[name="rating"]').val(json.rating);
            $('#edit').modal('show');
        }
    });
}

function deleteRecord(key)
{
    $('#delete input[name="id"]').val(key);
    $('#delete').modal('show');
}

function validationEvent(element)
{
    var title = $(element).find(' input[name="title"]').val();
    if(title == ''){
        alert('Movie title cannot be missing.');
        return false;
    }
    return true;
}