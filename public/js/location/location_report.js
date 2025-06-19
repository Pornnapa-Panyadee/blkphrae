$(document).ready(function () {
    // โหลดอำเภอของจังหวัดแพร่
    $.getJSON('/blockage/phrae/getdistrict/แพร่', function (data) {
        $.each(data, function (i, obj) {
            $('#blk_district').append('<option value="' + obj.vill_district + '">' + obj.vill_district + '</option>');
        });
    });

    // เมื่อเลือกอำเภอแล้วโหลดตำบล
    $('#blk_district').on('change', function () {
        var district = $(this).val();
        $('#blk_tumbol').empty().append('<option value="">-- เลือกตำบล --</option>');

        if (district) {
            $.getJSON('/subdistrict/' + encodeURIComponent(district), function (res) {
                $.each(res.data, function (i, obj) {
                    $('#blk_tumbol').append('<option value="' + obj.vill_tunbol + '">' + obj.vill_tunbol + '</option>');
                });
            });
        }
    });

    $('#blk_tumbol').on('change', function () {
        var district = $('#blk_district').val();
        var tumbol = $(this).val();

        $('#blk_village').empty().append('<option value="">-- เลือกหมู่บ้าน --</option>');

        if (district && tumbol) {
            $.getJSON('/getVillage/' + encodeURIComponent(district) + '/' + encodeURIComponent(tumbol), function (res) {
                $.each(res.data, function (i, obj) {
                    $('#blk_village').append('<option value="หมู่ที่ ' + obj.vill_moo + ' ' + obj.vill_name + '"> หมู่ที่ ' + obj.vill_moo + ' ' + obj.vill_name + '</option>');
                });
            });
        }
    });



});