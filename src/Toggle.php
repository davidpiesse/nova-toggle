<?php

namespace Davidpiesse\NovaToggle;

use Laravel\Nova\Fields\Boolean;

class Toggle extends Boolean
{
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

    public function width($width)
    {
        return $this->withMeta([
            'width' => $width,
            'height' => round($width/(60/26), 0),
        ]);
    }

    public function height($height)
    {
        return $this->withMeta([
            'height' => $height,
        ]);
    }

    public function trueColor($colour)
    {
        return $this->withMeta([
            'true_color' => $colour,
        ]);
    }

    public function falseColor($colour)
    {
        return $this->withMeta([
            'false_color' => $colour,
        ]);
    }

    public function speed($ms)
    {
        return $this->withMeta([
            'speed' => $ms,
        ]);
    }

    public function hideTrueDotOnIndex()
    {
        return $this->withMeta([
            'hide_true_dot' => true,
        ]);
    }

    public function hideFalseDotOnIndex()
    {
        return $this->withMeta([
            'hide_false_dot' => true,
        ]);
    }

    public function showBadgeOnIndex()
    {
        return $this->withMeta([
            'show_badge' => true,
        ]);
    }

    public function whiteBadgeText()
    {
        return $this->withMeta([
            'white_badge_text' => true,
        ]);
    }
}
