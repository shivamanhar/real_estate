<div class="container">
            <div class="row">
                <div class="table-responsive">
<form action="<?php echo base_url();?>welcome/form_insert" method="POST">
    <table class="table table-striped success">
        <tr> <th colspan="4"> Customer Detail</th></tr>
            <tr> <td class="col-md-2"> Project Name : </td><td class="col-md-1"> <input type="text" name="project_name"  value="<?php echo set_value('project_name'); ?>" required size="50"></td> </tr>
            <tr> <td class="col-md-2">Name:</td><td class="col-md-1"><input type="text" value="<?php echo set_value('name'); ?>" name="name" required size="50"></td></tr>
            <tr> <td>Plot Area:</td><td><input type="text" value="<?php echo set_value('plot_area'); ?>" name="plot_area" required  size="50"></td></tr>
            <tr> <td>Rakba :</td><td><input type="text" value="<?php echo set_value('rakba'); ?>" name="rakba" required size="50"></td></tr>
            <tr> <td>Face : </td><td> <input type="text" name="face"  value="<?php echo set_value('face'); ?>" required ></td></tr>
            <tr> <td>Booking Amount: </td><td> <input type="text" name="booking_amount" value="<?php echo set_value('face'); ?>" required></td></tr>
        <tr> <th colspan="4">Plot All Detail </th></tr>
            <tr> <td>Owner Name:</td><td><input type="text" value="<?php echo set_value('owner_name'); ?>" name="owner_name" required size="50"></td>           </tr>
            <tr> <td>Father's Name:</td><td><input type="text" value="<?php echo set_value('father_name'); ?>" name="father_name" required size="50"></td> <td>Booking Date:</td><td><input type="date" style="line-height:15px;width:150px;" value="<?php echo set_value('booking_date'); ?>" name="booking_date" required></td></tr>
            <tr> <td>Address :</td><td><textarea type="text" value="<?php echo set_value('address'); ?>" name="address" required cols="49"></textarea></td><td>Registration Date :</td><td><input type="date" style="line-height:15px;width:150px;" value="<?php echo set_value('registration_date'); ?>" name="registration_date" required></td></tr>
            <tr> <td>Mobile No. :</td><td><input type="text" value="<?php echo set_value('mobile_no'); ?>" name="mobile_no" required size="50"></td><td>Pogesion Date :</td><td><input type="date"  style="line-height:15px;width:150px;" value="<?php echo set_value('posesion_date'); ?>" name="posesion_date" required></td></tr>
            <tr> <td>Rakba :</td><td><input type="text" value="<?php echo set_value('owner_rakba'); ?>" name="owner_rakba" required size="50"></td><td>Pramanikarn Date :</td><td><input type="date" style="line-height:15px;width:150px;" value="<?php echo set_value('pramanikarna_date'); ?>" name="pramanikarna_date" required></td></tr>
        <tr> <td colspan="4"><input type="submit" value="Save Data"  class="btn btn-success"></td></tr>
    </table>
</form>
            </div>
</div>
</div>