<?php
namespace App\Repositories\customers;

use App\Repositories\BaseRepository;
use App\Repositories\customers\customersRepositoryInterface;

class customersRepository extends BaseRepository implements customersRepositoryInterface
{

    public function getModel()
    {
        return \App\customer::class;
    }
}
