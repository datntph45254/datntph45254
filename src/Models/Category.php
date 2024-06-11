<?php

namespace Hi\Oop\Models;

use Hi\Oop\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';
    public function getByCategoryId($categoryId)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('category_id = ?')
            ->setParameter(0, $categoryId)
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();
    }


}