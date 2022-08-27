<?php

namespace App\Repository;

use App\Models\Vullnerabilitie;

class VullnerabilitiesRepository {
    /**
     * Get Model
     * @return Vullnerabilitie
     */
    private function getModel()
    {
        return new Vullnerabilitie();
    }

    /**
     * Get By id Model
     * @return Vullnerabilite|null
     */
    public function getById(int $id) : ?Vullnerabilitie
    {
        return $this->getModel()->find($id);
    }

    /**
     * Delete Vullnerability
     * @return bool
     */
    public function delete(int $id)
    {
        return $this->getById($id)->delete();
    }
}