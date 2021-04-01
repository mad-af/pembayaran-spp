<?php

namespace App\Http\Services;

use App\Student;
use Illuminate\Http\Request;

class TaskService extends Service {
    // QUERY
    public function findAll() {
        $query = Student::all();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function findManyPagination($payload) {
        $query = Student::where('isDeleted', false)->simplePaginate($payload);
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function findById($payload) {
        $query = User::where('taskId' ,$payload)->first();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function findByEmail($payload) {
        $query = Student::where('email' ,$payload)->first();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function countData() {
        $query = Student::where('isDeleted', false)->count();
        if (!$query) {
            return $this->responsef();
        }
        return $this->responset($query);
    }

    // COMMAND
    public function insertOne($payload) {
        try {
            $query = Student::create($payload);
        } catch (\Exception $e) {
            return $this->responsef($e->errorInfo[1]);
        }
        return $this->responset($query);
    }

    public function upsertOne($payload) {
        try {
            $query = User::where('taskId' ,$payload->taskId);
            $query->update($payload->data);
        } catch (\Throwable $e) {
            dd($e);
            return $this->responsef();
        }
        return $this->responset($query);
    }

    public function isDeleteOne($payload) {
        try {
            $query = User::where('taskId' ,$payload->taskId);
            $query->update(['isDeleted' => true]);
        } catch (\Throwable $e) {
            return $this->responsef();
        }
        return $this->responset($query);
    }
}
