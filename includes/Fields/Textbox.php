<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Field_Textbox
 */
class NF_Fields_Textbox extends NF_Abstracts_Input
{
    protected $_name = 'textbox';

    protected $_nicename = 'Textbox';

    protected $_group = 'standard_fields';

    protected $_type = 'input';

    public function __construct()
    {
        parent::__construct();

        $this->_nicename = __( 'Textbox', Ninja_Forms::TEXTDOMAIN );
    }

    public function validate( $value )
    {
        parent::validate( $value );
    }

}
