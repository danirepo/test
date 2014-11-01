<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 2014.10.19.
 * Time: 16:20
 */

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form {
    public function __construct($name = null) {
        parent::__construct('album');

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
        ));

        $this->add(array(
            'name'       => 'title',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'title'
            ),
            'options'    => array(
                'label' => 'Title',
            ),
        ));

        $this->add(array(
            'name'       => 'artist',
            'attributes' => array(
                'type' => 'text',
                'id'   => 'artist',
            ),
            'options'    => array(
                'label' => 'Artist',
            ),
        ));

        $this->add(array(
            'name'       => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id'    => 'submitbutton',
            ),
        ));
    }
}

?>