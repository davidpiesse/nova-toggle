<?php

namespace Davidpiesse\NovaToggle;

use Laravel\Nova\Fields\Field;

class Toggle extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-toggle';

    public function trueLabel($label)
    {
        return $this->withMeta([
            'true_label' => $label,
        ]);
    }

    public function falseLabel($label)
    {
        return $this->withMeta([
            'false_label' => $label,
        ]);
    }

    public function showLabels()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => true,
        ]);
    }

    public function showOnlyTrueLabel()
    {
        return $this->withMeta([
            'show_true_label' => true,
            'show_false_label' => false,
        ]);
    }

    public function showOnlyFalseLabel()
    {
        return $this->withMeta([
            'show_true_label' => false,
            'show_false_label' => true,
        ]);
    }

    public function hideLabelOnIndex()
    {
        //! This has been deprecated (for now)
        // return $this->withMeta([
        //     'hide_label_on_index' => true,
        // ]);
    }

    public function editableIndex()
    {
        //! This has been deprecated (for now)
        // return $this->withMeta([
        //     'editable_index' => true,
        // ]);
    }

    public function width($width)
    {
        //! This has been deprecated
    }

    public function height($height)
    {
        //! This has been deprecated
    }

    public function trueColor($color)
    {
        //! This has been deprecated
        // As we are now using Tailwind we cant inject colors at runtime
        // return $this->withMeta([
        //     'true_color' => $color,
        // ]);
    }

    public function falseColor($color)
    {
        //! This has been deprecated
        // As we are now using Tailwind we cant inject colors at runtime
        // return $this->withMeta([
        //     'false_color' => $color,
        // ]);
    }

    public function speed($ms)
    {
        //! This has been deprecated
    }
}
