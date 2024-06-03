<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DynamicForm extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }

    public function index() {
        // Fetch fields from the database
        $fields = $this->db->get('FileldMst')->result_array();

        // Pass the fields data to the view
        $data['fields'] = $fields;

        $this->load->view('dynamic_form', $data);
    }

    public function show_blob_form()
    {
        $this->load->view('blob_view');
    }
    public function save_blob()
    {
        if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK)
        {
            $tempFilePath = $_FILES['attachment']['tmp_name'];
            echo "uploaded file found";

            $get_image = file_get_contents($_FILES['attachment']['tmp_name']);  //imgProfile is the name of the image tag  
            $insert_values = array(
                    'name' => $this->input->post('name'),                    
                    'binary_data' => $get_image //its a variable
                    );  
            $insert_qry = $this->db->insert('blob_test', $insert_values);
        }        
    }

    public function API_CALL($requestData)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($requestData);
        //echo "API Calling successfully";
        //echo $requestData;
    }

    public function API_CALL_SAVE()
    {
        $insert_values = array(
            'name' => $this->input->post('fname'),               
            'data' => $this->input->post('fface')
            );  
        /*$insert_values = array(
            'name' => 'first Name',               
            'data' => 'face data'
            );  */
        $insert_qry = $this->db->insert('android_tbl', $insert_values);
    }

    public function API_CALL_GET($ID)
    {
        $returnData =  $this->db->query("select * from android_tbl where id=".$ID)->result_array(); 

        header('Content-Type: application/json');
        echo json_encode($returnData);
    }

    public function set_global()
    {
        //global $global_var;
        $config['web_Address']= 'https://www.formget.com/blog';
        echo "Variable Setted Successfully";
    }

    public function show_global()
    {
        //global $global_var;
        
        echo "Variable Showed Successfully:". $config['web_Address'];
    }

    public function get_master_by_master_id ()
    {
        $this->load->library('generic_repository');
        
        $PostData = $this->input->post();
        $masterID = $PostData["master_id"];


        $masterData = $this->generic_repository->query("select * from core_master where id=".$masterID);
        $masterField = $this->generic_repository->query("select * from FileldMst where MasterId=".$masterID." ORDER BY Sysfld DESC");
        
        echo json_encode(array(
            "status" => 1,
            "dump_data" => 0,
            "masterID" => $masterID,
            "masterData" => $masterData,
            "masterFiled" => $masterField,
            "master" => $masterID,
            "msg" => "Master Message"
        ));
    }

    public function get_field_by_id()
    {
        $PostData = $this->input->post();
        $fieldID = $PostData["field_id"];
        $fields =  $this->db->query("select * from FileldMst where FileldID=".$fieldID)->result_array(); 
        $json_data = json_encode($fields);
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Output the JSON data
        echo $json_data;
    }

    public function get_columns_by_master_id()
    {
        $PostData = $this->input->post();
        $masterID = $PostData["master_id"];
        $fields =  $this->db->query("select * from FileldMst where MasterId=".$masterID)->result_array(); 
        $json_data = json_encode($fields);
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Output the JSON data
        echo $json_data;
    }

    public function delete_field_by_id()
    {
        $PostData = $this->input->post();
        $fieldID = $PostData["field_id"];
        $viewdata =  $this->db->query("SELECT core_master.name as table_name, FileldMst.FieldName as filed_name from core_master INNER JOIN FileldMst ON  core_master.id=FileldMst.MasterId WHERE FileldMst.FileldID=".$fieldID)->result_array();        
        $tableName = $viewdata[0]["table_name"];
        $filedName = $viewdata[0]["filed_name"];

        //"ALTER TABLE `test_master` DROP `del`;"
        $this->db->query("ALTER TABLE ".$tableName." DROP ".$filedName." ");

        $fields =  $this->db->query("delete from FileldMst where FileldID=".$fieldID); 
        $json_data = json_encode($fields);
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Output the JSON data
        echo $json_data;
    }

    public function admin_lite($MasterId) {         
        $tableName =  $this->db->query("select * from core_master where id=".$MasterId)->result_array()[0]['name'];    
        $fields =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $tableQuery = "CREATE TABLE IF NOT EXISTS ".$tableName." ( ";
        $tableQuery = $tableQuery. "  iMasterId  int(11) NOT NULL auto_increment, ";        
        foreach($fields as  $field)
        {
            $filedName = $field['FieldName'];
            $filedType = $field['Fieldtype'];
            $filedLength = $field['MaxLength'];
            
            if($filedType == "text")
            {
                $tableQuery = $tableQuery. " ".$filedName."  varchar(".$filedLength.") NULL,";   
            }
            else if($filedType == "select")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }
            else if($filedType == "master")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }             
        }
        $tableQuery = $tableQuery. " PRIMARY KEY  (iMasterId)  );";  

        $this->db->query($tableQuery);

        $viewdata =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $data['fields'] = $viewdata;        
        $data['masterID'] = $MasterId;        
        
        //$this->load->view('dynamic_form_new', $data);
        $this->load->view('dynamic_form_new_theme', $data);
    }

    public function customize_master($MasterId)
    {
        $viewdata =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $data['fields'] = $viewdata;        
        $data['masterID'] = $MasterId;        
        
        //$this->load->view('dynamic_form_new', $data);
        $this->load->view('dynamic_master_customize', $data);        
    }

    public function new_master_view()
    {
        $this->load->view('create_new_master');   
    }

    public function new_container_view()
    {
        $data['page_name'] = 'create_new_master_part.php';  
        $this->load->view('main_view', $data); 
    }

    private function varDumpToString ($var)
    {
        ob_start();
        var_dump($var);
        return ob_get_clean();
    }

    public function new_master_save()
    {        
        $PostData = $this->input->post();
        $masterName = $PostData["MasterName"];
        $caption = $PostData["MasterCaption"];

        $data =  $this->db->query("select * from core_master where name='".$masterName."' ")->result_array(); 

        if((count($data) > 0))
        {
            header('Content-Type: application/json');
            // Output the JSON data
            echo json_encode(array(
                "status" => 0,
                "dump_data" => $this->varDumpToString(count($data)),
                "msg" => "Master Name is Already Found"
            ));
        }
        else
        {
            $insert_values = array(
                'name' => $masterName,                    
                'caption' => $caption //its a variable
            );  
            $insert_qry = $this->db->insert('core_master', $insert_values);
            $insertID  = $this->db->insert_id();
            $this->create_master_table($insertID);
            
            header('Content-Type: application/json');
            // Output the JSON data
            echo json_encode(array(
                "status" => 1,
                "MasterID" => $insertID,
                "msg" => "Data Inserted Successfully"
            ));
        }
    }

    public function delete_master()
    {
        try { 
        $PostData = $this->input->post();
        $masterId = $PostData["MasterID"];

        $data =  $this->db->query("SELECT * FROM `fileldmst` where Fieldtype='master' AND value=".$masterId." ")->result_array(); 

        header('Content-Type: application/json');
        if((count($data) > 0))
        {            
            // Output the JSON data
            echo json_encode(array(
                "status" => 0,
                "MasterID" => $masterId,
                "dump_data" => $this->varDumpToString(count($data)),
                "msg" => "Master is in used cannot be delete"
            ));
        }
        else
        {
            $tableName = $this->db->query("SELECT * FROM core_master WHERE id=".$masterId)->result_array()[0]["name"]; 

            $count =  $this->db->query("SELECT count(*) as cnt FROM ".$tableName)->result_array()[0]["cnt"]; 

            if ($count > 0)
            {   
                echo json_encode(array(
                    "status" => 0,
                    "MasterID" => $masterId,
                    "dump_data" => $this->varDumpToString($count),
                    "msg" => "Master table is not empty cannot delete"
                ));
            }
            else
            {
                $this->db->query("DELETE FROM fileldmst WHERE MasterId=".$masterId);
                $this->db->query("DELETE FROM core_master WHERE id=".$masterId);
                $this->db->query("DROP TABLE ".$tableName);

                echo json_encode(array(
                    "status" => 0,
                    "MasterID" => $masterId,
                    "dump_data" => $this->varDumpToString(count($data)),
                    "msg" => "Master table is empty can be delete"
                ));
            }           
        }
    } catch (Exception $e) {
        //alert the user.
        //var_dump($e->getMessage());
        echo json_encode(array(
            "status" => 0,           
            "msg" => $e->getMessage()
        ));
      }
    }


    public function master_submit()
    {     
        $this->load->library('generic_repository');

        $PostData = $this->input->post();
        $masterId = $PostData["MasterID"];
        $masterName = $PostData["MasterName"];
        $caption = $PostData["MasterCaption"];

        //$data =  $this->db->query("select * from core_master where name='".$masterName."' ")->result_array(); 
        $data =  $this->db->query("select * from core_master where id=".$masterId." ")->result_array(); 

        if((count($data) > 0))
        {
            $update_values = array(
                'name' => $masterName,                    
                'caption' => $caption //its a variable
            );  

            $oldName = $data[0]["name"];

            $this->generic_repository->update('core_master', $masterId, $update_values);
            
            if($oldName != $masterName)
            {
                $this->db->query("RENAME TABLE  `".$oldName."` TO  `".$masterName."`");
            }
            

            header('Content-Type: application/json');
            // Output the JSON data
            echo json_encode(array(
                "status" => 0,
                "MasterID" => $masterId,
                "dump_data" => $this->varDumpToString(count($data)),
                "msg" => "Master Name is Already Found"
            ));
        }
        else
        {
            $insert_values = array(
                'name' => $masterName,                    
                'caption' => $caption //its a variable
            );  
            $insert_qry = $this->db->insert('core_master', $insert_values);
            $insertID  = $this->db->insert_id();
            $this->create_master_table($insertID);
            
            header('Content-Type: application/json');
            // Output the JSON data
            echo json_encode(array(
                "status" => 1,
                "MasterID" => $insertID,
                "msg" => "Data Inserted Successfully"
            ));
        }
    }

   

    public function create_master_table($MasterId)
    {
        $tableName =  $this->db->query("select * from core_master where id=".$MasterId)->result_array()[0]['name']; 
        
        /**
         * Create Table if not existed
        */
        
        $fields =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $tableQuery = "CREATE TABLE IF NOT EXISTS ".$tableName." ( ";
        $tableQuery = $tableQuery. "  iMasterId  int(11) NOT NULL auto_increment, ";        
        foreach($fields as  $field)
        {
            $filedName = $field['FieldName'];
            $filedType = $field['Fieldtype'];
            $filedLength = $field['MaxLength'];
            
            if($filedType == "text")
            {
                $tableQuery = $tableQuery. " ".$filedName."  varchar(".$filedLength.") NULL,";   
            }
            else if($filedType == "select")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }
            else if($filedType == "master")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }             
        }
        $tableQuery = $tableQuery. " PRIMARY KEY  (iMasterId)  );";  

        $this->db->query($tableQuery);
    }

    public function save_new_field()
    {
        $this->load->library('generic_repository');
        
        $PostData = $this->input->post();
        $masterId = $PostData["MasterId"];
        $fieldID = $PostData["fieldID"];
        $filedName = $PostData["filedName"];
        $caption = $PostData["caption"];
        $filedType = $PostData["filedType"];
        $length = $PostData["length"];
        $value = $PostData["value"];
        $sequence = $PostData["sequence"];        
        $Sysfld = $PostData["Sysfld"];        

        $tableData = array(
            //'caption' => $masterId,
            //'caption' => $fieldID,
            'MasterId' => $masterId,
            'FieldName' => $filedName,
            'Caption' => $caption,
            'Fieldtype' => $filedType,
            'MaxLength' => $length,
            'value' => $value,
            'Sysfld' => $Sysfld,
            'seqence' => $sequence 
        );  


        if($filedType == "master")
        {
            $tableData['value'] =  $PostData["master_names"];
            $tableData['master_values'] =  $PostData["display_field"];
        }


        $data =  $this->db->query("select * from FileldMst where FileldID=".$fieldID)->result_array(); 

        if((count($data) > 0))
        {
            header('Content-Type: application/json');
            

            $tableName =  $this->db->query("select * from core_master where id=".$masterId)->result_array()[0]['name']; 

            //ALTER TABLE `warehouse` CHANGE `warehousename` `warehouse` TEXT DEFAULT NULL;
            $oldFiledName = $data[0]["FieldName"];

            //$alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." ".$filedType." NULL;";
            $alterQuery = "ALTER TABLE `".$tableName."` CHANGE `".$oldFiledName."` `".$filedName."` ".$filedType." DEFAULT NULL;";

            if($filedType == "text")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` CHANGE `".$oldFiledName."` `".$filedName."` TEXT DEFAULT NULL;";
            } 
            else if($filedType == "select")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` CHANGE `".$oldFiledName."` `".$filedName."` int(11) DEFAULT NULL;";
            }
            else if($filedType == "master")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` CHANGE `".$oldFiledName."` `".$filedName."` int(11) DEFAULT NULL;";
            }


            $this->db->query($alterQuery);


            // Output the JSON data
            $this->generic_repository->update_field('FileldMst', $fieldID, $tableData);


            echo json_encode(array(
                "status" => 1,
                "dump_data" => $this->varDumpToString(count($tableData)),
                "msg" => "Master Name is Already Found"
            ));
        }
        else
        {            
            $insert_qry = $this->db->insert('FileldMst', $tableData);
            
            //ALTER TABLE `warehouse` ADD `sName` TEXT NULL;

            $tableName =  $this->db->query("select * from core_master where id=".$masterId)->result_array()[0]['name']; 
            

            //$alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." `".$filedType."` NULL;";
            $alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." TEXT NULL;";

            if($filedType == "text")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." TEXT NULL;";
            } 
            else if($filedType == "select")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." int(11) NULL;";
            }
            else if($filedType == "master")
            {
                $alterQuery = "ALTER TABLE `".$tableName."` ADD ".$filedName." int(11) NULL;";
            }

            $this->db->query($alterQuery);



            
            //header('Content-Type: application/json');
            // Output the JSON data
            /*echo json_encode(array(
                "status" => 1,
                "msg" => "Data Inserted Successfully"
            ));*/
        }
    }
    
    
    public function dynamic_form($MasterId) {
        
        //$this->load->library('GenericRepository','mcore_account', $this->db);
        //$this->load->model('GenericRepository');

        //$fields =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        //$queryCount = count($resultSet );



        // Fetch fields from the database
        //$fields = $this->db->get('FileldMst')->result_array();

        // Pass the fields data to the view

        $tableName =  $this->db->query("select * from core_master where id=".$MasterId)->result_array()[0]['name']; 
        
        /**
         * Create Table if not existed
        */
        
        $fields =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $tableQuery = "CREATE TABLE IF NOT EXISTS ".$tableName." ( ";
        $tableQuery = $tableQuery. "  iMasterId  int(11) NOT NULL auto_increment, ";        
        foreach($fields as  $field)
        {
            $filedName = $field['FieldName'];
            $filedType = $field['Fieldtype'];
            $filedLength = $field['MaxLength'];
            
            if($filedType == "text")
            {
                $tableQuery = $tableQuery. " ".$filedName."  varchar(".$filedLength.") NULL,";   
            }
            else if($filedType == "select")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }
            else if($filedType == "master")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }             
        }
        $tableQuery = $tableQuery. " PRIMARY KEY  (iMasterId)  );";  

        $this->db->query($tableQuery);

        $viewdata =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $data['fields'] = $viewdata;        
        $data['masterID'] = $MasterId;        
        $this->load->view('dynamic_form_new', $data);
    }

    function dynamic_doc($DocID)
    {
        $docID =  $this->db->query("select * from core_doc where id=".$DocID)->result_array()[0]['doc_id']; 
        $tableName =  $this->db->query("select * from core_doc where id=".$DocID)->result_array()[0]['doc_name']; 
        
        /**
         * Create Table if not existed
        */
        
        $fields =  $this->db->query("select * from core_filed_doc where doc_id=".$docID)->result_array(); 
        $tableQuery = "CREATE TABLE IF NOT EXISTS ".$tableName." ( ";
        $tableQuery = $tableQuery. "  iMasterId  int(11) NOT NULL auto_increment, ";        
        foreach($fields as  $field)
        {
            $filedName = $field['FieldName'];
            $filedType = $field['Fieldtype'];
            $filedLength = $field['MaxLength'];
            
            if($filedType == "text")
            {
                $tableQuery = $tableQuery. " ".$filedName."  varchar(".$filedLength.") NULL,";   
            }
            else if($filedType == "select")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }
            else if($filedType == "master")
            {
                $tableQuery = $tableQuery. " ".$filedName."  int(11) NULL,";   
            }             
        }
        $tableQuery = $tableQuery. " PRIMARY KEY  (iMasterId)  );";  

        $this->db->query($tableQuery);

        $viewdata =  $this->db->query("select * from FileldMst where MasterId=".$MasterId)->result_array(); 
        $data['fields'] = $viewdata;        
        $data['masterID'] = $MasterId;        
        $this->load->view('dynamic_form_new', $data);
    }

    public function delete_data_by_imaster_id()
    {
        $this->load->library('generic_repository');

        $something = $this->input->post();
        $iMasterId = intval($something["iMasterId"]);
        $masterId = $something["MasterId"];

        $results =  $this->db->query("select * from core_master where id=".$masterId)->result_array(); 
        $tableName = $results[0]['name'];

        $this->db->query("DELETE FROM ".$tableName." WHERE iMasterId=".$iMasterId); 
       
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Output the JSON data
        //echo $json_data;
        echo json_encode(array(
            "status" => 1,
            "query" => "DELETE FROM ".$tableName." WHERE iMasterId=".$iMasterId,            
            "iMasterID" => $iMasterId,
            "msg" => "Data Deleted Successfully"
        ));
    }

    public function get_data_by_imaster_id()
    {
        $this->load->library('generic_repository');

        $something = $this->input->post();
        $iMasterId = intval($something["iMasterId"]);
        $masterId = $something["MasterId"];

        $results =  $this->db->query("select * from core_master where id=".$masterId)->result_array(); 
        $tableName = $results[0]['name'];

        $fields =  $this->db->query("SELECT * FROM ".$tableName." WHERE iMasterId=".$iMasterId)->result_array(); 
        $json_data = json_encode($fields);
        // Set the response header to JSON
        header('Content-Type: application/json');
        // Output the JSON data
        echo $json_data;
    }

    public function submit() {
        $this->load->library('generic_repository');
        //$this->load->library('GenericRepository');


        // Process form submission here
        $something = $this->input->post();
        /*echo "controller called";
        print_arr($something);*/

        $iMasterId = intval($something["iMasterId"]);
        $masterId = $something["MasterId"];

        $results =  $this->db->query("select * from core_master where id=".$masterId)->result_array(); 

        unset($something["iMasterId"]);
        unset($something["MasterId"]);

        //$status = $this->db->insert($results[0]['name'], $something);

        $return_id = '';
        if($iMasterId > 0)
        {
            //update it
            $this->generic_repository->update_master($results[0]['name'], $iMasterId, $something);
            $return_id = $iMasterId;
        }
        else
        {
            $return_id = $this->generic_repository->insert($results[0]['name'], $something);
        }

        



        //var_dump($something);
        var_dump($return_id);
    }
}
?>