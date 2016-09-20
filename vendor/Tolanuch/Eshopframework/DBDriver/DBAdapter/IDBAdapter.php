<?php

namespace Eshopframework\DBDriver\DBAdapter;


interface IDBAdapter
{
    function query();
    function fetch();
}