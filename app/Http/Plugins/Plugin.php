<?php

namespace App\Http\Plugins;

/**
 * Class Plugin
 * @package App\Http\Plugins
 *
 * @property bool $active
 * @property string $name
 * @property string $label
 * @property array $fields
 */
class Plugin {

    /**
     * @return Plugin[]
     */
    public function all()
    {
        return [
            new TopBanner(),
        ];
    }

    const FIELD_TYPE_FILE = 'file';
    const FIELD_TYPE_TEXT = 'text';
    const FIELD_TYPE_COLOR = 'color';
    const FIELD_TYPE_INT = 'number';

    public $active = false;

    public $name;

    public $label;

    protected $fields = [];

    protected function setField(string $label, string $name, string $type, bool $required = false): self
    {
        array_push($this->fields, [
            'label' => $label,
            'name' => $this->name . '-' . $name,
            'type' => $type,
            'required' => $required
        ]);

        return $this;
    }

    public function getFields()
    {
        return $this->fields;
    }
}
