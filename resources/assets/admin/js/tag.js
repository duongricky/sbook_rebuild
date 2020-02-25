const { textDatatable } = trans('admin');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var DatatablesDataSourceAjaxServer = {
    init: function() {
        $('table#tagList').DataTable({
            serverSide: true,
            ajax: {
                url: '/admin/tags'
            },
            columns: [
                { data: 'name', name: 'name' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return data;
                    }
                }
            ],
            order: [[ 0, 'desc' ]],
            language: textDatatable,
            fnDrawCallback: function (oSettings) {
                if ($('#m_table_1 tr').length < 11) {
                    $('#m_table_1_next').hide();
                    $('#m_table_1_last').hide();
                }
            },
            'fnCreatedRow': function (nRow, book, id) {
                $(nRow).attr('id', 'tagIdRow' + book.id);
            },
        });
    }
};

jQuery(document).ready(function () {
    DatatablesDataSourceAjaxServer.init();

    $('th:last-child .sort').addClass('active');
    $('th').click( function () {
        $('.sort').removeClass('active');
        $(this).children().toggleClass('active');
    });
});

$(document).ready( function () {
    validateBook($('#form-create'));
    validateBook($('#form-update'));
    $('body').on('click', '.edit-tag', function () {
        $('#btn-tag').trigger('click');
        const id = $(this).attr('data-id');
        $.ajax({
            url: route('admin.tags.edit', id),
            method: 'GET',
            success: function (res) {
                $('#form-update input').val(res.data.name);
                $('#form-update').attr('action', res.url);
                $('#update-tag').attr('data-id', res.data.id);
            }
        });
    });

    $('#update-tag').click( function () {
        const id = $(this).attr('data-id');
        if($('#form-update').valid()){
            var name = $('#form-update input').val();
            $.ajax({
                url: $('#form-update').attr('action'),
                method: 'PUT',
                data: {
                    name
                },
                dataType: 'Json',
                success: function(res){
                    $('#close-modal').trigger('click');
                    $('tr#tagIdRow' + id).children().first().html(name);
                    messagePopup(res.message, 'success', 'success')
                },
                error: function (xhr, status, error) {
                    var response = JSON.parse(xhr.responseText);
                    messagePopup(response.message, 'error', 'error');
                }
            });
        }
    });

    $('body').on('click', '.delete-tag', function () {
        const id = $(this).attr('data-id');
        var count = $(this).attr('data-count');
        var msg = parseInt(count) > 0
            ? trans('admin.swal.confirmBookCount').replace(':count', count)
            : trans('admin.swal.are_you_sure');
        swal.fire({
            title: msg,
            type: 'warning',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: trans('admin.swal.no_cancel'),
            confirmButtonText: trans('admin.swal.yes_delete'),
        }).then( function (result) {
            if (result && result.value) {
                $.ajax({
                    url: route('admin.tags.destroy', id),
                    method: "DELETE",
                    success: function (res) {
                        $('#tagList tbody #tagIdRow' + id).remove();
                        messagePopup(res.message, 'success', 'success');
                    },
                    error: function (xhr, status, error) {
                        var response = JSON.parse(xhr.responseText);
                        messagePopup(response.message, 'error', 'error');
                    }
                });
            }
        });
    });
});

var validateBook = function ($form) {
    $form.validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 10,
            },
        },
        messages: {
            name: {
                required: trans('validation.required')
                    .replace(':attribute', 'Name'),
                minlength: trans('validation.min.string')
                    .replace(':attribute', 'Name')
                    .replace(':min', 3),
                maxlength: trans('validation.max.string')
                    .replace(':attribute', 'Name')
                    .replace(':max', 10),
            },
        },
        submitHandler: function (form) {
            form.find(button[type = submit]).attr("disabled", true);
            form.submit();
        }
    });
}

var messagePopup = function (text, type, icon, button = false) {
    swal.fire({
        text: text,
        type: type,
        icon: icon,
        button: button
    });
}
