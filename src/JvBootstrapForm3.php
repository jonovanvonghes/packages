<?php

namespace Jonovanvonghes\Packages;

/**
 * Class JvBootstrapForm3
 */

/**
 * Générateur de formulaire boostrap V5
 *
 * @author Jonovan <jonovan.vonghes@ac-polynesie.pf>
 * @version 1.0
 */
class JvBootstrapForm3
{

    protected $jv_google_recaptcha_key = '';
    protected $jv_google_recaptcha_secret_key = '';

    protected $first_col_sm = 4;
    protected $second_col_sm = 8;

    protected $input_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_input' => '',
        'id_input' => '',
        'class_input' => '',
        'type_input' => 'text',
        'placeholder_input' => '',
        'value_input' => '',
        'btn_input' => false,
        'btn_options' => array(
            'position' => 'left',
            'id' => '',
            'class' => '',
            'text' => 'text',
            'icon' => '',
        ),
        'append_input' => false,
        'append_options' => array(
            'position' => 'left',
            'text' => 'text',
            'icon' => '',
        ),
        'help_text' => '',
        'help_id' => '',
        'minlength' => '',
        'maxlength' => '',
        'disabled' => false,
        'required' => false,
        'data_attr' => array(),
        'is_invalid' => false,
        'validate_type' => 'input',
        'generate_type' => 'input',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $input_datetime_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_input_date' => '',
        'id_input_date' => '',
        'class_input_date' => '',
        'placeholder_input_date' => '',
        'value_input_date' => '',
        'help_text_date' => '',
        'help_id_date' => '',
        'disabled_date' => false,
        'required_date' => false,
        'data_attr_date' => array(),
        'name_input_time' => '',
        'id_input_time' => '',
        'class_input_time' => '',
        'placeholder_input_time' => '',
        'value_input_time' => '',
        'help_text_time' => '',
        'help_id_time' => '',
        'disabled_time' => false,
        'required_time' => false,
        'data_attr_time' => array(),
        'is_invalid' => false,
        'validate_type' => 'datetime',
        'generate_type' => 'datetime',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $input_arg_grp = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_input' => '',
        'id_input' => '',
        'class_input' => '',
        'type_input' => 'text',
        'placeholder_input' => '',
        'value_input' => '',
        'before' => '',
        'id_before' => '',
        'after' => '',
        'id_after' => '',
        'help_text' => '',
        'help_id' => '',
        'disabled' => false,
        'required' => false,
        'data_attr' => array(),
        'is_invalid' => false,
        'validate_type' => 'input',
        'generate_type' => 'input_grp',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $date_multi_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_date' => '',
        'id_date' => '',
        'class_date_d' => '',
        'class_date_m' => '',
        'class_date_y' => '',
        'value_date_d' => '',
        'value_date_m' => '',
        'value_date_y' => '',
        'value_date' => '',
        'help_text' => '',
        'help_id' => '',
        'disabled' => false,
        'required' => false,
        'is_invalid' => false,
        'validate_type' => 'date_multi',
        'generate_type' => 'date_multi',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $hidden_input = array(
        'value' => '',
        'name' => '',
        'generate_type' => 'hidden',
        'generate' => false,
    );

    protected $radio_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_radio' => '',
        'required' => false,
        'childs' => array(
            'radio1' => array(
                'text_radio' => 'text',
                'value' => 'value',
                'id' => 'id',
                'checked' => false,
                'disabled' => false,
                'hr' => false,
                'group_title' => '',
                'data_attr' => array(),
            ),
        ),
        'is_invalid' => false,
        'validate_type' => 'radio',
        'generate_type' => 'radio_verticale',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
        'full_width' => false,
    );

    protected $checkbox_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name_checkbox' => '',
        'childs' => array(
            'checkbox1' => array(
                'text_checkbox' => 'text',
                'value' => 'value',
                'id' => 'id',
                'checked' => false,
                'disabled' => false,
                'hr' => false,
                'group_title' => '',
                'data_attr' => array(),
            ),
        ),
        'multiple' => false,
        'required' => false,
        'is_invalid' => false,
        'validate_type' => 'checkbox',
        'generate_type' => 'checkbox',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
        'full_width' => false,
        'col' => 4,
        'implode' => false,
    );

    protected $select_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'id_select' => '',
        'name_select' => '',
        'class_select' => '',
        'required' => false,
        'multiple' => false,
        'help_text' => '',
        'help_id' => '',
        'childs' => array(
            'select1' => array(
                'text_select' => 'text',
                'value' => 'value',
                'class_option' => '',
                'id_option' => '',
                'selected' => false,
                'disabled' => false,
                'data_attr' => array(),
            ),
        ),
        'is_invalid' => false,
        'validate_type' => 'select',
        'generate_type' => 'select',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $google_captcha = array(
        'key' => '6LdWHwcTAAAAAHsOWKLHDP3llRoA6w8xWKGHkuHP',
        'key_secret' => '6LdWHwcTAAAAAHJD6Hxj-HQo0OEth9H90Iw5hwh5',
        'col_sm' => 8,
        'col_offset' => 4,
    );

    protected $submit_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'text_submit' => 'text',
        'id_submit' => '',
        'class_submit' => '',
        'value_submit' => '',
        'data_attr' => array(),
        'generate_type' => 'submit',
        'generate' => false,
        'disabled' => false,
    );

    protected $submit_return_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'text_submit' => 'text',
        'id_submit' => '',
        'class_submit' => '',
        'value_submit' => '',
        'data_attr_submit' => array(),
        'button_return' => true,
        'text_return' => 'text',
        'id_return' => '',
        'class_return' => '',
        'value_return' => '',
        'href_return' => '',
        'data_attr_return' => array(),
        'generate_type' => 'submit_return',
        'generate' => false,
    );

    protected $nonce_arg = array(
        'name' => 'name',
        'nonce' => 'nonce',
    );

    protected $textarea_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name' => 'name',
        'class' => '',
        'id' => '',
        'value' => '',
        'placeholder' => '',
        'cols' => '',
        'rows' => '',
        'readonly' => '',
        'disabled' => false,
        'required' => false,
        'hr' => false,
        'maxlength' => '',
        'data_attr' => array(),
        'help_text' => '',
        'help_id' => '',
        'is_invalid' => false,
        'validate_type' => 'textarea',
        'generate_type' => 'textarea',
        'generate' => false,
        'validate' => true,
        'first_col_sm' => 4,
        'second_col_sm' => 8,
    );

    protected $file_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'libelle_label' => 'Libellé',
        'id_label' => '',
        'class_label' => '',
        'name' => 'name',
        'id' => '',
        'class' => '',
        'accept' => '',
        'disabled' => false,
        'required' => false,
        'multiple' => false,
        'data_attr' => array(),
        'help_text' => '',
        'help_id' => '',
        'generate_type' => 'file',
        'generate' => false,
    );

    protected $captcha_arg = array(
        'id_div_container' => '',
        'class_div_container' => '',
        'key' => '',
        'error_msg' => false,
        'is_invalid' => false,
        'validate_type' => 'google_captcha',
        'generate_type' => 'google_captcha',
        'generate' => false,
    );

    protected $hr_arg = array(
        'class_div_container' => '',
        'generate_type' => 'hr',
        'generate' => true,
    );

    protected $text_arg = array(
        'is_invalid' => false,
        'generate_type' => 'text',
        'generate' => true,
        'id' => '',
        'class' => '',
        'parameters' => '',
        'elem' => 'span',
        'text' => "",
        'br' => false,
        'doublebr' => false,
        'hr' => false,
    );

    public function __construct($args = null)
    {
        if (is_null($args)) {
            return;
        }

        extract($args);

        // Recaptcha de google ne sera pas nécessaire dans nos applications

        // if (!is_null($key))
        //     $this->jv_google_recaptcha_key = $key;
        // if (!is_null($key_secret))
        //     $this->jv_google_recaptcha_secret_key = $key_secret;

        if (!is_null($f_col_sm)) {
            $this->first_col_sm = $f_col_sm;
        }

        if (!is_null($s_col_sm)) {
            $this->second_col_sm = $s_col_sm;
        }

    }

    public function add_input($args = null)
    {
        if (is_null($args)) {
            $args = $this->input_arg;
        } else {
            $args = $args + $this->input_arg;
        }

        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>
        <div
            class="form-group row <?php echo $class_div_container ?>"
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_input,
                $class_label,
                $libelle_label,
                $required
            ) ?>


            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">

                <?php if ($btn_input || $append_input): ?>
                    <div class="input-group">
                <?php endif;?>

                <?php if ($btn_input && $btn_options['position'] == 'left'): ?>
                    <div class="input-group-prepend">
                        <button
                            id="<?=$btn_options['id']?>"
                            class="btn btn-outline-secondary <?=$btn_options['class']?>"
                            type="button">

                            <?php if (isset($btn_options['icon'])): ?>
                                <i class="fa <?=$btn_options['icon']?>" aria-hidden="true"></i>
                            <?php endif;?>
                            <?=$btn_options['text']?>
                        </button>
                    </div>

                <?php elseif ($append_input && $append_options['position'] == 'left'): ?>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <?=(isset($append_options['icon']) && !empty($append_options['icon']) ? "<i class='fa " . $append_options['icon'] . " ' aria-hidden='true'></i> " : "")?>
                            <?=(isset($append_options['text']) ? $append_options['text'] : "")?></div>
                    </div>
                <?php endif;?>


                <?php 
                    $_data_attr = array();
                    if (isset($data_attr) && !empty($data_attr))
                        $_data_attr = $data_attr;
                    $this->_input(
                        $name_input,
                        $id_input,
                        $type_input,
                        $is_invalid,
                        $class_input,
                        $placeholder_input,
                        $disabled,
                        $required,
                        $_data_attr,
                        $value_input
                    );
                ?>

                <?php if ($btn_input && $btn_options['position'] == 'right'): ?>
                    <div class="input-group-append">
                        <button
                            id="<?=$btn_options['id']?>"
                            class="btn btn-outline-secondary <?=$btn_options['class']?>"
                            type="button" >

                            <?php if (isset($btn_options['icon'])): ?>
                                <i class="fa <?=$btn_options['icon']?>" aria-hidden="true"></i>
                            <?php endif;?>
                            <?=$btn_options['text']?>
                        </button>
                    </div>
                <?php elseif ($append_input && $append_options['position'] == 'right'): ?>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <?=(isset($append_options['icon']) && !empty($append_options['icon']) ? "<i class='fa " . $append_options['icon'] . " ' aria-hidden='true'></i> " : "")?>
                            <?=(isset($append_options['text']) ? $append_options['text'] : "")?></div>
                    </div>
                <?php endif;?>

                <?php if ($btn_input || $append_input): ?>
                    </div>
                <?php endif;?>

                <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>
            </div>
        </div>
        <?php
    }

    public function add_input_date($args = null)
    {
        if (is_null($args)) {
            $args = $this->input_arg;
        } else {
            $args = $args + $this->input_arg;
        }

        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>
        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_input,
                $class_label,
                $libelle_label,
                $required
            ) ?>

            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">

                <?php 
                    $_data_attr = array();
                    if (isset($data_attr) && !empty($data_attr))
                        $_data_attr = $data_attr;
                    $this->_input(
                        $name_input,
                        $id_input,
                        "date",
                        $is_invalid,
                        $class_input,
                        $placeholder_input,
                        $disabled,
                        $required,
                        $_data_attr,
                        $value_input
                    );
                ?>

                <?php $this->_help_text($help_id, $help_text) ?>


                <input 
                    id="<?php echo $name_input ?>_datepicker" 
                    name="<?php echo $name_input ?>" 
                    type="hidden"
                    value="<?php echo $value_input ?>" />


            </div>
        </div>
        <?php
    }

    public function add_input_datetime($args = null)
    {
        if (is_null($args)) {
            $args = $this->input_datetime_arg;
        } else {
            $args = $args + $this->input_datetime_arg;
        }

        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>
        
        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_input_date,
                $class_label,
                $libelle_label,
                $required
            ) ?>

            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">
                <div class="row">
                    <div class="col-md-7">


                        <?php 
                            $_data_attr = array();
                            if (isset($data_attr_date) && !empty($data_attr_date))
                                $_data_attr = $data_attr_date;
                            $this->_input(
                                $name_input_date,
                                $id_input_date,
                                "date",
                                $is_invalid,
                                $class_input_date,
                                $placeholder_input_date,
                                $disabled_date,
                                $required_date,
                                $_data_attr,
                                $value_input_date
                            );
                        ?>

                        <?php $this->_help_text($help_id_date, $help_text_date) ?>
                    </div>

                    <div class="col-md-5">

                        <?php 
                            $_data_attr = array();
                            if (isset($data_attr_time) && !empty($data_attr_time))
                                $_data_attr = $data_attr_time;
                            $this->_input(
                                $name_input_time,
                                $id_input_time,
                                "time",
                                $is_invalid,
                                $class_input_time,
                                $placeholder_input_time,
                                $disabled_time,
                                $required_time,
                                $_data_attr,
                                $value_input_time
                            );
                        ?>                            
                            
                        <?php $this->_help_text($help_id_time, $help_text_time) ?>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }

    public function add_date_multi($args = null)
    {
        if (is_null($args)) {
            $args = $this->date_multi_arg;
        } else {
            $args = $args + $this->date_multi_arg;
        }


        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_date = $this->second_col_sm;

        $type_date = array(
            'day' => array(
                'suffix' => '_d',
                'min' => 1,
                'max' => 31,
                'placeholder' => 'dd',
                'help_text' => 'Jour',
            ),
            'month' => array(
                'suffix' => '_m',
                'min' => 1,
                'max' => 12,
                'placeholder' => 'mm',
                'help_text' => 'Mois',
            ),
            'year' => array(
                'suffix' => '_y',
                'min' => 1000,
                'max' => 9999,
                'placeholder' => 'yyyy',
                'help_text' => 'Année',
            ),
        );

        ?>
        
        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_date,
                $class_label,
                $libelle_label,
                $required
            ) ?>

            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_date ?>">
                <div class="row">
                    <?php foreach ($type_date as $name_td => $td): ?>

                        <?php $class = "class_date" . $td['suffix'];?>
                        <?php $value_td = "value_date" . $td['suffix'];?>

                        <div class="col-md-4">


                            <?php 
                                $_data_attr = array();
                                if (isset($data_attr) && !empty($data_attr))
                                    $_data_attr = $data_attr;

                                $_name_input = $name_date . $td['suffix'];
                                $_id_input = $id_date . $td['suffix'];
                                $_class_input = ${$class};
                                $placeholder_input = $td['placeholder'];
                                $_value_input = ${$value_td};

                                $this->_input(
                                    $_name_input,
                                    $_id_input,
                                    "number",
                                    $is_invalid,
                                    $_class_input,
                                    $placeholder_input,
                                    $disabled,
                                    $required,
                                    $_data_attr,
                                    $value_input
                                );
                            ?>

                            <?php $this->_help_text("", $td['help_text'], $is_invalid, "font-size:.9em;font-style:italic") ?>
                        </div>
                    <?php endforeach;?>

                </div>

                <input 
                    name="<?php echo $name_date ?>" 
                    id="<?php echo $id_date ?>" 
                    type="hidden" 
                    value="<?=$value_date?>" >

                    <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>
            </div>
        </div>
        <?php
    }

    public function add_input_grp($args = null)
    {
        if (is_null($args)) {
            $args = $this->input_arg_grp;
        } else {
            $args = $args + $this->input_arg_grp;
        }

        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_input,
                $class_label,
                $libelle_label,
                $required
            ) ?>


            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">

                <div class="input-group">

                    <?php if (!empty($before)) {
                        echo '<span class="input-group-addon" id="' . $id_before . '">' . $before . '</span>';
                    } ?>


                    <?php 
                        $_data_attr = array();
                        if (isset($data_attr) && !empty($data_attr))
                            $_data_attr = $data_attr;
                        $this->_input(
                            $name_input,
                            $id_input,
                            $type_input,
                            $is_invalid,
                            $class_input,
                            $placeholder_input,
                            $disabled,
                            $required,
                            $_data_attr,
                            $value_input
                        );
                    ?>


                    <?php if (!empty($after)) {
                        echo '<span class="input-group-addon" id="' . $id_after . '">' . $after . '</span>';
                    } ?>

                </div>

                <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>
            </div>
        </div>


        <?php
    }

    public function add_hidden_input($args = null)
    {
        if (is_null($args)) {
            $args = $this->hidden_input;
        } else {
            $args = $args + $this->hidden_input;
        }

        extract($args);

        ?>
        <div class="form-group hidden">
            <div class="">
                <input type="hidden" name="<?php echo $name ?>" value="<?php echo $value; ?>" />
            </div>
        </div>
        <?php
    }

    public function add_radio_verticale($args = null)
    {
        if (is_null($args)) {
            $args = $this->radio_arg;
        } else {
            $args = $args + $this->radio_arg;
        }

        $args['name_input'] = $args['name_radio'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

        
        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_radio,
                $class_label,
                $libelle_label,
                $required
            ) ?>

            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>" >

                <?php foreach ($childs as $child): ?>

                    <?php if (isset($child['group_title']) && !empty($child['group_title'])): ?>
                        <span class="form-radio-group-title">
                            <?php echo $child['group_title'] ?>
                        </span>
                    <?php endif;?>


                    <?php 
                        $_data_attr = array();
                        if (isset($child['data_attr']) && !empty($child['data_attr']))
                            $_data_attr = $child['data_attr'];
                        
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        $_value_child = (isset($child['value']) ? $child['value'] : '');
                        $_text_child = (isset($child['text_radio']) ? $child['text_radio'] : '');
                        $_checked_child = (isset($child['checked']) ? checked : '');
                        $_disabled_child = (isset($child['disabled']) ? disabled : '');
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        
                        $this->_checked(
                            false,
                            $name_radio,
                            $_id_child,
                            "radio",
                            "",
                            false,
                            $_checked_child,
                            $_disabled_child,
                            $required,
                            $_data_attr,
                            $_value_child,
                            $_text_child
                        );
                    ?>


                    <?php echo (isset($child['hr']) && $child['hr'] ? '<hr>' : ''); ?>

                <?php endforeach;?>

            </div>
        </div>

        <?php if (isset($hr) && $hr): ?>
            <div class="clearfix"></div>
            <hr class="<?=(isset($hr_class) ? $hr_class : '')?>" >
        <?php endif;?>
        <?php
    }

    public function add_radio_horizontal($args = null)
    {
        if (is_null($args)) {
            $args = $this->radio_arg;
        } else {
            $args = $args + $this->radio_arg;
        }

        $args['name_input'] = $args['name_radio'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>


        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >
            
            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_radio,
                $class_label,
                $libelle_label,
                $required
            ) ?>


            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">

                <?php foreach ($childs as $child): ?>

                    <?php $id_child = uniqid();?>

                    <?php if (!empty($child['group_title'])): ?>
                        <span class="form-radio-group-title">
                            <?php echo $child['group_title'] ?>
                        </span>
                    <?php endif;?>


                    <?php 
                        $_data_attr = array();
                        if (isset($child['data_attr']) && !empty($child['data_attr']))
                            $_data_attr = $child['data_attr'];
                        
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        $_value_child = (isset($child['value']) ? $child['value'] : '');
                        $_text_child = (isset($child['text_radio']) ? $child['text_radio'] : '');
                        $_checked_child = (isset($child['checked']) ? checked : '');
                        $_disabled_child = (isset($child['disabled']) ? disabled : '');
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        
                        $this->_checked(
                            true,
                            $name_radio,
                            $_id_child,
                            "radio",
                            "",
                            false,
                            $_checked_child,
                            $_disabled_child,
                            $required,
                            $_data_attr,
                            $_value_child,
                            $_text_child
                        );
                    ?>

                    <?php echo (isset($child['hr']) && $child['hr'] ? '<hr>' : ''); ?>

                <?php endforeach;?>

            </div>
        </div>
        <?php
    }

    public function add_checkbox_verticale($args = null)
    {
        if (is_null($args)) {
            $args = $this->checkbox_arg;
        } else {
            $args = $args + $this->checkbox_arg;
        }

        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>">

            <!-- LABEL -->
            <?php $this->_label_input(
                $col_sm_label,
                $name_checkbox,
                $class_label,
                $libelle_label,
                $required
            ) ?>


            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">
                <?php foreach ($childs as $child): ?>

                    <?php if (!empty($child['group_title'])): ?>
                        <span class="form-checkbox-group-title">
                            <?php echo $child['group_title'] ?>
                        </span>
                    <?php endif;?>

                    <?php 
                        $_data_attr = array();
                        if (isset($child['data_attr']) && !empty($child['data_attr']))
                            $_data_attr = $child['data_attr'];
                        
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        $_value_child = (isset($child['value']) ? $child['value'] : '');
                        $_text_child = (isset($child['text_checkbox']) ? $child['text_checkbox'] : '');
                        $_checked_child = (isset($child['checked']) ? checked : '');
                        $_disabled_child = (isset($child['disabled']) ? disabled : '');
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        
                        $this->_checked(
                            false,
                            $name_checkbox,
                            $_id_child,
                            "checkbox",
                            "",
                            $multiple,
                            $_checked_child,
                            $_disabled_child,
                            $required,
                            $_data_attr,
                            $_value_child,
                            $_text_child
                        );
                    ?>

                    <?php echo (isset($child['hr']) && $child['hr'] ? '<hr>' : ''); ?>

                <?php endforeach;?>
            </div>
        </div>
        <?php
    }

    public function add_checkbox_horizontal($args = null)
    {
        if (is_null($args)) {
            $args = $this->checkbox_arg;
        } else {
            $args = $args + $this->checkbox_arg;
        }

        $args['name_input'] = $args['name_checkbox'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        $col_showed = 1;

        ?>

        <div 
            class="form-group row <?php echo $class_div_container ?>" 
            id="<?php echo $id_div_container ?>" >

            <!-- LABEL -->
            <?php $this->_label_input($args) ?>

            <!-- INPUT -->
            <div class="col-sm-<?php echo $col_sm_input ?>">
                <?php foreach ($childs as $child): ?>

                    <?php if (!empty($child['group_title'])): ?>
                        <span class="form-checkbox-group-title">
                            <?php echo $child['group_title'] ?>
                        </span>
                    <?php endif;?>

                    <?php 
                        $_data_attr = array();
                        if (isset($child['data_attr']) && !empty($child['data_attr']))
                            $_data_attr = $child['data_attr'];
                        
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        $_value_child = (isset($child['value']) ? $child['value'] : '');
                        $_text_child = (isset($child['text_checkbox']) ? $child['text_checkbox'] : '');
                        $_checked_child = (isset($child['checked']) ? checked : '');
                        $_disabled_child = (isset($child['disabled']) ? disabled : '');
                        $_id_child = (isset($child['id']) ? $child['id'] : '');
                        
                        $this->_checked(
                            true,
                            $name_checkbox,
                            $_id_child,
                            "checkbox",
                            "",
                            $multiple,
                            $_checked_child,
                            $_disabled_child,
                            $required,
                            $_data_attr,
                            $_value_child,
                            $_text_child
                        );
                    ?>

                    <?php echo (isset($child['hr']) && $child['hr'] ? '<hr>' : ''); ?>

                <?php endforeach;?>
            </div>
            
        </div>
        <?php
    }

    public function add_select($args = null)
    {
        if (is_null($args)) {
            $args = $this->select_arg;
        } else {
            $args = $args + $this->select_arg;
        }

        $args['name_input'] = $args['name_select'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>" >

                <!-- LABEL -->
            <?php $this->_label_input($args) ?>

                <!-- INPUT -->
                <div class="col-sm-<?php echo $col_sm_input ?>">
                    
                    <select 
                        name="<?php echo $name_select ?>" 
                        id="<?php echo $id_select ?>"
                        class="form-control <?php echo (isset($is_invalid) && $is_invalid ? 'is-invalid' : '') ?> <?php echo $class_select ?>"
                        <?php echo ($multiple ? 'multiple' : ''); ?> <?php echo ($required ? 'required' : ''); ?> >

                        <?php if (isset($childs) && !empty($childs)) : ?>
                            <?php foreach ($childs as $child): ?>
                                <option 
                                    value="<?php echo $child['value'] ?>"
                                    class="<?php echo (isset($child['class_option']) ? $child['class_option'] : '') ?>"
                                    id="<?php echo (isset($child['id_option']) ? $child['id_option'] : '') ?>"
                                    <?php echo (isset($child['selected']) && $child['selected'] ? 'selected' : ''); ?>
                                    <?php echo (isset($child['disabled']) && $child['disabled'] ? 'disabled' : ''); ?> 
                                    <?php if (!empty($child['data_attr'])) {
                                        foreach ($child['data_attr'] as $data_key => $data_value) {
                                            echo $data_key . '="' . $data_value . '" ';
                                        }
                                    }?> >

                                    <?php echo $child['text_select'] ?>
                                </option>

                            <?php endforeach;?>
                        <?php endif; ?>
                    </select>
                    
                    <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>
                </div>
            </div>
        <?php
    }

    public function add_submit_btn($args = null)
    {

        if (is_null($args)) {
            $args = $this->submit_arg;
        } else {
            $args = $args + $this->submit_arg;
        }

        extract($args);

        $col_sm_offset = $this->first_col_sm;
        $col_sm = $this->second_col_sm;
        ?>
            
            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>">

                <div class="offset-sm-<?php echo $col_sm_offset ?>  col-sm-<?php echo $col_sm ?>">

                    <button 
                        id="<?php echo $id_submit ?>" 
                        name="<?php echo $id_submit ?>" 
                        type="submit"
                        class="btn btn-primary <?php echo $class_submit ?>" 
                        value="<?php echo $value_submit ?>"
                        <?php if (isset($data_attr) && !empty($data_attr)) : ?> 
                            <?php foreach ($data_attr as $data_key => $data_value) {
                                echo $data_key . '="' . $data_value . '" ';
                            }?>
                        <?php endif; ?>>

                        <?php echo $text_submit ?></button>
                </div>
            </div>
        <?php
    }

    public function add_submit_return_btn($args = null)
    {

        if (is_null($args)) {
            $args = $this->submit_return_arg;
        } else {
            $args = $args + $this->submit_return_arg;
        }

        extract($args);

        $col_sm_offset = $this->first_col_sm;
        $col_sm = $this->second_col_sm;
        ?>

            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>">

                <div class="offset-sm-<?php echo $col_sm_offset ?> col-sm-<?php echo $col_sm ?>">

                    <button 
                        id="<?php echo $id_submit ?>" 
                        name="<?php echo $id_submit ?>" 
                        type="submit"
                        class="btn btn-primary <?php echo $class_submit ?>" 
                        value="<?php echo $value_submit ?>" 
                        <?php if (isset($data_attr_submit) && !empty($data_attr_submit)) : ?>
                            <?php foreach ($data_attr_submit as $data_key => $data_value) {
                                echo $data_key . '="' . $data_value . '" ';
                            }?>
                        <?php endif; ?> >
                            
                        <?php echo $text_submit ?>
                    </button>

                    <?php if ($button_return): ?>
                        <button 
                            id="<?php echo $id_return ?>" 
                            name="<?php echo $id_return ?>" 
                            type="submit"
                            class="btn btn-primary <?php echo $class_return ?>" 
                            value="<?php echo $value_return ?>" 
                            <?php if(isset($data_attr_return) && !empty($data_attr_return)) : ?>
                                <?php foreach ($data_attr_return as $data_key => $data_value) {
                                    echo $data_key . '="' . $data_value . '" ';
                                }?>
                            <?php endif; ?> >
                            
                            <?php echo $text_return ?>
                        </button>

                    <?php else: ?>
                        <a 
                            id="<?php echo $id_return ?>" 
                            class="btn btn-default <?php echo $class_return ?>" 
                            href="<?php echo $href_return ?>"
                            <?php if(isset($data_attr_return) && !empty($data_attr_return)) : ?>
                                <?php foreach ($data_attr_return as $data_key => $data_value) {
                                    echo $data_key . '="' . $data_value . '" ';
                                }?>
                            <?php endif; ?>>

                            <?php echo $text_return ?>
                        </a>

                    <?php endif;?>
                </div>
            </div>
        <?php
    }

    public function add_nonce($args = null)
    {
        if (is_null($args)) {
            $args = $this->nonce_arg;
        } else {
            $args = $args + $this->nonce_arg;
        }

        extract($args);

        $col_sm_offset = $this->first_col_sm;
        $col_sm = $this->second_col_sm;

        ?>
            <div class="form-group">
                <div class="offset-sm-<?php echo $col_sm_offset ?> col-sm-<?php echo $col_sm ?>">
                    <input 
                        type="hidden" 
                        name="<?php echo $name ?>" 
                        value="<?php echo $nonce; ?>" />
            </div>
        </div>
        <?php
    }

    public function add_textarea($args = null)
    {
        if (is_null($args)) {
            $args = $this->textarea_arg;
        } else {
            $args = $args + $this->textarea_arg;
        }

        $args['name_input'] = $args['name'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>">

                <!-- LABEL -->
            <?php $this->_label_input($args) ?>

                <!-- TEXTAREA -->
                <div class="col-sm-<?php echo $col_sm_input ?>">

                    <textarea 
                        name="<?php echo $name ?>" 
                        id="<?php echo $id ?>" 
                        class="<?php echo $class ?>"
                        placeholder="<?php echo $placeholder ?>"
                        <?php echo (isset($rows) ? 'rows="' . $rows . '"' : '') ?>
                        <?php echo (isset($cols) ? 'cols="' . $cols . '"' : '') ?> 
                        <?php echo ($disabled ? 'disabled' : ''); ?> 
                        <?php echo ($required ? 'required' : ''); ?> 
                        <?php echo (isset($maxlength) ? 'maxlength=' . $maxlength : ''); ?>
                        <?php if (isset($data_attr) && !empty($data_attr)) : ?>
                            <?php foreach ($data_attr as $data_key => $data_value) {
                                echo $data_key . '="' . $data_value . '" ';
                            }?>
                        <?php endif; ?>>

                        <?php echo (isset($value) ? $value : ''); ?>
                    </textarea>

                    <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>
                </div>
            </div>

            <?php if ($hr): ?>
                <div class="clearfix"></div>
                <hr class="<?=(isset($hr_class) ? $hr_class : '')?>">
            <?php endif;?>

        <?php
    }

    public function add_file($args = null)
    {
        if (is_null($args)) {
            $args = $this->file_arg;
        } else {
            $args = $args + $this->file_arg;
        }

        $args['name_input'] = $args['name'];
        extract($args);

        $col_sm_label = $this->first_col_sm;
        $col_sm_input = $this->second_col_sm;

        ?>

            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>">

                <!-- LABEL -->
            <?php $this->_label_input($args) ?>

                <!-- INPUT -->
                <div class="col-sm-<?php echo $col_sm_input ?>">
                    <input 
                        name="<?php 
                            echo (isset($name) ? $name : ''); 
                            echo (isset($multiple) && $multiple ? '[]' : '') ?>" 
                        id="<?php echo (isset($id) ? $id : '') ?>" 
                        type="file"
                        class="form-control-file <?php echo (isset($is_invalid) && $is_invalid ? 'is-invalid' : '') ?> <?php echo $class ?>"
                        accept=<?php echo (isset($accept) && !empty($accept) ? '"' . $accept . '"' : ''); ?>
                        <?php echo (isset($disabled) && $disabled ? 'disabled' : ''); ?>
                        <?php echo (isset($required) && $required ? 'required' : ''); ?> 
                        <?php echo (isset($multiple) && $multiple ? 'multiple' : '') ?>
                        <?php if (isset($data_attr) && !empty($data_attr)) : ?>
                            <?php foreach ($data_attr as $data_key => $data_value) {
                                echo $data_key . '="' . $data_value . '" ';
                            }?> 
                        <?php endif; ?> >

                    <?php $this->_help_text($help_id, $help_text, $is_invalid) ?>

                    <ul id="selectedFiles"></ul>
                </div>
            </div>
        <?php
    }

    public function add_hr($args = null)
    {

        if (is_null($args)) {
            $args = $this->hr_arg;
        } else {
            $args = $args + $this->hr_arg;
        }

        extract($args);
        ?>
            <div class='<?=$class_div_container?>'>
                <div class='clearfix'></div>
                <hr>
            </div>
        <?php
    }

    public function add_text($args = null)
    {
        if (is_null($args)) {
            return;
        }

        if (is_null($args)) {
            $args = $this->text_arg;
        } else {
            $args = $args + $this->text_arg;
        }

        extract($args);

        echo "<$elem id='$id' class='$class' $parameters>$text</$elem>";
        echo ($br ? "<br>" : "");
        echo ($doublebr ? "<br>" : "");
        echo ($hr ? "<hr>" : "");
    }

    public function get_google_captcha($args = null)
    {

        if (is_null($args)) {
            $args = $this->captcha_arg;
        } else {
            $args = $args + $this->captcha_arg;
        }

        extract($args);

        $col_sm_offset = $this->first_col_sm;
        $col_sm = $this->second_col_sm;

        ?>
            <div 
                class="form-group row <?php echo $class_div_container ?>" 
                id="<?php echo $id_div_container ?>">

                <div class="offset-sm-<?php echo $col_sm_offset ?> col-sm-<?php echo $col_sm ?>">
                    
                    <div 
                        class="g-recaptcha" 
                        data-sitekey="<?php echo $this->jv_google_recaptcha_key ?>">
                    </div>

                    <?php if ($error_msg): ?>
                        <span 
                            class="help-block invalid-feedback" s
                            tyle="display:block">
                            
                            <?php echo $error_msg ?>
                        </span>
                    <?php endif;?>
                </div>
            </div>
        <?php
    }

    public function set_col($first = false, $second = false)
    {
        if (!$first || !$second) {
            return;
        }

        $this->first_col_sm = $first;
        $this->second_col_sm = $second;
    }

    public function get_col()
    {
        $cols = array(
            'first' => $this->first_col_sm,
            'second' => $this->second_col_sm,
        );
        return $cols;
    }

    public function set_selected_childs($childs, $selected)
    {
        if (empty($selected) || is_null($selected)) {
            return $childs;
        }

        if (!is_array($selected)) {
            $selected = array($selected);
        }

        foreach ($childs as $key => $child) {
            $childs[$key]['selected'] = false;

            if (is_string($selected) && $child['value'] == $selected) {
                $childs[$key]['selected'] = true;
            } elseif (is_array($selected) && in_array($child['value'], $selected)) {
                $childs[$key]['selected'] = true;
            }

        }

        return $childs;
    }

    public function set_checked_childs($childs, $checked)
    {
        if (empty($checked) || is_null($checked)) {
            return $childs;
        }

        foreach ($childs as $key => $child) {
            $childs[$key]['checked'] = false;

            if (is_string($checked) && $child['value'] == $checked) {
                $childs[$key]['checked'] = true;
            } elseif (is_array($checked) && in_array($child['value'], $checked)) {
                $childs[$key]['checked'] = true;
            }
        }

        return $childs;
    }

    public function set_datetime($arg, $datetime)
    {
        $date = substr($datetime, 0, 10);
        $time = substr($datetime, 11, 8);

        $data = explode('-', $date);
        if (checkdate($data[1], $data[2], $data[0])) {
            $arg['value_input_date'] = $date;
        }

        $data = explode(':', $time);
        if ($this->checktime($data[0], $data[1], $data[2])) {
            $arg['value_input_time'] = $time;
        }

        return $arg;
    }

    public function set_date_multi($arg, $date)
    {
        $date = substr($date, 0, 10);

        $data = explode('-', $date);
        if (checkdate($data[1], $data[2], $data[0])) {
            $arg['value_date_d'] = $data[2];
            $arg['value_date_m'] = $data[1];
            $arg['value_date_y'] = $data[0];
        }

        return $arg;
    }

    public function checktime($hour = null, $min = null, $sec = null)
    {
        if ($hour != null && ($hour < 0 || $hour > 23 || !is_numeric($hour))) {
            return false;
        }
        if ($min != null && ($min < 0 || $min > 59 || !is_numeric($min))) {
            return false;
        }
        if ($sec != null && ($sec < 0 || $sec > 59 || !is_numeric($sec))) {
            return false;
        }
        return true;
    }

    /*------------------------------------HELPERS----------------------------------------*/

    protected function _label_input(
        $col = "none",
        $name = "",
        $class = "",
        $libelle = "",
        $required = false,
    ){

        ?>
            <?php if ($col != 'none'): ?>
                <label
                    for="<?php echo $name ?>"
                    class="col-sm-<?php echo $col ?> form-label <?php echo $class ?>">
                    
                    <?php echo $libelle ?>
                    <?php echo ($required ? '<span class="form-required"> *</span>' : ''); ?>
                </label>
            <?php endif; ?>
        <?php 
    }

    protected function _help_text($id, $text, $is_invalid = false, $style = ""){
        // extract($args);

        ?>

            <span id="<?php echo $id; ?>"
                class="help-block <?php echo (isset($is_invalid) && $is_invalid ? 'invalid-feedback' : '') ?>"
                style="<?= $style ?>">

                <?php echo $text; ?>
            </span>

        <?php 
    }

    protected function _input(
        $name = "", 
        $id = "", 
        $type = "", 
        $is_invalid = false, 
        $class = "", 
        $placeholder = "", 
        $disabled = false, 
        $required = false, 
        $data_attr = array(), 
        $value = ""){
       
        
        ?>

            <input
                name="<?php echo $name ?>"
                id="<?php echo $id ?>"
                type="<?php echo $type ?>"
                class="form-control <?php echo (isset($is_invalid) && $is_invalid ? 'is-invalid' : '') ?> <?php echo $class ?> "
                placeholder="<?php echo $placeholder ?>"
                <?php echo ($disabled ? 'disabled' : ''); ?>
                <?php echo ($required ? 'required' : ''); ?>
                <?php 
                    foreach ($data_attr as $data_key => $data_value) {
                        echo $data_key . '="' . $data_value . '" ';
                    }
                ?>
                value="<?php echo $value ?>" >

        <?php 
    }
    
    protected function _checked(
        $inline = false,
        $name = "", 
        $id = "", 
        $type = "",
        $class = "", 
        $multiple = false,
        $checked = false,
        $disabled = false, 
        $required = false, 
        $data_attr = array(), 
        $value = "",
        $text = ""){
       
        
        ?>

        <div class="form-check <?= ($inline ? "form-check-inline" : "")?> ">
            <input
                name="<?php echo $name ?><?=($multiple ? '[]' : '')?>"
                id="<?php echo $id ?>"
                type="<?php echo $type ?>"
                class="form-check-input <?php echo $class ?> "
                <?php echo ($checked ? 'checked' : ''); ?>
                <?php echo ($disabled ? 'disabled' : ''); ?>
                <?php echo ($required ? 'required' : ''); ?>
                <?php 
                    foreach ($data_attr as $data_key => $data_value) {
                        echo $data_key . '="' . $data_value . '" ';
                    }
                ?>
                value="<?php echo $value ?>" >
            
            <label class="form-check-label" for="<?php echo $name ?>"><?= $text ?></label>
        </div>
        <?php 
    }


    /*------------------------------------GENERATE----------------------------------------*/

    public function generate($args, $col = false, $part = false)
    {
        if (!is_array($args)) {
            return false;
        }

        $col_showed = 1;

        foreach ($args as $key => $arg) {

            if ((isset($arg['generate']) && !$arg['generate']) || !isset($arg['generate'])) {
                continue;
            }

            if ($part && isset($arg['part']) && $arg['part'] != $part) {
                continue;
            }

            if (isset($arg['full_width']) && $arg['full_width']) {
                echo "<div class='w-100'>";
            } elseif ($col !== false) {
                echo "<div class='col-sm'>";
            }

            if (isset($arg['first_col_sm']) && isset($arg['second_col_sm'])) {
                $this->set_col($arg['first_col_sm'], $arg['second_col_sm']);
            }

            switch ($arg['generate_type']) {
                case 'input':
                    $this->add_input($arg);
                    break;

                case 'hidden':
                    $this->add_hidden_input($arg);
                    break;

                case 'textarea':
                    $this->add_textarea($arg);
                    break;

                case 'datetime':
                    $this->add_input_datetime($arg);
                    break;

                case 'radio_verticale':
                    $this->add_radio_verticale($arg);
                    break;

                case 'radio_horizontal':
                    $this->add_radio_horizontal($arg);
                    break;

                case 'checkbox':
                    $this->add_checkbox_verticale($arg);
                    break;

                case 'checkbox_horizontal':
                    $this->add_checkbox_horizontal($arg);
                    break;

                case 'select':
                    $this->add_select($arg);
                    break;

                case 'date_multi':
                    $this->add_date_multi($arg);
                    break;

                case 'file':
                    $this->add_file($arg);
                    break;

                case 'hr':
                    $this->add_hr($arg);
                    break;

                case 'text':
                    $this->add_text($arg);
                    break;

                case 'submit':
                    $this->add_submit_btn($arg);
                    break;

                case 'submit_return':
                    $this->add_submit_return_btn($arg);
                    break;

                case 'google_captcha':
                    $this->get_google_captcha($arg);
                    break;

                default:
                    break;
            }

            if (
                !$part
                && (isset($arg['first_col_sm']) && isset($arg['second_col_sm']))
                && (is_numeric($arg['first_col_sm']) && is_numeric($arg['second_col_sm']) && $arg['first_col_sm'] + $arg['second_col_sm'] < 12)
            ) {
                echo '<div class="clearfix"></div><br>';
            }

            if (isset($arg['br']) && $arg['br']) {
                echo '<br>';
            }

            if (isset($arg['full_width']) && $arg['full_width']) {
                echo '</div>';
            } elseif ($col !== false) {
                echo "</div>";
                $col_showed++;
                if ($col_showed > $col) {
                    $col_showed = 1;
                    echo "</div><div class='row'>";
                }
            }
        }
    }

    /*------------------------------------VALIDATE----------------------------------------*/

    public function validate_input_old($data)
    {
        $data = trim(preg_replace('/\s\s+/', ' ', $data));
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
        return $data;
    }

    public function validate_input(&$args, $key, $field)
    {

        $field = $field + $this->input_arg;
        $name = $field['name_input'];

        if (isset($_POST[$name]) && !empty($_POST[$name])) {

            $data = $_POST[$name];
            $args[$key]['value_input'] = $data;

            if (isset($field['minlength']) && is_numeric($field['minlength']) && mb_strlen($data, 'utf-8') < $field['minlength']) {
                $min = $field['minlength'];
                $args[$key]['is_invalid'] = true;
                $args[$key]['help_text'] = "Minimun $min caractère(s)!";
                return false;
            }

            if (isset($field['maxlength']) && is_numeric($field['maxlength']) && mb_strlen($data, 'utf-8') > $field['maxlength']) {
                $max = $field['maxlength'];
                $args[$key]['is_invalid'] = true;
                $args[$key]['help_text'] = "Maximun $max caractère(s)!";
                return false;
            }

            if (isset($field['data_attr']['maxlength']) && is_numeric($field['data_attr']['maxlength']) && mb_strlen($data, 'utf-8') > $field['data_attr']['maxlength']) {
                $data = substr($data, 0, $field['data_attr']['maxlength']);
            }

            $data = stripslashes($data);
            $data = htmlentities($data, ENT_QUOTES, 'UTF-8');

            $args[$key]['value_input'] = $data;
            return $data;
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    public function validate_email(&$args, $key, $field)
    {

        $field = $field + $this->input_arg;
        $name = $field['name_input'];

        if (isset($_POST[$name]) && !empty($_POST[$name])) {

            $data = $_POST[$name];

            if (isset($field['data_attr']['maxlength']) && is_numeric($field['data_attr']['maxlength']) && mb_strlen($data, 'utf-8') > $field['data_attr']['maxlength']) {
                $data = substr($data, 0, $field['data_attr']['maxlength']);
            }

            if (filter_var($data, FILTER_VALIDATE_EMAIL) == false) {
                $args[$key]['value_input'] = $data;
                $args[$key]['is_invalid'] = true;
                $args[$key]['help_text'] = "Le format de votre email est invalide.";
                return false;
            }

            $data = stripslashes($data);
            $data = htmlentities($data, ENT_QUOTES, 'UTF-8');

            $args[$key]['value_input'] = $data;
            return $data;
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    public function validate_textarea(&$args, $key, $field)
    {

        $field = $field + $this->textarea_arg;
        $name = $field['name'];

        if (isset($_POST[$name]) && !empty($_POST[$name])) {

            $data = $_POST[$name];

            if (isset($field['maxlength']) && is_numeric($field['maxlength']) && mb_strlen($data, 'utf-8') > $field['maxlength']) {
                $data = substr($data, 0, $field['maxlength']);
            }

            $data = stripslashes($data);

            $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
            $args[$key]['value'] = $data;
            return $data;
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    /**
     * Valide la date au format month, day, year
     * Reçoit au format year-month-day
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function validate_date(&$args, $key, $field)
    {

        $field = $field + $this->input_arg;
        $name = $field['name_input'];

        if (isset($_POST[$name]) && !empty($_POST[$name])) {

            $date = $_POST[$name];

            $data = explode('-', $date);

            if (checkdate($data[1], $data[2], $data[0])) {
                $args[$key]['value_input'] = $date;
                return $date;
            }
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    /**
     * Valide la date multi au format month, day, year
     * Reçoit au format year-month-day
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function validate_date_multi(&$args, $key, $field)
    {

        $field = $field + $this->input_arg;
        $name = $field['name_date'];

        if (isset($_POST[$name . '_d']) && isset($_POST[$name . '_m']) && isset($_POST[$name . '_y'])) {

            $day = $_POST[$name . '_d'];
            $month = $_POST[$name . '_m'];
            $year = $_POST[$name . '_y'];

            if (checkdate($month, $day, $year)) {
                $args[$key]['value_date_d'] = $day;
                $args[$key]['value_date_m'] = $month;
                $args[$key]['value_date_y'] = $year;
                return "$year-$month-$day";
            }
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    /**
     * Valide la date et l'heure
     * Date au format year-month-day
     * Heure au format hour:minute
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function validate_datetime(&$args, $key, $field)
    {

        $field = $field + $this->input_arg;
        $name_date = $field['name_input_date'];
        $name_time = $field['name_input_time'];

        if (isset($_POST[$name_date]) && !empty($_POST[$name_date])) {

            $date = $_POST[$name_date];
            // debug($date);die;
            $data = explode('-', $date);

            if (!checkdate($data[1], $data[2], $data[0])) {
                return false;
            }
            $args[$key]['value_input_date'] = $date;
        }

        if (isset($_POST[$name_time]) && !empty($_POST[$name_time])) {

            $time = $_POST[$name_time];

            $data = explode(':', $time);

            if (!$this->checktime($data[0], $data[1])) {
                return false;
            }
            $args[$key]['value_input_time'] = $time;
        }

        return $date . ' ' . $time . ':00';
    }

    public function validate_radio(&$args, $key, $field)
    {

        $field = $field + $this->radio_arg;
        $name = $field['name_radio'];
        if (isset($_POST[$name])) {
            $data = $_POST[$name];
            $default_values = array();
            foreach ($field['childs'] as $child) {
                if (!isset($child['disabled']) || (isset($child['disabled']) && $child['disabled'] == false)) {
                    $default_values[] = $child['value'];
                }

            }

            if (!in_array($data, $default_values)) {
                return false;
            }

            $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], array($data));
            return $data;
        }
        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    public function validate_checkbox(&$args, $key, $field)
    {

        $field = $field + $this->checkbox_arg;
        $name = $field['name_checkbox'];

        if (isset($_POST[$name])) {
            $data = $_POST[$name];
            $default_values = array();
            foreach ($field['childs'] as $child) {
                if ($child['disabled'] == false) {
                    $default_values[] = $child['value'];
                }

            }

            if ($field['multiple']) {

                foreach ($data as $dv) {
                    if (!in_array($dv, $default_values)) {
                        return false;
                    }

                }
                $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], $data);
            } else {

                if (!in_array($data, $default_values)) {
                    return false;
                }

                $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], array($data));
            }

            if ($field['implode']) {
                $data = htmlentities(implode(',', $data), ENT_QUOTES, 'UTF-8');
            }

            return $data;
        }

        if ($field['required'] === false) {
            return '';
        }

        return false;
    }

    public function validate_select(&$args, $key, $field)
    {

        $field = $field + $this->select_arg;
        $name = $field['name_select'];

        if (isset($_POST[$name])) {
            $data = $_POST[$name];
            $default_values = array();
            foreach ($field['childs'] as $child) {
                if ($child['disabled'] == false) {
                    $default_values[] = $child['value'];
                }

            }
            if (!in_array($data, $default_values)) {
                return false;
            }

            $args[$key]['childs'] = $this->set_selected_childs($args[$key]['childs'], array($data));
            return $data;
        }

        if ($field['required'] === false) {
            return "";
        } else {
            $args[$key]['is_invalid'] = true;
            $args[$key]['help_text'] = "Ce champs est obligatoire.";
        }

        return false;
    }

    public function validate_file(&$args, $key, $field)
    {

        $field = $field + $this->select_arg;
        $name = $field['name_select'];

        //       if ( isset( $_FILES[$name] ) ){
        //           $data = $_FILES[$name];

        //           if (!empty($field['accept'])){
        //               $accept = explode(',', $field['accept']);

        //               foreach ($accept as $type) {

        //               }
        //           }

        //     return $data;
        // }

        if (!isset($_FILES[$name]) && $field['required'] === true) {
            return false;
        }

        return $_FILES[$name];

        return false;
    }

    public function validate_google_captcha(&$args, $key, $field)
    {

        $field = $field + $this->captcha_arg;
        if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {

            $args[$key]['is_invalid'] = true;
            $args[$key]['error_msg'] = "Répondre au reCaptcha est obligatoire.";
            return false;
        }

        $g_recaptcha_response = $_POST['g-recaptcha-response'];

        if ($this->verify_google_captcha($g_recaptcha_response)) {
            return '';
        }

        $args[$key]['is_invalid'] = true;
        $args[$key]['error_msg'] = "Veuillez bien répondre à la question";

        return false;
    }

    public function verify_google_captcha($g_recaptcha_response = '')
    {

        if (empty($this->jv_google_recaptcha_secret_key)) {
            return false;
        }

        $key_secret = $this->jv_google_recaptcha_secret_key;
        $remoteip = $_SERVER['REMOTE_ADDR'];
        return json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $key_secret . '&response=' . $g_recaptcha_response . '&remoteip=' . $remoteip), true);
    }

    /**
     * Valide tout les champs envoyé par la méthode POST
     * Utilise une référence sur la variable args
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function validate_all(&$args)
    {

        $values = array();
        $has_false = false;
        foreach ($args as $key => $field) {

            if (!isset($field['validate_type'])) {
                if (isset($_POST[$key])) {
                    $values[$key] = $_POST[$key];
                }

                continue;
            }

            switch ($field['validate_type']) {
                case 'input':
                    $values[$key] = $this->validate_input($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'email':
                    $values[$key] = $this->validate_email($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'textarea':
                    $values[$key] = $this->validate_textarea($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'date':
                    $values[$key] = $this->validate_date($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'date_multi':
                    $values[$key] = $this->validate_date_multi($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'datetime':
                    $values[$key] = $this->validate_datetime($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'radio':
                    $values[$key] = $this->validate_radio($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }
                    break;

                case 'checkbox':
                    $values[$key] = $this->validate_checkbox($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'select':
                    $values[$key] = $this->validate_select($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                case 'google_captcha':

                    $values[$key] = $this->validate_google_captcha($args, $key, $field);
                    if ($values[$key] === false) {
                        $has_false = true;
                    }

                    break;

                // case 'file':
                //     $values[$key] = $this->validate_file($args, $key, $field);
                //     if( $values[$key] === FALSE)
                //         return FALSE;
                //     break;

                default:
                    break;
            }
        }

        if ($has_false) {
            return false;
        }

        return $values;
    }

    /*------------------------------------POST----------------------------------------*/

    /**
     * Remet les infos envoyées par POST dans les valeurs des args
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function values_form_post($args = false)
    {
        if ($args === false) {
            return false;
        }

        foreach ($args as $key => $field) {

            if (!isset($field['validate_type'])) {
                continue;
            }

            switch ($field['validate_type']) {
                case 'input':
                    if (isset($_POST[$field['name_input']])) {
                        $args[$key]['value_input'] = $_POST[$field['name_input']];
                    }
                    break;

                case 'email':
                    if (isset($_POST[$field['name_input']])) {
                        $args[$key]['value_input'] = $_POST[$field['name_input']];
                    }

                    break;

                case 'textarea':
                    if (isset($_POST[$field['name']])) {
                        $args[$key]['value'] = stripslashes($_POST[$field['name']]);
                    }

                    break;

                case 'date':
                    if (isset($_POST[$field['name_input']])) {
                        $args[$key]['value_input'] = $_POST[$field['name_input']];
                    }

                    break;

                case 'datetime':
                    if (isset($_POST[$field['name_input_date']])) {
                        $args[$key]['value_input_date'] = $_POST[$field['name_input_date']];
                    }

                    if (isset($_POST[$field['name_input_time']])) {
                        $args[$key]['value_input_time'] = $_POST[$field['name_input_time']];
                    }

                    break;

                case 'date_multi':
                    if (isset($_POST[$field['name_date'] . '_d']) && isset($_POST[$field['name_date'] . '_m']) && isset($_POST[$field['name_date'] . '_y'])) {
                        $args[$key]['value_date_d'] = $_POST[$field['name_date'] . '_d'];
                        $args[$key]['value_date_m'] = $_POST[$field['name_date'] . '_m'];
                        $args[$key]['value_date_y'] = $_POST[$field['name_date'] . '_y'];
                    }
                    break;

                case 'radio':
                    if (isset($_POST[$field['name_radio']])) {
                        $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], array($_POST[$field['name_radio']]));
                    }

                    break;

                case 'checkbox':
                    if (isset($_POST[$field['name_checkbox']])) {
                        $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], $_POST[$field['name_checkbox']]);
                    }

                    break;

                case 'select':
                    if (isset($_POST[$field['name_select']])) {
                        $args[$key]['childs'] = $this->set_selected_childs($args[$key]['childs'], $_POST[$field['name_select']]);
                    }

                    break;

                default:
                    break;
            }
        }

        return $args;
    }

    /**
     * Remet les infos envoyées présent dans un tableau dans les valeurs des args
     * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
     */
    public function values_form_data($args = false, $data = array())
    {
        if ($args === false) {
            return false;
        }

        foreach ($args as $key => $field) {

            if (!isset($field['validate_type'])) {
                continue;
            }

            switch ($field['validate_type']) {
                case 'input':
                    if (isset($data[$field['name_input']])) {
                        $args[$key]['value_input'] = $data[$field['name_input']];
                    }
                    break;

                case 'email':
                    if (isset($data[$field['name_input']])) {
                        $args[$key]['value_input'] = $data[$field['name_input']];
                    }

                    break;

                case 'textarea':
                    if (isset($data[$field['name']])) {
                        $args[$key]['value'] = stripslashes($data[$field['name']]);
                    }

                    break;

                case 'date':
                    if (isset($data[$field['name_input']])) {
                        $args[$key]['value_input'] = $data[$field['name_input']];
                    }

                    break;

                case 'datetime':
                    if (isset($data[$field['name_input_date']])) {
                        $args[$key]['value_input_date'] = $data[$field['name_input_date']];
                    }

                    if (isset($data[$field['name_input_time']])) {
                        $args[$key]['value_input_time'] = $data[$field['name_input_time']];
                    }

                    break;

                case 'date_multi':
                    if (isset($data[$field['name_date'] . '_d']) && isset($data[$field['name_date'] . '_m']) && isset($data[$field['name_date'] . '_y'])) {
                        $args[$key]['value_date_d'] = $data[$field['name_date'] . '_d'];
                        $args[$key]['value_date_m'] = $data[$field['name_date'] . '_m'];
                        $args[$key]['value_date_y'] = $data[$field['name_date'] . '_y'];
                    }
                    break;

                case 'radio':
                    if (isset($data[$field['name_radio']])) {
                        $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], array($data[$field['name_radio']]));
                    }

                    break;

                case 'checkbox':
                    if (isset($data[$field['name_checkbox']])) {
                        $args[$key]['childs'] = $this->set_checked_childs($args[$key]['childs'], $data[$field['name_checkbox']]);
                    }

                    break;

                case 'select':
                    if (isset($data[$field['name_select']])) {
                        $args[$key]['childs'] = $this->set_selected_childs($args[$key]['childs'], array($data[$field['name_select']]));
                    }

                    break;

                default:
                    break;
            }
        }

        return $args;
    }

    /*------------------------------------GOOGLE CAPTCHA----------------------------------------*/

    public function set_google_recaptcha_keys($key = "", $secret_key = "")
    {
        $this->jv_google_recaptcha_key = $key;
        $this->jv_google_recaptcha_secret_key = $secret_key;
    }
}