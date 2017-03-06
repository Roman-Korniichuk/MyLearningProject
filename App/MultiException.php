<?php

namespace App;

/*
 *  allows to get collection of exceptions to handling them at once
 */
class MultiException 
    extends \Exception
    implements \ArrayAccess, \Iterator

{
    use TCollection;
}
