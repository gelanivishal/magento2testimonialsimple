<?php
namespace Calypso\Testimonial\Controller\Adminhtml\Post;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Calypso_Testimonial::post');
        $resultPage->addBreadcrumb(__('Testimonial'), __('Testimonial'));
        $resultPage->addBreadcrumb(__('Manage Testimonial'), __('Manage Testimonial'));
        $resultPage->getConfig()->getTitle()->prepend(__('Testimonials'));

        return $resultPage;
    }

    /**
     * Is the user allowed to view the testimonial post grid.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Calypso_Testimonial::post');
    }


}
