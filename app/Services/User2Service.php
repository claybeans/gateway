<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service{

 use ConsumesExternalService;

    /**
     * The base uri to consume the User2 Service
     * @var string
     */

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.users2.base_uri');
    }

    /**
     * Obtain the full list of Users from User1 Site
     * @return string
     */

     public function obtainUsers2(){
        return $this->performRequest('GET','/users');
    }

    public function createUser2($data){
        return $this->performRequest('POST', '/users', $data);
    }

    public function obtainUser2($id){
        return $this->performRequest('GET', "/users/{$id}");
    }

    public function editUser2($data, $id){
        return $this->performRequest('PUT', "/users/{$id}", $data);
    }

    public function editUsers2($data, $id){
        return $this->performRequest('PATCH', "/users/{$id}", $data);
    }

    public function deleteUser2($id){
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}