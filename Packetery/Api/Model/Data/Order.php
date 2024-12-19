<?php

namespace Packetery\Api\Model\Data;

use Packetery\Api\Api\Data\OrderInterface;

class Order implements OrderInterface
{
     /**
     * @var string|null
     */
    private $orderNumber;

     /**
     * @var string|null
     */
    private $recipientFirstname;
     /**
     * @var string|null
     */
    private $recipientLastname;
     /**
     * @var string|null
     */
    private $recipientCompany;
     /**
     * @var string|null
     */
    private $recipientEmail;
     /**
      * @var string|null
      */
    private $recipientPhone;
     /**
      * @var float|null
      */
    private $cod;
     /**
      * @var string|null
      */
    private $currency;
     /**
      * @var float|null
      */
    private $value;
     /**
      * @var float|null
      */
    private $weight;
     /**
      * @var string|null
      */
    private $pointId;
     /**
      * @var string|null
      */
    private $pointName;
     /**
      * @var bool|null
      */
    private $isCarrier;
     /**
      * @var string|null
      */
    private $carrierPickupPoint;
     /**
      * @var string|null
      */
    private $senderLabel;
     /**
      * @var bool|null
      */
    private $addressValidated;
    /**
     * @var string|null
     */
   private $recipientStreet;
   /**
     * @var string|null
     */
    private $recipientHouseNumber;
   /**
     * @var string|null
     */
    private $recipientCity;
    /**
     * @var string|null
     */
    private $recipientZip;
    /**
     * @var string|null
     */
    private $recipientCountryId;
    /**
     * @var string|null
     */
    private $recipientCounty;
    /**
     * @var string|null
     */
    private $recipientLongitude;
    /**
     * @var string|null
     */
    private $recipientLatitude;
   /**
    * @var int|null
    */
    private $exported;

    /**
     * @inheritDoc
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @inheritDoc
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRecipientFirstname()
    {
        return $this->recipientFirstname;
    }

    /**
     * @inheritDoc
     */
    public function setRecipientFirstname($recipientFirstname)
    {
        $this->recipientFirstname = $recipientFirstname;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRecipientLastname()
    {
        return $this->recipientLastname;
    }

    /**
     * @inheritDoc
     */
    public function setRecipientLastname($recipientLastname)
    {
        $this->recipientLastname = $recipientLastname;
        return $this;
    }

     /**
     * @inheritDoc
     */
    public function getRecipientCompany()
    {
        return $this->recipientCompany;
    }

    /**
     * @inheritDoc
     */
    public function setRecipientCompany($recipientCompany)
    {
       $this->recipientCompany = $recipientCompany;
       return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     * @inheritDoc
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
        return $this;
    }

     /**
     * @inheritDoc
     */
    public function getRecipientPhone()
    {
       return $this->recipientPhone;
    }

    /**
     * @inheritDoc
     */
    public function setRecipientPhone($recipientPhone)
    {
        $this->recipientPhone = $recipientPhone;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @inheritDoc
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
        return $this;
    }

   /**
     * @inheritDoc
     */
    public function getCurrency()
    {
       return $this->currency;
    }

   /**
     * @inheritDoc
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

  /**
    * @inheritDoc
    */
    public function getValue()
   {
        return $this->value;
   }
   /**
     * @inheritDoc
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

  /**
    * @inheritDoc
    */
   public function getWeight()
   {
        return $this->weight;
   }

  /**
     * @inheritDoc
     */
   public function setWeight($weight)
   {
      $this->weight = $weight;
        return $this;
   }

   /**
     * @inheritDoc
     */
    public function getPointId()
    {
        return $this->pointId;
    }

    /**
     * @inheritDoc
     */
    public function setPointId($pointId)
    {
        $this->pointId = $pointId;
        return $this;
    }

     /**
     * @inheritDoc
     */
    public function getPointName()
    {
        return $this->pointName;
    }

    /**
     * @inheritDoc
     */
    public function setPointName($pointName)
    {
       $this->pointName = $pointName;
        return $this;
    }

    /**
     * @inheritDoc
     */
   public function getIsCarrier()
   {
     return $this->isCarrier;
   }

   /**
     * @inheritDoc
     */
  public function setIsCarrier($isCarrier)
    {
        $this->isCarrier = $isCarrier;
        return $this;
    }
   /**
     * @inheritDoc
     */
    public function getCarrierPickupPoint()
    {
       return $this->carrierPickupPoint;
    }
    /**
     * @inheritDoc
     */
    public function setCarrierPickupPoint($carrierPickupPoint)
    {
       $this->carrierPickupPoint = $carrierPickupPoint;
        return $this;
    }

    /**
     * @inheritDoc
     */
  public function getSenderLabel()
    {
       return $this->senderLabel;
    }

    /**
     * @inheritDoc
     */
    public function setSenderLabel($senderLabel)
    {
       $this->senderLabel = $senderLabel;
        return $this;
    }

  /**
    * @inheritDoc
    */
    public function getAddressValidated()
   {
      return $this->addressValidated;
    }

    /**
    * @inheritDoc
    */
   public function setAddressValidated($addressValidated)
   {
       $this->addressValidated = $addressValidated;
        return $this;
   }

 /**
  * @inheritDoc
  */
 public function getRecipientStreet()
 {
   return $this->recipientStreet;
 }

 /**
  * @inheritDoc
  */
 public function setRecipientStreet($recipientStreet)
 {
    $this->recipientStreet = $recipientStreet;
    return $this;
 }

 /**
  * @inheritDoc
  */
 public function getRecipientHouseNumber()
 {
   return $this->recipientHouseNumber;
 }

 /**
  * @inheritDoc
  */
 public function setRecipientHouseNumber($recipientHouseNumber)
 {
    $this->recipientHouseNumber = $recipientHouseNumber;
    return $this;
 }
 /**
  * @inheritDoc
  */
 public function getRecipientCity()
 {
   return $this->recipientCity;
 }

 /**
  * @inheritDoc
  */
 public function setRecipientCity($recipientCity)
 {
    $this->recipientCity = $recipientCity;
    return $this;
 }
 /**
  * @inheritDoc
  */
 public function getRecipientZip()
 {
   return $this->recipientZip;
 }

 /**
  * @inheritDoc
  */
 public function setRecipientZip($recipientZip)
 {
    $this->recipientZip = $recipientZip;
    return $this;
 }

  /**
 * @inheritDoc
 */
  public function getRecipientCountryId()
  {
    return $this->recipientCountryId;
  }

  /**
    * @inheritDoc
    */
  public function setRecipientCountryId($recipientCountryId)
  {
    $this->recipientCountryId = $recipientCountryId;
    return $this;
  }
  /**
  * @inheritDoc
  */
  public function getRecipientCounty()
  {
    return $this->recipientCounty;
  }

  /**
    * @inheritDoc
    */
  public function setRecipientCounty($recipientCounty)
  {
    $this->recipientCounty = $recipientCounty;
    return $this;
  }
   /**
 * @inheritDoc
 */
 public function getRecipientLongitude()
 {
   return $this->recipientLongitude;
 }

 /**
  * @inheritDoc
  */
 public function setRecipientLongitude($recipientLongitude)
 {
   $this->recipientLongitude = $recipientLongitude;
   return $this;
 }
  /**
 * @inheritDoc
 */
public function getRecipientLatitude()
{
  return $this->recipientLatitude;
}

/**
  * @inheritDoc
  */
public function setRecipientLatitude($recipientLatitude)
{
  $this->recipientLatitude = $recipientLatitude;
   return $this;
}
  /**
   * @inheritDoc
   */
  public function getExported()
  {
      return $this->exported;
  }

  /**
    * @inheritDoc
    */
  public function setExported($exported)
  {
      $this->exported = $exported;
      return $this;
  }
}