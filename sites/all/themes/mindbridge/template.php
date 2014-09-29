<?php
function mindbridge_form_alter(&$form, $form_state, $form_id) {
  if ($form_id == 'search_block_form')
  {
    $form['search_block_form']['#attributes']['placeholder'] = 'Search';
  }
}
?>