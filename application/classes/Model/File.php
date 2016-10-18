<?php defined('SYSPATH') or die('No direct script access.');

class Model_File extends ORM {
    protected $_table_columns = array(
        'id'   => 'id',
        'file' => 'file',
        'type' => 'type',
        'size' => 'size',
    );

    public function labels()
    {
        return array(
            'file' => 'File',
        );
    }

    public function rules()
    {
        return array(
            'file' => array(
                array(array($this, 'file_save'), array(':value'))
            ),
        );
    }

    private function uploads_dir()
    {
        return DOCROOT.'uploads'.DIRECTORY_SEPARATOR;
    }

    public function file_save($file)
    {
        $uploaded = Upload::save($file, $file['name'], $this->uploads_dir());

        if ($uploaded)
        {
            $this->set('file', $file['name']);
            $this->set('type', strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)));
            $this->set('size', $file['size']);
        }

        return $uploaded;
    }

}