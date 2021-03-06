<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class ShiftRight extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '>>';
    }
}