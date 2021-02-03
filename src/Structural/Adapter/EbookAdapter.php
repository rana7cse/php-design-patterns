<?php


namespace App\Structural\Adapter;


class EbookAdapter extends Ebook implements BookInterface
{

    public function next()
    {
        return $this->clickToNextPage();
    }

    public function read()
    {
        return $this->openOnTablet();
    }
}