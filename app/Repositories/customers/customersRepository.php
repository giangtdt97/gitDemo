<?php
namespace App\Repositories\customers;

use App\Repositories\BaseRepository;
use App\Repositories\Customers\customersRepositoryInterface;

class customersRepository extends BaseRepository implements customersRepositoryInterface
{

    public function getModel()
    {
        return \App\Models\customers::class;
    }
}
