<?php
namespace Mage2tv\UserStory1\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    private $arr = ["java", "cpp", "python"];
    private $str = "programming languages";
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getArray() {
        return $this->arr;
    }
    public function getString() {
        return $this->str;
    }
}