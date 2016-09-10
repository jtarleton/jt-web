<?php

class myUser extends sfBasicSecurityUser
{


function getId() {
return $this->getAttribute('id');
}

function getUsername() {
return $this->getAttribute('username');
}

}
