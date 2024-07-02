<?php
/**
 * User: Expitrans
 * Date: 7/26/2024
 * Time: 3:49 PM
 */

namespace expitrans\mvccore\form;


/**
 * Class TextareaField
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore\form
 */
class TextareaField extends BaseField
{
    public function renderInput()
    {
        return sprintf('<textarea class="form-control%s" name="%s">%s</textarea>',
             $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}