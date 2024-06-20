<?php

declare(strict_types=1);

namespace PaylineWebPayment\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlertsTrans StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AlertsTrans extends AbstractStructBase
{
    /**
     * The AlertId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $AlertId;
    /**
     * The ExplanationLabel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $ExplanationLabel;
    /**
     * The ExplanationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $ExplanationCode;
    /**
     * The RuleName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: false
     * @var string
     */
    protected string $RuleName;
    /**
     * The RuleAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RuleAction = null;
    /**
     * The RuleCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RuleCriteria = null;
    /**
     * Constructor method for AlertsTrans
     * @uses AlertsTrans::setAlertId()
     * @uses AlertsTrans::setExplanationLabel()
     * @uses AlertsTrans::setExplanationCode()
     * @uses AlertsTrans::setRuleName()
     * @uses AlertsTrans::setRuleAction()
     * @uses AlertsTrans::setRuleCriteria()
     * @param string $alertId
     * @param string $explanationLabel
     * @param string $explanationCode
     * @param string $ruleName
     * @param string $ruleAction
     * @param string $ruleCriteria
     */
    public function __construct(string $alertId, string $explanationLabel, string $explanationCode, string $ruleName, ?string $ruleAction = null, ?string $ruleCriteria = null)
    {
        $this
            ->setAlertId($alertId)
            ->setExplanationLabel($explanationLabel)
            ->setExplanationCode($explanationCode)
            ->setRuleName($ruleName)
            ->setRuleAction($ruleAction)
            ->setRuleCriteria($ruleCriteria);
    }
    /**
     * Get AlertId value
     * @return string
     */
    public function getAlertId(): string
    {
        return $this->AlertId;
    }
    /**
     * Set AlertId value
     * @param string $alertId
     * @return \StructType\AlertsTrans
     */
    public function setAlertId(string $alertId): self
    {
        // validation for constraint: string
        if (!is_null($alertId) && !is_string($alertId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alertId, true), gettype($alertId)), __LINE__);
        }
        $this->AlertId = $alertId;

        return $this;
    }
    /**
     * Get ExplanationLabel value
     * @return string
     */
    public function getExplanationLabel(): string
    {
        return $this->ExplanationLabel;
    }
    /**
     * Set ExplanationLabel value
     * @param string $explanationLabel
     * @return \StructType\AlertsTrans
     */
    public function setExplanationLabel(string $explanationLabel): self
    {
        // validation for constraint: string
        if (!is_null($explanationLabel) && !is_string($explanationLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationLabel, true), gettype($explanationLabel)), __LINE__);
        }
        $this->ExplanationLabel = $explanationLabel;

        return $this;
    }
    /**
     * Get ExplanationCode value
     * @return string
     */
    public function getExplanationCode(): string
    {
        return $this->ExplanationCode;
    }
    /**
     * Set ExplanationCode value
     * @param string $explanationCode
     * @return \StructType\AlertsTrans
     */
    public function setExplanationCode(string $explanationCode): self
    {
        // validation for constraint: string
        if (!is_null($explanationCode) && !is_string($explanationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($explanationCode, true), gettype($explanationCode)), __LINE__);
        }
        $this->ExplanationCode = $explanationCode;

        return $this;
    }
    /**
     * Get RuleName value
     * @return string
     */
    public function getRuleName(): string
    {
        return $this->RuleName;
    }
    /**
     * Set RuleName value
     * @param string $ruleName
     * @return \StructType\AlertsTrans
     */
    public function setRuleName(string $ruleName): self
    {
        // validation for constraint: string
        if (!is_null($ruleName) && !is_string($ruleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleName, true), gettype($ruleName)), __LINE__);
        }
        $this->RuleName = $ruleName;

        return $this;
    }
    /**
     * Get RuleAction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRuleAction(): ?string
    {
        return $this->RuleAction ?? null;
    }
    /**
     * Set RuleAction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ruleAction
     * @return \StructType\AlertsTrans
     */
    public function setRuleAction(?string $ruleAction = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleAction) && !is_string($ruleAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleAction, true), gettype($ruleAction)), __LINE__);
        }
        if (is_null($ruleAction) || (is_array($ruleAction) && empty($ruleAction))) {
            unset($this->RuleAction);
        } else {
            $this->RuleAction = $ruleAction;
        }

        return $this;
    }
    /**
     * Get RuleCriteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRuleCriteria(): ?string
    {
        return $this->RuleCriteria ?? null;
    }
    /**
     * Set RuleCriteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ruleCriteria
     * @return \StructType\AlertsTrans
     */
    public function setRuleCriteria(?string $ruleCriteria = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleCriteria) && !is_string($ruleCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleCriteria, true), gettype($ruleCriteria)), __LINE__);
        }
        if (is_null($ruleCriteria) || (is_array($ruleCriteria) && empty($ruleCriteria))) {
            unset($this->RuleCriteria);
        } else {
            $this->RuleCriteria = $ruleCriteria;
        }

        return $this;
    }
}
