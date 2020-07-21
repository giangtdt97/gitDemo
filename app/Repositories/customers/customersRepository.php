<?php
namespace App\Repositories\Post;

use App\Repositories\BaseRepository;
use App\Repositories\customers\customersRepositoryInterface;

class ProductRepository extends BaseRepository implements customersRepositoryInterface
{

    public function getModel()
    {
        return \App\customers::class;
    }
}
