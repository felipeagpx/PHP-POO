<?php

/*
 * @author Felipe
 */

interface Publication {

    //Methods
    public function openUp();

    public function close();

    public function browse($np);

    public function nextPage();

    public function backPage();
}
