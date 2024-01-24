<?php

namespace App\Controllers\API\V1;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class ConverterController extends BaseController
{
	use ResponseTrait;

    public function index(): ResponseInterface
    {
        return $this->respond(['test' => true], 200, "All good");
    }
}
