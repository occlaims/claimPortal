<!-- SEARCH -->

<div class="col-md-12 mb25"> <!-- TOP--> 

<div class="details mb100">
    <div class = "col-lg-12">	  
    
    <div class="well bd-assisted-unassisted" style="display: none;">
        <button type="button" class="btn btn-success navbar-btn btn-lg col-md-5" id = "assistedbutt">Assisted</button>
        <div class = "col-md-2"></div>
        <button type="button" class="btn btn-danger navbar-btn btn-lg col-md-5" id = "unassistedbutt">Unassisted</button>
        <div style="clear: both;"></div>
    </div> 
    
    <div class = "fnol-unassisted" id = "fnol_data_unassisted" style="display:none"><!-- FNOL UNASSISTED -->	
    	<form method="post" enctype="multipart/form-data" id="he_unassisted">
        
        	<div id = "reasonbox">
                <label>Details of emergency:</label>
                <textarea type="text" name ="home_emergency--he_further_info" rows = "10" cols="70" class="form-control mb25" placeholder="" > </textarea>
            </div>
            
            <label>Reason for Unassisted:</label>
            <select id = "home_emergency--he_unassist_reason" name="home_emergency--he_unassist_reason">
                <option value="1">Wrong fuel</option>
                <option value="2">Tyre related on basic</option>
                <option value="3">Key related</option>
                <option value="4">Cancelled</option>
                <option value="5">Same breakdown fault as previous</option>
                <option value="O">Other</option>
            </select>
            
            <br /><br />
        
            <div id="reasonbox">
                <label>More Details:</label>
                <textarea type="text" name ="home_emergency--he_unassist_desc" rows = "10" cols="70" class="form-control mb25" placeholder="" > </textarea>
            </div>
        
        	<input type="hidden" id="claimType" name="claimType" value="home_emergency"  />
            <input type="hidden" id="home_emergency--he_assisted_unassisted" name="home_emergency--he_assisted_unassisted" value="Unassisted"  />
            
            <button class = "btn btn-lg btn-success mb25" id ="he_unassisted_submit">Accept & Save &nbsp;<i class="fa fa-lg fa-floppy-o"></i></button>
            <button class = "btn btn-lg btn-danger mb25 cancel pull-right">Cancel &nbsp;<i class="fa fa-lg fa-times"></i></button>
            
        </form>
    </div>
    
    <div class="fnol-assisted" id="fnol_dataisted" style="display:none"><!-- FNOL UNASSISTED -->	
		<form method="post" enctype="multipart/form-data" id="he_assisted">
        
            <div id = "reasonbox">
                <label>Details of emergency:</label>
                <textarea type="text" name ="home_emergency--he_further_info" rows = "10" cols="70" class="form-control mb25" placeholder="" > </textarea>
            </div>
        
        	<input type="hidden" id="claimType" name="claimType" value="home_emergency"  />
            <input type="hidden" id="home_emergency--he_assisted_unassisted" name="home_emergency--he_assisted_unassisted" value="Assisted"  />
            
            <button class = "btn btn-lg btn-success mb25" id = "he_assisted_submit">Accept & Save &nbsp;<i class="fa fa-lg fa-floppy-o"></i></button>
            <button class = "btn btn-lg btn-danger mb25 cancel pull-right">Cancel &nbsp;<i class="fa fa-lg fa-times"></i></button>
            
        </form>
    </div>
        
    </div>
        <!-- /.DETAILS -->	 
</div>