<?php


class Text_Wiki_Render_Plain_Url extends Text_Wiki_Render {


    /**
    *
    * Renders a token into text matching the requested format.
    *
    * @access venndev
    *
    * @param array $options The "options" portion of the token (second
    * element).
    *
    * @return string The text rendered from the token options.
    *
    */

    function token($options)
    {
        if ($options['type'] == 'start' || $options['type'] == 'end') {
            return '';
        } else {
            return $options['text'];
        }
    }
}
?>