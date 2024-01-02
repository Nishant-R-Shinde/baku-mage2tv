<?php 

namespace Mage2tv\UserStory1\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {
    protected $_pageFactory;
    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }
    public function execute() {
        $page = $this->_pageFactory->create();
        $page->getConfig()->getTitle()->set(__("UserStory 1"));
        return $page;
    }
}