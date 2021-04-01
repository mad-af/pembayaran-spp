<?php
namespace App\Helpers;

class HttpError {
    const NOT_FOUND = 404;
    const INTERNAL_ERROR = 500;
    const CONFLICT = 409;
    const EXPECTATION_FAILED = 417;
    const FORBIDDEN = 403;
    const UNAUTHORIZED = 401;
    const BAD_REQUEST = 400;
}