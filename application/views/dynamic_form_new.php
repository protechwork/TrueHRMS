<!DOCTYPE html>
<head>
    <title>Dynamic Form</title>
</head>
<body>
        <h3>Dyaminc Form</h3>
        <?php
        //var_dump($fields);
        //die();
        ?>
        <?php
            $CI =& get_instance();
            $CI->load->library('generic_repository');
            
        
        ?>
        
        
        <form id="dynamicMaster"> 
            <?php foreach ($fields as $field): ?>
                <label for="<?php echo $field['Caption']; ?>">
                    <?php echo ucfirst($field['Caption']); ?>
                </label>
                <?php if ($field['Fieldtype'] === 'text') { ?>
                    <input type="text" name="<?=$field['FieldName']?>" id="<?=$field['FieldName']?>" value="<?=$field['value']?>">
                <?php } else if ($field['Fieldtype'] === 'select' && !empty($field['value'])) { ?>
                    <?php $options = explode(',', $field['value']); ?>
                    <?php
                        //var_dump($options, count($options));die();
                    ?>
                     <select name="<?php echo $field['FieldName']; ?>" id="<?php echo $field['FieldName']; ?>">
                        
                        <?php for($i = 0; $i < count($options); $i=$i+2) { ?>
                            <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i+1]; ?></option>
                       <?php } ?>
                    </select>
                   
                <?php }
                 elseif ($field['Fieldtype'] === 'master' && !empty($field['value']))
                 {                    
                    //$CI->generic_repository->yourFunction();
                    //$echo = $CI->db->query("select * from FileldMst")->result_array(); 

                    $data = $CI->generic_repository->query("select ".$field['master_values']." from ".$field['value'] );                     
                    //var_dump($echo);die();
                    ?>
                    <select name="<?php echo $field['FieldName']; ?>" id="<?php echo $field['FieldName']; ?>">
                        <?php
                        foreach( $data as $row ) {
                            ?>
                                <option value="<?=$row['iMasterId']?>"><?=$row['itemname']?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <?php
                 }
                 elseif  ($field['Fieldtype'] === 'date') { ?>
                    
                    <input type="date" name="<?=$field['FieldName']?>" id="<?=$field['FieldName']?>" value="<?=$field['value']?>">
                   
                <?php } ?>
                <br>
            <?php endforeach; ?>
        </form> 
            
            <input id="btnSubmit" type="submit" value="Submit">
       
        <script src=" https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              //alert($().jquery);
              
              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(form); 
                formData.append("MasterId", <?=$masterID?>);	
                
                $.ajax({ 
                    url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/submit', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert('Your form has been sent successfully.'); 
                        console.log(response);
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
                
                //console.log(formData);
              });
              
              
            });
        </script>
</body>
</html>