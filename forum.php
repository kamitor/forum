<?php


class forum{

    private $counter = 0;
    private $id;
    private $name;
    private $description;
    public $categories = array();

    public function __toString()
    {
        $output= "<h2>Forum: $this->name</h2> <h3>Description:</h3> $this->description <h3>ID: $this->id</h3>";
        return $output;
    }

    /**
     * forum constructor.s
     * @param $name
     * @param $description
     * @param $categories
     */
    public function __construct($name, $description, $id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories): void

    {

        array_pad($this->categories, ++$this->counter, $categories);

    }











}

