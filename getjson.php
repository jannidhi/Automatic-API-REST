<?phprequire_once 'inc/functions.php';$objectTools = new Tools();if(isset($_GET["c"])){    if(isset($_GET["l"])){        $sql = "SELECT ".$_GET["c"]." FROM ".$_GET["t"]." LIMIT ".$_GET["l"].";";    }else{        $sql = "SELECT ".$_GET["c"]." FROM ".$_GET["t"].";";    }}else{    if(isset($_GET["l"])){        $sql = "SELECT * FROM ".$_GET["t"]." LIMIT ".$_GET["l"].";";    }else{        $sql = "SELECT * FROM ".$_GET["t"]." LIMIT ".$_GET["l"].";";    }    }$rawdata = $objectTools->getArraySQL($sql);echo json_encode($rawdata);