<?php
    echo '<ul>';
    
    foreach($en_terms as $term) {
        $ar_term = $Ar->en2ar($term);
        $ar_term = trim($ar_term);
        
        echo "<li> $term <b class=hilight>
              ($ar_term)</b></li>";
    }

    echo '<li>0123,456.789 <b class=hilight>(';
    echo    htmlspecialchars_decode($Ar->arNum('0123,456.789'));
    echo ')</b></li>';

    echo '</ul>'; 



