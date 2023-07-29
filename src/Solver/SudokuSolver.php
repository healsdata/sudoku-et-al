<?php

namespace Healsdata\SudokuEtAl\Solver;

use Healsdata\SudokuEtAl\Board\SudokuBoard;

class SudokuSolver
{
    public function solve(string $startingBoard): string
    {
        $board = SudokuBoard::factoryFromString($startingBoard);

        return $startingBoard;
    }
}