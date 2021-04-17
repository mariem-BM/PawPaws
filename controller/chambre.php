<?php


class chambres
{


    private $idchambre=null;
   private $typechambre=null;
    private $price=null;
   private $photo;
   private $qte=null;

    /**
     * room constructor.
     * @param $idchambre
     * @param $typechambre
     * @param $price
     * @param $photo
     */
    public function __construct( $typechambre, $price, $photo,$qte)
    {

        $this->typechambre = $typechambre;
        $this->price = $price;
        $this->photo = $photo;
        $this->qte = $qte;
    }/**
 * @return mixed
 */


    /**
     * @return mixed
     */
    public function getIdchambre()
    {
        return $this->idchambre;
    }

    /**
     * @param mixed $idroom
     */
    public function setIdchambre($idchambre)
    {
        $this->idchambre = $idchambre;
    }

    /**
     * @return mixed
     */
    public function getTypechambre()
    {
        return $this->typechambre;
    }

    /**
     * @param mixed $roomtype
     */
    public function setTypechambre($typechambre)
    {
        $this->typechambre = $typechambre;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qte): void
    {
        $this->qte = $qte;
    }




}