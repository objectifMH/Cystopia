<?php

class plateauController extends coreController
{
    public function displayAction()
    {
        $cModel = new carteModel();
        $pioche = $cModel->listCarteTeam(1);


        function createPioche(array $pioche)
        {
            foreach ($pioche as $carte)
            {
                echo '<div class="cartePioche" id="hero2carte'.$carte->getId().'"></div>';
            }
        }

        include 'views' . DIRECTORY_SEPARATOR . 'plateau' . DIRECTORY_SEPARATOR . 'plateau.php';
    }


}