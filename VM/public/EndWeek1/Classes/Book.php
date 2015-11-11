<?php
    // Book class
    class Book
    {
        public $id;
        public $title;
        public $description;
        public $price;
    }

    // Contructor
    public function __construct($titl, $dsc, $prc)
    {
        $this->title = $titl;
        $this->comment = $dsc;
        $this->price = $prc;
    }

    // Returns id
    public function id()
    {
        return $this->id;
    }

    // Returns title
    public function title()
    {
        return $this->title;
    }

    // Returns description
    public function description()
    {
        return $this->description;
    }

    // Returns price
    public function price()
    {
        return $this->price;
    }

    // Markup for list
    public function generateHtml()
    {
        $html = file_get_contents(./bookHtml.txt);
        echo $html;
    }
