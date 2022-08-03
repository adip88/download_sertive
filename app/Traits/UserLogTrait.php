<?php

namespace App\Traits;

use Illuminate\Support\Facades\Hash;

trait UserLogTrait
{
    public function validatedLevelAdmin()
    {
        $input = $this->validated();
        $input['level'] = 'admin';
        $input['password'] = Hash::make($this->password);
        return $input;
    }

    public function validatedLevelPeserta()
    {
        $input = $this->validated();
        $input['level'] = 'peserta';
        $input['password'] = Hash::make($this->password);
        return $input;
    }
}
