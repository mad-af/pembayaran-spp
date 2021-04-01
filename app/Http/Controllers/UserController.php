<?php

namespace App\Http\Controllers;

use App\Helpers\Massage;
use App\Helpers\ErrorCode;
use App\Helpers\HttpError;
use App\Schema\UserSchema;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

use App\Http\Services\UserService;

class UserController extends Controller{
  public function __construct() {
    $this->user = new UserService();
  }

  // ------------------------------------------------------------------------------------------
  // QUERY
  // ------------------------------------------------------------------------------------------
  public function getUserList() {
    $userData = $this->user->findAll()->getData();
    if ($userData->err) {
        return $this->responsef(Massage::USER_NOT_FOUND, HttpError::NOT_FOUND);
    }

    return $this->responset($userData);
  }

  public function getUserById($param) {
    $userData = $this->user->findById($param)->getData();
    if ($userData->err) {
        return $this->responsef(Massage::USER_NOT_FOUND, HttpError::NOT_FOUND);
    }

    return $this->responset($userData->data);
  }

  // ------------------------------------------------------------------------------------------
  // COMMAND
  // ------------------------------------------------------------------------------------------
  public function insertUser(Request $request) {
    $payload = UserSchema::schemaInsert($request);
    $query = $this->user->insertOne($payload)->getData();
    if ($query->err) {
        return $this->responsef(Massage::ACCOUNT_REGISTERED, HttpError::CONFLICT);
    }
    
    $userData = $this->user->findByAccount($query->data->ACCOUNT)->getData();
    if ($userData->err) {
        return $this->responsef(Massage::USER_NOT_FOUND, HttpError::NOT_FOUND);
    }

    $result = $userData->data;
    return $this->responset($result);
  }

  public function updateUserById(Request $request, $param) {
    $userData = $this->user->findById($param)->getData();
    if ($userData->err) {
        return $this->responsef(Massage::USER_NOT_FOUND, HttpError::NOT_FOUND);
    }
    
    $payload = UserSchema::schemaUpdate([$request, $param]);
    $query = $this->user->upsertOne($payload)->getData();
    if ($query->err) {
        return $this->responsef(Massage::UPDATE_FAILED, HttpError::CONFLICT);
    }

    $result = $query->data;
    return $this->responset($result);
  }

  public function deleteUserById($param) {
    $query = $this->user->isDeleteOne($param)->getData();
    if ($query->err) {
        return $this->responsef(Massage::DELETED_FAILED, HttpError::CONFLICT);
    }

    $result = $query->data;
    return $this->responset($result);
  }
}
