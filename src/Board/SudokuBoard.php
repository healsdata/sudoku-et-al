<?php

namespace Healsdata\SudokuEtAl\Board;

class SudokuBoard
{
    const ROWS = 9;
    const COLS = 9;


    public static function factoryFromString(string $boardAsString): self
    {
        $lines = explode(PHP_EOL, $boardAsString);

        if (sizeof($lines) != self::ROWS) {
            throw new \InvalidArgumentException(sprintf("Expected %d rows, received %d", self::ROWS, sizeof($lines)));
        }

        foreach ($lines as $i => $row) {
            $row = trim($row);
            $values = str_split($row);

            if (sizeof($values) != self::COLS) {
                throw new \InvalidArgumentException(sprintf("Expected %d cols, received %d (Row %d)", self::COLS, sizeof($values), $i));
            }
        }

        // Build rows and column shapes
        // Since this is sudoku, we can infer the 3x3 shapes too.

    }
}