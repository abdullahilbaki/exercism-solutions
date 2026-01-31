<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $name = trim($name);
        return $name[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $parts = explode(" ", trim($name));
        $first = $parts[0];
        $last = end($parts);
        return $this->initial($first) . " " . $this->initial($last);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweetPair = $this->initials($sweetheart_a) . "  +  " . $this->initials($sweetheart_b); 
        
        return <<<EOT
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     $sweetPair     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
EOT;
    }
}
