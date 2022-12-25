const url = $('#url').val();

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content'),
        }
    });
});
$(function () {
    $(".start_date").datepicker({
        minDate: 1,
        changeMonth: true,
        dateFormat: 'yy-mm-dd',
        onClose: function (selectedDate, instance) {
            if (selectedDate != '') {
                $(".end_date").datepicker("option", "minDate", selectedDate);
                var date = $.datepicker.parseDate(instance.settings.dateFormat, selectedDate, instance.settings);
                date.setMonth(date.getMonth() + 3);
                var minDate2 = new Date(selectedDate);
                minDate2.setDate(minDate2.getDate() + 1);

                $(".end_date").datepicker("option", "minDate", minDate2);
                $(".end_date").datepicker("option", "maxDate", date);
            }
        }
    });
    $(".end_date").datepicker({
        minDate: 1,
        changeMonth: true,
        dateFormat: 'yy-mm-dd'
    });


});

$("#datatables-reponsive").DataTable({
    "ordering": false
});

$(document).on('click', '.remove-event', function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    let image = $(this).closest('.row1');
    question = confirm('Delete Event?');
    if (question) {
        $.ajax({
            url: `${url}/dashboard/event/${id}`,
            type: 'delete',
            dataType: "json",
            success: function (response) {
                if (response.status == "200") {
                    image.fadeOut('slow').remove();
                    $("#tablecontents").find('.row1').each(function (index) {
                        $(this).find('td.sn').html(index + 1);
                    });
                    $('.response').empty().append(`<div class="alert alert-success mx-3">Event Deleted Successfully</div>`
                    );
                } else {
                    alert('Unable to delete event');
                }
            }
        });
    } else {
        return false;
    }
});