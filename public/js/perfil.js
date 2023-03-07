function ocultar_form_editar_info() {
    let form = document.getElementById("frm_perfil");
    let info = document.getElementById("informacion_perfil");
    info.style.display = "block";
    form.style.display = "none";
}

function muestra_form_editar_info() {
    let form = document.getElementById("frm_perfil");
    let info = document.getElementById("informacion_perfil");
    info.style.display = "none";
    form.style.display = "block";
}

$(() => {
    $("#btn_editar_info").click(() => {
        muestra_form_editar_info();
    });

    $("#btn_cancelar_actualizar_info").click(() => {
        ocultar_form_editar_info();
    });
});

function ocultar_form_editar_social() {
    let form = document.getElementById("frm_redes");
    let info = document.getElementById("redes_sociales");
    info.style.display = "block";
    form.style.display = "none";
}

function muestra_form_editar_social() {
    let form = document.getElementById("frm_redes");
    let info = document.getElementById("redes_sociales");
    info.style.display = "none";
    form.style.display = "block";
}

$(() => {
    $("#btn_editar_social").click(() => {
        muestra_form_editar_social();
    });

    $("#btn_cancelar_actualizar_social").click(() => {
        ocultar_form_editar_social();
    });
});