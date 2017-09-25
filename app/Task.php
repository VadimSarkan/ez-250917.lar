<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Получить все задачи пользователя.
     */
    public function tasks() {
	return $this->hasMany(Task::class);
    }

}
