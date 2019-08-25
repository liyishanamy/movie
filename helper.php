
<?php



function prepareFormData($form_data,$mysqli_obj=null ){
    $data = $form_data;
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    if($mysqli_obj){
        $data = $mysqli_obj->real_escape_string($data);
    }
    return $data;
}
function createPreparedFormData($mysqli_obj=null){
    $preparedDataArray=array();
    foreach($_REQUEST as $key =>$value){
        $preparedDataArray[$key] = prepareFormData($value,$mysqli_obj);
    }
    return $preparedDataArray;
}
?>
<?php
define("SEARCH_TYPE","searchType");//different candidates
define("SEARCH_MYEMPLOYER","myEmployer");
define("SEARCH_EMPLOYEEINFO","employeeInfo");
define("SEARCH_NOTHING","Choose");
define("SEARCH_DEGREE","searchDegree");

function CREATEMYELPLOYERQUERY($preparedFormData){
    $showDegree = $preparedFormData[SEARCH_DEGREE];
    $finalQuery = "SELECT userName,userAge,education FROM myEmployer WHERE education='$showDegree'";
    return $finalQuery;
}
function CREATEEMPLOYEEINFOQUERY($preparedFormData){
    $showDegree = $preparedFormData[SEARCH_DEGREE];
    $finalQuery = "SELECT myEmployer.userName,myEmployer.education,employeeInfo.userEmail FROM employeeInfo JOIN myEmployer ON employeeInfo.userName=myEmployer.userName WHERE education='$showDegree' ";
   // $finalQuery = "SELECT * FROM employeeInfo";
    //$finalQuery .= " NATURAL JOIN myEmployer WHERE education='$showDegree'";
    return $finalQuery;
}
function getSearchQuery($preparedFormData){
    $showType=$preparedFormData[SEARCH_TYPE];
    if($showType == SEARCH_MYEMPLOYER){
        return CREATEMYELPLOYERQUERY($preparedFormData);
    }
    else if($showType ==SEARCH_EMPLOYEEINFO){
        return CREATEEMPLOYEEINFOQUERY($preparedFormData);
    }

    else if($showType == SEARCH_NOTHING){
        return false;
    }
}


function printTableRow($mysqli_row){
    foreach($mysqli_row as $value){
            echo "<td>".$value."</td>\n";?>

        <?php
    }
}
function printCustomerRow($mysqli_row){
    foreach($mysqli_row as $value){
        echo "<td>".$value;?>
        <?php
    }
    ?>
    <input type="checkbox" name="customer[]" value="<?php echo $mysqli_row['accountNum'];?>"></th>
    <br>
    <?php
}
function printHeading(){?>
    <thead>
        <th>startTime</th>
        <th>seatAvailable</th>
        <th>theatre</th>
    </thead>
    <?php
}


function printTableHeading($showType){
    ?>
    <thead>

    <?php if($showType == "searchShowing") {
        ?>
        <th>startTime</th>
        <th>seatAvailable</th>
        <th>theatre</th>
        <?php
    }
     if($showType == "searchReserve") {
        ?>
    <th>accountNumber</th>
    <th>title</th>
    <th>startTime</th>
         <th>theatreNumber</th>
         <th>ticketNumber</th>
    <?php
    }

    if($showType == "customer") {
        ?>
        <th>accountNumber</th>
        <th>password</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>street</th>
        <th>city</th>
        <th>postCode</th>
        <th>email</th>
        <th>creditCard</th>
        <th>expireDate</th>
    <?php }
    ?>
    </thead>
<?php
}
?>

