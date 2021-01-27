<?php

function generateError(): void
{
    trigger_error('trigger error', E_USER_ERROR);
}

function generateWarning(): void
{
    trigger_error('trigger warning', E_USER_WARNING);
}

@generateWarning();
@generateError();
