$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var DatatablesDataSourceAjaxServer = {
    init: function() {
        $('table#categoryList').DataTable({
            serverSide: true,
            ajax: {
                url: route('admin.category.ajax-index'),
            },
            columns: [
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                {
                    data: null,
                    name: 'id',
                    orderable: true,
                    searchable: false,
                    render: function (data, type, row) {
                            return '<a href="#"' + 'class="btn btn-primary btn-sm mr-5 categoryDetailbutton" data-categoryId="' + data.id + '" data-toggle="modal" data-target="#category_detail_model" title="' + trans('admin.view') + '"><i class="fa fa-eye" aria-hidden="true"></i></a>'+
                            '<a href="#"' + ' class= "btn btn-info m-btn mr-5 m-btn--custom btn-sm categoryEditbutton" data-categoryId="' + data.id + '" data-toggle="modal" data-target="#category_update_model" title="' + trans('admin.edit') + '"> <i class="fa fa-edit"></i></a>' +
                            '<button type="submit" class="btn btn-danger m-btn m-btn--custom btn-9 btn-sm categoryRemovebutton" data-bookCount="' + data.books_count + '" data-categoryId="' + data.id + '" title="' + trans('admin.delete') + '"><i class="fa fa-trash"></i></button>';
                    },
                }
            ],
            order: [[ 0, 'desc' ]],
            language: trans('admin.searchPlaceholder'),
            fnDrawCallback: function(oSettings) {
                if ($('#m_table_1 tr').length < 11) {
                    $('#m_table_1_next').hide();
                    $('#m_table_1_last').hide();
                }
            },
            'fnCreatedRow': function (nRow, category, id) {
                $(nRow).attr('id', 'categoryIdRow' + category.id);
            },
        });
    }
};

jQuery(document).ready(function() {
    DatatablesDataSourceAjaxServer.init();

    $('th:last-child .sort').addClass('active');
    $('th').click(function() {
        $('.sort').removeClass('active');
        $(this).children().toggleClass('active');
    });

    validateCategory($('#category_update_model form'));
    validateCategory($('#category_create_model form'));
});

$('#categoryList').on('click', '.categoryDetailbutton', function() {
    let cateId = $(this).attr('data-categoryId');
    $.ajax({
        url: route('admin.category.show', {id: cateId}),
        method: 'GET',
        success: function(data) {
            $('#category_detail_model #name').text('');
            $('#category_detail_model #description').text('');
            if (data) {
                $('#category_detail_model #name').text(data.name);
                $('#category_detail_model #description').text(data.description);
            } else {
                swal.fire({
                    title: trans('admin.validate.cate_notExists'),
                    icon: 'error',
                }).then(function () {
                    $('#category_detail_model .close').click();
                });
            }
        }
    });
});

$('#categoryList').on('click', '.categoryRemovebutton', function () {
    let cateId = $(this).attr('data-categoryId');
    let booksCount = parseInt($(this).attr('data-bookCount'));
    let confirmTitle = trans('admin.swal.are_you_sure');

    if (booksCount > 0) {
        confirmTitle = trans('admin.cate.swal.booksCount')
    }
    swal.fire({
        title: confirmTitle,
        type: 'warning',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: trans('admin.swal.no_cancel'),
        confirmButtonText: trans('admin.swal.yes_delete'),
    }).then(function(result) {
        if (result && result.value) {
            $.ajax({
                url: route('admin.category.destroy', {id: cateId}),
                method: 'DELETE',
                success: function(data) {
                    if (data) {
                        $('#categoryList tbody #categoryIdRow' + cateId).remove();
                        swal.fire({
                            title: trans('admin.swal.title_success'),
                            type: 'success',
                            icon: 'success',
                        });
                    } else {
                        swal.fire({
                            title: trans('admin.validate.cate_notExists'),
                            icon: 'error',
                        });
                    }
                }
            });
        }
    });
});

$('#categoryList').on('click', '.categoryEditbutton', function () {
    let cateId = $(this).attr('data-categoryId');

    $.ajax({
        url: route('admin.category.show', {id: cateId}),
        method: 'GET',
        success: function(data) {
            $('#category_update_model .modal-header h6').text('');
            $('#category_update_model #name').val('');
            $('#category_update_model #description').val('');
            if (data) {
                $('#category_update_model form').attr('action', '/admin/category/' + data.id);
                $('#category_update_model .modal-header h6').text(data.name);
                $('#category_update_model #name').val(data.name);
                $('#category_update_model #description').val(data.description);
            } else {
                swal.fire({
                    title: trans('admin.validate.cate_notExists'),
                    icon: 'error',
                }).then(function () {
                    $('#category_update_model .close').click();
                });
            }
        }
    });
});

function validateCategory($formElement) {
    $formElement.validate({
        rules: {
            name: {
                required: true,
                minlength: 5,
                maxlength: 191,
            },
            description: {
                required: true,
                minlength: 5,
                maxlength: 2500,
            },
        },
        submitHandler: function(form) {
            form.find(button[type=submit]).attr("disabled", true);
            form.submit();
        }
    });
}

function validateDisabled(form, elementDisabled) {
    if (form.valid()) {
        elementDisabled.prop('disabled', false);
    } else {
        elementDisabled.prop('disabled', true);
    }
}

$('#category_create_model input').keyup(function () {
    validateDisabled($(this), $('#category_create_model form button[type=submit]'));
});

$('#category_create_model textarea').keyup(function () {
    validateDisabled($(this), $('#category_create_model form button[type=submit]'));
});

$('#category_update_model input').keyup(function () {
    validateDisabled($(this), $('#category_update_model form button[type=submit]'));
});

$('#category_update_model textarea').keyup(function () {
    validateDisabled($(this), $('#category_update_model form button[type=submit]'));
});
