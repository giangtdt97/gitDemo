<?php
namespace App\Repositories\Post;

use App\Repositories\BaseRepository;
use App\Repositories\customers\customersRepositoryInterface;

abstract class customersRepository extends BaseRepository implements customersRepositoryInterface
{


        public function getModel()
    {
        return \App\Models\Customer::class;
    }

        public function getCustomer()
    {
        return $this->model->select('first_name')->take(50)->get();
    }
}
