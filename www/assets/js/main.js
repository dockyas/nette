$(function () {
    if ($("#frm-addForm .alert.alert-danger").length !== 0) {
        $('#addForm').modal({
            show: true
        });
    }
});

if ($(".alert").length != 0) {
    $(".alert").delay(3000).fadeOut(100);
}

$('.form-signin input:checkbox').change(function () {
    if ($(this).is(':checked'))
        $(this).parent().addClass('selected');
    else
        $(this).parent().removeClass('selected')
});


