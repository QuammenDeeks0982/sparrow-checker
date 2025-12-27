<?php

return [
h   'hooks' => [
a       'pre-commit' => [
h           'check' => ['php -l', 'composer validate'], // PHP lint and Composer validation.
h           ],
a       ],
h   ];
