<?php
if($info_form->num_rows>0)
{
     foreach($info_form->result() as $row)
    {
        $customer_id = $row->id;
        $project_name=   $row->project_name;
        $name=    $row->name;
        $plot_area=    $row->plot_area;        
        $rakba=    $row->rakba;
        $face=    $row->face;
        $booking_amount=    $row->booking_amount;
        $owner_name=    $row->owner_name;
        $father_name=    $row->father_name;
        $address=    $row->address;
        $mobile_no=    $row->mobile_no;
        $owner_rakba=    $row->owner_rakba;
        $booking_date=    date('d-M-y',$row->booking_date);
        $registration_date   = date('d-M-y', $row->registration_date);
        $posesion_date=    date('d-M-y', $row->posesion_date);
        $pramanikarna_date=    date('d-M-y', $row->pramanikarna_date);
    }
}
else
{
    redirect(base_url(), 'refresh');
}
?>
<div class="container">

            <div class="row">
                <div class="table-responsive">
            <table class="table table-striped success">
                <tr> <th colspan="8"> Customer Detail</th></tr>
                <tr> <td class= "col-md-2"> <b> <i>Customer Id :</i></b></td><td class= "col-md-1"> <?php echo $customer_id;?></td> <td class= "col-md-1"><b> Name:</b></td><td class= "col-md-2"><?php echo $row->name;?></td>
               <td class= "col-md-2"><b> Project Name:</b></td>
               <td class= "col-md-2"> <?php echo $row->project_name;?></td> 
               <td class= "col-md-2"><b> Mobile No.</b></td>             
               <td class= "col-md-2"> </td>
               <tr> <th colspan="8"> Payment Detail</th></tr>
               <tr>
               <td class= "col-md-2"><b> Total Payment.</b></td>             
               <td class= "col-md-2"> </td>
               <td class= "col-md-2"><b> Balance</b></td>             
               <td class= "col-md-2"> </td>
               <td class= "col-md-2"><b> Last Payment</b></td>             
               <td class= "col-md-2"> </td>
               </tr>
            </table>
                </div>                
            </div>
            <div class ="row">
                <div class="table-responsive">
                    <table class="table table-striped success">
                    <tr> <th colspan="8"> New Payment</th></tr>
                    <tr>
                    <td class= "col-md-1"><b> Date: </b><td class= "col-md-2"><input type="date" name="payment_date" style="line-height:15px;width:150px;" required></td>
                    <td class= "col-md-2"><b> Perpose:</b><input type="radio" name="perpose" value="EMI"> EMI <input type="radio" name="perpose" value="Booking"> Booking</td>
                    <td class= "col-md-1"><b> Amount:</b></td><td class= "col-md-2"><input type="text" name="amount"></td><td class= "col-md-1"><b>Remark:</b></td><td class= "col-md-2"><textarea> </textarea></td>
                    </tr>
                    </table>
                </div>
            </div>
</div>