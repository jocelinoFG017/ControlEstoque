<?php
function permission(){
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata('usuario_logado');

    if(!$usuarioLogado){
        $ci->session->set_flashdata("Danger", "Necessário realizar login");
        redirect('login');
    }
    return $usuarioLogado;
}