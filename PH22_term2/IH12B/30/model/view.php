<?php

// エスケープ
function escape($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
}
