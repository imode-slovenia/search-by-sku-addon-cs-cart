<?php

use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

function fn_search_by_sku_additional_fields_in_search(&$params, $fields, $sortings, $condition, &$join, $sorting, $group_by, &$tmp, $piece, $having)
{
    if (!empty($params['sku']) && !empty($params['sid'])) {
        $sku = trim($params['sku']);
        $sid = trim($params['sid']);
        $condition .= db_quote(
            " AND products.product_code = ?l AND products.company_id = ?i",
            "{$sku}",
            "{$sid}"
        );
    }
}
