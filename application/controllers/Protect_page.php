<?php
function Protect_page() {
    if ($this->session->userdata('status') != 'ONLINE') {
        redirect(base_url('Logincontroller'));
    }
}
?>