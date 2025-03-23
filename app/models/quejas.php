<?php

namespace app\models;

class quejas extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = $this->connect();
        $this->fillable = [
            'queja',
        ];
    }

    public function addQuejas($data)
    {
        if (!empty($data['queja'])) {
            $this->values = [
                sanitizeString($data["queja"]),
            ];
            return $this->insert();
        } else { 
            echo json_encode(["r" => 'e']);
            return false;
        }
    }
}
