<?php
    function getBreakText($t) {
        return strtr($t, array('\\r\\n' => '<br>', '\\r' => '<br>', '\\n' => '<br>'));
    }
?>