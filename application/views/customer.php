<?php
$this->load->view('alpha');

?>
<div class="container">
            <div class="row">
                <hr/>
                <?php
                if($customer->num_rows>0)
                {
                    ?>
                    <table class="table table-striped success">
                        <tr> <th colspan="7"> Customer List </th></tr>
                        <tr> <td class="col-md-1"><b> ID </b></td><td class="col-md-2"><b> Name</b> </td><td class="col-md-2"><b>Mobile</b></td><td class="col-md-2"><b>Booking Date</b></td> <td class="col-md-2"><b>Registration Date</b></td></tr>
                        <?php 
                    foreach($customer->result() as $row)
                    {
                        ?>
                        <tr> <td class="col-md-1"><?php echo $row->id;?></td><td class="col-md-2"><?php echo $row->name;?></td><td class="col-md-2"><?php echo $row->mobile_no;?></td><td class="col-md-2"><?php echo date('d-M-Y',$row->booking_date);?></td><td class="col-md-2"><?php echo date('d-M-Y',$row->registration_date);?></td><td class="col-md-1"><a href='<?php echo base_url().'welcome/successful_insert/'.$row->id;?>'> All Detail </a></td><td class="col-md-2"><a href="<?php echo base_url();?>welcome/payment/<?php echo $row->id;?>"> Payment Detail</a></td></tr>
                        <?php
                    }
                    echo " </table>";
                }
                else
                {
                    echo "Your search did not match any documents.<br/>";
                    echo "Try different keywords.";
                }
                ?>
            </div>
</div>