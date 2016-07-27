<?php
namespace Calypso\Testimonial\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'calypso_testimonial';
        $this->_headerText = __('Manage Testimonials');

        parent::_construct();

        if ($this->_isAllowedAction('Calypso_Testimonial::save')) {
            $this->buttonList->update('add', 'label', __('Add New Testimonial'));
        } else {
            $this->buttonList->remove('add');
        }
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
