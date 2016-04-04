 <?php
require_once "../../connexion.php";
session_start();
 ?>
 <link rel="stylesheet" href="http://localhost/Projet_Hajar/bootstrap/css/bootstrap.min.css">
<style type="text/css">
  /* = body
------------------------*/
body{
  background:#1abc9c;
}
.description{
  font-family: 'Vollkorn', serif;
  text-align:center;
  color:#ecf0f1;
  text-shadow:0 0.1em 0.2em #008c8d;
}
/* = Scroll body
------------------------*/
::-webkit-scrollbar{
  width:0.2em;
}
::-webkit-scrollbar-track{
  background-color:#bdc3c7;
}
::-webkit-scrollbar-thumb{
  background-color:#7f8c8d;
}
/* = table
------------------------*/
.box-table table{
  border-collapse:collapse;
  text-align:left;
  width:100%;
  margin:0;
  padding:0;
  background:#7f8c8d;
  animation: responsive 5s infinite ease-in-out;
}
.box-table{
  font:normal 12px/150% Arial, Helvetica, sans-serif;
  overflow:hidden;
  margin:0 auto;
  display:block;
  width:95%;
  padding:2.5%;
}
.box-table table thead th{
  background-color:#7f8c8d;
  color:#bdc3c7;
  text-align:center;
  padding: 0.75em;
  font-family: 'Vollkorn', serif;
  font-weight: bold;
  font-size: 1.5em;
  height: 1.5em;
  vertical-align: top;
  border-left:0.25em double #95a5a6;

}
.box-table table tbody td,
.box-table table tbody tr{
  font-family: 'Vollkorn', serif;
  font-size:1em;
  border:none;
  padding:1em;
}
.box-table table tbody tr:nth-child(odd){
  background:#ecf0f1;
  color:#95a5a6;
}
.box-table table tbody tr:nth-child(even){
  background:#bdc3c7;
  color:#7f8c8d;
}
.box-table table tbody tr a{
  text-decoration:none;
  color:#e67e22;
}
.box-table table tbody tr a:hover{
  color:#d35400;
}
.box-table .user-photo{
  background:#bdc3c7;
}
.box-table .user-tumb{
  width:6em;
  height:6em;
  padding:0;
  display:table-cell;
  text-align:center;
  margin:0 auto;
  -webkit-border-radius:100%;
  -moz-border-radius:100%;
  border-radius:100%;
}


/* = Responsive table
------------------------*/

/* http://elvery.net/demo/responsive-tables/  */
@media only screen and (max-width: 800px){
  .box-table table{
    width:100%;
    border-collapse:collapse;
    border-spacing:0;
  }
  .box-table th,
  .box-table td{
    margin:0;
    vertical-align:top;
  }
  .box-table th{
    text-align:left;
  }
  .box-table table{
    display:block;
    position:relative;
    width:100%;
  }
  .box-table thead{
    display:block;
    float:left;
  }
  .box-table tbody{
    display:block;
    width:auto;
    position:relative;
    overflow-x:auto;
    white-space:nowrap;
  }
  .box-table thead tr{
    display:block;
  }
  .box-table th{
    display:block;
    text-align:right;
  }
  .box-table tbody tr{
    display:inline-block;
    vertical-align:top;
  }
  .box-table td{
    display:block;
    min-height:1.25em;
    text-align:left;
  }
  .box-table th{
    border-bottom:0;
    border-left:0;
  }
  .box-table td{
    border-left:0;
    border-right:0;
    border-bottom:0;
  }
}
/* = Error
------------------------*/
.error_table {
  display: block;
  background: #E05E5E;
  color: #D1D1D1;
  font-family: 'Vollkorn', serif;
  text-align: center;
  font-size: 3em;
  width: 90%;
  padding: 5%;
}
/* = Loader
------------------------*/
.loading_table{
  background:#d35400;
  color:#ecf0f1;
  font-family: 'Vollkorn', serif;
  text-align: center;
  font-size: 1em;
  width: 0;
  display: block;
  overflow: hidden;
  height: 1em;
  padding:0.5em;
  animation: table_loader 10s infinite ease;
}
@keyframes table_loader{50%{width:100%}}
@-webkit-keyframes table_loader{50%{width:100%}}
@-moz-keyframes table_loader{50%{width:100%}}
@-ms-keyframes table_loader{50%{width:100%}}
@-o-keyframes table_loader{ 50%{width:100%}}
</style>
<!-- css form ajouter -->
<style type="text/css">
.form-style-4{
   
    font-size: 16px;
    background: #495C70;
    padding: 30px 30px 15px 30px;
    border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 16px;
    color: #fff;

}
.form-style-4 label {
    display:block;
    margin-bottom: 10px;
}
.form-style-4 label > span{
    display: inline-block;
    float: left;
    width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
    background: transparent;
    border: none;
    border-bottom: 1px dashed #83A4C5;
    width: 275px;
    outline: none;
    padding: 0px 0px 0px 0px;
    font-style: italic;
}
.form-style-4 textarea{
    font-style: italic;
    padding: 0px 0px 0px 0px;
    background: transparent;
    outline: none;
    border: none;
    border-bottom: 1px dashed #83A4C5;
    width: 275px;
    overflow: hidden;
    resize:none;
    height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
    border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
    background: #576E86;
    border: none;
    padding: 8px 10px 8px 10px;
    border-radius: 5px;
    color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
</style>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="http://localhost/Projet_Hajar/plugins/jQuery/jQuery-2.2.0.min.js"></script>
 <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>

<!-- Description -->
<section class="content-header">
    <h1>
      Doctorants
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>
<!-- Table demo -->
<section class="content">
<div class="box-table">
<table data-fn="contacts" data-url="/Projet_Hajar/pages/Doctorant/DnEvr.js"></table>    
</div>
</section>
<!-- section form ajout -->
  <div class="ajouter" id="ajouter">
    <form class="form-style-4" action="" method="post">
        <label for="field1">
        <span>Enter Your Name</span><input type="text" name="field1" required="true" />
        </label>
        <label for="field2">
        <span>Email Address</span><input type="email" name="field2" required="true" />
        </label>
        <label for="field3">
        <span>Short Subject</span><input type="text" name="field3" required="true" />
        </label>
        <label for="field4">
        <span>Message to Us</span><textarea name="field4" onkeyup="adjust_textarea(this)" required="true"></textarea>
        </label>
        <label>
        <span>&nbsp;</span><input type="submit" value="Send Letter" />
        </label>
    </form>
  </div>
  <?php
  $html="";
  $numpers=1;
  if(isset($_SESSION['numPers'])){
    $numpers=$_SESSION['numPers'];}
  $sql = "SELECT * FROM personne p,Doctorant d,enseignant e,these t where d.numpers=p.numpers and t.numpers=d.numpers and t.Ens_numpers=e.numpers and e.numpers='".$numpers."'";
                $rs = $con->query($sql);
                 $row_cnt = mysqli_num_rows($rs);
                 
                  while($row = $rs->fetch_assoc()){
                    
                                  $html.='<tr>'.
                                  '<td class="user-photo">'.
                                  'Image'.
                                  '</td>'.
                                  '<td>'.$row['nom'].'</td>'.
                                  '<td>'.$row['prenom'].'</td>'.
                                  '<td>'.$row['email'].'</td>'.
                                  '<td>'.$row['tel'].'</td>'.
                                  '<td>'.$row['intitule'].
                                  '</td>'.
                                  '<td>'.'<a href="#"><span class="glyphicon glyphicon-minus"></span></a>  <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>'.'</td>'.'</tr>'; 
                  }
                $con->close();
  ?>
<script type="text/javascript">
  //    Demo json  loaded from dropbox 
  // Data = http://codepen.io/nakome/pen/DnEvr.js


(function(){
  
  'use-strict';
  
  var elem,
      // data-fn
      dataFn = $('[data-fn="contacts"]'),
      // data-url
      thisUrl = dataFn.data('url');
  
  
  if (typeof $.table_of_contacts == 'undefined')
    
    $.table_of_contacts = {};
  
  $.table_of_contacts.get = {
    
    init: function() {
      if(dataFn){
        this.getJson();
      }else{
        dataFn.html('No data found.');
      }
    },
    
    /* = Get data
    ------------------------*/
    getJson: function(url){
      
      var self = this;
      
      // loading data before
      dataFn.html('<span class="loading_table">'+
                  'Loading Please Wait ....'+
                  '</span>');
      
      // No ajax cache
      $.ajaxSetup({ cache: false });
      
      // Get json
      $.getJSON(thisUrl,function(data){
        
        // load template
        var out_html = self.tpl(); 
        
        $.each(data,function(i,obj){  
          // load inner template
          out_html += self.tpl_inner(obj);
          
        });
        // close tag
        out_html += '</tbody>';
        // render templates
        dataFn.html(out_html);
        // error 
      }).error(function(j,t,e){ 
        // render error.
        dataFn.html('<span class="error_table">'+
                    'Error = '+e+
                    '</span>');
        
      });
    },
    
    // head table template
    tpl: function(){
      var html = '<thead>'+
          '<tr>'+
          '<th>Photo</th>'+
          '<th>Nom</th>'+
          '<th>Prenom</th>'+    
          '<th>Email</th>'+
          '<th>Phone</th>'+
          '<th>Thése</th>'+
          '<th ><a href="#"><a href="#ajouter" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus-sign"></span></a></th>'+
          '</tr>'+
          '</thead>'+
          '<tbody >';
      return html;
    },
    // inner template
    tpl_inner: function(obj){
      console.log("4");
      var  html=""+'<?=$html;?>';
      return html;
    }
    
  };
  
  // on ready render data
  $(document).ready(function() {
    $.table_of_contacts.get.init();
  });
})().call(this);
</script>

<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>