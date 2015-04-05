<?php
/**
 * CKEditor Field for Kirby 2
 *
 * @version   1.0.0
 * @author    David Hohl <david.hohl@gmail.com>
 * @copyright David Hohl <david.hohl@gmail.com>
 * @license   GNU GPL v3.0 <http://opensource.org/licenses/GPL-3.0>
 */

/**
 * CKEditor Field
 *
 * @since 1.0.0
 */
class ckeditorField extends InputField {

    /**
     * Define frontend assets
     *
     * @var array
     * @since 1.0.0
     */
    public static $assets = array(
        'css' => array(
            'ckeditor.css'
        )
    );

    /**
     * Create input element
     *
     * @since 1.0.0
     *
     * @return \Brick
     */
    public function input()
    {
        // Set up textarea
        $input = parent::input();
        $input->tag('textarea');
        $input->removeAttr('type');
        $input->removeAttr('value');
        $input->html($this->value() ?: false);
        $input->data('field', 'ckeditorfield');

        // Set up wrapping element
        $wrapper = new Brick('div', false);
        $wrapper->append($input);
        $wrapper->append('<script src="'.str_replace('panel','',$_SERVER['HTTP_REFERER']) . '/site/fields/ckeditor/assets/js/ckeditor.js"></script><script>CKEDITOR.inline( "'.$this->name().'" );</script>');
        return $wrapper;
    }

    public function element()
    {
        $element = parent::element();
        $element->addClass('field-with-textarea');
        return $element;
    }

}
