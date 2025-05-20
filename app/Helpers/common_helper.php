<?php

use CodeIgniter\Database\Database;


function headerproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->where('status', '1');
    $builder->where('type', '1');
    $result = $builder->get();
    return $result->getResultArray();
}
function myproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('myproduct');
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function aproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('aproduct');
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function productList($limit)
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->limit($limit);
    $builder->where('status', '1');
    $result = $builder->get();
    return $result->getResultArray();
}

function pageTitle($id)
{
    $db = \Config\Database::connect();
    $builder = $db->table('page_title');
    $builder->where('id', $id);   
    $result = $builder->get();
    return $result->getRowArray();
}

function footerproductList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builder->where('status', '1');
    $builder->limit(5);
    $result = $builder->get();
    return $result->getResultArray();
}
function stateList()
{
    $db = \Config\Database::connect();
    $builder = $db->table('state');
    $builder->where('country', '101');
    $result = $builder->get();
    return $result->getResultArray();
}
function stateById($stateId)
{
    $db = \Config\Database::connect();
    $builder = $db->table('state');
    $builder->where('id', $stateId);
    $result = $builder->get();
    return $result->getRowArray();
}
function cityById($cityId)
{
    $db = \Config\Database::connect();
    $builder = $db->table('city');
    $builder->where('id', $cityId);
    $result = $builder->get();
    return $result->getRowArray();
}
function contactDetail()
{
    $db = \Config\Database::connect();
    $builder = $db->table('contact_detail');
    $result = $builder->get();
    return $result->getRowArray();
}


