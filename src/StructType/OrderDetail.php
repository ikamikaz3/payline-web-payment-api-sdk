<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use AllowDynamicProperties;
use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information about the order product
 * @subpackage Structs
 */
#[AllowDynamicProperties]
class OrderDetail extends AbstractStructBase
{
    /**
     * The ref
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ref = null;

    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $price = null;

    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $quantity = null;

    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;

    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $category = null;

    /**
     * The brand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $brand = null;

    /**
     * The subcategory1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $subcategory1 = null;

    /**
     * The subcategory2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $subcategory2 = null;

    /**
     * The additionalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $additionalData = null;

    /**
     * The taxRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $taxRate = null;

    /**
     * The seller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $seller = null;

    /**
     * The sellerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $sellerType = null;

    /**
     * Constructor method for orderDetail
     * @param string|null $ref
     * @param string|null $price
     * @param string|null $quantity
     * @param string|null $comment
     * @param string|null $category
     * @param string|null $brand
     * @param string|null $subcategory1
     * @param string|null $subcategory2
     * @param string|null $additionalData
     * @param string|null $taxRate
     * @param string|null $seller
     * @param string|null $sellerType
     * @uses OrderDetail::setRef()
     * @uses OrderDetail::setPrice()
     * @uses OrderDetail::setQuantity()
     * @uses OrderDetail::setComment()
     * @uses OrderDetail::setCategory()
     * @uses OrderDetail::setBrand()
     * @uses OrderDetail::setSubcategory1()
     * @uses OrderDetail::setSubcategory2()
     * @uses OrderDetail::setAdditionalData()
     * @uses OrderDetail::setTaxRate()
     * @uses OrderDetail::setSeller()
     * @uses OrderDetail::setSellerType()
     */
    public function __construct(?string $ref = null, ?string $price = null, ?string $quantity = null, ?string $comment = null, ?string $category = null, ?string $brand = null, ?string $subcategory1 = null, ?string $subcategory2 = null, ?string $additionalData = null, ?string $taxRate = null, ?string $seller = null, ?string $sellerType = null)
    {
        $this
            ->setRef($ref)
            ->setPrice($price)
            ->setQuantity($quantity)
            ->setComment($comment)
            ->setCategory($category)
            ->setBrand($brand)
            ->setSubcategory1($subcategory1)
            ->setSubcategory2($subcategory2)
            ->setAdditionalData($additionalData)
            ->setTaxRate($taxRate)
            ->setSeller($seller)
            ->setSellerType($sellerType);
    }

    /**
     * Get ref value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRef(): ?string
    {
        return $this->ref ?? null;
    }

    /**
     * Set ref value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $ref
     * @return OrderDetail
     */
    public function setRef(?string $ref = null): self
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ref, true), gettype($ref)), __LINE__);
        }
        if (is_null($ref)) {
            unset($this->ref);
        } else {
            $this->ref = $ref;
        }

        return $this;
    }

    /**
     * Get price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrice(): ?string
    {
        return $this->price ?? null;
    }

    /**
     * Set price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $price
     * @return OrderDetail
     */
    public function setPrice(?string $price = null): self
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        if (is_null($price)) {
            unset($this->price);
        } else {
            $this->price = $price;
        }

        return $this;
    }

    /**
     * Get quantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity ?? null;
    }

    /**
     * Set quantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $quantity
     * @return OrderDetail
     */
    public function setQuantity(?string $quantity = null): self
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        if (is_null($quantity)) {
            unset($this->quantity);
        } else {
            $this->quantity = $quantity;
        }

        return $this;
    }

    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment ?? null;
    }

    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $comment
     * @return OrderDetail
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment)) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }

        return $this;
    }

    /**
     * Get category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category ?? null;
    }

    /**
     * Set category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $category
     * @return OrderDetail
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        if (is_null($category)) {
            unset($this->category);
        } else {
            $this->category = $category;
        }

        return $this;
    }

    /**
     * Get brand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand ?? null;
    }

    /**
     * Set brand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $brand
     * @return OrderDetail
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        if (is_null($brand)) {
            unset($this->brand);
        } else {
            $this->brand = $brand;
        }

        return $this;
    }

    /**
     * Get subcategory1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubcategory1(): ?string
    {
        return $this->subcategory1 ?? null;
    }

    /**
     * Set subcategory1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $subcategory1
     * @return OrderDetail
     */
    public function setSubcategory1(?string $subcategory1 = null): self
    {
        // validation for constraint: string
        if (!is_null($subcategory1) && !is_string($subcategory1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subcategory1, true), gettype($subcategory1)), __LINE__);
        }
        if (is_null($subcategory1)) {
            unset($this->subcategory1);
        } else {
            $this->subcategory1 = $subcategory1;
        }

        return $this;
    }

    /**
     * Get subcategory2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubcategory2(): ?string
    {
        return $this->subcategory2 ?? null;
    }

    /**
     * Set subcategory2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $subcategory2
     * @return OrderDetail
     */
    public function setSubcategory2(?string $subcategory2 = null): self
    {
        // validation for constraint: string
        if (!is_null($subcategory2) && !is_string($subcategory2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subcategory2, true), gettype($subcategory2)), __LINE__);
        }
        if (is_null($subcategory2)) {
            unset($this->subcategory2);
        } else {
            $this->subcategory2 = $subcategory2;
        }

        return $this;
    }

    /**
     * Get additionalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalData(): ?string
    {
        return $this->additionalData ?? null;
    }

    /**
     * Set additionalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $additionalData
     * @return OrderDetail
     */
    public function setAdditionalData(?string $additionalData = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalData) && !is_string($additionalData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalData, true), gettype($additionalData)), __LINE__);
        }
        if (is_null($additionalData)) {
            unset($this->additionalData);
        } else {
            $this->additionalData = $additionalData;
        }

        return $this;
    }

    /**
     * Get taxRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTaxRate(): ?string
    {
        return $this->taxRate ?? null;
    }

    /**
     * Set taxRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $taxRate
     * @return OrderDetail
     */
    public function setTaxRate(?string $taxRate = null): self
    {
        // validation for constraint: string
        if (!is_null($taxRate) && !is_string($taxRate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxRate, true), gettype($taxRate)), __LINE__);
        }
        if (is_null($taxRate)) {
            unset($this->taxRate);
        } else {
            $this->taxRate = $taxRate;
        }

        return $this;
    }

    /**
     * Get seller value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeller(): ?string
    {
        return $this->seller ?? null;
    }

    /**
     * Set seller value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $seller
     * @return OrderDetail
     */
    public function setSeller(?string $seller = null): self
    {
        // validation for constraint: string
        if (!is_null($seller) && !is_string($seller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seller, true), gettype($seller)), __LINE__);
        }
        if (is_null($seller)) {
            unset($this->seller);
        } else {
            $this->seller = $seller;
        }

        return $this;
    }

    /**
     * Get sellerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSellerType(): ?string
    {
        return $this->sellerType ?? null;
    }

    /**
     * Set sellerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string|null $sellerType
     * @return OrderDetail
     */
    public function setSellerType(?string $sellerType = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerType) && !is_string($sellerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerType, true), gettype($sellerType)), __LINE__);
        }
        if (is_null($sellerType)) {
            unset($this->sellerType);
        } else {
            $this->sellerType = $sellerType;
        }

        return $this;
    }
}
