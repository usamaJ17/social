<?php
namespace Modules\User\Models;
use App\BaseModel;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Models\SEO;

class Role extends BaseModel
{
    use SoftDeletes;
    use NodeTrait;
    protected $table = 'core_model_has_roles';
    protected $fillable = [
        'role_id',
        'model_id',
    ];


}

