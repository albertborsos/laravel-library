<?php

namespace albertborsos\library\Illuminate\Database\Schema;

class Blueprint extends \Illuminate\Database\Schema\Blueprint
{
    /**
     * Add nullable creation and update blameable fields to the table.
     *
     * @return void
     */
    public function timestamps()
    {
        $this->integer('created_by')->nullable();

        $this->integer('updated_by')->nullable();
    }
}
