<?php

namespace App\Http\Services;

use App\User;
use Illuminate\Http\Request;

class UserService extends Service {
    // QUERY
    public function findAll() {
        $query = User::all();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function findById($payload) {
        $query = User::where('userId' ,$payload)->first();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function countData() {
        $query = User::where('isDeleted', false)->count();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    // COMMAND
    public function insertOne($payload) {
        try {
            $query = User::create($payload);
        } catch (\Exception $e) {
            dd($e);
            return $this->responsef($e->errorInfo[1]);
        }
        return $this->responset($query);
    }

    public function upsertOne($payload) {
        try {
            $query = User::where('userId' ,$payload->userId);
            $query->update($payload->data);
        } catch (\Throwable $e) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function isDeleteOne($payload) {
        try {
            $query =  User::where('userId' ,$payload);
            $query->delete();
        } catch (\Throwable $e) {
            dd($e);
            return $this->responsef();
        }
        return $this->responset($query);
    }
}
