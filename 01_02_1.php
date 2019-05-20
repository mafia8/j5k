<?
namespace name1\name2; // чтобы выполнилось assert 1

/*
Fatal error: Cannot mix bracketed namespace declarations with unbracketed
namespace declarations in 1.php on line 10
*/

use core\lib\{prin as helper}; // трейт

  class me {
    // функцию
    use helper {test as public __tostring;}
  }

namespace core\lib {
  trait prin {
    private function test() {
      return static::class;
    }
  }
}
echo (string) new me();
echo "\n";
echo me::class;
