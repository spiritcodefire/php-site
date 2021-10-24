<?php
function nav_item (string $link, string $title): string
{
        $classe = 'nav-item' ;
        if($_SERVER['SCRIPT_NAME'] === $link) {
            $classe .= ' active' ;
        }
        return <<<HTML
        <li class="$classe" >
            <a class="nav-link" href="$link">$title</a>
        </li>
HTML;
}
?>