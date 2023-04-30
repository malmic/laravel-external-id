<?php

namespace Eeappdev\LaravelExternalId\Events;

use Illuminate\Database\Eloquent\Model;
use Eeappdev\LaravelExternalId\ExternalId;

class ExternaldUpdated
{
    public $id;
    public $model;

    public function __construct(ExternalId $id, Model $model)
    {
        $this->id = $id;
        $this->model = $model;
    }
}
