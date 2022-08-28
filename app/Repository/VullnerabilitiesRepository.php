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
     * Create new Vullnerability
     * @return Vullnerabilitie
     */
    public function create(array $data) : Vullnerabilitie
    {
        return $this->getModel()->create($data);
    }

    /**
     * Delete Vullnerability
     * @return bool
     */
    public function delete(int $id)
    {
        return $this->getById($id)->delete();
    }

    /**
     * Update Vullnerability 
     * @return bool
     */
    public function update(int $id, array $data) : bool
    {
        return $this->getById($id)->fill($data)->save();
    }
}