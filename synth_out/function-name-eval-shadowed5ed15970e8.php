<?php
$field = mysqli_fetch_field_direct($res, 1);
printf("[010] Found unexpected field '%s'\n", $field->name);
