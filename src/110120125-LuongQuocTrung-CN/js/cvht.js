$(document).ready(function () {
    $('#drop-ma-Lop').change(function () {
        var ma_lop = $('#drop-ma-Lop').val();
        var data = { ma_lop: ma_lop };
        $.ajax({
            url: 'cvht/xuliselectLop.php',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data.length > 0) {
                    $('#ten-Lop').val(data[0].label);
                } else {
                    $('#ten-Lop').val("khong co"); // Trường hợp không có dữ liệu
                }
                // $('#ten-Lop').val(data[0].label);
            },
        });
    });
   
});
