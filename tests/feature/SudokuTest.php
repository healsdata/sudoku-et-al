<?php

namespace Healsdata\SudokuEtAl\Tests\Feature;

use Healsdata\SudokuEtAl\Solver\SudokuSolver;

class SudokuTest extends \PHPUnit\Framework\TestCase
{

    public function testDailyTelegraphDiabolical()
    {
        $startingBoard = <<<BOARD
_2_6_8___
58___97__
____4____
37____5__
6_______4
__8____13
____2____
__98___36
___3_6_9_
BOARD;

        $expectedSolution = <<<SOLUTION
123678945
584239761
967145328
372461589
691583274
458792613
836924157
219857436
745316892
SOLUTION;

        $sudokuSolver = new SudokuSolver();

        $actualSolution = $sudokuSolver->solve($startingBoard);

        $this->assertEquals($expectedSolution, $actualSolution);
    }


}