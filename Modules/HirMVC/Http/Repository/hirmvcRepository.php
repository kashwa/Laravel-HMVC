<?php
/**
 * Created by PhpStorm.
 * User: aabed
 * Date: 12/8/18
 * Time: 5:23 PM
 */

namespace Modules\HirMVC\Http\Repository;

use Modules\HirMVC\Entities\Post;
use Modules\HirMVC\Entities\User;
use Modules\HirMVC\Http\Interfaces\hirmvc;

class hirmvcRepository implements hirmvc{

    public function users()
    {
        // TODO: Implement users() method.
        return User::all();
    }

    public function posts()
    {
        // TODO: Implement posts() method.
        return Post::all();
    }
}
