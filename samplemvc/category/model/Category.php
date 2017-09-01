<?php

class Category
{
    private $cateid;
    private $catename;

    public function __construct($cateid, $catename)
    {
        $this->cateid = $cateid;
        $this->catename = $catename;
    }

    public function getCateID()
    {
        return $this->cateid;
    }

    public function setCateID($value)
    {
        $this->cateid = $value;
    }

    public function getCateName()
    {
        return $this->catename;
    }

    public function setCateName($value)
    {
        $this->catename = $value;
    }
}

?>