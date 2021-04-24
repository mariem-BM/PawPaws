<?php


class Room
{


    private $idhotel=null;
   private $hoteltype=null;
    private $price=null;
   private $photo;
   private $qty=null;

    /**
     * room constructor.
     * @param $idroom
     * @param $hoteltype
     * @param $price
     * @param $photo
     */
    public function __construct( $hoteltype, $price, $photo,$qty)
    {

        $this->hoteltype = $hoteltype;
        $this->price = $price;
        $this->photo = $photo;
        $this->qty = $qty;
    }/**
 * @return mixed
 */


    /**
     * @return mixed
     */
    public function getIdhotel()
    {
        return $this->idhotel;
    }

    /**
     * @param mixed $idroom
     */
    public function setIdhotel($idhotel)
    {
        $this->idhotel = $idhotel;
    }

    /**
     * @return mixed
     */
    public function getHoteltype()
    {
        return $this->hoteltype;
    }

    /**
     * @param mixed $hoteltype
     */
    public function setHoteltype($hoteltype)
    {
        $this->hoteltype = $hoteltype;
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
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty): void
    {
        $this->qty = $qty;
    }




}
?>