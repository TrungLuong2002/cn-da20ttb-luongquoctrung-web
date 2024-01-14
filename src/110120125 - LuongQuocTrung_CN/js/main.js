$(document).ready(function () {
    $('#year').change(function () {
        var year = $('#year').val();
        var data = { year: year };
        $.ajax({
            url: 'module/user/xuliajax_NH.php',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                console.log(data);
             
                $('#class').empty();
      
                $.each(data, function (index, item) {
                    $('#class').append($('<option>', {
                        value: item.value,
                        text: item.label
                    }))
                });
            },
        });
    });
   
});
