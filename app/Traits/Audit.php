<?php

namespace App\Traits;

use Log;
use App\Audit as AuditModel;

trait Audit {



    public static function bootAudit()
    {


        static::creating(function ($model) {
            Log::debug($model);
            $audit = new AuditModel();
            $audit->type = get_class($model);
            $audit->raw = $model;
            $audit->save();
        });

        static::updating(function ($model) {
            Log::debug($model);
            $audit = new AuditModel();
            $audit->type = get_class($model);
            $audit->raw = $model;
            $audit->save();
        });

        static::deleting(function ($model) {
            Log::debug($model);
            $audit = new AuditModel();
            $audit->type = get_class($model);
            $audit->raw = $model;
            $audit->save();
        });
    }
}