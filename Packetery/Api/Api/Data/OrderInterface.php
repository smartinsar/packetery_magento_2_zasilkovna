<?php
namespace Packetery\Api\Api\Data;

interface OrderInterface
{

    const ORDER_NUMBER = 'order_number';
    const RECIPIENT_FIRSTNAME = 'recipient_firstname';
    const RECIPIENT_LASTNAME = 'recipient_lastname';
    const RECIPIENT_COMPANY = 'recipient_company';
    const RECIPIENT_EMAIL = 'recipient_email';
    const RECIPIENT_PHONE = 'recipient_phone';
    const COD = 'cod';
    const CURRENCY = 'currency';
    const VALUE = 'value';
    const WEIGHT = 'weight';
    const POINT_ID = 'point_id';
    const POINT_NAME = 'point_name';
    const IS_CARRIER = 'is_carrier';
    const CARRIER_PICKUP_POINT = 'carrier_pickup_point';
    const SENDER_LABEL = 'sender_label';
    const ADDRESS_VALIDATED = 'address_validated';
    const RECIPIENT_STREET = 'recipient_street';
    const RECIPIENT_HOUSE_NUMBER = 'recipient_house_number';
    const RECIPIENT_CITY = 'recipient_city';
    const RECIPIENT_ZIP = 'recipient_zip';
    const RECIPIENT_COUNTRY_ID = 'recipient_country_id';
    const RECIPIENT_COUNTY = 'recipient_county';
    const RECIPIENT_LONGITUDE = 'recipient_longitude';
    const RECIPIENT_LATITUDE = 'recipient_latitude';
    const EXPORTED = 'exported';


    /**
     * Get order_number
     * @return string|null
     */
    public function getOrderNumber();

    /**
     * Set order_number
     * @param string $orderNumber
     * @return $this
     */
    public function setOrderNumber($orderNumber);

    /**
     * Get recipient_firstname
     * @return string|null
     */
    public function getRecipientFirstname();

    /**
     * Set recipient_firstname
     * @param string $recipientFirstname
     * @return $this
     */
    public function setRecipientFirstname($recipientFirstname);

    /**
     * Get recipient_lastname
     * @return string|null
     */
    public function getRecipientLastname();

    /**
     * Set recipient_lastname
     * @param string $recipientLastname
     * @return $this
     */
    public function setRecipientLastname($recipientLastname);

    /**
     * Get recipient_company
     * @return string|null
     */
    public function getRecipientCompany();

    /**
     * Set recipient_company
     * @param string $recipientCompany
     * @return $this
     */
    public function setRecipientCompany($recipientCompany);

    /**
     * Get recipient_email
     * @return string|null
     */
    public function getRecipientEmail();

    /**
     * Set recipient_email
     * @param string $recipientEmail
     * @return $this
     */
    public function setRecipientEmail($recipientEmail);

     /**
      * Get recipient_phone
      * @return string|null
      */
    public function getRecipientPhone();

     /**
      * Set recipient_phone
      * @param string $recipientPhone
      * @return $this
      */
    public function setRecipientPhone($recipientPhone);

    /**
      * Get cod
      * @return float|null
      */
     public function getCod();

    /**
     * Set cod
     * @param float $cod
     * @return $this
     */
     public function setCod($cod);

    /**
     * Get currency
     * @return string|null
     */
    public function getCurrency();

    /**
     * Set currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency);

    /**
     * Get value
     * @return float|null
     */
    public function getValue();

    /**
     * Set value
     * @param float $value
     * @return $this
     */
    public function setValue($value);

    /**
     * Get weight
     * @return float|null
     */
    public function getWeight();

    /**
     * Set weight
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight);
   
    /**
     * Get point_id
     * @return string|null
     */
    public function getPointId();

    /**
     * Set point_id
     * @param string $pointId
     * @return $this
     */
    public function setPointId($pointId);
    
    /**
     * Get point_name
     * @return string|null
     */
    public function getPointName();

    /**
     * Set point_name
     * @param string $pointName
     * @return $this
     */
    public function setPointName($pointName);

     /**
      * Get is_carrier
      * @return bool|null
      */
     public function getIsCarrier();

     /**
      * Set is_carrier
      * @param bool $isCarrier
      * @return $this
      */
     public function setIsCarrier($isCarrier);
     
     /**
      * Get carrier_pickup_point
      * @return string|null
      */
     public function getCarrierPickupPoint();
 
     /**
      * Set carrier_pickup_point
      * @param string $carrierPickupPoint
      * @return $this
      */
     public function setCarrierPickupPoint($carrierPickupPoint);
    
    /**
     * Get sender_label
     * @return string|null
     */
    public function getSenderLabel();

    /**
     * Set sender_label
     * @param string $senderLabel
     * @return $this
     */
    public function setSenderLabel($senderLabel);
    
     /**
      * Get address_validated
      * @return bool|null
      */
     public function getAddressValidated();
 
     /**
      * Set address_validated
      * @param bool $addressValidated
      * @return $this
      */
     public function setAddressValidated($addressValidated);

     /**
      * Get recipient_street
      * @return string|null
      */
     public function getRecipientStreet();
 
     /**
      * Set recipient_street
      * @param string $recipientStreet
      * @return $this
      */
     public function setRecipientStreet($recipientStreet);

     /**
      * Get recipient_house_number
      * @return string|null
      */
     public function getRecipientHouseNumber();
 
     /**
      * Set recipient_house_number
      * @param string $recipientHouseNumber
      * @return $this
      */
     public function setRecipientHouseNumber($recipientHouseNumber);

     /**
      * Get recipient_city
      * @return string|null
      */
     public function getRecipientCity();
 
     /**
      * Set recipient_city
      * @param string $recipientCity
      * @return $this
      */
     public function setRecipientCity($recipientCity);

     /**
      * Get recipient_zip
      * @return string|null
      */
     public function getRecipientZip();
 
     /**
      * Set recipient_zip
      * @param string $recipientZip
      * @return $this
      */
     public function setRecipientZip($recipientZip);

    /**
     * Get recipient_country_id
     * @return string|null
     */
    public function getRecipientCountryId();

    /**
     * Set recipient_country_id
     * @param string $recipientCountryId
     * @return $this
     */
    public function setRecipientCountryId($recipientCountryId);

     /**
      * Get recipient_county
      * @return string|null
      */
     public function getRecipientCounty();
 
     /**
      * Set recipient_county
      * @param string $recipientCounty
      * @return $this
      */
     public function setRecipientCounty($recipientCounty);

    /**
     * Get recipient_longitude
     * @return string|null
     */
    public function getRecipientLongitude();

    /**
     * Set recipient_longitude
     * @param string $recipientLongitude
     * @return $this
     */
    public function setRecipientLongitude($recipientLongitude);
 
    /**
      * Get recipient_latitude
      * @return string|null
      */
     public function getRecipientLatitude();

    /**
     * Set recipient_latitude
     * @param string $recipientLatitude
     * @return $this
     */
    public function setRecipientLatitude($recipientLatitude);

     /**
      * Get exported
      * @return int|null
      */
     public function getExported();

    /**
     * Set exported
     * @param int $exported
     * @return $this
     */
     public function setExported($exported);
}