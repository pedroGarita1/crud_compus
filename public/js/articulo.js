$(() => {
    function quitar_reaccion() {
        $.ajax({
            data: $('#frm_quitar_reaccion').serialize(),
            url: "{{ route('quitar-reaccion') }}",
            type: 'GET',
            success: (r) => {

            }
        });
    }
    $('#btn_no_reaccion').click(() => {
        quitar_reaccion();
    })

    function copy_portapapeles() {
        let input_copy = document.getElementById('input_copy');
        input_copy.select();
        input_copy.setSelectionRange(0, 99999);
        document.execCommand('copy');
    }

    $('#btn_compartir').click(() => {
        copy_portapapeles();
    });
});