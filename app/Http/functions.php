<?php

function delete_form($routeParams,$label='Delete'){
    $form=Form::open(['method'=>'DELETE','action'=>$routeParams]);
//dd($form);
    $form .=Form::submit($label,['class' =>'btn btn-danger']);

    return $form .=Form::close();
}