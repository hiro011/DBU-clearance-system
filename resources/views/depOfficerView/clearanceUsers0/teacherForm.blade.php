@extends('Layouts.registrarLayout')

@section('registrarContent')

    <link rel="stylesheet" href="/css/bootstrap-min.css">
    <script src="/jquery/jquery.js"></script>
    <script src="/jquery/ajax-jquery.js"></script>
    <script src="/jquery/jquery-2.js"></script>
    

    <style> 
     
        #allStudA{
            background-color: blue;
            color: white;
        }
        .column1{
            width: 70%;
        }
        /* table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }
        th, td {
        text-align: left;
        padding: 5px;
        }
        */
        table tr:nth-child(){
        counter-reset: rowNumber;
        }
        table tr {
        counter-increment: rowNumber;
        }
        table tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
        } 
        
        .sticky {
            position: fixed;
            top: 0;
            width: 70.2%;
            z-index: 20;
        }
            
        body {
            font-family: 'Nunito', sans-serif;
            padding-left: 6%;
            padding-right: 13%;
            background-color: gray;
        }
        footer {
        Width: 100%;
        }
         
    </style>
            
       
    
    <script type="text/javascript">
        $(document).ready(function($){
            //ajax row data
            var ajax_data =
            [
                {id:"0011",name:"Code", program:"Regular", college:"Engineering", department:"Electrical",  add_by:"officer"}, 
                {id:"0012",name:"Mary", program:"Regular", college:"Computing",   department:"Information", add_by:"officer"},
                {id:"0013",name:"John", program:"Regular", college:"Engineering", department:"mechanical", add_by:"officer"},
                {id:"0014",name:"Julie",program:"Regular", college:"Engineering", department:"cotm", add_by:"officer"},
            ]

            var random_id = function  () 
            {
                var id_num = Math.random().toString(9).substr(2,3);
                var id_str = Math.random().toString(36).substr(2);
                
                return id_num + id_str;
            }


            //--->create data table > start
            var tbl = '';
            tbl +='<table class="table table-hover">'

                tbl +='<thead>';
                    tbl +='<tr>';
                    tbl +='<th>#</th>';
                    tbl +='<th>ID</th>';
                    tbl +='<th>Name</th>';
                    tbl +='<th>program</th>';
                    tbl +='<th>College</th>';
                    tbl +='<th>Department</th>';
                    tbl +='<th>Add by</th>';
                    tbl +='<th>Edit</th>';
                    tbl +='<th>Delet</th>';
                    tbl +='</tr>';
                tbl +='</thead>';

                //--->create table header > end

                
                //--->create table body > start
                tbl +='<tbody>';

                    //--->create table body rows > start
                    $.each(ajax_data, function(index, val) {
                        //you can replace with your database row id
                        var row_id = random_id();

                        //loop through ajax row data
                        tbl +='<tr row_id="'+row_id+'">';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="#">' +'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="id">'+val['id']+'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="name">'+val['name']+'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="program">'+val['program']+'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="college">'+val['college']+'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="department">'+val['department']+'</div></td>';
                            tbl +='<td ><div class="row_data" edit_type="click" col_name="add_by">'+val['add_by']+'</div></td>';

                            //--->edit options > start
                            tbl +='<td>';
                            
                                tbl +='<span class="btn_edit" > <a href="#" class="btn btn-link " row_id="'+row_id+'" > Edit</a> </span>';

                                //only show this button if edit button is clicked
                                tbl +='<span class="btn_save"> <a href="#" class="btn btn-link"  row_id="'+row_id+'"> Save</a> | </span>';
                                tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'"> Cancel</a> | </span>';

                            tbl +='</td>';
                            tbl +='<td>';
                            
                                tbl +='<span class="btn_edit" > <a href="#" class="btn btn-link " row_id="'+row_id+'" > Delete</a> </span>';

                                //only show this button if edit button is clicked
                                tbl +='<span class="btn_save"> <a href="#" class="btn btn-link"  row_id="'+row_id+'"> Yes</a> | </span>';
                                tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'"> No</a> | </span>';

                            tbl +='</td>';
                            //--->edit options > end
                            
                        tbl +='</tr>';
                    });

                    //--->create table body rows > end

                tbl +='</tbody>';
                //--->create table body > end

            tbl +='</table>'	
            //--->create data table > end

            //out put table data
            $(document).find('.tbl_user_data').html(tbl);

            $(document).find('.btn_save').hide();
            $(document).find('.btn_cancel').hide(); 

            //--->make div editable > start
                    // ---
            //--->save single field data > end
        
            //--->button > edit > start	
            $(document).on('click', '.btn_edit', function(event) {
                event.preventDefault();
                var tbl_row = $(this).closest('tr');

                var row_id = tbl_row.attr('row_id');

                tbl_row.find('.btn_save').show();
                tbl_row.find('.btn_cancel').show();

                //hide edit button
                tbl_row.find('.btn_edit').hide(); 

                //make the whole row editable
                tbl_row.find('.row_data')
                .attr('contenteditable', 'true')
                .attr('edit_type', 'button')
                .addClass('bg-warning')
                .css('padding','3px')

                //--->add the original entry > start
                tbl_row.find('.row_data').each(function(index, val) 
                {  
                    //this will help in case user decided to click on cancel button
                    $(this).attr('original_entry', $(this).html());
                }); 		
                //--->add the original entry > end

            });
            //--->button > edit > end

            //--->button > cancel > start	
            $(document).on('click', '.btn_cancel', function(event) {
                event.preventDefault();

                var tbl_row = $(this).closest('tr');

                var row_id = tbl_row.attr('row_id');

                //hide save and cacel buttons
                tbl_row.find('.btn_save').hide();
                tbl_row.find('.btn_cancel').hide();

                //show edit button
                tbl_row.find('.btn_edit').show();

                //make the whole row editable
                tbl_row.find('.row_data')
                .attr('edit_type', 'click')
                .removeClass('bg-warning')
                .css('padding','') 

                tbl_row.find('.row_data').each(function(index, val) 
                {   
                    $(this).html( $(this).attr('original_entry') ); 
                });  
            });
            //--->button > cancel > end

            
            //--->save whole row entery > start	
            $(document).on('click', '.btn_save', function(event) {
                event.preventDefault();
                var tbl_row = $(this).closest('tr');

                var row_id = tbl_row.attr('row_id');

                
                //hide save and cacel buttons
                tbl_row.find('.btn_save').hide();
                tbl_row.find('.btn_cancel').hide();

                //show edit button
                tbl_row.find('.btn_edit').show();


                //make the whole row editable
                tbl_row.find('.row_data')
                .attr('edit_type', 'click')
                .removeClass('bg-warning')
                .css('padding','') 

                //--->get row data > start
                var arr = {}; 
                tbl_row.find('.row_data').each(function(index, val) 
                {   
                    var col_name = $(this).attr('col_name');  
                    var col_val  =  $(this).html();
                    arr[col_name] = col_val;
                });
                //--->get row data > end

                //use the "arr"	object for your ajax call
                $.extend(arr, {row_id:row_id});

                //out put to show
                $('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>')
                

            });
            //--->save whole row entery > end


        }); 
    </script>


    <style>
        .panel{
            width: auto;
        }
       
    </style>

    <div  style=" overflow-x:auto;">
        <h2 style="text-align: center;">All Students</h2><hr>
    
        <div class="panel panel-default">

            <div class="panel-body">
                
                <div class="tbl_user_data"></div>

            </div>

        </div>

    </div>

      

@endsection
