<?php

$bddOld = new PDO('mysql:host=localhost;dbname=ancien_gestion;charset=utf8', 'root', 'Idcapt130168');
$bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=utf8', 'root', 'Idcapt130168');

$bddOld->query("SET NAMES 'utf8'");
$bdd->query("SET NAMES 'utf8'");

$mois = Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
$idMois = Array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

$arrayOldNomLecteur = Array('5110-W-V2-A3i', '5110-RS-V1', '5110-W-V1', '5110-X-V2', 'OEM7001-RS-V2', '7002-U-V2', '7102-T-V2', '7102-W-V2', '7102-RS-V2', '7110-RS-V2', '7110-T-V2', 
                            '7110-TL-V2', '7110-W-V2', '7110-W-V2-A3i', '7201-BT-V2', '7201-U-HCE', '7201-U-V2', '7201-U-IDACCCESS', '7701-U-V2', '8001-TAB-V2', '8001-TAB-V3', 
                            '8101-WIP-V1', '9110-AUT-V2', '9110-T-V2', '9301-WIP-V1', '7201-U-V2-OAB', 'OEM7000-S-V2', '7110-RS485-V2', 'OEM7001-TTL-V2', 'OEM7201-BT-V2', '7101-W-V2',
                            '7201-X-V2', 'ID-7201-V2', '7110-W-V2-A3I', '7501-U-V2', '7101-T-V2-R');

$arrayIdNewLecteur = Array('15', '5', '16', '17', '19', '13', '21', '23', '25', '9', '27', '29', '10', '31', '32',
                           '34', '6', '36', '38', '39', '42', '43', '45', '47', '48', '50', '56', '11', '52', '54', '23', '6', '6', '31', '6', '21');

/*$arrayNewNomLecteur = Array('5110-W-A3I-V2', '5110-RS-V1', '5110-W-V1', '5110-W-V2', 'OEM7001-RS-V2', 'OEM7201-U-V2', '7102-T-V2', '7102-W-V2', '7102-RS-V2', '7110-RS-V2', '7110-T-V2', 
                            '7110-TTL-V2', '7110-W-V2', '7110-W-A3I-V2', '7201-BT-V2', '7201-U-HCE-V2', '7201-U-V2', '7201-U-IDA-V2', '7701-AUT-V2', '8001-TAB-V1', '8001-TAB-CG-V3', 
                            '8101-WIP-V1', '9110-AUT-V2', '9110-T-V2', '9301-WIP-V1', '7201-U-OAB-V2', 'OEM7000-TTL-V2', '7110-RS485-V1', 'OEM7001-TTL-V2', 'OEM7201-BT-V2');*/

$arrayRefFournisseuCV = Array ('1203-UHF', '350-0', '350-1', '350A-2-0F', '390-0DC', '9203-a-uhf', '9601', 'COD56054', 'CV', 'CV330004', 'CV360004', 'CV360013', 'CV360016', 'CV510004', 
                               'CV510061', 'CV550001', 'CV550004', 'CV5600-2-OC', 'CV560001', 'CV560014', 'CV560025', 'CV560027', 'CV560030', 'CV560036', 'CV560042', 'CV560043', 'CV560088', 
                               'CV560100', 'CV560102', 'CV560102-A', 'CV660001', 'CV960005', 'CV960005-PCB', 'CV960057-PCB', 'CV960059', 'CV960132', 'CV96T001', 'CV96T045', 'CV96T046', 
                               'CV96T054-PCB', 'EL10711', 'EL20005', 'EL35001', 'EL35002', 'EL35032', 'EL35033', 'EL35035', 'EL36622', 'EL39032', 'EL39211', 'EL50022', 'EL50023');

$recupOldInfo = $bddOld->query('SELECT * FROM lecteur l JOIN event_lecteur el ON l.num_serie = el.num_serie');

$i = 0;
while($oldInfo = $recupOldInfo->fetch())
{
    
    /*if($oldInfo['id_etat'] == '11') // en stock
    {
        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        //echo $i++.' '.$oldInfo['ref_fournisseur'].'<br>';
        if(in_array($oldInfo['ref_fournisseur'], $arrayOldNomLecteur))
        {
            foreach ($arrayOldNomLecteur as $key => $ID) 
            {
                if($ID == $oldInfo['ref_fournisseur'])
                {
                    //echo 'insert Lecteur IDCAPT '.$arrayOldNomLecteur[$key].'<br>';

                    $insertIDCAPT = $bdd->prepare('INSERT INTO lecteur(num_serie, id_lecteur, date_creation, id_firmware, vendu) VALUES(?,?,?,?,?)');
                    $insertIDCAPT->execute(array($oldInfo['num_serie'], $arrayIdNewLecteur[$key], $dateFinal, 0, 0));
                }
            }
        }
        elseif(in_array($oldInfo['ref_fournisseur'], $arrayRefFournisseuCV))
        {
            foreach ($arrayRefFournisseuCV as $key => $CV) 
            {
                if($CV == $oldInfo['ref_fournisseur'])
                {   
                    //echo 'insertLecteurCV<br>';

                    $insertCV = $bdd->prepare('INSERT INTO lecteur_autre(num_serie, id_lecteur_autre, date_ajout, vendu) VALUES(?,?,?,?)');
                    $insertCV->execute(array($oldInfo['num_serie'] , $key + 1, $dateFinal, 0));
                }
            }
        }
        //echo '<br>';
    }*/

    /*if($oldInfo['id_etat'] == '21') // en vente client
    {
        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        $selectNomClientOld = $bddOld->prepare('SELECT nom FROM client WHERE id = ?');
        $selectNomClientOld->execute(array($oldInfo['id_client']));
        $nomOldClient = $selectNomClientOld->fetch();

        $selectNewClient = $bdd->prepare('SELECT id FROM client WHERE nom = ?');
        $selectNewClient->execute(array($nomOldClient['nom']));
        $idNewClient = $selectNewClient->fetch();

        //echo $i++.': '.$dateFinal.'<br>';
        if(in_array($oldInfo['ref_fournisseur'], $arrayOldNomLecteur))
        { 
            foreach ($arrayOldNomLecteur as $key => $ID) 
            {
                if($ID == $oldInfo['ref_fournisseur'])
                {
                    $insertIDCAPT = $bdd->prepare('INSERT INTO histo_vente_lecteur(num_serie, id_lecteur, id_client, date_vente, date_prod) VALUES(?,?,?,?,?)');
                    $insertIDCAPT->execute(array($oldInfo['num_serie'], $arrayIdNewLecteur[$key],$idNewClient['id'], $dateFinal, '0000-00-00'));       

                    $updateIDCAPT = $bdd->prepare('UPDATE lecteur SET vendu = ? WHERE num_serie = ?');
                    $updateIDCAPT->execute(array(1, $oldInfo['num_serie']));
                }
            }
            
        }

        if(in_array($oldInfo['ref_fournisseur'], $arrayRefFournisseuCV))
        {
            $insertCV = $bdd->prepare('INSERT INTO histo_vente_lecteur_autre(num_serie, id_client, date_vente) VALUES(?,?,?)');
            $insertCV->execute(array($oldInfo['num_serie'], $idNewClient['id'], $dateFinal));       

            $updateCV = $bdd->prepare('UPDATE lecteur_autre SET vendu = ? WHERE num_serie = ?');
            $updateCV->execute(array(1, $oldInfo['num_serie']));                          
        }
    }*/

    /*if($oldInfo['id_etat'] == '24') // Envoi Pret
    {
        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        $selectNomClientOld = $bddOld->prepare('SELECT nom FROM client WHERE id = ?');
        $selectNomClientOld->execute(array($oldInfo['id_client']));
        $nomOldClient = $selectNomClientOld->fetch();

        $selectNewClient = $bdd->prepare('SELECT id FROM client WHERE nom = ?');
        $selectNewClient->execute(array($nomOldClient['nom']));
        $idNewClient = $selectNewClient->fetch();

        foreach ($arrayOldNomLecteur as $key => $ID) 
        {
            if($ID == $oldInfo['ref_fournisseur'])
            {
                $insertIDCAPT = $bdd->prepare('INSERT INTO pret(id_client, num_serie, id_version_fiche_descriptive, remarque, date_envoi, etat) VALUES(?,?,?,?,?,?)');
                $insertIDCAPT->execute(array($idNewClient['id'], $oldInfo['num_serie'], $arrayIdNewLecteur[$key], $oldInfo['commentaire'], $dateFinal, '0'));       
            }
        }        

        echo $i++.'<br>';
        var_dump($oldInfo);
    }*/
    
    /*if($oldInfo['id_etat'] == '14') // Réception Pret
    {
        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        $selectPret = $bdd->prepare('SELECT * FROM pret WHERE num_serie = ?');
        $selectPret->execute(array($oldInfo['num_serie']));
        $pret = $selectPret->fetch();

        if(in_array($oldInfo['ref_fournisseur'], $arrayOldNomLecteur))
        { 
            $insertIDCAPT = $bdd->prepare('INSERT INTO histo_pret(id_client, num_serie, date_pret, date_retour, etat) VALUES(?,?,?,?,?)');
            $insertIDCAPT->execute(array($pret['id_client'], $oldInfo['num_serie'], $pret['date_envoi'], $dateFinal, '0'));  

            $removePret = $bdd->prepare('DELETE FROM pret WHERE num_serie = ?');
            $removePret->execute(array($oldInfo['num_serie']));
        }

        echo $i++.'<br>';
        //var_dump($oldInfo);
    }*/



    /*if($oldInfo['id_etat'] == '12') // Réception SAV
    {        
        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        if(in_array($oldInfo['ref_fournisseur'], $arrayOldNomLecteur))
        { 
            $insertIDCAPT = $bdd->prepare('INSERT INTO sav(num_serie, commentaire, date_reception, date_renvoi) VALUES(?,?,?,?)');
            $insertIDCAPT->execute(array($oldInfo['num_serie'], $oldInfo['commentaire'], $dateFinal, '0000-00-00'));  

            $removePret = $bdd->prepare('DELETE FROM pret WHERE num_serie = ?');
            $removePret->execute(array($oldInfo['num_serie']));
        }

        echo $i++.'<br>';
        var_dump($oldInfo);
    }*/

    if($oldInfo['id_etat'] == '22') // Envoi SAV
    {
        $selectSav = $bdd->prepare('SELECT * FROM sav WHERE num_serie = ?');
        $selectSav->execute(array($oldInfo['num_serie']));
        $listeSav = $selectSav->fetchAll();

        $date = explode(' ', $oldInfo['date']);

        foreach ($mois as $key => $value) 
        {
            if($value == $date[2])
            {
                $sauvMois = $idMois[$key];
            }
        }

        $dateFinal = $date[3].'-'.$sauvMois.'-'.$date[1];

        foreach ($listeSav as $key => $sav) 
        {
            if($sav['num_serie'] == $oldInfo['num_serie'])
            {
                echo 'ok';
                $updateSav = $bdd->prepare('UPDATE sav SET date_renvoi = ? WHERE num_serie = ?');
                $updateSav->execute(array($dateFinal, $oldInfo['num_serie']));                    
            }
        }

        echo $i++.'<br>';
        var_dump($oldInfo);
    }
}