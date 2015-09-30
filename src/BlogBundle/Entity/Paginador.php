<?php

namespace BlogBundle\Entity;

class Paginador {

    protected $currentPage;
    protected $totalPages;
    protected $startPage;
    protected $endPage;

    function __construct($total, $current) {
        $this->totalPages = $total;
        $this->currentPage = $current;
        $this->startPage = 1;
        $this->endPage = $total;

        if ( $this->totalPages > 6 ) {
            $this->startPage = max($this->currentPage - max(2,$this->currentPage-4),1);
            $this->endPage = min($this->currentPage + max(2,5-$this->currentPage),$this->totalPages);
        }
    }

    public function getCurrent() {
        return $this->currentPage;
    }

    public function getTotal() {
        return $this->totalPages;
    }

    public function getstart() {
        return $this->startPage;
    }

    public function getEnd() {
        return $this->endPage;
    }

}
