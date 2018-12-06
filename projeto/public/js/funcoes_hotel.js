function removeHotel(id) {
    var request = $.ajax({
        type: "DELETE",
        url: "/admin/hoteis/delete",
        dataType: "json",
        data: {
            id: id
        }
    });

    request.done(function (data) {
        if (data === true) {
            swal("Hotel removido com sucesso", "", "success").then(function (value) {
                location.reload();
            });
        } else {
            swal("Não foi possivel remover o hotel", "", "error");
        }
    });

    request.fail(function (data) {
        console.error(data);
        swal("Não foi possível remover o hotel", "", "error");
    })
}


$(document).on("click", ".removeHotel", function () {
    var id = $(this).data('id');
    swal({
        title: "Você tem certeza que deseja remover esse Hotel?",
        icon: "warning",
        buttons: {
            cancel: {
                text: "Cancelar",
                visible: true,
                value: false
            },
            confirm: {
                text: "Confirmar",
                visible: true,
                value: true
            }
        }
    }).then(function (value) {
        if (value) {
            removeHotel(id);
        }
    });
});