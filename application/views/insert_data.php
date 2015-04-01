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
        <tr> <th colspan="4"> Customer Detail</th></tr>
            <tr> <td> <b> <i>Customer Id :</i></b></td><td> <?php echo $customer_id;?></td></tr>
            <tr> <td class="col-md-2"> <b> <i> Project Name : </i></b></td><td class="col-md-1"> <?php echo $project_name; ?></td> </tr>
            <tr> <td class="col-md-2"><b> <i> Name:</i></b></td><td class="col-md-1"><?php echo $name; ?></td></tr>
            <tr> <td><b> <i>Plot Area:</i></b></td><td><?php echo $plot_area; ?></td></tr>
            <tr> <td><b> <i>Rakba :</i></b></td><td><?php echo $rakba; ?></td></tr>
            <tr> <td><b> <i>Face : </i></b></td><td> <?php echo $face; ?></td></tr>
            <tr> <td><b> <i>Booking Amount:</i></b> </td><td> <?php echo $booking_amount;?></td></tr>
        <tr> <th colspan="4">Plot All Detail </th></tr>
            <tr> <td><b> <i>Owner Name:</i></b></td><td><?php echo $owner_name;?></td>           </tr>
            <tr> <td><b> <i>Father's Name:</i></b></td><td><?php echo $father_name; ?></td> <td><b> <i>Booking Date:</i></b></td><td><?php echo $booking_date;?></td></tr>
            <tr> <td><b> <i>Address :</i></b></td><td><?php echo $address;?></td><td><b> <i>Registration Date :</i></b></td><td><?php echo $registration_date; ?></td></tr>
            <tr> <td><b> <i>Mobile No. :</i></b></td><td><?php echo $mobile_no; ?></td><td><b> <i>Pogesion Date :</i></b></td><td><?php echo $posesion_date; ?></td></tr>
            <tr> <td><b> <i>Rakba :</i></b></td><td><?php echo $rakba;?></td><td><b> <i>Pramanikarn Date :</i></b></td><td><?php echo $pramanikarna_date;?></td></tr>
        <tr> <td> <button onclick=" window.print();" class="btn btn-success">Print</button> </td></tr>
    </table>
</form>
            </div>
</div>
</div>
